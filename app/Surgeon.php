<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surgeon extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'surgeons';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','email'
    ];

    public function patients()
    {
        return $this->hasMany('App\Patient');
    }
}
