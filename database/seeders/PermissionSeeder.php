<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Http\Traits\PermissionHelper;
class PermissionSeeder extends Seeder
{
    use PermissionHelper;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::find(1);

        $operations = ['add' , 'update' , 'delete' , 'restore' , 'show' , 'force-delete'];
        $actions = ['user' , 'project' , 'task'];

        $operationsToActions = $this->operationToAction($operations , $actions);
        
        foreach($operationsToActions as $operationToAction){
            $permissions = Permission::create(['name' => $operationToAction]);
            $admin->givePermissionTo($operationToAction);
        }

        
    }
}
