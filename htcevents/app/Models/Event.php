<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts=[                   // infoma a app que items e um array
        'items' => 'array',
    ];

    protected $dates=[
        'date',
    ];

    public function user(){
        return $this-> belongsTo('App\Models\User');
    }


    protected $guarded=[];

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }



}
