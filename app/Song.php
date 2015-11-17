<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ["title", "lyrics"];

    public function slugToTitle($slug) {
        return str_replace("-", " ", $slug);
    }
    public function titleToSlug() {
        return str_replace(" ", "-", $this->title);
    }
}
