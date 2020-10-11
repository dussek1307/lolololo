const teacher_card_tab_active = document.getElementsByClassName("teacher-card-tab-active");
const teacher_card_video = document.getElementsByClassName("teacher-card-video");
const teacher_card_intro = document.getElementsByClassName("teacher-card-intro");
const html = document.querySelector("html");
const i_checkbox = document.querySelector(".i-checkbox");
let cururl = window.location.href;

$(".ant-btn").click(function () {
    $(".filter-container").hide();
})

let proopen = 0;
let deopen = 0;
let rolopen = 0;
let minopen = 0;

$("#tier_btn").click(function () {
    if (proopen == 0) {
        $('#tier_click').show();
        $('#numOfChamps_click').hide();
        $("#numOfSkins").hide();
        $("#blueEssence_click").hide();
        proopen = 1;
        deopen = 0;
        rolopen = 0;
        minopen = 0;
    } else {
        $("#tier_click").hide();
        proopen = 0;
    }
})

$("#numOfChamps_btn").click(function () {
    if (deopen == 0) {
        $('#tier_click').hide();
        $('#numOfChamps_click').show();
        $("#numOfSkins").hide();
        $("#blueEssence_click").hide();
        proopen = 0;
        deopen = 1;
        rolopen = 0;
        minopen = 0;
    } else {
        $("#numOfChamps_click").hide();
        deopen = 0;
    }
})

$("#numOfSkins_btn").click(function () {
    if (rolopen == 0) {
        $('#tier_click').hide();
        $('#numOfChamps_click').hide();
        $("#numOfSkins").show();
        $("#blueEssence_click").hide();
        proopen = 0;
        deopen = 0;
        rolopen = 1;
        minopen = 0;
    } else {
        $("#numOfSkins").hide();
        rolopen = 0;
    }
})

$("#BlueEssence_btn").click(function () {
    if (minopen == 0) {
        $('#tier_click').hide();
        $('#numOfChamps_click').hide();
        $("#numOfSkins").hide();
        $("#blueEssence_click").show();
        proopen = 0;
        deopen = 0;
        rolopen = 0;
        minopen = 1;
    } else {
        $("#blueEssence_click").hide();
        minopen = 0;
    }
})


let c = 0;
function pop_alert() {
    $("#alert_box").hide();
    let e = cururl.split("?");
    location.replace(e[0]);
    document.querySelector(body).style = "overflow: auto";
    html.style = "overflow: auto";
}

function directTo(e) {
    open(e)
}
$("#login_click").click(function () {
    $("html").css({
        overflow: "hidden"
    })
    $("#modal-container").show();
    $("#modal-body-login").show();
    $("#modal-footer-login").show();
    $("#modal-body-reg").hide();
    $("#modal-footer-reg").hide();
    $("#highlight-bar").css({
        width: "25.5px",
        left: "72.25px"
    })
})
$(".mobile_login_click").click(function () {
    $("html").css({
        overflow: "hidden"
    })
    $("#modal-container").show();
    $("#modal-body-login").show();
    $("#modal-footer-login").show();
    $("#modal-body-reg").hide();
    $("#modal-footer-reg").hide();
    $("#highlight-bar").css({
        width: "25.5px",
        left: "72.25px"
    })
})
$("#reg_click").click(function () {
    $("html").css({
        overflow: "none"
    })
    $("#modal-container").show();
    $("#modal-body-login").hide();
    $("#modal-footer-login").hide();
    $("#modal-body-reg").show();
    $("#modal-footer-reg").show();
    $("#highlight-bar").css({
        width: "25.5px",
        left: "244px"
    })
})
$(".modal-close").click(function () {
    $("html").css({
        overflow: "auto"
    })
    $("#modal-container").hide()
})
$(".register-btn").click(function () {
    $("#modal-body-login").hide();
    $("#modal-footer-login").hide();
    $("#modal-body-reg").show();
    $("#modal-footer-reg").show();
    $("#highlight-bar").css({
        width: "25.5px",
        left: "244px"
    })
})
$(".login-btn").click(function () {
    $("#modal-body-login").show();
    $("#modal-footer-login").show();
    $("#modal-body-reg").hide();
    $("#modal-footer-reg").hide();
    $("#highlight-bar").css({
        width: "25.5px",
        left: "72.25px"
    })
})
$(".register-btn-bottom").click(function () {
    $("#modal-body-login").hide();
    $("#modal-footer-login").hide();
    $("#modal-body-reg").show();
    $("#modal-footer-reg").show();
    $("#highlight-bar").css({
        width: "25.5px",
        left: "244px"
    })
})
$(".login-btn-bottom").click(function () {
    $("#modal-body-login").show();
    $("#modal-footer-login").show();
    $("#modal-body-reg").hide();
    $("#modal-footer-reg").hide();
    $("#highlight-bar").css({
        width: "25.5px",
        left: "72.25px"
    })
})



