<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
  use \Dimsav\Translatable\Translatable;

  public $translatedAttributes = ['name', 'about_text'];
  protected $fillable = ['name', 'about_text'];

}

class OrganizationTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['name', 'about_text'];

}
