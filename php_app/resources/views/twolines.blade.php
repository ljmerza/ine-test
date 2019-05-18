@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 5%;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Two Lines Intersection
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

    <form method="post" action="{{ route('twolines.store') }}">
      <div class="form-group">
        @csrf
        <label for="name">line1 x1:</label>
        <input type="number" class="form-control" name="line1_x1"/>
      </div>
      <div class="form-group">
        <label for="price">line1 y1:</label>
        <input type="number" class="form-control" name="line1_y1"/>
      </div>
      <div class="form-group">
        <label for="quantity">line1 x2:</label>
        <input type="number" class="form-control" name="line1_x2"/>
      </div>
      <div class="form-group">
        <label for="quantity">line1 y2:</label>
        <input type="number" class="form-control" name="line1_y2"/>
      </div>

      <div class="form-group">
        <label for="quantity">line2 x1:</label>
        <input type="number" class="form-control" name="line2_x1"/>
      </div>
      <div class="form-group">
        <label for="quantity">line2 y1:</label>
        <input type="number" class="form-control" name="line2_y1"/>
      </div>
      <div class="form-group">
        <label for="quantity">line2 x2:</label>
        <input type="number" class="form-control" name="line2_x2"/>
      </div>
      <div class="form-group">
        <label for="quantity">line2 y2:</label>
        <input type="number" class="form-control" name="line2_y2"/>
      </div>
      <button type="submit" class="btn btn-primary">Check Intersection</button>
      <a href='/' class="btn btn-danger">Home</a>
    </form>
  </div>
</div>
@endsection