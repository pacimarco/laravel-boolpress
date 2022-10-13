@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{route('admin.posts.store')}}" method="POST">
    @csrf

    <h1>Add post</h1>
    <div class="form-group">

        <label for="category_id">category</label>
        <select id="category_id" name="category_id" class="form-control @error('category_id') is-invalid @enderror">
        <option {{(old('category_id')=="")?'selected':''}} value="">nessuna categoria</option>
            @foreach ($categories as $category)
        <option {{(old('category_id')==$category->id)?'selected':''}} value="{{$category->id}}">"{{$category->name}}"</option>
            
        @endforeach
        
        </select>
        @error('category_id')
            
        
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>   

    <div class="form-group">
        <label for="title">title</label>
        <input type="text" class="form-control @error('title')is-invalid @enderror" required id="title" name="title" max="255" value="{{old('title')}}">
        @error('title')
            
        
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="content">content</label>
        <textarea class="form-control @error('content')is-invalid @enderror" name="content" require id="content">{{old('content')}}</textarea>
        @error('content')
            
        
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    
    
        <div>tag:</div>

        @foreach ($tags as $tag)
        <div class="form-group form-check">

            <input {{(in_array($tag->id, old('tags',[])))?'checked':''}} type="checkbox"  name="tags[]" class="form-check-input" id="tag_{{$tag->id}}" value="{{$tag->id}}">
            <label class="form-check-label" for="tag_{{$tag->id}}">{{$tag->name}}</label>
        </div>   
            @endforeach
    

            @error('tags')
            
        
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror



    <button type="submit" class="btn btn-primary">create post</button>
    </form>

</div>


@endsection