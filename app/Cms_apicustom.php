<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cms_apicustom extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cms_apicustom';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['permalink', 'tabel', 'aksi', 'kolom', 'orderby', 'sub_query_1', 'sql_where', 'nama', 'keterangan', 'parameter', 'method_type', 'parameters', 'responses'];

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
    protected $dates = [];

}