<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Package;



class ParentTest extends Model
{
    protected $guarded = [];
    protected $table = 'parent_tests';

    public function subtest(){
        return $this->belongsToMany(SubTest::class,'sub_tests','id');
    }

    // public function package(){
    //     return $this->hasMany(Package::class,'id','parent_test_id');
    // }

    
}
