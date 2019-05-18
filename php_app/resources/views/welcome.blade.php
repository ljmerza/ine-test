@extends('layout')

@section('content')
<div class="card uper">
  <div class='container'>
    <div class="row">
        <div class="col text-center">
            <h1>Pick an Interesction Test</h1>
            <a href="{{ route('pointcircle.index') }}" class='btn btn-primary'>Point and Circle</a>
            <a href="{{ route('twolines.index') }}" class='btn btn-primary'>Two Lines</a>
            <a href="{{ route('twocircles.index') }}" class='btn btn-primary'>Two Circles</a>
        </div>
    </div>
  </div>
</div>
@endsection