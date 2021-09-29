@extends('layouts.app')
@section('content')
<div class="panel-body">
  <div class="col-sm-6">
    @include('common.errors')
    <form action="{{ route('home.update',$score->id) }}" method="POST"  class="form-horizontal">
      @method('PUT')
      @csrf
      <!-- title -->
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control" value="{{$score->title}}">
      </div>
      <!-- time -->
      <div class="form-group">
        <label for="time">Time</label>
        <input type="text" id="time" name="time" class="form-control" value="{{$score->time}}">
      </div>
      <!-- page -->
      <div class="form-group">
        <label for="page">Page</label>
        <input type="text" id="page" name="page" class="form-control" value="{{$score->page}}">
      </div>
      <!-- day -->
      <div class="form-group">
        <label for="day">day</label>
        <input type="date" id="day" name="day" class="form-control" value="{{$score->day}}">
      </div>
      <!-- comment -->
      <div class="form-group">
        <label for="comment">comment</label>
        <input type="textarea" id="comment" name="comment" class="form-control" value="{{$score->comment}}">
      </div>
      <!-- Saveボタン/Backボタン -->
      <div class="well well-sm">
        <button type="submit" class="btn btn-primary">Save</button>
        <a class="btn btn-link pull-right" href="{{ route('home') }}">Back</a>
      </div>
    </form>
  </div>
</div>
@endsection