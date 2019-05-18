@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 5%;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Two Circles Intersection
  </div>

  <div class="card-body">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('twocircles.store') }}">
        <div class="form-group">
          @csrf
          <label for="circle1_x">circle1 x:</label>
          <input type="number" class="form-control" name="circle1_x"/>
        </div>
        <div class="form-group">
          <label for="circle1_y">circle1 y:</label>
          <input type="number" class="form-control" name="circle1_y"/>
        </div>
        <div class="form-group">
          <label for="circle1_r">circle1 radius:</label>
          <input type="number" class="form-control" name="circle1_r"/>
        </div>

        <div class="form-group">
          <label for="circle2_x">circle2 x:</label>
          <input type="number" class="form-control" name="circle2_x"/>
        </div>
        <div class="form-group">
          <label for="circle2_y">circle2 y:</label>
          <input type="number" class="form-control" name="circle2_y"/>
        </div>
        <div class="form-group">
          <label for="circle2_r">circle2 radius:</label>
          <input type="number" class="form-control" name="circle2_r"/>
        </div>
        <button type="submit" class="btn btn-primary">Check Intersection</button>
        <a href='/' class="btn btn-danger">Home</a>
      </form>
  </div>
</div>
@endsection