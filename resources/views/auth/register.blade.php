<!-- <header class="header"> -->
        <!-- <figure class="logo">
            <img src="/img/thumbnail_Gekleurdeklein.png" alt="">
        </figure> -->
        
        <!-- <ul class="navbar">
            <li><a href="/My responses"aria-label="navigatie home">My responses</a></li>
            <li><a href="/responses" aria-label="navigatie Acomodaties">Responses</a></li>
            <a href="/"><h1>Passenopjedier</h1></a>
            <li><a href="/searchsitter" aria-label="navigatie Beschikbaarheid">Search sitter</a></li>
            <li><a href="/dashboard" aria-label="navigatie Contact">Dashboard</a></li>
        </ul> -->
<!-- </header> -->
@extends('default')
@section('content')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <main class="contact">
       
        <section class="p">
        <form action="{{ route('register') }}" method="POST" class="form" autocomplete="off"enctype="multipart/form-data">
        @csrf
        <section>
            <h2>Register as Sitter</h2>
        </section>
            <section class="p">
            <div class="form__first">
                <div class="formstyle">
                    <div class="input-data">
                        <input name="name" :value="old('name')" type="text" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Sirname</label>
                    </div>
                </div>
                <div class="formstyle">
                    <div class="input-data">
                        <input type="text" name="lastname" :value="old('lastname')" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Lastname</label>
                    </div>
                </div>
                <div class="formstyle">
                    <div class="input-data">
                        <input name="email" :value="old('email')"  autocomplete="off" type="email" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Email</label>
                    </div>
                </div>
            </div>
            <div class="form__first">
                <div class="formstyle">
                    <div class="input-data">
                        <input type="tel" name="phonenumber" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Phonenumber</label>
                    </div>
                </div>
                <div class="formstyle">
                    <div class="input-data">
                        <input name="password" type="password" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Password</label>
                    </div>
                </div>
                <div class="formstyle">
                    <div class="input-data">
                        <input name="password_confirmation" type="password" required spellcheck="false">
                        <div class="underline"></div>
                        <label>password comfirm</label>
                    </div>
                </div>
            </div>
            <div class="form__first">
                <div class="formstyle">
                    <div class="input-data">
                        <input type="text" name="country" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Country</label>
                    </div>
                </div>
                <div class="formstyle">
                    <div class="input-data">
                        <input type="text" name="age" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Age</label>
                    </div>
                </div>
                <div class="formstyle">
                    <div class="input-data">
                        <input type="text" name="zipcode" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Zip-Code</label>
                    </div>
                </div>
            </div>
            <div class="form__first">
            <textarea placeholder="Tell something about yourself!" required name="description" cols="30" role="10"></textarea>
            </div>
            </section>
            <div class="form__first">
                <h3>Upload some photos<h3>
            </div>
            <div class="form__first">
                <section>
                    <label class="file__label"for="imageInput">Select image:</label>
                    <input type="file" id="imageInput" name="images[]" multiple>
                    <!-- <input class="sumbit__input"type="submit"> -->
                </section>
            </div>
            <div class="form__first">
                <div class="showImage"id="displayImage"> </div>
            </div>
        <div class="form__last">
            <section>
                <button type="submit">Register</button>
            </section>
        </div>
        </form>
        
    </main>
    </x-auth-card>
</x-guest-layout>
@endsection