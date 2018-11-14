<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hall as Hall;


class HallController extends Controller
{
  public function insertHall(Request $request)
{
  $hall = new Hall;
  $hall->name = $request->input('name');
  $hall->save();

  $hall->positions()->attach($request->input('positions'));
  $hall->statuses()->attach($request->input('statuses'));
  return redirect('/Halls');

}

  public function updateHall(Request $request)
  {
    $hall = Hall::find($request->input('id'));
    $hall->name = $request->input('name');
    $hall->save();
    $hall->positions()->detach();
    $hall->statuses()->detach();
    $hall->positions()->attach($request->input('positions'));
    $hall->statuses()->attach($request->input('statuses'));
    return redirect('/Halls');

  }
  public function deleteHall(Request $request)
    {
      Hall::destroy($request->input('id'));
      return redirect('/Halls');
    }
}
