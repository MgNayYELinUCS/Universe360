<?php 
namespace App\Service;
use App\Model\LanguageKeysModel;
use App\Model\LanguagesModel;
use DB;

	class LanguageKeysService 
	{
	    public function get_all()
		{
			return LanguageKeysModel::with('keys','languages')->get();
		}
		public function get_language_keys_according_to_language()
		{
			$data = DB::table('language_keys')
			        ->join('languages', 'language_keys.language_id', '=', 'languages.id')
			        ->join('keys', 'language_keys.key_id', '=', 'keys.id')
			        ->select( 'languages.language_name as language','keys.key_name as key','language_keys.key_description as value', 'language_keys.language_audio as audio')
			        ->get();
			return $data;
		}

		public function insert($request)
	    {
	        $language_keys=new LanguageKeysModel();
	        $language_keys->language_id = $request->language_id;
	       	$language_keys->key_id = $request->key_id;
	       	$language_keys->key_description = $request->key_description;
	       	$language_keys->language_audio = $request->language_audio;
	        $language_keys->save();
	    }
	}
?>
