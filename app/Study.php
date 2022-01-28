<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Study
 *
 * @property $id
 * @property $employeeId
 * @property $studiename
 * @property $timestamp
 *
 * @property Employee $employee
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Study extends Model
{
    
    static $rules = [
		'employeeId' => 'required',
		'studiename' => 'required',
		'timestamp' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['employeeId','studiename','timestamp'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function employee()
    {
        return $this->hasOne('App\Employee', 'id', 'employeeId');
    }
    

}