function toImg(e) {
    teacher_card_tab_active[e].style.left = "0px";
    teacher_card_tab_active[e].style.width = "43px";
    teacher_card_video[e].style.display = "block";
    teacher_card_intro[e].style.display = "none";
}
function toIntro(e) {
    teacher_card_tab_active[e].style.left = "53px";
    teacher_card_tab_active[e].style.width = "34px";
    teacher_card_video[e].style.display = "none";
    teacher_card_intro[e].style.display = "block";
}
let isChecked = 0;
i_checkbox.addEventListener("click", function () {
    if (isChecked == 0) {
        i_checkbox.classList.add("i-checkbox-checked");
        isChecked = 1;
    } else {
        i_checkbox.classList.remove("i-checkbox-checked");
        isChecked = 0;
    }
})

if (cururl.indexOf("error=emptyfield") != -1 || cururl.indexOf("error=invalidmailuid") != -1 || cururl.indexOf("error=invalidmail") != -1 || cururl.indexOf("error=invaliduid") != -1 ||
    cururl.indexOf("error=pwdcheck") != -1 || cururl.indexOf("error=sqlerror") != -1 || cururl.indexOf("error=usertaken") != -1 || cururl.indexOf("error=onlinenametaken") != -1 ||
    cururl.indexOf("error=emailtaken") != -1 || cururl.indexOf("error=teltaken") != -1 || cururl.indexOf("error=invalidtel") != -1 || cururl.indexOf("error=shortid") != -1 ||
    cururl.indexOf("error=shortpwd") != -1) {
    $("html").css({
        overflow: "none"
    })
    $("#modal-container").show();
    $("#modal-body-login").hide();
    $("#modal-footer-login").hide();
    $("#modal-body-reg").show();
    $("#modal-footer-reg").show();
    $("#highlight-bar").css({
        width: "25.5px",
        left: "244px"
    })
}
if (cururl.indexOf("error=loginsqlerror") != -1 || cururl.indexOf("error=wrongpwd") != -1 || cururl.indexOf("error=nouser") != -1 || cururl.indexOf("error=loginemptyfield") != -1) {
    $("html").css({
        overflow: "hidden"
    })
    $("#modal-container").show();
    $("#modal-body-login").show();
    $("#modal-footer-login").show();
    $("#modal-body-reg").hide();
    $("#modal-footer-reg").hide();
    $("#highlight-bar").css({
        width: "25.5px",
        left: "72.25px"
    })
}

$(".mobile-search-btn").click(function () {
    $(".filter-section").hide();
    $(".search-teachers-input-icon").show();
    $("#search_teachers_skills").show();
    $(".mobile-search-btn").hide();
    $(".mobile-filter-btn").show();
})
$(".mobile-filter-btn").click(function () {
    $(".filter-section").show();
    $(".search-teachers-input-icon").hide();
    $("#search_teachers_skills").hide();
    $(".mobile-search-btn").show();
    $(".mobile-filter-btn").hide();
});


let navlinks = document.querySelector(".nav-links");
let links = document.querySelectorAll(".nav-links li");
$(".hamburger").click(function () {
    navlinks.classList.toggle("open");
    for (let i = 0; i < links.length; i++) {
        links[i].classList.toggle("fade");
    }
});

