<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tables =  [
                        'banners'           => 'banners',
                        //'portfolios'      => 'portifólio',
                        'services'          => 'categorias de serviços',
                        'subservices'       => 'serviços específicos',
                        'clients'           => 'clientes',
                        'socialmedias'      => 'mídias sociais',
                        'telephones'        => 'telefones',
                        'users'             => 'usuários',
                        'permissions'       => 'permissões',
                        //Blog
                        'post_categories'   => 'categorias de posts',
                        'posts'             => 'posts',
                    ];

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
}
