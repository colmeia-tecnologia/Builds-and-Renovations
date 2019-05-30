<?php

namespace App\Http\Controllers\Util\Database;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Permission;

class PermissionController extends Controller
{
    public static function addPermissions(array $tables)
    {
        $permissions =  [
                            'view'      => 'Visualizar',
                            'create'    => 'Criar',
                            'update'    => 'Atualizar',
                            'delete'    => 'Apagar'
                        ];


        //Percorre as tabelas
        foreach($tables as $table => $tableDesc) {
            //Percorre as permissões
            foreach($permissions as $permission => $permissionDesc) {
                try {
                    //Cria permissão
                    Permission::create([
                                'name'          => $permission.'-'.$table,
                                'description'   => $permissionDesc.' '.$tableDesc  
                            ]);
                }
                catch(Exception $e)
                {}
            }
        }
    }

    public static function deletePermissions($table)
    {
        Permission::where('name','LIKE', '%'.$table.'%')->delete();
    }
}
