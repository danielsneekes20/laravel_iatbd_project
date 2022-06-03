
@extends('default')
@section('content')
<section class="section__userCard">
<article class="userCard a-popup position__relative">
        <figure class="userCard__figure special__figure">
        @foreach ($images as $image)
            <img class="userCard__image special" src="/{{$image->url}}" alt="foto's van gebruiker"/>
        @endforeach
        </figure>
        <button id="nextUser"class="button__back next">&#187;</button>

        <section class="username">
            <h2>{{$user->name}}</h2>
        </section>
        <section class="userCard__section">
            <section class="userCard__div"> 
                <section class="userCard__icon__p">
                    <i class="fa fa-envelope" style="font-size:30px;color:white" aria-hidden="true"></i>
                    <p class="text__style">{{$user->email}}</p>
                </section>
            </section>
            <section class="userCard__div">
                <section class="userCard__icon__p">
                    <i class="fa fa-phone" style="font-size:30px;color:white" aria-hidden="true"></i>
                    <p class="text__style">{{$user->phonenumber}}</p>
                </section>
            </section> 
        </section>
        <section class="userCard__section">
            <section class="userCard__div"> 
                <section class="userCard__icon__p">
                    <i class="fa fa-globe" style="font-size:30px;color:white" aria-hidden="true"></i>
                    <p class="text__style">{{$user->country}}</p>
                </section>
            </section>
            <section class="userCard__div">
                <section class="userCard__icon__p">
                    <i class="fa fa-birthday-cake" style="font-size:30px;color:white" aria-hidden="true"></i>
                    <p class="text__style">{{$user->age}}</p>
                </section>
            </section> 
        </section>
        <section class="userCard__section">
            <div class="userCard__textarea"> 
                <section class="userCard__icon__p">
                    <!-- <i class="fa fa-info-circle" style="font-size:30px;color:white" aria-hidden="true"></i> -->
                    <textarea disabled class="text__style background"name="" id="" cols="30" rows="10">{{$user->description}} hi ik eb die die maar dat kan ook wel dus we moeten ff kijken hoe het gaat weetje wel verder gaat t geod doei doei</textarea>
                </section>
            </div>
        </section>
        
        </article>
        <section>
            <button id="goback"class="button__back">&#8249 Go back</button>
        </section>
        @if($currentUser->role=="Admin")
        <section>
            <a href="/allUsers"><h2>All users</h2></a>
        </section>
        @endif
        <h2 class="review__h2">Reviews</h2>
        @foreach ($reviews as $review)
        <section class="show__reviews">
            <textarea disabled class="text__style area__margin"name="" id="" cols="30" rows="10">{{$review->review}}</textarea>
        </section>
        @endforeach
        </section>
        @endsection