@extends('./layout/layout')

@section('title', 'Create Assignment')

@section('content')

    <h1>Create an course</h1>
    
    <form method="POST" action={{ url("/courses") }}>
        
        {{ csrf_field() }}

        <div class="form-group">
          <label for="name">Course name</label>
          <input type="text" class="form-control {{ $errors->has('name') ? 'invalid' : '' }}" id="name" name="name" placeholder="insert your course name" required>
        </div>
        <div class="form-group">
            <label for="start_date">Start date</label>
            <input type="date" class="form-control {{ $errors->has('start_date') ? 'invalid' : '' }}" id="start_date" name="start_date">
        </div>
        <div class="form-group">
          <label for="end_date">End date</label>
          <input type="date" class="form-control {{ $errors->has('end_date') ? 'invalid' : '' }}" id="end_date" name="end_date">
        </div>
        <div class="form-group">
          <label for="term">Select Term</label>
          <select class="form-control" name="term" id="term">
            
            @foreach ($terms as $term)
              <option>{{ $term->title }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary mb-2">Submit</button>
        </div>
      </form>

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li> {{ $error }}</li> 
            @endforeach
          </ul>
        </div>
      @endif
      
@endsection