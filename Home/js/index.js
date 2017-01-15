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

function nextPage(index,maxIndex){
    if(index >= maxIndex)
        return false;
    return true;
}

function previousPage(index){
    if(index <= 1)
        return false;
    return true;
}

function newLost(){
    if(isLogin()){
        window.location.href = "new.php"
    }else{
        alert("尚未登录，请先登录");
        window.location.href = "../Login/index.html?from=../index.html"
    }
}

//��֤�Ƿ��¼
function isLogin(){
    var flag = true;
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("get","islogin.php",false);
    xmlHttp.onload = function(e){
        if(xmlHttp.responseText == "true")
            flag = true;
        else
            flag = false;
    }
    xmlHttp.send();
    return flag;
}


function isLastOrFirst(index,maxIndex){
    if(index <= 1){
        $(".previous").children("a").removeAttr('href');
    }
    if(index >= maxIndex){
        $(".next").children("a").removeAttr('href');
    }
}