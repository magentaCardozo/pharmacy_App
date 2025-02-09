<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //create permissions


        $arrayOfPermissionNames = [
          'voir-ventes', 'creer-ventes','supprimer-ventes','miseAjour-ventes',
          'voir-raports','voir-categorie','creer-categorie','supprimer-categorie','miseAjour-categorie',
          'voir-produits','creer-produits','miseAjour-produits','supprimer-produits',
          'voir-achats','creer-achats','miseAjour-achats','supprimer-achats',
          'voir-fournisseur','creer-fournisseur','miseAjour-fournisseur','supprimer-fournisseur',
          'voir-utilisateur','creer-utilisateur','miseAjour-utilisateur','supprimer-utilisateur',
          'voir-acces-controle',
          'voir-role','miseAjour-role','supprimer-role','creer-role',
          'voir-permission','creer-permission','miseAjour-permission','supprimer-permission',
          'voir-produits-expire','voir-produits-enRuptureStock','Sauvegarder-application','sauvegarder-BD','voir-parametres',

        ];
       $permissions = collect($arrayOfPermissionNames)->map(function ($permission) {
           return ['name' => $permission, 'guard_name' => 'web'];
       });

      Permission::insert($permissions->toArray());

        // create roles and assign permissions
        $role = Role::create(['name' => 'Pharmacien'])
         ->givePermissionTo(['voir-ventes', 'voir-raports','creer-ventes']);
        $role = Role::create(['name' => 'administrateur']);
        $role->givePermissionTo(Permission::all());
    }
}
