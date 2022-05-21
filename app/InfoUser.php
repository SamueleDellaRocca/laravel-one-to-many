<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{

    protected $fillable = ['address', 'phone', 'birth'];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
