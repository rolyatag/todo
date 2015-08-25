<?php

namespace Todo;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $fillable = ['name', 'description'];
    protected $dates = ['created_at', 'updated_at'];

    public function items()
    {
        return $this->hasMany('Todo\Item');
    }
}
