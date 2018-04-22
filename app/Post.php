<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'blog_title', 'blog_text',
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

}
