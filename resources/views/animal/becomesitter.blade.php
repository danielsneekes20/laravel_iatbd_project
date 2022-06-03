
@extends('default')
@section('content')
    <main class="contact">
       
        <section class="p">
        <form action="/animal" method="POST" class="form" enctype="multipart/form-data">
        <section>
            <h2>Register as Sitter</h2>
        </section>
            <section class="p">
            <div class="form__first">
                <div class="formstyle">
                    <div class="input-data">
                        <input type="text" name="name"required spellcheck="false">
                        <div class="underline"></div>
                        <label>Sirname</label>
                    </div>
                </div>
                <div class="formstyle">
                    <div class="input-data">
                        <input type="text" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Lastname</label>
                    </div>
                </div>
                <div class="formstyle">
                    <div class="input-data">
                        <input type="text" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Email</label>
                    </div>
                </div>
            </div>
            <div class="form__first">
                <div class="formstyle">
                    <div class="input-data">
                        <input type="text" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Phonenumber</label>
                    </div>
                </div>
                <div class="formstyle">
                    <div class="input-data">
                        <input type="text" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Password</label>
                    </div>
                </div>
                <div class="formstyle">
                    <div class="input-data">
                        <input type="text" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Adres</label>
                    </div>
                </div>
            </div>
            <div class="form__first">
                <div class="formstyle">
                    <div class="input-data">
                        <input type="text" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Country</label>
                    </div>
                </div>
                <div class="formstyle">
                    <div class="input-data">
                        <input type="text" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Age</label>
                    </div>
                </div>
                <div class="formstyle">
                    <div class="input-data">
                        <input type="text" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Zip-Code</label>
                    </div>
                </div>
            </div>
            <div class="form__first">
            <textarea placeholder="Tell something about yourself!" required name="Bericht" cols="30" role="10"></textarea>
            </div>
            </section>
            <div class="form__first">
                <h3>Upload someee photos<h3>
            </div>
            <div class="form__first">
                <section>
                    <label class="file__label"for="imageInput">Select image:</label>
                    <input type="file" id="imageInput" name="img" accept="image/*">
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
@endsection