<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded = [];
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
