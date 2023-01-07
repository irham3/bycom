<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PcCase extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'cases';
    public $timestamps = false;
}
