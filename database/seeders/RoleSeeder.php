<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Blogger']);

        Permission::create(['name' => 'admin.home',
                            'description'=>'Ver el Dashboard'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.users.index',
                            'description'=>'Ver Usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit',
                            'description'=>'Asignar un Rol'])->syncRoles([$role1]);
        

        Permission::create(['name' => 'admin.categories.index',
                            'description'=>'Ver Categorías'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.create',
                            'description'=>'Crear Categorías'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit',
                            'description'=>'Editar Categorías'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy',
                            'description'=>'Eliminar Categorías'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.tags.index',
                            'description'=>'Ver Etiquetas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tags.create',
                            'description'=>'Crear Etiquetas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.edit',
                            'description'=>'Editar Etiquetas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.destroy',
                            'description'=>'Eliminar Etiquetas'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.posts.index',
                            'description'=>'Ver Posts'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.posts.create',
                            'description'=>'Crear Posts'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.posts.edit',
                            'description'=>'Editar Posts'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.posts.destroy',
                            'description'=>'Eliminar Posts'])->syncRoles([$role1]);



        Permission::create(['name' => 'admin.roles.index',
                            'description'=>'Ver Roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.create',
                            'description'=>'Crear Roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.edit',
                            'description'=>'Editar Roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.destroy',
                            'description'=>'Eliminar Roles'])->syncRoles([$role1]);
    }
}
