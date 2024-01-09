<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'game';
    protected $fillable=['id', 'title', 'description', 'price', 'release_date', 'image_Path', 'category_id'];
    public $timestamps = true;
    use HasFactory;
}
