<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class convocations extends Model
{
    use HasFactory;

    protected $fillable = [
        'conv_uID',
        'conv_name',
        'conv_period',
        'conv_start_date',
        'conv_end_date',
        'conv_email',
        'conv_comments',
        'sta_uID'
    ];
}
