<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Question extends Model
{
    use HasFactory;
    protected $guarded=[];

    // protected $casts=[
    //     'answers'=>['array'],
        
    //  ];

     protected $casts = [
        'answers' => 'array',
    ];

    protected $fillable =[

        'answers',
        'user_id'
    ];
}
