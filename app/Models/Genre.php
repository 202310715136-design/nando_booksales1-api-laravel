<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public static function getData()
    {
        return [
            ['id' => 1, 'nama' => 'Action'],
            ['id' => 2, 'nama' => 'Comedy'],
            ['id' => 3, 'nama' => 'Drama'],
            ['id' => 4, 'nama' => 'Horror'],
            ['id' => 5, 'nama' => 'Romance'],
        ];
    }
}