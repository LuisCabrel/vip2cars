<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Vip2carsModel extends Model
{
    protected $table = 'vip2cars';
    protected $guarded = [];
    public $timestamps = false;
}