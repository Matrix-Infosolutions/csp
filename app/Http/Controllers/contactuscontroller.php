<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use DB;
use Cookie;
use Session;
class contactuscontroller extends Controller
{

public function savecontactus(Request $request)
{
	$id= -1;
if ($request->mode==1) {
$id=DB::table('queryform')->insertGetId([
'cid' =>$request->cid,'uname' =>$request->uname,'mobno' =>$request->mobno,'desc' =>$request->desc
]);
}
elseif ($request->mode==2) {
$id=DB::table('queryform')->where('cid',$request->cid)->update([
'cid' =>$request->cid,'uname' =>$request->uname,'mobno' =>$request->mobno,'desc' =>$request->desc
]);
}
elseif ($request->mode==3) {
DB::table('queryform')->where('cid','=',$request->cid)->delete();
$id= 1;
}
echo $id;
}

public function getcontactlist()
{
	 $data=DB::select("select * from queryform where 1=1");
	 return view('contactlist')->with('result',$data);
}

}

