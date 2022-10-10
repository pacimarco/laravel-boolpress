@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{route('admin.posts.store')}}" method="POST">
    @csrf
    <div class="form-group">

        <label for="title">title</label>
        <input type="text" class="form-control @error('title')is-invalid @enderror" required id="title" name="title" max="255" value="{{old('title')}}">
        @error('title')
            
        @enderror
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="content">content</label>
        <textarea class="form-control @error('content')is-invalid @enderror" name="content" require id="content">value="{{old('content')}}"</textarea>
        @error('content')
            
        @enderror
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">create post</button>
    </form>

</div>


@endsection