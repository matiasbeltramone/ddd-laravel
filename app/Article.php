<?php
declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

final class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author_id', 'title', 'content',
    ];
}
