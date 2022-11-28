<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Activitie extends Model
{
    use HasFactory;

    private static $activity;
    public static function store($request)
    {
        self::$activity = new Activitie();
        self::$activity->user_id = Auth::id();
        self::$activity->activity_name = 'login';
        self::$activity->lattitude = $request->lat;
        self::$activity->longitude = $request->lon;
        self::$activity->save();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
