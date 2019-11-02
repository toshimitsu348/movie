<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * 複数代入する属性
     *
     * @var array
     */
    protected $fillable = ['user_id', 'post_id', 'content'];

}
