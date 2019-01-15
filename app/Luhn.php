<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class luhn
 *
 * @package App
 */
class Luhn extends Model
{
    /**
     * @var string
     */
    protected $table = 'luhn';

    /**
     * @var array
     */
    protected $fillable = ['number'];
}
