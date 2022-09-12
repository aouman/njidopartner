<?php

namespace App\Http\Controllers\locataire;

use App\Http\Controllers\Controller;
use App\Models\locataire;
use Illuminate\Http\Request;
use DB;
use Hash;

class LocataireController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function Index()
  {
    $all = DB::table('locataires')->get();
    return view('admin\locataire\index',compact('all'));
  }
//addLocataire, InsertLocataire

  public function AddLocataire()
  {
    return view ('admin\locataire\create');
  }

  public function InsertLocataire(Request $request)
  {
    $data = array();
    $data['name']= $request->name;
    $data['email'] = $request->email;
    $data['phone'] = $request->phone;
    $data['date_location'] = date('Y-m-d');
    $data['password'] = Hash::make($request->password);
    $data['created_at'] = date('Y-m-d H:i:s');
    $data['updated_at'] = date('Y-m-d H:i:s');

    $insert = DB::table('locataires')->insert($data);
    if($insert)
    {
      $notification=array(
        'message'=>'Locataire ajouter avec succes',
        'alert-type'=>'succes'
      );
      return redirect()->route('index')->with($notification);
    }
    else
    {
      $notification=array(
        'message'=>'Un problème est survenu',
        'alert-type'=>'error'
      );
      return redirect()->route('index')->with($notification);
    }
  }

  public function EditLocataire($id)
  {
    $edit = DB::table('locataires')->where('id',$id)->first();
    return view('admin\locataire\edit',compact('edit'));
  }

  public function UpdateLocataire(Request $request,$id)
  {
    $data = array();
    $data['name']= $request->name;
    $data['email'] = $request->email;
    $data['phone'] = $request->phone;
    $data['date_location'] = date('Y-m-d');
    $data['password'] = Hash::make($request->password);
    $data['created_at'] = date('Y-m-d H:i:s');
    $data['updated_at'] = date('Y-m-d H:i:s');

    $update = DB::table('locataires')
    ->where('id',$id)
    ->update($data);
    if($update)
    {
      $notification=array(
        'message'=>'Locataire modifier avec succes',
        'alert-type'=>'succes'
      );
      return redirect()->route('index')->with($notification);
    }
    else
    {
      $notification=array(
        'message'=>'Un problème est survenu',
        'alert-type'=>'error'
      );
      return redirect()->route('index')->with($notification);
    }
  }

  public function DeleteLocataire($id)
  {
    $delete = DB::table('locataires')->where('id',$id)->delete();
    if ($delete)
    {
      $notification=array(
        'message'=>'Locataire supprimer avec succes',
        'alert-type'=>'succes'
      );
      return redirect()->route('index')->with($notification);
    }
    else
    {
      $notification=array(
        'message'=>'Un problème est survenu',
        'alert-type'=>'error'
      );
      return redirect()->route('/index')->with($notification);
    }
  }

}
