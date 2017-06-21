<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'patients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','email', 'phone1', 'phone2', 'phone3', 'gender', 'age', 'surgeon_id'
    ];

    public function surgeon()
    {
        return $this->belongsTo('App\Surgeon');
    }
}
