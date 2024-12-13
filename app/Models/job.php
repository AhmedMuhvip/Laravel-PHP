<?php

namespace App\Models;

use Illuminate\Support\Arr;
use phpDocumentor\Reflection\Types\Static_;

class job
{
    public static function all ():array
    {
        return [
            [
                'id'=>1,
                'title'=>'Programmer',
                'salary'=>'$40,000',
            ],
            [
                'id'=>2,
                'title'=>'Designer',
                'salary'=>'$50,000',
            ],
            [
                'id'=>3,
                'title'=>'Teacher',
                'salary'=>'$90,000',
            ],
        ];
    }
    public static function find(int $id):array
    {
        $job= Arr::first(static::all() ,fn($job)=>$job['id']==$id);
        if(!$job){
            abort(404);
        }
        return $job;
    }
}
