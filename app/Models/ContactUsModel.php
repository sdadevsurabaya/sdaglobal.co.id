<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsModel extends Model
{
    use HasFactory;
    protected $table = 'contact_us';
    protected $fillable = [
        'nama',
        'email',
        'phone',
        'pesan'
    ];
}
