<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{

    protected $table = 'site_settings';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillable = ['logo', 'address','website_name', 'favicon' ,'language'];

}
