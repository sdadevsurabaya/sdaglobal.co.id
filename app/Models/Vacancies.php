<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancies extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'level_id',
        'status',
        'start_date',
        'end_date',
    ];

    public function level()
    {
        return $this->hasOne(ModelLevel::class, 'id', 'level_id');
    }
}
