@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $loop->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>
                        <a href="#" class="btn btn-primay">show</a>
                        <a href="#" class="btn btn-primay">edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
                
    </table>
</div>
@endsection