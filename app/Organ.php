<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lab;

class Organ extends Model
{
    protected $guarded = [];
    protected $table ='organs';

    public function subtest(){

        return $this->belongsToMany(SubTest::class,'findtestbyorgan','organ_id','sub_test_id');

    }
   
}
