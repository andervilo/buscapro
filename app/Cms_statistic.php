<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cms_statistic extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cms_statistics';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug'];

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
    protected $dates = ['send_at', 'deleted_at'];

}