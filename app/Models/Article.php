<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

/**
 * @method static orderBy(string $string, string $string1)
 * @method static findOrFail($id)
 * @method static find($id)
 */
class Article extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    use HasFactory;

    function getAuthor()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }


    function getCategory()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }

    function getImage()
    {
        return $this->hasOne('App\Models\Image', 'id', 'post_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }




}
