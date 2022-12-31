<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransLogMomo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'trans_log_momo';
    protected $fillable = [
        "name",
        "amount",
        "trans_id",
        "requestId",
        "date",
        "type"
    ];
}
