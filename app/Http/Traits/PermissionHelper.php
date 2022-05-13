<?php

namespace App\Http\Traits;

trait PermissionHelper{
    public function operationToAction($operations , $actions){
        $result = [];
        foreach($operations as $operation){
            foreach($actions as $action){
                array_push($result , "$operation $action");
            }
        }
        return $result;
    }
}