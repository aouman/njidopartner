<?php

namespace App\Http\Controllers\appartement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appartement;
use DB;
use Hash;


class AppartementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AppIndex()
    {
      $all = DB::table('appartements')->get();
      return view('admin\appartement\index',compact('all'));
    }
  //addappartement, Insertappartement

    public function AddAppartement()
    {
      return view ('admin\appartement\create');
    }

    public function InsertAppartement(Request $request)
    {
      $data = array();
      $data['Name']= $request->name;
      $data['Price'] = $request->price;
      $data['created_at'] = date('Y-m-d H:i:s');
      $data['updated_at'] = date('Y-m-d H:i:s');

      $insert = DB::table('appartements')->insert($data);
      if($insert)
      {
        $notification=array(
          'message'=>'appartement ajouter avec succes',
          'alert-type'=>'succes'
        );
        return redirect()->route('appindex')->with($notification);
      }
      else
      {
        $notification=array(
          'message'=>'Un problème est survenu',
          'alert-type'=>'error'
        );
        return redirect()->route('appindex')->with($notification);
      }
    }

    public function EditAppartement($id)
    {
      $edit = DB::table('appartements')->where('id',$id)->first();
      return view('admin\appartement\edit',compact('edit'));
    }

    public function UpdateAppartement(Request $request,$id)
    {
      $data = array();
      $data['Name']= $request->name;
      $data['Price'] = $request->price;
      $data['created_at'] = date('Y-m-d H:i:s');
      $data['updated_at'] = date('Y-m-d H:i:s');

      $update = DB::table('appartements')
      ->where('id',$id)
      ->update($data);
      if($update)
      {
        $notification=array(
          'message'=>'appartement modifier avec succes',
          'alert-type'=>'succes'
        );
        return redirect()->route('appindex')->with($notification);
      }
      else
      {
        $notification=array(
          'message'=>'Un problème est survenu',
          'alert-type'=>'error'
        );
        return redirect()->route('appindex')->with($notification);
      }
    }

    public function Deleteappartement($id)
    {
      $delete = DB::table('appartements')->where('id',$id)->delete();
      if ($delete)
      {
        $notification=array(
          'message'=>'appartement supprimer avec succes',
          'alert-type'=>'succes'
        );
        return redirect()->route('appindex')->with($notification);
      }
      else
      {
        $notification=array(
          'message'=>'Un problème est survenu',
          'alert-type'=>'error'
        );
        return redirect()->route('appindex')->with($notification);
      }
    }

}
