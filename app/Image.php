<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ["image_location","category","number_points","point1","point2","point3","point4","point5","point6","point7","point8"];
}