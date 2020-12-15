<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ["id", "name", "age", "bio", "species", "likes", "dislikes", "image_url"];

    use HasFactory;

    public function ratioOfLikes()
    {
        $sum = ($this->likes + $this->dislikes);
        $like_percent = round($this->likes / $sum * 100);

        // $dislike_percent = round($this->dislikes / $sum * 100);
        // $percentageOfLikes = $like_percent - $dislike_percent; 

        return $like_percent;
    }

    public function leaderBoard()
    {
        
    }


}