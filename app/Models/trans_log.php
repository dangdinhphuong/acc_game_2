<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trans_log extends Model
{
    use HasFactory;
    protected $table = 'trans_log';
    public $timestamps = false;
    protected $fillable = [
        "name",
        "seri",
        "pin",
        "type",
        "date",
        "amount",
        "status",
        "trans_id"
    ];
}
