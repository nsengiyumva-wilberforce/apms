<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sensor';

    /**
    * The database primary key value.
    *
    * @var string
    */

    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    // protected $fillable = ['assignment_title', 'characters', 'start_time', 'end_time'];

}
