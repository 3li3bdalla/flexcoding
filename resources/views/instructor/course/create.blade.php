@extends('instructor.layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{ route('instructor.course.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="box">
                <h1 class="title has-text-primary">Publish New course</h1>
              <div class="field">
                <label class="label">Title</label>
                <div class="control">
                  <input name="title"  value='{{old('title')}}'  class="input @error('title') is-danger @enderror" type="text" placeholder="E.G php 101">
                  @error('title') 
                    <p class="help is-danger">{{$message}}</p>
                  @enderror

                </div>
              </div>

              <div class="field">
                <label class="label">Description</label>
                <div class="control">
                  <textarea name='description' class="textarea @error('description') is-danger @enderror" type="email" placeholder="add nice description that will make you easy to be searched">{{old('description')}}</textarea>
                  @error('description') 
                    <p class="help is-danger">{{$message}}</p>
                  @enderror
                </div>
              </div>
                <div class="field is-large">
                  
                  <div class="is-medium justify-content-center file has-name is-boxed is-primary ">
                    <label class="file-label">
                      <input class="file-input" type="file" name="image" value="{{old('image')}}">
                      <span class="file-cta">
                        <span class="file-icon">
                          <i class="fas fa-upload"></i>
                        </span>
                        <span class="file-label">
                          Cover Image…
                        </span>
                      </span>
                      <span class="file-name">
                        <!-- Screen Shot 2017-07-29 at 15.54.25.png -->
                      </span>
                    </label>
                  </div>
                  @error('image') 
                        <p class="help is-danger">{{$message}}</p>
                  @enderror
                </div>


                <div class="field">
                    <label class="label">Tags</label>
                    <div class="control">
                      <input class="input @error('tags') is-danger @enderror" name="tags" type="text" placeholder="something like : php , web development .. act" value='{{old('tags')}}'>
                      @error('tags') 
                        <p class="help is-danger">{{$message}}</p>
                      @enderror
                    </div>

                  </div>

                <div class="columns">
                    
                    <div class="column">
                      <button type="button" class="button  is-medium"> cancel </button> 
                    </div>


                    <div class="column">
                      <button type="submit" class="button is-primary is-medium  float-right"> create </button> 
                    </div>
                </div>

            </div>

        </div>
    </div>
    </form>
</div>
@endsection
