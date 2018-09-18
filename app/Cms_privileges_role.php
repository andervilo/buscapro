<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cms_privileges_role extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cms_privileges_roles';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['is_visible', 'is_create', 'is_read', 'is_edit', 'is_delete', 'id_cms_privileges', 'id_cms_moduls'];

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
    protected $casts = ['is_visible' => 'boolean', 'is_create' => 'boolean', 'is_read' => 'boolean', 'is_edit' => 'boolean', 'is_delete' => 'boolean'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['send_at', 'deleted_at'];

}