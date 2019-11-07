// Carousel Image


$(document).ready(function () {
    $(".carousel").slick({
        slidesToShow: 1,
        dots: false,
        centerMode: true,
        centerPadding: "",
        prevArrow: "<img class='a-left control-c prev slick-prev' src='assets/img/arrow_left.png'>",
        nextArrow: "<img class='a-right control-c next slick-next' src='assets/img/arrow_right.png'>"
    });
});

// End of Carousel Image


// Scroll Button 
const toTop = document.querySelector(".floating-sec");
window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
        toTop.classList.add("active");
    } else {
        toTop.classList.remove("active");
    }
});

// End of Scroll Button


//Check if the agreement is check

var checker = document.getElementById('checkme');
var sendbtn = document.getElementById('save');
// when unchecked or checked, run the function
checker.onchange = function () {
    if (this.checked) {
        sendbtn.disabled = false;
    } else {
        sendbtn.disabled = true;
    }

}

// End of Check agreement

//Application and Seminar Page js

var modal = document.getElementById("myModal");
var btn = document.getElementById("save");
var span = document.getElementsByClassName("close")[0];

// Application Variables
var modal = document.getElementById("myModal");
var btn = document.getElementById("save");
var span = document.getElementsByClassName("close")[0];

var inputFullname = document.getElementById("input-fullname");
var inputPhone = document.getElementById("input-phone");
var inputEmail = document.getElementById("input-email");
var inputProf = document.getElementById("input-prof");
var inputAddress = document.getElementById("input-address");

var inputFullnamee = document.getElementById("fullnamee");
var inputPhonee = document.getElementById("phonee");
var inputEmaill = document.getElementById("emaill");
var inputProff = document.getElementById("proff");
var inputAddresss = document.getElementById("addresss");

var fullname = document.getElementById("fullname");
var phone = document.getElementById("phone");
var email = document.getElementById("email");
var prof = document.getElementById("prof");
var address = document.getElementById("address");

// End of Application Pages Variables

// Seminar Page Variables
var inputSemschedule = document.getElementById("input-semschedule");
var inputSemfullname = document.getElementById("input-semfullname");
var inputSemphone = document.getElementById("input-semphone");
var inputSememail = document.getElementById("input-sememail");
var inputSemage = document.getElementById("input-semage");
var inputSemoccupation = document.getElementById("input-semoccupation");
var inputSemincome = document.getElementById("input-semincome");
var inputMessage = document.getElementById("input-message");

var inputSemschedulee = document.getElementById("sem_schedulee");
var inputSemfullnamee = document.getElementById("sem_fullnamee");
var inputSemphonee = document.getElementById("sem_phonee");
var inputSememaill = document.getElementById("sem_emaill");
var inputSemagee = document.getElementById("sem_agee");
var inputSemoccupationn = document.getElementById("sem_occupationn");
var inputSemincomee = document.getElementById("sem_incomee");
var inputMessagee = document.getElementById("messagee");

var sem_schedule = document.getElementById("sem_schedule");
var sem_fullname = document.getElementById("sem_fullname");
var sem_phone = document.getElementById("sem_phone");
var sem_email = document.getElementById("sem_email");
var sem_age = document.getElementById("sem_age");
var sem_occupation = document.getElementById("sem_occupation");
var sem_income = document.getElementById("sem_income");
var message = document.getElementById("message");

// End of Seminar Page Variables

// Button Submit
var confirmBtn = document.getElementById("btn-confirm");
// End of Button Submit

confirmBtn.onclick = function () {
    confirmModal.style.display = "block";
};

function closeModal() {
    modal.style.display = "none";
}

