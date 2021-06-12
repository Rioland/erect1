// Automatic Slideshow - change image every 4 seconds
// var myIndex = 0;
// carousel();

// function carousel() {
//     var i;
//     var x = document.getElementsByClassName("mySlides");
//     for (i = 0; i < x.length; i++) {
//         x[i].style.display = "none";
//     }
//     myIndex++;
//     if (myIndex > x.length) {
//         myIndex = 1
//     }
//     x[myIndex - 1].style.display = "block";
//     setTimeout(carousel, 4000);
// }

// Used to toggle the menu on small screens when clicking on the menu button
// function myFunction() {
//     var x = document.getElementById("navDemo");
//     if (x.className.indexOf("w3-show") == -1) {
//         x.className += " w3-show";
//     } else {
//         x.className = x.className.replace(" w3-show", "");
//     }
// }

// When the user clicks anywhere outside of the modal, close it
// var modal = document.getElementById('ticketModal');
// window.onclick = function (event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }


// var slideIndex = 1;
// showDivs(slideIndex);

// function plusDivs(n) {
//     showDivs(slideIndex += n);
// }

// function currentDiv(n) {
//     showDivs(slideIndex = n);
// }

// function showDivs(n) {
//     var i;
//     var x = document.getElementsByClassName("mySlides");
//     var dots = document.getElementsByClassName("demo");
//     if (n > x.length) { slideIndex = 1 }
//     if (n < 1) { slideIndex = x.length }
//     for (i = 0; i < x.length; i++) {
//         x[i].style.display = "none";
//     }
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" w3-white", "");
//     }
//     x[slideIndex - 1].style.display = "block";
//     dots[slideIndex - 1].className += " w3-white";
// }

// _______*****************_________
// ----- --My Jquery Code-- -----
// _______*****************_________
// $(document).ready(function () {
//     $("#tarrow").mouseenter(function () {
//         $(this).slideDown();
//     });
// });

$(document).ready(function () {

    // $('input').blur(function () {

    //     // check if the input has any value (if we've typed into it)
    //     if ($(this).val())
    //         $(this).addClass('used');
    //     else
    //         $(this).removeClass('used');
    // });

    // -------- mobile navagation ------ 
    $("#toggleout").click(function () {
        $(this).fadeIn();
        $("#toggle-in").fadeOut();
        $("#toggle-in").show();
        $(this).hide();
        $(".mobile-container").show();
    });

    $("#toggle-in").click(function () {
        $(this).fadeIn();
        $("#toggleout").fadeOut();
        $("#toggleout").show();
        $(this).hide();
        $(".mobile-container").hide();
    });
// ----- mobile view toggle For PRODUCTS ---- 
    $("#mini-prod-view").mouseenter(function () {
        $("#mini-prod-b").slideDown();
    });

    $("#mini-prod-b").mouseleave(function () {
        $(this).slideUp();
    })
// ----- mobile view toggle showcase FEES ---- 
    $("#mini-fee-view").mouseenter(function () {
        $("#mini-fee-b").slideDown();
    });

    $("#mini-fee-b").mouseleave(function () {
        $(this).slideUp();
    })
    // ----------------------------------------------

});