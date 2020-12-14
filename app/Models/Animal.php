<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ["id", "name", "age", "bio", "species", "likes", "dislikes", "image-url"];

    use HasFactory;

    public function percentageLikes()
    {
        return ($this->likes - $this->dislikes) / (($this->likes + $this->dislikes) / 2) * 100;
    }
}
