<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class studentController extends Controller
{
  public function form()
  {
    return view('form');
  }

  public function store(Request $req)
  {
    // dd($req);
    $obj = new student();
    $obj -> name = $req -> name;
    $obj -> email = $req -> email;
    $obj -> contact = $req -> contact;
    $obj -> address = $req -> address;
    $obj -> fee = $req -> fee;
    $obj -> dob = $req -> dob;
    if ($obj->save()) {
      return Redirect() -> to('/details');
    }
  }

  public function details()
  {
    $student = student::all();
    return view('details', ['student' => $student]);
  }

  public function edit($id)
  {
    $student = student::find($id);
    return view('edit',['student' => $student]);
  }

  public function update($id, Request $req)
  {
    $obj = student::find($id);
    $obj -> name = $req -> name;
    $obj -> email = $req -> email;
    $obj -> address = $req -> address ;
    $obj -> contact = $req -> contact ;
    $obj -> fee = $req -> fee ;
    $obj -> dob = $req -> dob;
    if($obj->save())
    {
      return Redirect()->to('details');
    }
  }

  public function delete($id)
  {
    $obj = student::find($id);
    if($obj->delete())
    {
      return Redirect()->to('details');
    }
  }

}
