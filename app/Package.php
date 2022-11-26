<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lab;

use App\ParentTest;


class Package extends Model
{
    protected $guarded = [];

    // public function parenttest()
    // {
    //     return $this->hasOne(ParentTest::class,);
    // }

    public function getLab()
    {
        return $this->hasOne (Lab::class,'id', 'lab_name');
    }

    public function parenttest()
    {
        return $this->belongsToMany(ParentTest::class,'package_parent','package_id','parent_test_id');
    }

    public function getCategory()
    {
        return $this->hasOne (Category::class,'id', 'category');
    }
}
