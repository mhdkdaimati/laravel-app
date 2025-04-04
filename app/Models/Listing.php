<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //
    public static function allList(){
        return  [
        ['id'=>1,'name'=>'name1'],
        ['id'=>2,'name'=>'name2'],
        ['id'=>3,'name'=>'name3'],
        ['id'=>4,'name'=>'name4'],
        ['id'=>5,'name'=>'name5'],
        ['id'=>6,'name'=>'name6']
        ];

    }
    public static function findList($id){
        $listings = self::allList();
        foreach($listings as $listing){
            if($listing['id']==$id){
                return $listing;
            }
            else{
                return 'null';
            }
        }
    }
}
