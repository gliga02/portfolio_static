// Navbar on scroll
$(function () {
    $(document).scroll(function() {
        const $nav = $("#nav-container");
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
        if ($nav.hasClass("scrolled")) {
            $("#logo img").attr("src", "logo_white.png");
        }

        else $("#logo img").attr("src", "logo.png");
    });
});



// Footer copyright year
const $year = $("footer span.year");
let date = new Date();
$year.text(date.getFullYear());

// AOS Library
AOS.init();

// Responsive nav
$(".menu-icon").click(function() {
    $("header ul li:not(:last-child)").slideToggle("slow", function() {
        $(this).toggleClass("visible");
    })
});

const img = document.querySelectorAll("#portfolio-section img");
const p = document.querySelectorAll("#portfolio-section p");

for (let i = 0; i < img.length; i++) {
    scale(img[i], p[i]);
}

function scale(i, p) {
    i.addEventListener("mouseover", function() {
        p.style.color = "rgb(43, 144, 238)";
        p.style.fontSize = "3rem";
        p.style.transition = "1s";
    });

    i.addEventListener("mouseout", function() {
        p.style.color = "#333";
        p.style.fontSize = "1.5rem";
        p.style.transition = "1s";
    });
}

setTimeout(function() {
    $("#preloader").css("display", "none");
}, 2500);


const input = document.querySelectorAll("input[type='text'], input[type='email'], textarea");
const submit = document.querySelector("input[type='submit']");
input.forEach(i => {
    submit.addEventListener("click", function() {
        if (!i.value) {
            i.style.borderBottom = "1px solid red";
            i.setAttribute("placeholder", 'This field is required!');
        }

        else {
            i.style.borderBottom = "1px solid rgb(43, 144, 238)";
        }
    });
    
    i.addEventListener("keyup", function() {
        if (this.value != "") {
            this.style.borderBottom = "1px solid rgb(43, 144, 238)";
            submit.removeAttribute("disabled");
        }
    });
});