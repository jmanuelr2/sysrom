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
        //Ususarios
        Permission::create([
        	'name' 			=> 'Navegar usuarios',
        	'slug' 			=> 'user.index',
        	'description' 	=> 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Ver detalle de usuario',
        	'slug' 			=> 'user.show',
        	'description' 	=> 'Ver detalle de cada usuario del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Edición usuario',
        	'slug' 			=> 'user.edit',
        	'description' 	=> 'Editar cualquier usuario del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Eliminar usuario',
        	'slug' 			=> 'user.desctroy',
        	'description' 	=> 'Eliminar cualquier usuario del sistema',
        ]);

        //Roles
        Permission::create([
        	'name' 			=> 'Navegar roles',
        	'slug' 			=> 'roles.index',
        	'description' 	=> 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Ver detalle de rol',
        	'slug' 			=> 'roles.show',
        	'description' 	=> 'Ver detalle de cada rol del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Creación de rol',
        	'slug' 			=> 'roles.create',
        	'description' 	=> 'Crear rol del sistema',
        ]);        
        Permission::create([
        	'name' 			=> 'Edición rol',
        	'slug' 			=> 'roles.edit',
        	'description' 	=> 'Editar cualquier rol del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Eliminar rol',
        	'slug' 			=> 'roles.desctroy',
        	'description' 	=> 'Eliminar cualquier rol del sistema',
        ]);
        //Empresas
        Permission::create([
        	'name' 			=> 'Navegar en empresas',
        	'slug' 			=> 'empresas.index',
        	'description' 	=> 'Lista y navega todos las empresas del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Ver detalle de la empresa',
        	'slug' 			=> 'empresas.show',
        	'description' 	=> 'Ver detalle de cada empresa del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Creación de empresa',
        	'slug' 			=> 'empresas.create',
        	'description' 	=> 'Crear empresa del sistema',
        ]);        
        Permission::create([
        	'name' 			=> 'Edición empresa',
        	'slug' 			=> 'empresas.edit',
        	'description' 	=> 'Editar cualquier empresa del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Eliminar empresa',
        	'slug' 			=> 'empresas.desctroy',
        	'description' 	=> 'Eliminar cualquier empresa del sistema',
        ]);                
    }
}
