<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\ORM\TableRegistry;

class FORMATHelper extends Helper
{

    public function getName($id,$resource)
    {
        $records = TableRegistry::get($resource);
        $query = $records->find()->where(["id"=>$id]);
        return $query->first()->name;
    }

}