<?php

namespace App\Http\Controllers\Admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class apply_list_controller extends Controller
{
	function applylist(){
		$data = DB::table('user_form_status_table as ufst')
		->join('create_apply_table as cat','ufst.form_id','=','cat.form_id')
		->join('user_details_table as udt','ufst.user_id','=','udt.user_id')
		->select('form_name','name','end_date','apply_status','status_id')
		->get();
	    
	    $noofbutton = $data->count();
	    /* printing data */
	    echo $data;
	    echo $noofbutton;
	    return view("Admin.ApplyList",['msg'=>$data]);
	}
}