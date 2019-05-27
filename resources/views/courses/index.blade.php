@extends('./layout/layout')

@section('title', 'Courses')

@section('content')

    <h1>All courses</h1>
    <div class="row">
        @foreach ($courses as $row)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    {{-- <img class="card-img-top" src="{{$row->image_url}}" alt=""> --}}
                    <div class="card-body">
                    <h5 class="card-title"><a href="{{ url('course', [$row->id]) }}">{{$row->name}}</a></h5>
                            <p class="card-text"></p>
                            <ul>
                                <li>Semester: {{$row->term->title}}</li>
                                <li>Start datum: {{$row->start_date}}</li>
                                <li>Eind datum: {{$row->end_date}}</li>
                            </ul>   
                    </div>
                    <button type="button" class="btn btn-warning">Edit</button>
                </div>
            </div>    
        @endforeach
    </div>
@endsection