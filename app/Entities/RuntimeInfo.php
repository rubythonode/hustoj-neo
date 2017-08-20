<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RuntimeInfo
 *
 * @package App\Entities
 * @property int $id
 * @property int $solution_id
 * @property string $content
 */
class RuntimeInfo extends Model
{
    protected $table = 'runtime_info';
}