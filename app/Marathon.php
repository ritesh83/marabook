<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marathon extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'location', 'date', 'finish_time', 'distance'];

    /**
     * Get the user that owns the marathon.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
