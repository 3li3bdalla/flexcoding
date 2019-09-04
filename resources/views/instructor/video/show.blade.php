@extends('instructor.layouts.app')

@section('content')
<div class="container is-fluid">
  <div class="columns">

    <div class="column is-three-quarters">
      <div class="card">
          <div class='card-header'>
<<<<<<< HEAD
            <video poster="https://bulma.io/images/css-book/css-in-44-minutes-book-cover@2x.png"   controls download='false'>
                <source src="{{ $video->player_url }}" type="video/mp4" />

              
            </video>


=======
            <video src="{{ $video->player_url }}" type="video/mp4" class='video-js' controls preload='auto' width="100%">
              <source  width="100%" src="{{ $video->player_url }}" type="video/mp4">
            </video>
>>>>>>> 8a63d57257f298a325e29a5212a139c012afab84
          </div>
          <div class="card-body">
            <h1 class="title">{{ $video->title }}</h1>
            <p class="has-text-info">published at : {{ $video->created_at }}</p>
            <p class="subtitle">{{ $video->description }}</p>
          </div>
          <div class="card-footer">
            @empty(!$video->course->hashtags)
              @foreach($video->course->hashtags as $hashtag)
                <a href="" class="tag is-primary">{{$hashtag->name}}</a>&nbsp;
              @endforeach
            @endempty

          </div>
        </div>
    </div>


    <div class="column">

      <p class="subtitle has-text-primary">
       <strong>Course</strong> : {{ $video->course->title }}
      </p>

      <ul class="list-group">
        @foreach($video->course->videos as $list_video)
          @if($video->id!=$list_video->id)
            <li class="list-group-item"><a href="{{route('instructor.video.show',$list_video->id)}}">#{{ $loop->index + 1 }}- {{ $list_video->title }}</a></li>
          @else
            <li class="list-group-item active">#{{ $loop->index + 1 }}- {{ $video->title }}</li>
          @endif


        @endforeach

      </ul>


    </div>







</div>
@endsection

@section('page_css')
  <link rel="stylesheet" href="https://cdn.plyr.io/3.5.6/plyr.css" />
@stop

@section('page_js')
<script src="https://cdn.plyr.io/3.5.6/plyr.js"></script>

<script>
    var player = new Plyr('#player');
    player.play();
</script>
@stop



