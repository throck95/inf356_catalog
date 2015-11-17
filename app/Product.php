<?php
/**
 * Created by PhpStorm.
 * User: throckt
 * Date: 9/16/2015
 * Time: 7:53 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ["id","name","description","price","images","in stock"];
}