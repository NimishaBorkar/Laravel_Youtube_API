<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ajaxsearch_model extends Model
{
    public static function fetch_data()
	{
		//$API_KEY="AIzaSyDCoHjjzb956rgcEGSHVHKU5T2cwvt4agA";
		$API_KEY="AIzaSyD70YF7MegE4qPiYAUd0oaRh91xyLJyeGE";
		return $API_KEY;
	}
}
