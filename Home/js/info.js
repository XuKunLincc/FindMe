/**
 * Created by Administrator on 2016/2/15.
 */
var img;
var top;
$(document).ready(init);

function init(){
    img = $(".about");
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
function deleteInfo(){

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
    $("#showNum").hide();
}

function showPhoneNum(){
    if(!isLogin()){
        alert("尚未登录，请先登录")
        window.location.href = "../../Login/index.html?from=../Home/info.php?id="+getLostId();
    }else{
        $(".phoneNum").toggle();
        $("#showNum").slideToggle();
        $("#error").hide();
        $("#showPhoneNum").hide();
    }
}

//验证是否登录
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


function postNum(){
    if(isNull($("#num").val()))
        return;
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
    xmlHttp.send("num="+$("#num").val()+"&lostId="+getLostId());
}

function getLostId(){
    var reg = /[^\?id\=]+/
    var lostId = window.location.search.substr(0).match(reg);
    return lostId;
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

function isNull(str){
    if(str == ""){
        alert("输入不能为空")
        return true;
    }else
        return false;
}