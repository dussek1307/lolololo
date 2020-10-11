const html = document.querySelector("html"),
    password_type = document.querySelector(".password-type"),
    password = document.querySelector(".Login-text-password");
let cururl = window.location.href;
const cmt_textarea = document.querySelector(".cmt-textarea"),
    cmt_btn = document.querySelector(".cmt-btn"),
    i_checkbox = document.querySelector(".i-checkbox");
if (cmt_textarea) var backup = cmt_textarea.getAttribute("placeholder");
const clear = document.querySelector("#clear"),
    cmt_cmt_btn = document.querySelectorAll(".cmt-cmt-btn"),
    cmt_cmt_container = document.querySelectorAll(".cmt-cmt-container"),
    dropdown = document.querySelectorAll(".dropdown"),
    dropdown_content = document.querySelectorAll(".dropdown-content"),
    review_list_box = document.querySelectorAll(".review-list-box"),
    review_comment = document.querySelectorAll(".review-comment"),
    edit_textarea = document.querySelectorAll(".edit-textarea"),
    edit_confirm = document.querySelectorAll(".edit-confirm"),
    edit_cancel = document.querySelectorAll(".edit-cancel"),
    loginToCmt = document.querySelector("#loginToCmt"),
    reply_container = document.querySelectorAll(".reply-container"),
    rec_btn = document.querySelectorAll(".recommend-btn"),
    alert_box = document.querySelector("#alert-box");

function pop_alert() {
    $("#alert_box").hide();
    let e = cururl.split("?");
    location.replace(e[0]);
    document.querySelector(body).style = "overflow: auto";
    html.style = "overflow: auto";
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

$("#loginToCmt").click(function () {
    $("html").css({
        overflow: "hidden"
    })
    $("#modal-container").show()
    $("#modal-body-login").show()
    $("#modal-footer-login").show()
    $("#modal-body-reg").hide()
    $("#modal-footer-reg").hide()
    $("#highlight-bar").css({
        width: "25.5px",
        left: "72.25px"
    })
    window.scrollTo(0, 0);
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
    window.scrollTo(0, 0);
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


function autosize() {
    var e = this;
    setTimeout(function () {
        e.style.cssText = "height:auto; padding:0", e.style.cssText = "height:" + e.scrollHeight + "px"
    }, 0)
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

cmt_textarea && (cmt_textarea.onfocus = function () {
    this.setAttribute("placeholder", ""), this.style.borderColor = "#333", cmt_btn.style.display = "inline-block", clear.style.display = "inline-block"
}, cmt_textarea.onblur = function () {
    cmt_textarea.setAttribute("placeholder", backup), cmt_textarea.style.borderColor = "#aaa"
})

clear && (clear.onclick = function () {
    cmt_textarea.style.height = "30px", cmt_btn.style.display = "none", clear.style.display = "none", cmt_textarea.value = ""
})

cmt_textarea && cmt_textarea.addEventListener("keydown", autosize);
let is_open = 0;

function cmt_cmt_drop(e) {
    0 == (is_open = "" == cmt_cmt_container[e].style.display || "none" == cmt_cmt_container[e].style.display ? 0 : 1) ? (cmt_cmt_btn[e].innerHTML = "▲    댓글 감추기", cmt_cmt_container[e].style.display = "block", is_open = 1) : (cmt_cmt_btn[e].innerHTML = "▼    댓글 더 보기", cmt_cmt_container[e].style.display = "none", is_open = 0)
}
let isDropdown = 0;
if (dropdown.length > 0)
    function dropdownHover(e) {
        dropdown[e].style.display = "block"
    }
for (var i = 0; i < review_list_box.length; i++) review_list_box[i].addEventListener("mouseout", function () {
    for (let e = 0; e < dropdown.length; e++) dropdown[e].style.display = "none"
});

function getDropdown(e) {
    0 == (isDropdown = "" == dropdown_content[e].style.display || "none" == dropdown_content[e].style.display ? 0 : 1) ? (dropdown_content[e].style.display = "block", isDropdown = 1) : (dropdown_content[e].style.display = "none", isDropdown = 0)
}

function editReview(e) {
    review_comment[e].style.display = "none", edit_textarea[e].style.display = "inline", edit_confirm[e].style.display = "inline", edit_cancel[e].style.display = "inline", edit_textarea[e].innerHTML = review_comment[e].innerHTML
}

function cancel_edit(e) {
    review_comment[e].style.display = "inline", edit_textarea[e].style.display = "none", edit_confirm[e].style.display = "none", edit_cancel[e].style.display = "none"
}

function reply_cancel(e) {
    reply_container[e].style.display = "none"
}

function open_reply(e) {
    reply_container[e].style.display = "block", cmt_cmt_container[e].style.display = "block"
}

function directTo(e) {
    open(e)
}
for (let e = 0; e < rec_btn.length; e++) rec_btn[e].addEventListener("click", function () {
    setTimeout(function () {
        location.reload()
    }, 100)
});
$(".mobile_login_click").click(function () {
    $("html").css({
        overflow: "hidden"
    }), $("#modal-container").show(), $("#modal-body-login").show(), $("#modal-footer-login").show(), $("#modal-body-reg").hide(), $("#modal-footer-reg").hide(), $("#highlight-bar").css({
        width: "25.5px",
        left: "72.25px"
    })
});

let navlinks = document.querySelector(".nav-links");
let links = document.querySelectorAll(".nav-links li");
$(".hamburger").click(function () {
    navlinks.classList.toggle("open");
    for (let i = 0; i < links.length; i++) {
        links[i].classList.toggle("fade");
    }
});