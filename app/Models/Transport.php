<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $table = 'transport';
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'email',
        'type',
        'category',
        'breed',
        'weight',
        'height',
        'age',
        'quantity',
        'p_name',
        'p_phone',
        'p_email',
        'p_addr',
        'p_addr2',
        'p_state',
        'p_district',
        'p_location',
        'd_name',
        'd_phone',
        'd_email',
        'd_addr',
       'd_addr2',
       'd_state',
       'd_district',
       'd_location',
       
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'email',
   
    //       'p_phone',
    //       'd_email'
    // ];
    /**
     *    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
       
    ];
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
  
    ];
}
