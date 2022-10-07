@extends('layouts.app')

@section('content')

<h1>benvenuto nell'area admin {{Auth::user()->name}}</h1>

@endsection