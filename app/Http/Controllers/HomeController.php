<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use DB;
use Cookie;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');
         $path = $request->file('file')->save('img');    
        // $imageName = time().'.'.$image->extension();
        //  $path = Storage::putFileAs('img', $request->file($image));
        //$image->move(public_path('ads'),$imageName);
   
        return response()->json(['success'=>$imageName]);
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




}
