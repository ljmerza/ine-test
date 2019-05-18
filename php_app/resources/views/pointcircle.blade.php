@extends('layout')

@section('content')
<div class="card uper">
  <div class="card-header">
    Point and Circle Intersection
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

    <form method="post" action="{{ route('pointcircle.store') }}">
      <div class="form-group">
        @csrf
        <label for="name">Point X:</label>
        <input type="number" class="form-control" name="point_x"/>
      </div>
      <div class="form-group">
        <label for="price">Point Y:</label>
        <input type="number" class="form-control" name="point_y"/>
      </div>
      <div class="form-group">
        <label for="quantity">Circle Radius:</label>
        <input type="number" class="form-control" name="circle_point_r"/>
      </div>
      <div class="form-group">
        <label for="quantity">Circle Point X:</label>
        <input type="number" class="form-control" name="circle_point_x"/>
      </div>
      <div class="form-group">
        <label for="quantity">Circle Point Y:</label>
        <input type="number" class="form-control" name="circle_point_y"/>
      </div>
      <button type="submit" class="btn btn-primary">Check Intersection</button>
      <a href='/' class="btn btn-danger">Home</a>
    </form>
  </div>
</div>
@endsection