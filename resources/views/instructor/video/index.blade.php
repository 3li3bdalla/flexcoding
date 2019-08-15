@extends('instructor.layouts.app')

@section('content')
<div class="container justify-content-center">
    
    <div class="row justify-content-center">
        <div class="col-md-12">
          
          <section class="section has-background-light">
              <div class="container">
                <div class="level">
                  <div class="level-left">
                    <h1 class="title  has-text-primary">{{$course->title }}</h1>
                  </div>
                  <div class="level-right">
                      <a href="{{ $course->instructor_upload_video_url }}" class="button is-primary"><i class='fa fa-upload'></i>&nbsp;  upload Video 
                      </a>
                  </div>
                </div>
                <h2 class="subtitle">
                  {{ $course->description}}
                </h2>
              </div>
            </section>
        </div>
        <div class="col-md-12" >
            @foreach($videos->chunk(3) as $chunked_videos)
            <div class="columns">
              @foreach($chunked_videos as $video)
              <div class="column">
                  <div class="card">
                    <div class="card-image">
                      <figure class="image  is-3by2">
                        <img src="{{ \Storage::url($course->image) }}" alt="Placeholder image" class="">
                      </figure>
                    </div>
                    <div class="card-content">
                      <h5 class=" has-text-primary is-line">shdaljsdlkfjsd</h5>
                      <!-- <div class="content">
                        {{$course->description}}
                        <a href="#">#css</a> <a href="#">#responsive</a>
                        <br>-->
                        <time datetime="2016-1-1">435345</time>
                      <!-- </div>  -->
                    </div>
                    <div class="card-footer justify-content-center">
                      <a href="" class="button is-primary"><i class='fa fa-door-open'></i>&nbsp;  open</a>
                      &nbsp;&nbsp;
                      <button class="button is-dark"><i class='fa fa-eye-dropper'></i>&nbsp;  edit</button>
                      &nbsp;&nbsp;
                      <a href="" class="button is-link"><i class='fa fa-video'></i>&nbsp;  videos 
                  </a>
                    </div>
                  </div>

              </div>
            @endforeach
            </div>
           @endforeach

           {{ $videos->links() }}
        </div>
    </div>


</div>
@endsection
