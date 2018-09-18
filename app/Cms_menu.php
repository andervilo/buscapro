<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cms_menu extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cms_menus';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'type', 'path', 'color', 'icon', 'parent_id', 'is_active', 'is_dashboard', 'id_cms_privileges', 'sorting'];

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
    protected $casts = ['is_active' => 'boolean', 'is_dashboard' => 'boolean'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['send_at'];

}