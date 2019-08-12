<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
    	Permission::create([
    		'name' => 'Navegar Roles',
    		'slug' => 'users.index',
    		'description' => 'Lista y navega todos los Roles del sistema',
    	]);

    	Permission::create([
    		'name' => 'Ver detalle Usuarios',
    		'slug' => 'users.show',
    		'description' => 'Ver en detalle cada usuario del sistema',
    	]);

    	Permission::create([
    		'name' => 'Edición de Usuarios',
    		'slug' => 'users.edit',
    		'description' => 'Editar usuario del sistema',
    	]);

    	Permission::create([
    		'name' => 'Eliminación de Usuarios',
    		'slug' => 'users.destroy',
    		'description' => 'Eliminar usuario del sistema',
    	]);

    	// Roles
    	Permission::create([
    		'name' => 'Navegar Roles',
    		'slug' => 'roles.index',
    		'description' => 'Lista y navega todos los Roles del sistema',
    	]);

    	Permission::create([
    		'name' => 'Ver detalle Roles',
    		'slug' => 'roles.show',
    		'description' => 'Ver en detalle cada rol del sistema',
    	]);

    	Permission::create([
    		'name' => 'Creación de Roles',
    		'slug' => 'roles.create',
    		'description' => 'Ver en detalle cada rol del sistema',
    	]);

    	Permission::create([
    		'name' => 'Edición de Roles',
    		'slug' => 'roles.edit',
    		'description' => 'Editar rol del sistema',
    	]);

    	Permission::create([
    		'name' => 'Eliminación de Roles',
    		'slug' => 'roles.destroy',
    		'description' => 'Eliminar rol del sistema',
    	]);

    	// Productos
    	Permission::create([
    		'name' => 'Navegar Productos',
    		'slug' => 'productos.index',
    		'description' => 'Lista y navega todos los Productos del sistema',
    	]);

    	Permission::create([
    		'name' => 'Ver detalle Productos',
    		'slug' => 'productos.show',
    		'description' => 'Ver en detalle cada rol del sistema',
    	]);

    	Permission::create([
    		'name' => 'Creación de Productos',
    		'slug' => 'productos.create',
    		'description' => 'Ver en detalle cada rol del sistema',
    	]);

    	Permission::create([
    		'name' => 'Edición de Productos',
    		'slug' => 'productos.edit',
    		'description' => 'Editar rol del sistema',
    	]);

    	Permission::create([
    		'name' => 'Eliminación de Productos',
    		'slug' => 'productos.destroy',
    		'description' => 'Eliminar rol del sistema',
    	]);

    }
}
