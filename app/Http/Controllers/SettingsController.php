<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
  public function getUserList(){

    return view('admin.profile.index');
  }
}
