@extends('instructor.layouts.app')

@section('content')
<div class="container">
      <div class="box  has-background-light">
        <section class="section">
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

    <div class="box  has-background-light">
     
      @foreach($videos->chunk(3) as $chunked_videos)
       <div class="columns"> 
        @foreach($chunked_videos as $video)
          <div class="column">
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <a href="{{route('instructor.video.show',$video->id)}}">#{{ $loop->index + 1 }}- {{ $video->title }} </span></a> 
                </p>
                
              </header>
              
              <div class="card-content">
                <div class="content">
                  {{ $video->sub_description }}
                  <!-- <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a> -->
                  <br>
                  <time datetime="2016-1-1">{{ $course->created_date}}</time>
                </div>
              </div>
            <!--   <footer class="card-footer">
                <a href="#" class="card-footer-item has-text-info has-background-light">
                  <i class="fa fa-eye"></i> &nbsp;
                  1.23k
                </a>
                <a href="#" class="card-footer-item has-text-danger has-background-light">
                  <i class="fa fa-thumbs-down"></i> &nbsp;
                  1.23k
                </a>
                
                <a href="#" class="card-footer-item has-text-success has-background-light">
                  <i class="fa fa-thumbs-up"></i> &nbsp;
                  1.23k
                </a>
              </footer>
 -->

              <footer class="card-footer">
                <a href="#" class="card-footer-item has-text-info">
                  <i class="fa fa-lock"></i> &nbsp;
                  Lock
                </a>
                <a href="#" class="card-footer-item has-text-primary">
                  <i class="fa fa-edit"></i> &nbsp;
                  Edit
                </a>
                
                <a href="#" class="card-footer-item has-text-danger">
                  <i class="fa fa-trash"></i> &nbsp;
                  Delete
                </a>
              </footer>
            </div>
          </div>
        @endforeach
        </div>
      @endforeach
    </div>
   {{ $videos->links() }}
  </div>
</div>
@endsection





@section('page_css')
  <link rel="stylesheet" href="dist/css/rtop.videoPlayer.VERSION.min.css" />
@stop


@section('page_js')
  <script src="https://code.jquery.com/jquery-VERSION.slim.min.js"></script>
  <script type="text/javascript" src="/dist/js/rtop.videoPlayer.ERSION.min.js"></script>
@stop



