<article class="animalCard a-popup">
    <figure class="animalCard__figure">
        <img class=" animalCard__image" src="{{$animal->image}}" alt="{{$animal->name .' ' . $animal->kind}}" />
    </figure>
    <section class="animalCard__text">
        <div>
            <strong>Description</strong>
            <p>{{$animal->description}}</p>
        </div>
        <div>
            <strong>Important Points</strong>
            <p>{{$animal->important}}</p>
        </div>
        <div class="animalCard__text__last">
            <strong>Uurtatief</strong>
            <p>{{$animal->hourly}}</p>

            <strong>Date</strong>
            <p>{{$animal->dateStart}}. ' '.{{$animal->dateEnd}}</p>
        </div>

    </section>
    <section class="animalCard__btnSection">
        <a href="/animal">
            <div class="user__icon"></div>
        </a>
        <button class="animalCard__button">Order now</button>
        <!-- <a class="animalCard_back_to_home"href="/animal"> Back to home -->
    </section>
</article>