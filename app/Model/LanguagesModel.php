<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LanguagesModel extends Model
{
    protected $table = 'languages';
	public function language_keys()
	{
		return $this->hasMany('App\Model\LanguageKeysModel','language_id');
	}
	public function app_language()
	{
		return $this->hasMany('App\Model\AppLanguageModel','language_id');
	}
}
