<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
  public function getAllGroups(){
    $groups = DB::table('groups')->get();
    return view('groups', ['groups' => $groups]);
  }
  public function getGroup($id){
    $group = DB::table('groups')->where('id', $id)->get();
    return view('group', ['group' => $group]);
  }
  public function addGroup(Request $request){
    $name = $request->input('name');
    DB::table('groups')->insert([
      'name' => $name,
    ]);
    return redirect('/groups');
  }
  public function deleteGroup($id){
    DB::table('groups')->where('id', $id)->delete();
    return redirect('/groups');
  }
}
