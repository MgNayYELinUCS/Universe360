<?php 
namespace App\Service;
use App\Model\KeysModel;
use DB;
	class KeysService 
	{
	    public function get_all()
		{
			return KeysModel::get(['id','key_name']);
		}
		public function insert($request)
	    {
	        $keys=new KeysModel();
	        $keys->key_name = $request->key_name;
	        $keys->save();
	    }
	}
?>