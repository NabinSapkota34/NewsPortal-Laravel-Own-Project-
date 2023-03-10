<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestArticle extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'main', 'span', 'date', 'main2', 'image2', 'author'];
}
