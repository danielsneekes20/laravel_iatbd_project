
@extends('default')
@Section('title')
{{$animal->kind . " " . $animal->name}}
@endsection

@section('content')
    @include('animal.components.animalCard--show')
@endsection