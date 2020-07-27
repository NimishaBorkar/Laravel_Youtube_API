<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ajaxsearch_model;


class Ajaxsearch extends Controller
{
    function fetch()
	{
        $API_KEY = Ajaxsearch_model::fetch_data();
		 echo ($API_KEY);exit;
	}
}
