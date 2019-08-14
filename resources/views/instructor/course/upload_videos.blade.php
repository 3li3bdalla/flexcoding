@extends('instructor.layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{ route('instructor.course.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="box">
                <h1 class="title has-text-primary"><strong>Upload Videos : </strong> ({{ $course->title }}) Commint soon...</h1>
              <!-- <div class="field">
                <label class="label">Title</label>
                <div class="control">
                  <input name="title"  value='{{old('title')}}'  class="input @error('title') is-danger @enderror" type="text" placeholder="E.G php 101">
                  @error('title') 
                    <p class="help is-danger">{{$message}}</p>
                  @enderror

                </div>
              </div> -->
                <div class="notification is-primary">
                  <button class="delete"></button>
                  Primar lorem ipsum dolor sit amet, consectetur
                  adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
                  consectetur adipiscing elit
                </div>
               <!--  <div class="columns">
                    
                    <div class="column">
                      <button type="button" class="button  is-medium"> cancel </button> 
                    </div>


                    <div class="column">
                      <button type="submit" class="button is-primary is-medium  float-right"> create </button> 
                    </div>
                </div>
 -->
            </div>

        </div>
    </div>
    </form>
</div>
@endsection
