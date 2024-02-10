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
        'd_name',
        'd_email',
        'd_phone',
        'd_addr',
        'd_country',
        'd_city',
        'd_postal',
        'd_region',
        'p_name',
        'p_phone',
        'p_addr',
        'p_country',
        'p_city',
        'p_postal',
        'p_region',
       'd_addr2',
       'p_addr2',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'email',
   
          'p_phone',
          'd_email'
    ];
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
