@extends('instructor.layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            @foreach($courses->chunk(3) as $chunked_courses)
            <div class="columns">
              @foreach($chunked_courses as $course)
              <div class="column">
                  <div class="card">
                    <div class="card-image">
                      <figure class="image is-square">
                        <img src="{{ \Storage::url($course->image) }}" alt="Placeholder image">
                      </figure>
                    </div>
                    <div class="card-content">
                      <h5 class=" has-text-primary is-line">{{$course->title}}</h5>
                      <!-- <div class="content">
                        {{$course->description}}
                        <a href="#">#css</a> <a href="#">#responsive</a>
                        <br>-->
                        <time datetime="2016-1-1">{{$course->created_date}}</time>
                      <!-- </div>  -->
                    </div>
                    <div class="card-footer">
                      <a href="{{ $course->instructor_view_url }}" class="button is-primary"><i class='fa fa-door-open'></i>&nbsp;  open</a>
                      &nbsp;&nbsp;
                      <button class="button is-dark"><i class='fa fa-eye-dropper'></i>&nbsp;  edit</button>
                      &nbsp;&nbsp;
                      <button class="button is-link"><i class='fa fa-sitemap'></i>&nbsp;  anylisys</button>
                    </div>
                  </div>

              </div>
            @endforeach
            </div>
           @endforeach
        </div>
    </div>


</div>
@endsection
