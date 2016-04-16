/**
 * Created by Administrator on 2016/2/15.
 */
var img;
var top;
$(document).ready(init);

function init(){
    img = $(".about");;
    img.mouseenter(function () {
        $(this).children("p.description").stop(true);
        $(this).children("p.description").slideDown("normal");
    });
    img.mouseleave(function(){
        $(this).children("p.description").stop(true);
        $(this).children("p.description").slideUp("normal");
    });

    $(window).scroll(istop);
    $("#top").click(gotop);
}

function istop(){
    if($(document).scrollTop() >= 100){
        $("#top").stop();
        $("#top").slideDown("normal");
    }else{
        $("#top").stop();
        $("#top").slideUp("normal");
    }
}

function gotop(){
    $('html, body').animate({scrollTop:0}, 'slow');
}

function hiddenPhoneNum(){
    $(".phoneNum").toggle();
}

function showPhoneNum(){
    $(".phoneNum").toggle();
    $("#showNum").slideToggle();
    $("#error").hide();
    $("#showPhoneNum").hide();
}

//验证是否登录
function isLogin(){

}

function postNum(){
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("post","yanzheng.php",true);
    xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xmlHttp.onload = function(e){
        if(xmlHttp.responseText != 404){
            var phoneNum = "联系方式："+xmlHttp.responseText;
            $("#showPhoneNum").children("span").text(phoneNum);
            showOne("showPhoneNum")
        }else{
            showOne("error");
        }
    }
    xmlHttp.send("num="+$("#num").val());
}

function showOne(id){
    var tmp = "#";
    tmp += id;
    $("#showPhoneNum").hide();
    $("#showNum").hide();
    $("#error").hide();
    $(tmp).slideToggle();
}

function myXmlHttp(){
    this.xmlHttp = new XMLHttpRequest();
}