@extends('./layout/layout')

@section('title', 'Create Assignment')

@section('content')

    <h1>Create an assignment</h1>
    
    <form method="POST" action={{ url("/assignments") }}>
        
        {{ csrf_field() }}

        <div class="form-group">
          <label for="projectNameInput">Project name</label>
          <input type="text" class="form-control {{ $errors->has('projectNameInput') ? 'invalid' : '' }}" id="projectNameInput" name="projectNameInput" placeholder="insert your project name" required>
        </div>
        <div class="form-group">
            <label for="imageUrlInput">Project Image</label>
            <input type="text" class="form-control {{ $errors->has('imageUrlInput') ? 'invalid' : '' }}" id="imageUrlInput" name="imageUrlInput" placeholder="insert your project image url">
          </div>
        <div class="form-group">
          <label for="projectDescriptionTextArea">Project description</label>
          <textarea class="form-control {{ $errors->has('projectDescriptionTextArea') ? 'invalid' : '' }}" id="projectDescriptionTextArea" name="projectDescriptionTextArea" rows="4" required></textarea>
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