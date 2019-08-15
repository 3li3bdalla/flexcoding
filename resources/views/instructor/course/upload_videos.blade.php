@extends('instructor.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">

            <div class="box">
                <h1 class="title has-text-primary"><strong>Upload Videos : </strong> ({{ $course->title }}) Commint soon...</h1>
             
              
            </div>
            <upload-vidoe-component   uploading-url="{{ route('instructor.video.store',$course->slug)}}"></upload-vidoe-component>

        </div>
    </div>
</div>
@endsection
