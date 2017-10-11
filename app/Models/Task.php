<?php

namespace DevOpsHW\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * Attributes that can be queried when filtering.
     *
     *
     * @var array
     */
    public static $indexes = ['id', 'name'];
}
