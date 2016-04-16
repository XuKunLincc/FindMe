/**
 * Created by Administrator on 2016/2/14.
 */

var xmlhttp;
var username;
var password;
var test;
$(document).ready(init);

function init() {
    test = $("#error");
    username = $("#username");
    password = $("#password");

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
}

function send() {

    xmlhttp.open("POST", "validate.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //xmlhttp.send("username=" + username.value + "&password=" + password.value);
    xmlhttp.send("username=" + username.val() + "&password=" + password.val());
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (xmlhttp.responseText == 200) {
                go();
            } else {
                showError();
            }
        }
    }
    return false;
}
function showError() {
    test.slideDown("normal");
    $("br").slideUp("normal");

    username.focus(hideError);
    password.focus(hideError);
}

function hideError() {
    test.slideUp("normal");
    $("br").slideDown("normal");
}

function go() {
    window.location.href = "../Home/index.php";
}