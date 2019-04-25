@extends('./layout/layout')

@section('title', 'Terms')

@section('content')

    <h1>Terms</h1>
    <div class="row">
        @foreach ($terms as $row)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="{{$row->photo}}" alt="">
                    <div class="card-body">
                    {{-- <h5 class="card-title"><a href="/assignments/{{ $row->id }}">{{$row->title}}</a></h5> --}}
                    <h5 class="card-title"><a href="{{ url('assignments', [$row->id]) }}">{{$row->title}}</a></h5>
                            <p class="card-text">
                                {{$row->description}}
                            </p>
                            <h6>Courses</h6>
                            <ul>
                               @if($row->courses->count())
                                    @foreach($row->courses as $course)
                                        <li>{{ $course->name }} </li>
                                    @endforeach
                               @endif 
                            </ul> 
                    </div>
                </div>
            </div>    
        @endforeach
    </div>
@endsection