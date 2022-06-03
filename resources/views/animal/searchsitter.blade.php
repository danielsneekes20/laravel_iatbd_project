
@extends('default')
@section('content')
    <main class="contact">
       
        <section class="p">
        <form action="{{route('animal.index')}}" method="POST" class="form"enctype="multipart/form-data">
        @csrf  
        <section>
            <h2>Register your animal</h2>
        </section>
            <section class="p">
            <div class="form__first">
                <h3>Animal info</h3>
            </div>
            <div class="form__first">
                <div class="formstyle">
                    <div class="input-data">
                        <input name="name" type="text" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Name</label>
                    </div>
                </div>
                <div class="formstyle">
                    <div class="input-data">
                        <input name="important"type="text" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Important points</label>
                    </div>
                </div>
                <div class="formstyle">
                    <div class="input-data">
                        <input name="hourly"type="text" required spellcheck="false">
                        <div class="underline"></div>
                        <label>Hourly rate</label>
                    </div>
                </div>
                <div class="formstyle">
                    <div class="input-data">
                        <select id="cars" name="kind">
                                <option value="Rabbit">Rabbit</option>
                                <option value="Cat">Cat</option>
                                <option value="Dog">Dog</option>
                                <option value="Fish">Fish</option>
                        </select>
                        <label class="select__label">Type</label>

                </div>
                </div>
            </div>
            <div class="form__first">
                <textarea placeholder="Tell something about your animal" required name="description" cols="30" role="10"></textarea>
            </div>
            <div class="form__first">
                <div class="formstyle">
                    <div class="input-data">
                        <input type="date" name="datefrom"required spellcheck="false">
                        <div class="underline"></div>
                        <label class="date">Date From</label>
                    </div>
                </div>
                <div class="formstyle">
                    <div class="input-data">
                        <input type="date" name="datetill" required spellcheck="false">
                        <div class="underline"></div>
                        <label class="date">Date Till</label>
                    </div>
                </div>
               
            </div>
            </section>
            <div class="form__first">
                <h3>Upload some photos<h3>
            </div>
            <div class="form__first">
                <section>
                    <label class="file__label"for="imageInput">Select image:</label>
                    <input type="file" id="imageInput" name="images[]" multiple>
                </section>
            </div>
            <div class="form__first">
                <div class="showImage"id="displayImage"> </div>
            </div>
        <div class="form__last">
            <section>
                <button type="submit" name="sumbit" id="sumbit" value="upload">Register</button>
            </section>
        </div>
        </form>
        
    </main>
@endsection