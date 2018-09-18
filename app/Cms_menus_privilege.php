<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cms_menus_privilege extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cms_menus_privileges';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cms_menus', 'id_cms_privileges'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['send_at'];

}