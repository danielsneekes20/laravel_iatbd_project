
@extends('default')
@section('content')
    <li class="responsCard__grid">
        <h2 class="title">All your responses</h2>
        <div class="balk"></div>
        @foreach ($responses as $response)
            <article class="responsCard a-popup">
                <!-- <p>This is user{{$response->ownerId}}</p> -->
                <h2>{{$response->animalName}}</h2>
                <section class="responsCard__section">
                
                    <!-- <div class="responsCard__section__div">
                        <a class="animal__icon"href="/animal/{{$response->animalId}}"></a>
                    </div> -->
                    @foreach ($animals as $animal)
                    @if($animal->id==$response->animalId)
                    <section class="responsCard__section__div">
                        <p>animal</p>
                        <a href="/animal/{{$response->animalId}}">
                            <figure class="userCard__figure">
                                <img class=" userCard__image respons__figure__image" src="{{$animal->image}}"  alt="">
                            </figure>
                        </a>
                    </section>
                    @endif
                    @endforeach
                    @foreach ($users as $user)
                    @if($user->id==$response->ownerId)
                    <section class="responsCard__section__div">
                        <p>Owner</p>
                        <a href="/user/{{$response->ownerId}}">
                            <figure class="userCard__figure">
                                <img class="userCard__image respons__figure__image" src="{{$user->image}}" alt="{{$animal->name .' ' . $animal->kind}}"/>
                            </figure>
                        </a>
                    </section>
                    @endif
                    @endforeach
                    <!-- <div class="responsCard__section__div">
                        <h3>Fuck</h3>
                    </div> -->
                    @if($response->accepted=="false")
                    <form class="responsCard__section__div">
                            @csrf 
                            <p>Status</p> 
                            <button class="animalCard__button" >In progress</button>
                    </form>
                    @else
                    <form class="responsCard__section__div">
                            @csrf  
                            <p>Status</p>
                            <button class="animalCard__button">Respons accepted</button>
                    </form>
                    @endif
                </section>
            </article>
        @endforeach
    </li>
@endsection