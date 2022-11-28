<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;

class User extends Authenticatable
{

    use HasFactory;
    protected $fillable = ['name','email','phone','password'];
    protected $hidden = ['password'];

    
    public static $user;
    public static function store($request)
    {
        self::$user = new User();
        self::$user->name = $request->name;
        self::$user->email = $request->email;
        self::$user->phone = $request->phone;
        self::$user->password = Hash::make($request->password);
        self::$user->save();
        return self::$user;
    }

    public function salary()
    {
        return $this->hasOne(Wallet::class);
    }
   
}
