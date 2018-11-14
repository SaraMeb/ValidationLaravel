@extends('layouts.master')

@section('title', 'Home')
@section('content')
    <h1>Update one hall</h1>
    <form class=""  action="/updateHallAction" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{ $hall->id }}">
      <input required type="text" name="name" value="{{ $hall->name }}">
      <select class="" name="positions">
        @foreach ($positions as $status)
          <option value="{{ $status->id }}" @if($status->id == $hall->id) selected @endif>{{ $status->name }}</option>

        @endforeach
      </select>
      <select class="" name="statuses">
        @foreach ($statuses as $status)
          <option value="{{ $status->id }}" @if($status->id == $hall->id) selected @endif>{{ $status->name }}</option>

        @endforeach
      </select>

      <input type="submit" name="" value="Update"></form>
@endsection
