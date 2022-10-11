@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{route('admin.posts.update', ['post' => $post->id])}}" method="POST">
    @csrf
    @method('PUT')

    <h1>edit post</h1>
    <div class="form-group">

        <label for="title">title</label>
        <input type="text" class="form-control @error('title')is-invalid @enderror" required id="title" name="title" max="255" value="{{old('title',$post->title)}}">
        @error('title')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        
        
    </div>
    <div class="form-group">
        <label for="content">content</label>
        <textarea class="form-control @error('content')is-invalid @enderror" name="content" require id="content">{{old('content', $post->content)}}</textarea>
        @error('content')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        
        
    </div>
    
    <button type="submit" class="btn btn-primary">update</button>
    </form>

</div>


@endsection