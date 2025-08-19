<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperDetail extends Model
{
    use HasFactory;

    protected $table = 'paper_details';

    protected $guarded = [];
}
