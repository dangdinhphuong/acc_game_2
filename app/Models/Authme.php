<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authme extends Model
{
    use HasFactory;
    protected $connection = 'mysql_user';
    protected $table = 'authme';
    protected $fillable = [
        "username",
        "realname",
        "email",
        "cash",
        "password"
    ];
    public function setPasswordAttribute($value)
    {
       $this->attributes['password'] = bcrypt($value);
    }
    public function scopeFilter($query, array $filters)
    { 
        $query->when($filters['id'] ?? false, function ($query, $id) {
            $query->where('id', $id);
        });
        $query->when($filters['email'] ?? false, function ($query, $email) {
            $query->where('email', $email);
        });
        $query->when($filters['username'] ?? false, function ($query, $username) {
            $query->where('username', 'like', '%' . $username . '%');
        });
        $query->when($filters['realname'] ?? false, function ($query, $realname) {
            $query->where('realname', 'like', '%' . $realname . '%');
        });
    }
}