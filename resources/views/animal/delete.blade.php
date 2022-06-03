
@extends('default')
    @Section('title')
    {{"All animal"}}
    @endsection
    <article class="animals">
   
    <h2>All Animals</h2>
    <div></div>
<section class="slide__filter">
    <button id="slide__filter__button__id"class="slide__filter__button">
        <span id="slide__filter__button__span">&#10095;</span>
    </button>
</section>
 
</article>
    @section('content')
    <section class="filter" id="filter__id">
        <div class="wrapper">
        <h2>Categories</h2>
        <section class="txt">
            <input type="checkbox" id="dogCheckbox" data-kind-of-animal="Dog" name="All"
                checked>
            <label for="scales">Dog</label>
        </section>
        <section class="txt">
            <input type="checkbox" id="scales" data-kind-of-animal="Cat" name="All"
                checked>
            <label for="scales">Cat</label>
        </section>
        <section class="txt">
            <input type="checkbox" id="scales" data-kind-of-animal="Fish" name="All"
                checked>
            <label for="scales">Fish</label>
        </section>
        <section class="txt">
            <input type="checkbox" id="scales" data-kind-of-animal="Rabbit" name="All"
                checked>
            <label for="scales">Rabbit</label>
        </section>
    </div>
    </section>
    <ul class="u-grid-12 u-grid-gap-2">
        @foreach($animal as $animal)
            <li class="a-popup u-list-style-none animalGridCard" data-kind-of-animal={{$animal->kind}}>
                <!-- <a href="/animal/{{$animal->id}}"> -->
                    <article class="">
                        <header class="animalGridCard__header u-flex-v-center">
                            <h2 class="animalGridCard__heading">{{$animal->kind}} {{$animal->name}}
                            <form action="/delete/{{$animal->id}}" method="POST"> 
                            @csrf    
                                <button class="ban__button" name="submit"type="submit">&#10006;</button>
                            </form>
                        </header>
                        <figure class="animalGridCard__figure">
                            <img class="animalGridCard__image" src="{{$animal->image}}" alt="{{$animal->name .' ' . $animal->kind}}"/>
                        </figure>
                        <section class="animalGridCard__textSection u-flex-v-center">
                            <p class="animalGridCard__text">{{$animal->description}}</p>
                        </section>
                    </article>
                <!-- </a> -->
            </li>
        @endforeach
    </ul>
    @endsection