// ============================
// Struktur Java Script
// ============================
// 1. Navbar Transparan
// 2. Set Cookie Mode Dark - Light
// 3. Mode Dark - Light
// 4. Popover
// ============================

// 1. Navbar Transparan
var nav = document.querySelector('nav');
window.addEventListener('scroll', function() {
    if (window.pageYOffset > 50) {
        nav.className = "navbar navbar-expand-lg sticky-top bgNavbar nav-shadow";
    } else {
        nav.className = "navbar navbar-expand-lg sticky-top";
    }
});

// 2. Set Cookie Mode Dark - Light

// 3. Mode Dark - Light
var body = document.body;
var icon = document.querySelector("ion-icon[name='sunny-outline']");
var text = document.getElementById('text');
var brand = document.getElementById('brand');
var beranda = document.getElementById('beranda');
var portfolio = document.getElementById('portfolio');
var contact = document.getElementById('contact');
var btnLihatSemuanya = document.getElementById('btn-lihat-semuanya');
var iconColor = document.getElementById('icon-color');
var navbar = document.getElementById('navbar');
var highlightedText = document.getElementById('highlighted-text');
var toggle = document.getElementById('toggle');
var card = document.querySelectorAll("div[id='card']");
var footer = document.getElementById('footer');
var footerPowered = document.getElementById('footer-powered');
var hr = document.getElementById('hr');
// var contactMe = document.getElementById('contact-me');

// select all contact-me id with querySelectorAll
var contactMe = document.querySelectorAll("#contact-me");


document.getElementById("darkMode").addEventListener("click", () => {
    body.classList.toggle("light-mode");

    if (body.classList == "light-mode") {
        var i;
        icon.setAttribute("name", "moon-outline");
        text.className = "mobile-container light-text-color py-5";
        brand.className = "navbar-brand light-brandTextColor";
        beranda.className = "nav-link light-text-color";
        portfolio.className = "nav-link light-text-color";
        contact.className = "nav-link light-text-color";
        iconColor.className = "light-ModeTextColor";
        toggle.className = "navbar-toggler light-text-color";
        for (i = 0; i < card.length; i++) {
            card[i].setAttribute("class", "card card-shadow secondaryTextColor");
        }
        footer.className = "container light-text-color";
        footerPowered.className = "light-text-color text-decoration-none";
        hr.classList.remove('d-md-none', 'text-white-50');
        navbar.className = "navbar navbar-expand-lg sticky-top light-bgNavbar light-nav-shadow";
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 50) {
                navbar.className = "navbar navbar-expand-lg sticky-top light-bgNavbar light-nav-shadow";
            } else {
                navbar.className = "navbar navbar-expand-lg sticky-top";
            }
        });
        if (btnLihatSemuanya) {
            btnLihatSemuanya.className = "badge text-decoration-none light-lihat-color light-bg-color";
        }
        if (highlightedText) {
            highlightedText.className = "email-text light-highlighted-text";
        }
        if (contactMe) {
            for (i = 0; i < contactMe.length; i++) {
                // print length of contact
                // console.log(contactMe.length);
                contactMe[i].className = "light-text-color text-decoration-none text-vertical-align-center";
            }
        }
    } else {
        var i;
        icon.setAttribute("name", "sunny-outline");
        text.className = "mobile-container primaryTextColor py-5";
        brand.className = "navbar-brand brandTextColor";
        beranda.className = "nav-link primaryTextColor";
        portfolio.className = "nav-link primaryTextColor";
        contact.className = "nav-link primaryTextColor";
        iconColor.className = "darkModeTextColor";
        toggle.className = "navbar-toggler primaryTextColor";
        for (i = 0; i < card.length; i++) {
            card[i].setAttribute("class", "light-card light-card-shadow light-text-white");
        }
        footer.className = "container primaryTextColor";
        footerPowered.className = "primaryTextColor text-decoration-none";
        hr.className = "d-md-none text-white-50";
        navbar.className = "navbar navbar-expand-lg sticky-top bgNavbar";
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 50) {
                navbar.className = "navbar navbar-expand-lg sticky-top bgNavbar nav-shadow";
            } else {
                navbar.className = "navbar navbar-expand-lg sticky-top";
            }
        });
        if (btnLihatSemuanya) {
            btnLihatSemuanya.className = "badge text-decoration-none btn-primaryTextColor btnSecondaryBgColor btn-shadow";
        }
        if (highlightedText) {
            highlightedText.className = "email-text highlighted-text";
        }
        if (contactMe) {
            for (i = 0; i < contactMe.length; i++) {
                // print length of contact
                // console.log(contactMe.length);
                contactMe[i].className = "primaryTextColor text-decoration-none text-vertical-align-center";
            }
        }
    }
})

// 4. Popover
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
})