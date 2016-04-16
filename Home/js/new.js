/**
 * Created by Administrator on 2016/2/16.
 */
var overlayBl;
var formInput;
var contentInfoBl;
var type = true;
var typeBl;
var submitBl;
var cancelBl;

var titleBl;
var mainBl;
var localBl;
var htimeBl;
var phoneNumBl;

var picList;
$(document).ready(init);
function init() {
    window.onunload = onunload_handler;
    overlayBl = $(".overlay");
    formInput = $(".form-control")
    contentInfoBl = $("#content-info");
    submitBl = $("#submit");
    cancelBl = $("#cancel");
    typeBl = $("#type");
    titleBl = $("#title");
    mainBl = $("#main");
    localBl = $("#local");
    htimeBl = $("#htime");
    phoneNumBl = $("#phoneNum");
    picList = $(".picList");

    $('[data-toggle="tooltip"]').tooltip()

    overlayBl.mousedown(hiddenP);
    formInput.blur(showP);
    formInput.focus(hiddenPByInput);
    $("#info").focus(hiddenPByInput);

    typeBl.mousedown(function () {
        if (type) {
            typeBl.text("拾获物品");
            type = false;
        } else {
            typeBl.text("丢失物品");
            type = true;
        }
    });
    submitBl.mousedown(submit);
    $("textarea").blur(function () {
        if ($(this).val() == "") {
            $(this).animate({
                height: "0px",
                backgroundColor: "#00aeef"
            }, 800)
        }
    });
}
function showOrHiddenDelButton(){
    $(this).children("button").stop();
    $(this).children("button").slideToggle();
}

function hiddenP() {
    if ($(this).attr("id") == "content-info") {
        showText();
        return true
    }
    $(this).children("p").stop(true);
    $(this).children("p").animate({
        width: "100px"
    }, 800, inputFocus);
}

function showP() {
    if ($(this).val() == "") {
        $(this).children("p").stop(true);
        $(this).next().animate({
            width: "100%"
        }, 800)
    }
}

function hiddenPByInput(){
    if($(this).attr("id") == "info"){
        $(this).stop();
        $(this).animate({
            height: "300px",
            backgroundColor: "#FFFFFF"
        }, 800);
        return ;
    }
    $(this).next().stop(true);
    $(this).next().animate({
        width: "100px"
    }, 800);
}

function inputFocus() {
    $(this).prev().focus();
}

function showText() {
    $("#content-info").children("textarea").animate({
        height: "300px",
        backgroundColor: "#FFFFFF"
    }, 800, function () {
        $(this).focus()
    })
}
function submit() {
    var title = titleBl.val();
    var main = mainBl.val();
    var local = localBl.val();
    var htime = htimeBl.val();
    var contentInfo = $("#info").val();
    var phoneNum = phoneNumBl.val();
    if(!(title && main && contentInfo && phoneNum && htime && local)){
        alert("您填写的信息不完整");
        return true;
    }
    var lostType;
    if(type)
        lostType = 1;           // 拾获为1
    else
        lostType = 0;           // 丢失为0
    $.post("new.php", {
        title: title,
        main: main,
        local: local,
        htime: htime,
        info: contentInfo,
        phoneNum: phoneNum,
        lostType: lostType,
        picNum: lisIndex
    }, function (data, status) {
        alert(data)
        window.location.href = "index.php";
    });
}

var fileList = new Array;
function addPicList(ele) {
    //get image url
    var mFile = ele.files[0];
    var imgUrl;
    var li = $(".pic").eq(0).clone();
    var rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;
    if (!rFilter.test(mFile.type)) {
        alert("您选择的不是图片文件");
        return 0;
    }
    var fileReader = new FileReader();
    fileReader.onloadend = function (e) {
        var img = li.children("img");
        img.attr("src",e.target.result);
        var wd = img.width;
        if (wd <= 200)return;
        img.css("marginLeft",-(img.width / 2) - 10 + "px");
    };
    fileReader.readAsDataURL(mFile);
    li.addClass("pic")
    console.log(li.attr("class"));
    li.mouseenter(showOrHiddenDelButton)
    li.mouseleave(showOrHiddenDelButton)
    //li.mousedown(function(){
    //    alert("test")
    //})
    li.appendTo(picList);
    li.show();
    sendPic("saveFile.php",mFile,li);
}

//send pic
var lis = new Array;
var lisIndex = 0;
function sendPic(url,file,li) {
    var xmlR = new XMLHttpRequest();
    xmlR.upload.addEventListener("loadend",isEnd,false);
    xmlR.upload.lisIndex = lisIndex
    lis[lisIndex] = li;
    lisIndex++;
    if(lisIndex >= 9){
        $("#addPic").attr("disabled","disabled");
        $("#addPic").text("九图已满");
    }
    var fileNum = fileList.length;
    xmlR.open("POST", url, true); // 异步发送数据
    xmlR.send(file);
    xmlR.onload = function (e) {
        console.log(xmlR.responseText);
    }
}

function isEnd(e){
    console.log(e.target.lisIndex);
    lis[e.target.lisIndex].children("p").show();
}
function onunload_handler(){
    var warning="谢谢光临";
    alert(warning);
}

