<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Http\Controllers\globecontroller;
use DB;
use Cookie;
use Session;
class servicemastercontrollers extends Controller
{   
  public function servicesave(Request $request)
 {
       $id= -1;
    if ($request->mode==1) {
    $id=DB::table('srvcdet')->insertGetId([
    'srvcdetid' =>$request->srvcdetid,'srvcid' =>$request->srvcid,'srvcdec' =>$request->srvcdec
    ]);
    }
    elseif ($request->mode==2) {
    $id=DB::table('srvcdet')->where('srvcdetid',$request->srvcdetid)->update([
    'srvcdetid' =>$request->srvcdetid,'srvcid' =>$request->srvcid,'srvcdec' =>$request->srvcdec
    ]);
    }
    elseif ($request->mode==3) {
    DB::table('srvcdet')->where('srvcdetid','=',$request->srvcdetid)->delete();
    $id= 1;
    }
    echo $id;
     }  
         

     public function srvcmaster(Request $request)
     {
      $data=DB::select("select srvcid,srvcname from srvcmaster where 1=1".$request->where."");
      $output="";
      foreach($data as $row)
      {
        $output.="<option id='".$row->srvcid."' value='".$row->srvcname."''/>";
      }
      echo $output;
     }


     public function searchservice (Request $request)
     {
        $output="";
        $output .="<thead><tr>";
        $output .="<th  id=''>".'Srno'."</th>";
        $output .="<th class='' id=''>".'Description'."</th>";
        $output .="<th  id=''></th>";
        $output .="</tr></thead>";
         $output .="<tbody>";
        $data=DB::select("select * from srvcdet where 1=1 ".$request->where."");
         $cnt=0;
        foreach ($data as $row)
         {
            $cnt = $cnt + 1;
            $output .="<tr>";
            $output .="<td id=''>".$cnt ."</td>";
            $output .="<td class='' id=''>".$row->srvcdec."</td>";
            $output .="<td id=''>";
            $output .="<a href='#' onclick='editservice($row->srvcdetid);'><i class='fa fa-edit' style='font-size:20px;'></i><a>";
            $output .="<a href='#' onclick='deleteservice($row->srvcdetid)'><i class='fas fa-trash-alt' style='font-size:20px; margin-left:10px'></i><a>";
            $output .="</td>";
            $output .="</tr>";
        }
         $output .="</tbody>";
        echo $output;
     }


    public function editservice (Request $request)
     {
       $data=DB::select("select * from srvcdet where 1=1 ".$request->where."");
       echo json_encode($data, JSON_FORCE_OBJECT);
     }

     public function getservicelist($val)
     {
       $where="";
      $obj=new globecontroller;
      if($val!="0"){
      $where =$obj->makewhere('and','like','srvcname',$val);}
      $data1=DB::select("select * from srvcmaster where 1=1".$where." order by srvcid asc");
      // $where =$obj->makewhere('and','like','pswd',$request->pswd);
       $data=DB::select("select * from srvcdet where 1=1 order by srvcid asc");
       return view('servicelist')->with(['result'=>$data1,'det'=>$data]);
     }

       
    public function getclosestatus(Request $request)
    {
        if ($request->mode==1)
        {
          $id=DB::table('customersetting')->where('sname','isclose')->update([
          'value' =>$request->value
        ]);
        }
        elseif ($request->mode==2)
        {
            $data=DB::select("select value from customersetting where 1=1 and sname='isclose' ");
       echo $data[0]->value;
        }
    }
    
    public function test($val)
    {
      $where="";
      $obj=new globecontroller;
      $where =$obj->makewhere('and','like','srvcname',$val);
      $data1=DB::select("select * from srvcmaster where 1=1".$where." order by srvcid asc");
      // $where =$obj->makewhere('and','like','pswd',$request->pswd);
       $data=DB::select("select * from srvcdet where 1=1 order by srvcid asc");
       return view('servicelist')->with(['result'=>$data1,'det'=>$data]);
      //echo $val;
    }
}
