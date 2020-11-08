<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use DB;
use Cookie;
use Session;
class bankregcontroller extends Controller
{
    public  function savebankreg(Request $request)

    {
         
        $id=-1;
        if($request->mode==1){
        $id = DB::table('bankreg')->insertGetId(
        ['bnkid' => '0', 'edate' => $request->edate,'name' =>$request->name,'mobno' => $request->mobno, 'refcode' => $request->refcode, 'cifno' => $request->cifno,
          'acno' => $request->acno

    ]);}
    elseif ($request->mode==2) { 
        $id = DB::table('bankreg')
              ->where('bnkid', $request->bnkid)
              ->update([ 'edate' => $request->edate,'name' =>$request->name,'mobno' => $request->mobno, 'refcode' => $request->refcode, 'cifno' => $request->cifno,
                'acno' => $request->acno

              ]);
    
    }
     
     elseif ($request->mode==3) { DB::table('bankreg')->where('bnkid', '=',$request->bnkid)->delete();
        
    }
    echo $id;

    

    }

    public function searchbank(Request $request)
    {
      $output ="";
      $output .="<thead><tr>";
      $output .="<th id=''>".'SrNo'."</th>";
      $output .="<th id=''>".' Name'."</th>";
      $output .="<th class='shrink-md' id=''>".'Date'."</th>";
      $output .="<th class='shrink-md' id=''>".'Mob no'."</th>";
      $output .="<th class='shrink-md' id=''>".'Refno'."</th>";
      $output .="<th class='shrink-md' id=''>".'CIFNo'."</th>";
      $output .="<th class='shrink-md' id=''>".'ACCNo.'."</th>";
      // $output .="<th id=''></th>";
      $output .="</tr></thead>";
      $output .="<tbody>";
      $data = DB::select("select * from bankreg where 1=1 ".$request->where."");
      $cnt=0;
      foreach ($data as $row) {
        $newdate=date("d-m-y", strtotime($row->edate));
        $cnt = $cnt + 1;
        $output .="<tr>";
        $output .="<td id=''>".$cnt."</td>";
        $output .="<td id=''>".$row->name."</td>";
        $output .="<td class='shrink-md' id=''>".$newdate."</td>";
        $output .="<td class='shrink-md' id=''>".$row->mobno."</td>";
        $output .="<td class='shrink-md' id=''>".$row->refcode."</td>";
        $output .="<td class='shrink-md' id=''>".$row->cifno."</td>";
        $output .="<td  class='shrink-md' id=''>".$row->acno."</td>";
        // $output .= "<td>";
        // $output .= "<a name=\"\" id=\"\" onclick='editdslinwd(" . $row->bnkid . ")' class=\"\" href=\"#\" role=\"button\"><i style='font-size:20px;' class=\"fa fa-edit\"></i></a>";
        // $output .= "<a name=\"\" id=\"\" onclick='deldslinwd(" . $row->bnkid . ")' class=\"\" href=\"#\" role=\"button\" style='margin-left:2%'><i style='font-size:20px;' class=\"fa fa-trash\"></i></a></td>";
        $output .="</tr>";     
      }
      $output .="</tbody>";
      echo $output;
    }
     
}

   
   
     
   
     
            





 
  
  







