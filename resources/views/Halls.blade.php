@extends('layouts.master')

@section('title', 'Home')
@section('content')
    <h1>Gerer les salles</h1>

    <div class="container">
      <table>
        <tr>
          <th>Nom de la Salle</th>
          <th>Position</th>
          <th>Status</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        @foreach($halls as $hall)
          <tr>
            <td>{{ $hall->name }}</td>
            <td>
              @foreach($hall->positions as $position)
                {{ $position->name }}
              @endforeach
            </td>
            <td>
              @foreach($hall->statuses as $status)
                {{ $status->name }}
              @endforeach
            </td>
            <td><form class=""  action="/updateHall" method="POST"> @csrf <input type="hidden" name="id" value="{{ $hall->id }}"><input type="submit" name="" value="U"></form></td>
            <td><form class=""  action="/deleteHall" method="POST"> @csrf <input type="hidden" name="id" value="{{ $hall->id }}"><input type="submit" name="" value="X"></form></td>
          </tr>
        @endforeach

      </table>
  </div>
  <h1>Add Hall</h1>
  <div class="container">
    <form class=""  action="/insertHall" method="POST">
      @csrf
      <input required placeholder="Hall name" type="text" name="name" value="">
      <select class="" name="positions">
        @foreach ($positions as $position)
          <option value="{{ $position->id }}">{{ $position->name }}</option>
        @endforeach
      </select>
      <select class="" name="statuses">
        @foreach ($statuses as $status)
          <option value="{{ $status->id }}">{{ $status->name }}</option>
        @endforeach
      </select>
      <input type="submit" name="" value="Insert">
    </form>
  </div>


@endsection
