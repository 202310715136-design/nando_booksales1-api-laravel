<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    protected $fillable = ['nama', 'email'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}