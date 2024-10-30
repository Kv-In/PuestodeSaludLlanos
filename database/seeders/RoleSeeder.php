<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
    

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'doctor']);
        $role2 = Role::create(['name' => 'admin']);
        $role3 = Role::create(['name' => 'farmacia']);
        $role4 = Role::create(['name' => 'recepcion']);

        Permission::create(['name' => 'admin.home']);

        //titulo de barra dashboard
        Permission::create(['name' => 'view.statistics'])->syncRoles([ $role2]);
        Permission::create(['name' => 'view.Farmacia'])->syncRoles([ $role2, $role3]);
        Permission::create(['name' => 'view.Doctor'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'view.Recepcion'])->syncRoles([ $role2, $role4]);


        //permiso para lista de pacientes
        Permission::create(['name' => 'tabla-pacientes.index'])->syncRoles([$role2]);
        Permission::create(['name' => 'tabla-pacientes.create'])->syncRoles([$role2, $role4]);
        Permission::create(['name' => 'tabla-pacientes.buscar_paciente'])->syncRoles([ $role2, $role4]); 

        Permission::create(['name' => 'tabla-pacientes.edit'])->syncRoles([$role2]);
        Permission::create(['name' => 'tabla-pacientes.show'])->syncRoles([$role2, $role4]);
        Permission::create(['name' => 'tabla-pacientes.delete'])->syncRoles([$role2]);
        
        

        //permiso para lista de inventario o Farmacia
        Permission::create(['name' => 'tabla-inventario-insumos.index'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'tabla-inventario-insumos.create'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'tabla-inventario-insumos.edit'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'tabla-inventario-insumos.show'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'tabla-inventario-insumos.delete'])->syncRoles([$role1, $role2, $role4]);

        //Permiso para lista de recetas
        Permission::create(['name' => 'tabla-receta.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'tabla-receta.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'tabla-receta.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'tabla-receta.show'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'tabla-receta.delete'])->syncRoles([$role1, $role2]);

        //permiso para lista de consultas
        Permission::create(['name' => 'tabla-consultum.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'tabla-consultum.create'])->syncRoles([$role2, $role4]);
        Permission::create(['name' => 'tabla-consultum.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'tabla-consultum.show'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'tabla-consultum.consulta_final'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'paciente.consultas'])->syncRoles([$role1, $role2, $role4]);
       
        Permission::create(['name' => 'tabla-consultum.consultas_diarias'])->syncRoles([$role1, $role2]);
        //permiso para lista de antecedentes
        Permission::create(['name' => 'tabla-antecedentes.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'tabla-antecedentes.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'tabla-antecedentes.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'tabla-antecedentes.show'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'tabla-antecedentes.delete'])->syncRoles([$role1, $role2]);

        //permiso para lista de registro de control
        Permission::create(['name' => 'tabla-registro-controls.index'])->syncRoles([$role1, $role2]); 
        Permission::create(['name' => 'tabla-registro-controls.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'tabla-registro-controls.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'tabla-registro-controls.show'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'tabla-registro-controls.delete'])->syncRoles([$role1, $role2]);

        //permiso para lista de consultas pendientes
        Permission::create(['name' => 'admin.users.index'])->syncRoles([$role2]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role2]);
        Permission::create(['name' => 'admin.users.update'])->syncRoles([$role2]);
        
        Permission::create(['name' => 'recetas.pendientes'])->syncRoles([ $role1, $role2, $role3]);

        Permission::create(['name' => 'reportes.consultasDiarias'])->syncRoles([ $role2]);

        Permission::create(['name' => 'paciente.consulta'])->syncRoles([ $role2, $role4]);
        Permission::create(['name' => 'pacientes.buscar'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'consultas.pendientes'])->syncRoles([$role1, $role2]);


    }
}
