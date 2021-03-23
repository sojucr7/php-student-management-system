@extends('layouts.default')
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a student</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    
      <form method="post" action="{{ route('student.store') }}">
          @csrf
          <div class="form-group">    
              <label for="first_name">Name:</label>
              <input type="text" class="form-control" name="name" required/>
          </div>
          <div class="form-group">
              <label for="last_name">Age:</label>
              <input type="number" class="form-control" name="age" required/>
          </div>
          <div class="form-group">
          <label>Gender:</label>
          <br/>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" required>
            <label class="form-check-label" for="inlineRadio1">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
            <label class="form-check-label" for="inlineRadio2">Female</label>
          </div>
          </div>
          <div class="form-group">
          <label for="reporting_teacher">Reporting Teacher:</label>
            <select class="form-control" id="reporting_teacher" name="reporting_teacher" required>
              <option value="">select a teacher</option>
              @foreach($teachers as $teacher)
              <option value="{{$teacher}}">{{$teacher}}</option>
              @endforeach
            </select>
          </div>                         
          <button type="submit" class="btn btn-primary">Add student</button>
      </form>
  </div>
</div>
</div>
@endsection