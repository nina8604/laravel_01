@extends('layouts.index')

@section('title')
    Laravel course || Home page
@endsection

@section('content')
    <div class="col">
        <hi>Home</hi>
    </div>

@endsection

@section('javascript')
@parent
    <script>
        console.log('App was load ...')
    </script>
@endsection