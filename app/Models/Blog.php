<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    use HasFactory;
    // protected $fillable = ['title','intro','body','id'];
    protected $guarded = [];

    protected $with = ['category','author'];

    public function scopeFilter($query,$filter) {
        dd($filter);
        $query->when($filter['search'],function($query,$search){
            $query->where('title','LIKE','%'.$search.'%')
                    ->orwhere('body','LIKE','%'.$search.'%');  
        });

    }


    public function category(){
        return $this->belongsTo(Category::class);

    }

    public function author() {
        return $this->belongsTo(User::class,'user_id');

    }
}

