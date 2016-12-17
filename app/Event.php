<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  use \Dimsav\Translatable\Translatable;

  public $translatedAttributes = ['title', 'text'];
  protected $fillable = ['title', 'text'];


}

class EventTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['title', 'text'];

}
