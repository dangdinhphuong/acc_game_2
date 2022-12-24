<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $connection = 'mysql_user';
    protected $table = 'authme';
    protected $fillable = [
        "username",
        "realname",
        "email",
        "cash",
        "password",
        "refip",
        "status",
        "type",
        'token',
        'salt'
    ];

    const DISABLE_ACCOUNT = 0;
    const ENABLED_ACCOUNT = 1;
    const NO_ACTIVE_ACCOUNT = 2;

    const CUSTOMER = 1;
    const ADMIN = 2;
    const ADMIN_AUXILIARY = 3;
    const CTV = 4;

    // public function setPasswordAttribute($value)
    // {1 thành viên - 2 admin chính - 3 admin phụ - 4 ctv Auxiliary
    //    $this->attributes['password'] = hash('sha256', $value);
    // }
    public function getTypeStringAttribute() {
        $str_type = $this->attributes['type']; 
        if($this->attributes['type'] == User::CUSTOMER){
            $str_type ="Thành viên";
        }
        else if($this->attributes['type'] == User::ADMIN){
            $str_type ="Admin chính";
        }
        else if($this->attributes['type'] == User::ADMIN_AUXILIARY){
            $str_type ="Admin phụ";
        }
        else if($this->attributes['type'] == User::CTV){
            $str_type ="Cộng tác viên";
        }
        return $str_type;
    }

}
