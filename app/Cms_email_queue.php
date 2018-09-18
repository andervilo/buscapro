<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cms_email_queue extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cms_email_queues';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['send_at', 'email_recipient', 'email_from_email', 'email_from_name', 'email_cc_email', 'email_subject', 'email_content', 'email_attachments', 'is_sent'];

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
    protected $casts = ['is_sent' => 'boolean'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['send_at'];

}