@extends('instructor.layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{ route('instructor.course.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="box">
                <h1 class="title has-text-primary"><strong>Upload Videos : </strong> ({{ $course->title }}) Commint soon...</h1>
             
              
            </div>

        </div>
    </div>
    </form>
</div>
@endsection
