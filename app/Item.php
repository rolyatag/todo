<?php

namespace Todo;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name'];
    protected $dates = ['created_at', 'updated_at'];

    public function checklist()
    {
        $this->belongTo('Todo\Checklist');
    }
}
