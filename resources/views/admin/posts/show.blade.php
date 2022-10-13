@extends('layouts.app')

@section('content')

<div class="container">
<div>
    <span class="fw-bold">title:</span>
    {{$post->title}}
</div>
<div>
    <span class="fw-bold">content:</span>
    {{$post->content}}
</div>
<div>
    <span class="fw-bold">slug:</span>
    {{$post->slug}}
</div>
<div>
    <span class="fw-bold">category:</span>
    {{$post->category}}
</div>
<div>
    <span class="fw-bold">tag:</span>
    @foreach ($post->tags as $tag )
    {{$tag->name}};
        
    @endforeach
</div>
<a href="{{route('admin.posts.index')}}" class="btn btn-primary">back</a>

</div>


@endsection