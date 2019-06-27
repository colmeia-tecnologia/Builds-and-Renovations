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
                        'portfolios'      => 'portifólio',
                        'services'          => 'services categories',
                        'subservices'       => 'specific services',
                        'clients'           => 'clients',
                        'videos'            => 'videos',
                        'socialmedias'      => 'social medias',
                        'telephones'        => 'telephones',
                        'emails'            => 'emails',
                        'users'             => 'users',
                        'permissions'       => 'permissions',
                        //Blog
                        //'post_categories'   => 'post categories',
                        //'posts'             => 'posts',
                        //Landing Pages
                        //'landing_pages'     => 'landing pages',
                        //Ebooks
                        //'ebooks'            => 'e-books'
                    ];

        $permissions =  [
                            'view'      => 'See',
                            'create'    => 'Create',
                            'update'    => 'Edit',
                            'delete'    => 'Delete'
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
