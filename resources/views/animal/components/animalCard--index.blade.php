
<!-- <div class="filter"></div> -->
<li class="a-popup u-list-style-none animalGridCard" data-kind-of-animal={{$animal->kind}}>
    <a href="/animal/{{$animal->id}}">
        <article class="">
            <header class="animalGridCard__header u-flex-v-center">
                <h2 class="animalGridCard__heading">{{$animal->kind}} {{$animal->name}}   </header>
            <figure class="animalGridCard__figure">
                <img class="animalGridCard__image" src="{{$animal->image}}" alt="{{$animal->name .' ' . $animal->kind}}"/>
            </figure>
            <section class="animalGridCard__textSection u-flex-v-center">
                <p class="animalGridCard__text">{{$animal->description}}</p>
            </section>
        </article>
    </a>
</li>
