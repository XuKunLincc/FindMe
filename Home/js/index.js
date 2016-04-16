/**
 * Created by Administrator on 2016/2/13.
 */
$(document).ready(init);

var info;
var login;
var search;
var nav;
var newBtn;
function init(){
    info = $("#user-info");
    login = $(".logined");
    search = $(".search");
    newBtn = $("#new");
    nav = $("nav");

    login.mouseenter(show);
    login.mouseleave(hidden);
    newBtn.mouseenter(change);
    newBtn.mouseleave(noChange);
}

function show(){
    info.stop(true);
    info.slideToggle("normal");
}

function hidden(){
    info.stop(true);
    info.slideToggle("normal");
}

function change(){
    nav.stop(true);
    search.stop(true);
    newBtn.stop(true);
    nav.animate({
        backgroundColor: "#99cc00"
    },1000)
    search.animate({
        backgroundColor: "#99cc00"
    },1000)
    $(this).animate({
        backgroundColor: "#99cc00",
        width: "100%"
    },1000)
}

function noChange(){
    nav.stop(true);
    search.stop(true);
    newBtn.stop(true);
    nav.animate({
        backgroundColor: "#00aeef"
    },1000)
    search.animate({
        backgroundColor: "#00aeef"
    },1000)
    newBtn.animate({
        backgroundColor: "#00aeef",
        width: "300px"
    },1000)
}

