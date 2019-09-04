@extends('instructor.layouts.app')
@section('title')
	{{$course->title}}
@endsection
@section('content')
<div class="container is-fluid">
  <h1 class="h1">{{$course->title}}</h1>
  <form method="POST" action="/instructor/course/{{$course->slug}}"style="margin-bottom: 6px;">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger mb-6" type="submit">Delete</button>
  </form>
  <div class="columns">

    <div class="column is-three-quarters">
      <div class="card">
          <div class='card-header'>
            <img src="{{ \Storage::url($course->image) }}" class="img-fluid img-thumbnail">
          </div>
          <div class="card-body">
            <h1 class="title"></h1>
            <p class="has-text-info">course Discription : {{$course->description}}</p>
            <p class="subtitle"></p>
          </div>
          <div class="card-footer">
            @foreach ($course->hashtags as $hashtag)
              {{-- expr --}}
                <a href="" class="tag is-primary">{{$hashtag->name}}</a>&nbsp;
            @endforeach

          </div>
        </div>
    </div>


    <div class="column">

      <p class="subtitle has-text-primary">
       <strong>Course Detail</strong> :
      </p>

      <ul class="list-group">
            <li class="list-group-item">
            	videos({{$course->videos->count()}})
            </li>
            <li class="list-group-item active">
            </li>


      </ul>


    </div>
</div>
@endsection
