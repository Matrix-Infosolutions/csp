<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Http\Controllers\globecontroller;
use DB;
use Cookie;
use Session;
class signupcontroller extends Controller
{
  public function signupssave(Request $request)
  {
    # code...
    $id= -1;
	if ($request->mode==1) {
	$data=DB::select("select Ifnull(Max(lid),0) as lid from login where 1=1 and mobno ='".$request->mobno."'");
	if($data[0]->lid>0){echo "-2"; return;}
	$id=DB::table('login')->insertGetId([
	'lid' =>$request->lid,'name' =>$request->name,'role' =>$request->role,'pswd' =>$request->pswd,'edate' =>$request->edate,'islive' =>$request->islive,'mobno' =>$request->mobno
	]);
	}
	elseif ($request->mode==2) {
	$id=DB::table('login')->where('lid',$request->lid)->update([
	'lid' =>$request->lid,'name' =>$request->name,'role' =>$request->role,'pswd' =>$request->pswd,'edate' =>$request->edate,'islive' =>$request->islive,'mobno' =>$request->mobno
	]);
	}
	elseif ($request->mode==3) {
	DB::table('login')->where('lid','=',$request->lid)->delete();
	$id= 1;
	}
	echo $id;
  }
 
public function logincheck(Request $request)
{
  $where="";
  $obj=new globecontroller;
  $where .=$obj->makewhere('and','=','mobno',$request->mobno);
  $where .=$obj->makewhere('and','=','pswd',$request->pswd);
  $data = DB::select("select ifnull(max(lid),0) as lid from login where 1=1 ".$where ."");
    if ($data[0]->lid>0){echo 0;}
    else {echo 1;}
}

}