btn.onclick = function () {

    // Red Border Js 
    var err_fname = $("#input-fullname").val();
    var err_phone = $("#input-phone").val();
    var err_email = $("#input-email").val();
    var err_prof = $("#input-prof").val();
    var err_address = $("#input-address").val();

    var err_semschedule = $("#input-semschedule").val();
    var err_semfullname = $("#input-semfullname").val();
    var err_semphone = $("#input-semphone").val();
    var err_sememail = $("#input-sememail").val();
    var err_semage = $("#input-semage").val();
    var err_semoccupation = $("#input-semoccupation").val();
    var err_semincome = $("#input-semincome").val();
    var err_semmessage = $("#input-message").val();


    if (!err_fname) {
        $("#input-fullname").addClass("makeRed");
        return;
    } else {
        $("#input-fullname").removeClass("makeRed");
    }
    if (!err_phone) {
        $("#input-phone").addClass("makeRed");
        return;
    } else {
        $("#input-phone").removeClass("makeRed");
    }
    if (!err_email) {
        $("#input-email").addClass("makeRed");
        return;
    } else {
        $("#input-email").removeClass("makeRed");
    }

    if (!err_prof) {
        $("#input-prof").addClass("makeRed");
        return;
    } else {
        $("#input-prof").removeClass("makeRed");
    }

    if (!err_address) {
        $("#input-address").addClass("makeRed");
        return;
    } else {
        $("#input-address").removeClass("makeRed");
    }

    // End of REd Button Js


    if (!err_semschedule) {
        $("#input-semschedule").addClass("makeRed");
        return;
    } else {
        $("#input-semschedule").removeClass("makeRed");
    }

    if (!err_semfullname) {
        $("#input-semfullname").addClass("makeRed");
        return;
    } else {
        $("#input-semfullname").removeClass("makeRed");
    }
    if (!err_semphone) {
        $("#input-semphone").addClass("makeRed");
        return;
    } else {
        $("#input-semphone").removeClass("makeRed");
    }
    if (!err_sememail) {
        $("#input-sememail").addClass("makeRed");
        return;
    } else {
        $("#input-sememail").removeClass("makeRed");
    }
    if (!err_semage) {
        $("#input-semage").addClass("makeRed");
        return;
    } else {
        $("#input-semage").removeClass("makeRed");
    }
    if (!err_semoccupation) {
        $("#input-semoccupation").addClass("makeRed");
        return;
    } else {
        $("#input-semoccupation").removeClass("makeRed");
    }
    if (!err_semincome) {
        $("#input-semincome").addClass("makeRed");
        return;
    } else {
        $("#input-semincome").removeClass("makeRed");
    }
    if (!err_semmessage) {
        $("#input-message").addClass("makeRed");
        return;
    } else {
        $("#input-message").removeClass("makeRed");
    }


    modal.style.display = "block";

    fullname.innerHTML = inputFullname.value;
    fullnamee.value = inputFullname.value;
    phone.innerHTML = inputPhone.value;
    phonee.value = inputPhone.value;
    email.innerHTML = inputEmail.value;
    emaill.value = inputEmail.value;
    prof.innerHTML = inputProf.value;
    proff.value = inputProf.value;
    address.innerHTML = inputAddress.value;
    addresss.value = inputAddress.value;

    sem_schedule.innerHTML = inputSemschedule.value;
    sem_schedulee.value = inputSemschedule.value;
    sem_fullname.innerHTML = inputSemfullname.value;
    sem_fullnamee.value = inputSemfullname.value;
    sem_phone.innerHTML = inputSemphone.value;
    sem_phonee.value = inputSemphone.value;
    sem_email.innerHTML = inputSememail.value;
    sem_emaill.value = inputSememail.value;
    sem_age.innerHTML = inputSemage.value;
    sem_agee.value = inputSemage.value;
    sem_occupation.innerHTML = inputSemoccupation.value;
    sem_occupationn.value = inputSemoccupation.value;
    sem_income.innerHTML = inputSemincome.value;
    sem_incomee.value = inputSemincome.value;
    messagee.value = inputMessage.value;
    message.innerHTML = inputMessage.value;
};

$("#input-fullname").click(function () {
    $("#input-fullname").removeClass("makeRed");

});

$("#input-phone").click(function () {
    $("#input-phone").removeClass("makeRed");

});
$("#input-email").click(function () {
    $("#input-email").removeClass("makeRed");

});
$("#input-prof").click(function () {
    $("#input-prof").removeClass("makeRed");

});
$("#input-address").click(function () {
    $("#input-address").removeClass("makeRed");

});

$("#input-semschedule").click(function () {
    $("#input-semschedule").removeClass("makeRed");

});

$("#input-semfullname").click(function () {
    $("#input-semfullname").removeClass("makeRed");

});

$("#input-semphone").click(function () {
    $("#input-semphone").removeClass("makeRed");

});

$("#input-sememail").click(function () {
    $("#input-sememail").removeClass("makeRed");

});

$("#input-semage").click(function () {
    $("#input-semage").removeClass("makeRed");

});

$("#input-semoccupation").click(function () {
    $("#input-semoccupation").removeClass("makeRed");

});

$("#input-semincome").click(function () {
    $("#input-semincome").removeClass("makeRed");

});

$("#input-message").click(function () {
    $("#input-message").removeClass("makeRed");

});

closeConfirmModal.onclick = function () {
    confirmModal.style.display = "none";
};

span.onclick = function () {
    modal.style.display = "none";
};

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};