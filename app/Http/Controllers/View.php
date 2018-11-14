<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hall as Hall;
use App\Position as Position;
use App\Status as Status;

class View extends Controller
{
  public function Home(Request $request)
  {
      $halls = Hall::all();
      if ($request->input('orderByStatus')) {
        $halls = Hall::all()->sortBy('statuses');
      } else if ($request->input('orderByPosition')) {
        $halls = Hall::all()->sortBy('positions');
      }
      $positions = Position::all();
      $statuses = Status::all();
    return view('bookingHalls', [
      'halls' => $halls,
      'positions' => $positions,
      'statuses' => $statuses,
    ]);
  }
  public function addHall()
    {
      $halls = Hall::all();
      $positions = Position::all();
      $statuses = Status::all();
      return view('Halls', [
        'halls' => $halls,
        'positions' => $positions,
        'statuses' => $statuses,
      ]);
    }
    public function updateHall(Request $request)
    {
      $hall = Hall::find($request->input('id'));
      $positions = Position::all();
      $statuses = Status::all();

      return view('updateHall', [
        'hall' => $hall,
        'positions' => $positions,
        'statuses' => $statuses,
      ]);

    }
    /*public function OrderBy(Request $request)
    {
      //dd($request->input('orderByStatus'));
      if ($request->input('orderByStatus')) {
        $halls = Hall::all()->sortBy('statuses');
      } else if ($request->input('orderByPosition')) {
        $halls = Hall::all()->sortBy('positions');
      }
      return redirect('/');
    }*/
}
