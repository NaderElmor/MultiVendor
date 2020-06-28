<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{

    protected $table = 'vendors';

    protected $fillable = [
        'name', 'active','logo','mobile','address','category_id','created_at','updated_at',
    ];

    protected $hiddien = ['category_id'];

    //Relation
    public function category(){

        return $this->belongsTo(MainCategory::class,'category_id');
    }

    //customization
    public function scopeActive($query){

        return $query->where('active', 1);
    }


    public function scopeSelection($query){

        return $query->select( 'name', 'active','logo','mobile','address');
    }

    public function getPhotoAttribute($val) {
        return ($val !== null) ? asset('assets/'.$val) : "";

    }
    
}
