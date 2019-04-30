<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expense extends Model
{
    use SoftDeletes;
    /**
     * Table
     * @var string
     */
    protected $table = "reservations";

    /**
     * Guarded
     * @var array
     */
    protected $guarded = [];
}
