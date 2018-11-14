@extends('layouts.master')

@section('title', 'Home')
@section('content')
    <h1>Toutes nos salles</h1>
    <div class="container">
      <table>
        <tr>
          <th>Nom de la Salle</th>
          <th><form class=""  action="/" method="POST"> @csrf <input type="checkbox" name="orderByPosition"><input type="submit" name="" value="OrderBy"></form>Position</th>
          <th><form class=""  action="/" method="POST"> @csrf <input type="checkbox" name="orderByStatus"><input type="submit" name="" value="OrderBy"></form>Status</th>
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
          </tr>
        @endforeach

      </table>
  </div>
@endsection
