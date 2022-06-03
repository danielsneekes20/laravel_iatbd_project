
@extends('default')
    @Section('title')
    {{"All animal"}}
    @endsection
    <article class="animals">
   
    <h2>All Users</h2>
    <div></div>

<section class="slide__filter">
    <button id="slide__filter__button__id"class="slide__filter__button">
        <span id="slide__filter__button__span">&#10095;</span>
    </button>
</section>
 
</article>
    @section('content')
    <ul class="u-grid-12 u-grid-gap-2">
        @foreach($users as $user)
            @if($user->banned=="0")
            <li class="a-popup u-list-style-none animalGridCard">
               
                    <article class="">
                        <header class="animalGridCard__header u-flex-v-center">
                            <h2 class="animalGridCard__heading">{{$user->name}}
                            <form action="/deleteUser/{{$user->id}}" method="POST"> 
                            @csrf    
                                <button class="ban__button"name="submit"type="submit">&#10006;</button>
                            </form>
                        </header>
                        <figure class="animalGridCard__figure">
                            <img class="animalGridCard__image" src="{{$user->image}}" alt="{{$user->name}}"/>
                        </figure>
                        <section class="animalGridCard__textSection u-flex-v-center">
                            <p class="animalGridCard__text">{{$user->description}}</p>
                        </section>
                    </article>
                <!-- </a> -->
            </li>
            @endif
        @endforeach
    </ul>
    @endsection