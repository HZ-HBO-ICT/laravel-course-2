@extends('./layout/layout')

@section('title', 'Edit Course')

@section('content')

    <h1>Edit an exsting course</h1>

        <?php
          //convert some datetime strings to the good format for a input type=date
          $startDateTime = strtotime($course->start_date);
          $newStartDate = date('Y-m-d', $startDateTime);
          $endDateTime = strtotime($course->start_date);
          $newEndDate = date('Y-m-d', $endDateTime);
        ?>
        <form method="POST" action="{{ url("/courses/$course->id") }}">

        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="form-group">
          <label for="name">Course name</label>
          <input type="text" class="form-control {{ $errors->has('name') ? 'invalid' : '' }}" value="{{ $course->name }}" id="name" name="name" placeholder="insert your course name" required>
        </div>
        <div class="form-group">
            <label for="start_date">Start date</label>
            <input type="date" class="form-control {{ $errors->has('start_date') ? 'invalid' : '' }}" value="{{ $newStartDate }}" id="start_date" name="start_date">
        </div>
        <div class="form-group">
          <label for="end_date">End date</label>
          <input type="date" class="form-control {{ $errors->has('end_date') ? 'invalid' : '' }}" value="{{ $newEndDate }}" id="end_date" name="end_date">
        </div>
        <div class="form-group">
          <label for="term">Select Term</label>
          <select class="form-control" name="term" id="term">
            @foreach ($terms as $term)
              @if ($term->id == $course->term_id)
                <option selected>{{ $term->title }}</option>
              @else
                <option>{{ $term->title }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary mb-2">Submit</button>
        </div>
      </form>
      
      <form method="POST" action="{{ url("/courses/$course->id") }}">

        <!-- blade derectives -->
        {{-- @method('DELETE')
        @csrf --}}

        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        <div class="form-group">
          <button type="delete" class="form-control btn btn-danger mb-2">Delete</button>
        </div>
      </form>

@endsection