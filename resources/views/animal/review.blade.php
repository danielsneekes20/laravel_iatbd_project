
@extends('default')
@section('content')
<section class="section__review">
    <article class="review__card">
        <h2>Review on {{$user->name}}</h2>
        <form action="/review/{{$user->id}}" method="POST">
        @csrf

        <div class="form__first">
            <textarea name="review" class="review__textarea"placeholder="Tell something about the sitter" required name="description" cols="30" role="10"></textarea>
        </div>
        <button class="button__back"type="submit">submit</button>
        </form>
    </article>
<section>
    <button id="goback"class="button__back">&#8249 Go back</button>
</section>
</section>
@endsection