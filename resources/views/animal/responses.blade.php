
@extends('default')
@section('content')

    <li class="responsCard__grid">
        <h2 class="title">All Responses on your animals</h2>
        <div class="balk"></div>
        @foreach ($responses as $response)
        @foreach($myanimals as $myanimal)
            @if($myanimal==$response->animalId)
            <article class="responsCard a-popup">
                <!-- <p>This is user{{$response->ownerId}}</p> -->
                <h2>{{$response->animalName}}</h2>
                @foreach ($animals as $animal)
                    @if($animal->id==$response->animalId)
                <section class="responsCard__section">
                    <div class="responsCard__section__div">
                        <p>Your animal</p>
                        <a class="animal__icon"href="/animal/{{$response->animalId}}">
                            <figure class="userCard__figure">
                                    <img class=" userCard__image respons__figure__image" src="{{$animal->image}}"  alt="">
                            </figure>
                        </a>
                    </div>
                    @endif
                @endforeach
                    <!-- <a href="/user/{{$response->sitterId}}">
                        <div class="responsCard__section__div">
                            <p>{{$response->sitterName}}</p>
                        </div></a> -->
                    @foreach ($users as $user)
                        @if($user->id==$response->sitterId)
                    <div class="responsCard__section__div">
                        <p>Responder</p>
                        <a  href="/user/{{$response->sitterId}}">
                            <figure class="userCard__figure">
                                <img class="userCard__image respons__figure__image" src="{{$user->image}}" alt="{{$animal->name .' ' . $animal->kind}}"/>
                            </figure>
                            <!-- <div class="user__icon respons__user__icon"></div> -->
                        </a>
                    </div>
                   
                    
                        @if($response->accepted=="false")
                    <form class="responsCard__section__div" method="POST "action="/send/{{$response->id}}">
                            @csrf  
                            <p>Status</p>
                            <button name="submit" type="submit" class="animalCard__button" >Accept</button>
                    </form>
                        @else
                    <form class="responsCard__section__div" method="POST "action="/review/{{$user->id}}">
                            @csrf  
                            <p>Status</p>
                            <button name="" type="submit" class="animalCard__button" >Leave review</button>

                    </form>
                        @endif
                </section>
            </article>
                        @endif
                    @endforeach
                    @else

        @endif
        @endforeach
        
    @endforeach
    </li>
  


@endsection