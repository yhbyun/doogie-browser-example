<?php

namespace App;

use Parsedown;
use Illuminate\Support\HtmlString;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public static function getContentAttribute($value)
    {
        $html = app(Parsedown::class)->setSafeMode(true)->text($value);
        $html = preg_replace('/img src="\/images\/([^"]+)"/', 'img src="/img/$1?w=600&h=400&fit=crop&pixel=4"', $html);
        return new HtmlString($html);
    }
}
