<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PcBuild extends Model
{
    use HasFactory;
    protected $fillable = ['userId,name,cpuId, moboId, memoryId, 
                        gpuId, caseId, inStorageId, psuId, totalPrice'];
    public $timestamps = false;
}
