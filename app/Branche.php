<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branche extends Model
{
    protected $table='branches';
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
