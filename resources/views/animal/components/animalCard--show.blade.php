<section class="center__card">
    <article class="animalCard a-popup">
        <figure class="animalCard__figure">
            <button id="next" class="button__back next">&#187;</button>
            @foreach ($images as $image)
            <img id="{{$int}}" class="animalCard__image" src="/{{$image->url}}"
                alt="{{$animal->name .' ' . $animal->kind}}" />
            @endforeach
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
                <p>From {{$animal->dateFrom}} -> {{$animal->dateTill}}</p>
            </div>

        </section>
        <section class="animalCard__btnSection">
            <a href="/user/{{$animal->user_id}}">
                @foreach ($users as $user)
                @if($user->id==$animal->user_id)
                <figure class="userCard__figure btnsection__figure">
                    <img class="userCard__image respons__figure__image" src="{{$user->image}}"
                        alt="{{$animal->name .' ' . $animal->kind}}" />
                </figure>
            </a>
            @endif
            @endforeach
            <!-- <a  href="/user/{{$animal->user_id}}"><div class="user__icon"></div></a> -->
            @if($animal->user_id==$currentUser)
            <form method="POST " action="/ownerdelete/{{$animal->id}}">
                @csrf
                <button name="submit" type="submit" class="animalCard__button">Delete</button>
            </form>
            @else
            <form method="POST " action="/respons/{{$animal->id}}">
                @csrf
                <button name="submit" type="submit" class="animalCard__button">Respond</button>
            </form>
            @endif
        </section>
    </article>
    <button id="goback" class="button__back">&#8249 Go back</button>
    @if($currentAdminUser->role=="Admin")
        <section>
            <a href="/delete"><h2>Delete animals</h2></a>
        </section>
    @endif

</section>