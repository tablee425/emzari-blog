<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed id
 * @property string strip_description
 * @property string description
 * @property string image
 * @property mixed title
 */
class Post extends Model
{
    protected $fillable = ['title', 'description', 'strip_description', 'image', 'author'];
}
