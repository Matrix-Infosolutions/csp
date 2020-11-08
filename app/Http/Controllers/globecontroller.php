<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use DB;
use Cookie;
use Session;
class globecontroller extends Controller
{   
  
public function makewhere($queryoperator,$operator,$clmname,$val)
{
    $result="";
    if ($operator=='like') {
        $result=" ".$queryoperator." ".$clmname." ".$operator."'%".$val."%'";
    }else{
    $result=" ".$queryoperator." ".$clmname." ".$operator."'".$val."'";
    }
    return $result;
}
public function maketoast(Request $request)
{
	$data = [
    'bgcolor'  => $request->bgcolor,
    'url'   => $request->url,
    'msg' => $request->msg
    ];
	return view('toast')->with('result',$data);
}
}
