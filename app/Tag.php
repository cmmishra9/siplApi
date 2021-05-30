<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
class Tag extends Model
{
    use LogsActivity;

    protected $fillable = ['tag_name','status','user_id'];

    protected static $logFillable = true;
    protected static $logName = 'tags';
    protected static $logOnlyDirty = true;


    public function setStatusAttribute($status)
    {
        $this->attributes['status'] = ($status)? 1 : 0;
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
