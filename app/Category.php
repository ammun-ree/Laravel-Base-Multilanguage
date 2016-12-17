<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  use \Dimsav\Translatable\Translatable;

  public $translatedAttributes = ['slug', 'singular', 'plural'];
  protected $fillable = ['slug', 'singular', 'plural'];

  public function publications()
{
    return $this->hasMany('App\Publication');
}
}

class CategoryTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['slug', 'singular', 'plural'];

}
