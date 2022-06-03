let imageInput = document.querySelector('#imageInput')
let uploadImage = "";

if (imageInput != null) {
    imageInput.addEventListener('change', function() {
        const reader = new FileReader();
        reader.addEventListener("load", () => {
            uploadImage = reader.result;
            document.querySelector("#displayImage").style.backgroundImage = `url(${uploadImage})`
        });
        reader.readAsDataURL(this.files[0])
    })
}


//filter
const boxes = document.querySelectorAll("input[type='checkbox']")
boxes.forEach((e) => {
    e.addEventListener('change', function() {
        let animals = document.querySelectorAll(`[data-kind-of-animal="${e.getAttribute("data-kind-of-animal")}"]`)
        if (e.checked) {
            // i begint op 1 anders ook checkbox
            for (let i = 1; i < animals.length; i++) {
                animals[i].style.display = "block";
            }
        } else {
            for (let i = 1; i < animals.length; i++) {
                animals[i].style.display = "none";
            }
        }
    })
})

let goBack = document.getElementById("goback")
if (goBack != null) {
    goBack.addEventListener('click', () => {
        history.back();
    });
}
let state = 0;
let img = document.getElementsByClassName("animalCard__image")
let next = document.getElementById("next")

if (next != null) {
    next.addEventListener('click', () => {
        for (let i = 0; i < img.length; i++) {

            if (state == img.length) {
                state = 0;
            }
            if (state == i) {
                img[i].style.display = "block"
            }
            if (state !== i) {
                img[i].style.display = "none"
            }
        }
        state++

    });
}

const hamburger = document.getElementById("hamburgerr")
const navbar = document.getElementById("hamburger__id")
console.log(navbar)
if (hamburger != null) {
    hamburger.addEventListener('click', () => {
        if (navbar.style.display == 'block') {
            navbar.style.display = "none"
        } else {
            navbar.style.display = "block"
        }

    })
}

const filter = document.getElementById("filter__id")
const slideFilterButton = document.getElementById("slide__filter__button__id")
const span = document.getElementById("slide__filter__button__span")
if (slideFilterButton != null) {
    slideFilterButton.addEventListener("click", () => {
        if (filter.style.display == "flex") {
            filter.classList.remove("trans__in");
            filter.style.display = "none"
            span.innerHTML = "&#10095;"
        } else {
            filter.classList.add("trans__in");
            filter.style.display = "flex"

            span.innerHTML = "&#10094;"
        }
    })
}
let stateUser = 0;
let Userimg = document.getElementsByClassName("userCard__image")
let nextUser = document.getElementById("nextUser")

if (nextUser != null) {
    nextUser.addEventListener('click', () => {
        for (let i = 0; i < Userimg.length; i++) {

            if (stateUser == Userimg.length) {
                stateUser = 0;
            }
            if (stateUser == i) {
                Userimg[i].style.display = "block"
            }
            if (stateUser !== i) {
                Userimg[i].style.display = "none"
            }
        }
        stateUser++
    });
}