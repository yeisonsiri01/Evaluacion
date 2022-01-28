<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $id
 * @property $nombres
 * @property $apellido
 * @property $deptoid
 * @property $sexo
 * @property $cedula
 * @property $direccion
 * @property $telcasa
 * @property $telmobil
 * @property $salariobase
 * @property $descuentos
 * @property $salarioneto
 * @property $timestamp
 *
 * @property Department $department
 * @property Study[] $studies
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{

    public $timestamps = false;
    
    static $rules = [
		'nombres' => 'required',
		'apellido' => 'required',
		'deptoid' => 'required',
		'sexo' => 'required',
		'cedula' => 'required',
		'direccion' => 'required',
		'telcasa' => 'required',
		'telmobil' => 'required',
		'salariobase' => 'required',
		'descuentos' => 'required',
		'salarioneto' => 'required',
		'timestamp' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellido','deptoid','sexo','cedula','direccion','telcasa','telmobil','salariobase','descuentos','salarioneto','timestamp'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function department()
    {
        return $this->hasOne('App\Department', 'id', 'deptoid');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studies()
    {
        return $this->hasMany('App\Study', 'employeeId', 'id');
    }
    

}
