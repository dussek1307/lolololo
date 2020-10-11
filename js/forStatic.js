const html = document.querySelector("html");
const password_type = document.querySelector(".password-type");
const password = document.querySelector(".Login-text-password");
const login_btn_btm = document.querySelector(".login-btn-bottom");
const alert_box = document.querySelector("#alert-box");
const i_checkbox = document.querySelector(".i-checkbox");
const openPwdChan = document.querySelector("#openPwdChan");
let c = 0;
let cururl = window.location.href;

function pop_alert() {
    alert_box.style.display = "none";
    let o = cururl.split("?");
    location.replace(o[0]), document.querySelector(body).style = "overflow: auto", html.style = "overflow: auto";
}

function directTo(o) {
    open(o)
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
$("#reg_click").click(function () {
    $("html").css({
        overflow: "none"
    }), $("#modal-container").show();
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
    $("#modal-container").hide();
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
});

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

let navlinks = document.querySelector(".nav-links");
let links = document.querySelectorAll(".nav-links li");
$(".hamburger").click(function () {
    navlinks.classList.toggle("open");
    for (let i = 0; i < links.length; i++) {
        links[i].classList.toggle("fade");
    }
});

isPwdChanBtnOp = 0;
$("#pwdChanBtn").click(function () {
    isPwdChanBtnOp ? (openPwdChan.style.display = "none", isPwdChanBtnOp = 0) : (openPwdChan.style.display = "block", isPwdChanBtnOp = 1)
});