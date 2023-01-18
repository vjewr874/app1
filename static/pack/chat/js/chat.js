var getplayer = function (fname) {
    return '<embed style="position:absolute;top:-100000px" width="0" height="0" type="application/x-shockwave-flash" swliveconnect="true" allowscriptaccess="sameDomain" menu="false" flashvars="sFile=static/pack/chat/player/' + fname + ".mp3?" + Math.random() + '" src="static/pack/chat/player/sound.swf" />';
};
var updateavatar = function () {
    $("#list_reload").click();
    layer.closeAll();
};
var f_getURL = function () {
    return "source/pack/chat/saverecord.php";
};
var f_getMAX = function () {
    return 60;
};
var f_getMIN = function () {
    return 3;
};
var f_complete = function (filename) {
    if (filename == "error") {
        $("#textarea").val($("#textarea").val() + "[语音保存失败]");
    } else {
        $("#textarea").val($("#textarea").val() + "[record:" + filename.substr(9, filename.length - 13) + "]");
    }
    $("#textarea").focus();
    $(".wl_faces_box8").hide();
};
var isIE = function () {
    if (!!window.ActiveXObject || "ActiveXObject" in window) {
        return true;
    } else {
        return false;
    }
};
var createAjax = function () {
    var xhr = null;
    try {
        xhr = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {
            xhr = new XMLHttpRequest();
        }
    }
    return xhr;
};
var ajax = function (conf) {
    var type = conf.type;
    var url = conf.url;
    var data = conf.data;
    var dataType = conf.dataType;
    var success = conf.success;
    if (type == null) {
        type = "get";
    }
    if (dataType == null) {
        dataType = "text";
    }
    var xhr = createAjax();
    xhr.open(type, url, true);
    if (!isIE()) {
        xhr.withCredentials = true;
    }
    if (type == "GET" || type == "get") {
        xhr.send(null);
    } else {
        if (type == "POST" || type == "post") {
            xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
            xhr.send(data);
        }
    }
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            if (dataType == "text" || dataType == "TEXT") {
                if (success != null) {
                    success(xhr.responseText);
                }
            } else {
                if (dataType == "xml" || dataType == "XML") {
                    if (success != null) {
                        success(xhr.responseXML);
                    }
                } else {
                    if (dataType == "jsonp" || dataType == "JSONP") {
                        if (success != null) {
                            success(eval("(" + xhr.responseText + ")"));
                        }
                    }
                }
            }
        } else {
            if (xhr.readyState == 4 && xhr.status != 200) {
            }
        }
    };
};
var listenMsg = {
    nid: 0, mid: 0, gid: 0, queryUrl: in_ssl + "://" + in_server + "/source/pack/api/chat/", stop: function () {
        clearTimeout(listenMsg.nid);
        listenMsg.nid = 0;
        clearTimeout(listenMsg.mid);
        listenMsg.mid = 0;
        clearTimeout(listenMsg.gid);
        listenMsg.gid = 0;
        $(".message_box").text("");
    }, start: function (_uid, _type, _do) {
        ajax({
            type: "get",
            url: listenMsg.queryUrl + "start.php?type=" + _type + "&do=" + _do + "&uid=" + _uid,
            dataType: "jsonp",
            success: function (data) {
                if (data["start"] == -1) {
                    listenMsg.stop();
                    $("#send_tips").text("您已退出应用中心");
                    $(".chat03_content li b").text("");
                    $(".chat03_content li label").removeClass("online offline").addClass("offline");
                    if ($("#list_reload").hasClass("chat02_title_t")) {
                        $("#list_reload").removeClass("chat02_title_t").addClass("chat002_title_t");
                    }
                } else {
                    if (_type == "msg") {
                        clearTimeout(listenMsg.mid);
                        clearTimeout(listenMsg.gid);
                        if (isNaN(data["start"])) {
                            $(".close_btn").html("<span>" + getplayer("send") + "</span>");
                            $(".message_box").append(data["start"]);
                            $(".chat01_content").scrollTop($(".message_box")[0].scrollHeight);
                        }
                        listenMsg.mid = setTimeout("listenMsg.start(" + _uid + ", '" + _type + "', 0);", data["sleep"]);
                    } else {
                        if (data["status"] > 0) {
                            if ($("#uid_" + _uid + " label").hasClass("offline")) {
                                $("#uid_" + _uid + " label").html("<span>" + getplayer("online") + "</span>");
                                $("#uid_" + _uid + " label").removeClass("offline").addClass("online");
                            }
                        } else {
                            if ($("#uid_" + _uid + " label").hasClass("online")) {
                                $("#uid_" + _uid + " label").removeClass("online").addClass("offline");
                            }
                        }
                        if (data["start"] > 0) {
                            $("#uid_" + _uid + " b").html(data["start"] + "<span>" + getplayer("msg") + "</span>");
                            $(".chat03_content").animate({scrollTop: $("#uid_" + _uid).offset().top - $(".chat03_content").offset().top}, 100);
                        } else {
                            $("#uid_" + _uid + " b").text("");
                        }
                        listenMsg.nid = setTimeout("listenMsg.start(" + _uid + ", '" + _type + "', 0);", data["sleep"]);
                    }
                }
            }
        });
    }, group: function (_num) {
        ajax({
            type: "get",
            url: listenMsg.queryUrl + "group.php?num=" + _num,
            dataType: "jsonp",
            success: function (data) {
                if (data["group"] != -1) {
                    clearTimeout(listenMsg.gid);
                    if (data["num"] > _num) {
                        $(".close_btn").html("<span>" + getplayer("send") + "</span>");
                        $(".talkTo").attr("num", data["num"]);
                        $(".message_box").append(data["group"]);
                        $(".chat01_content").scrollTop($(".message_box")[0].scrollHeight);
                    }
                    listenMsg.gid = setTimeout("listenMsg.group(" + data["num"] + ");", data["sleep"]);
                }
            }
        });
    }, login: function () {
        $(".chat03_content").html('<img src="static/admincp/image/loading.gif">');
        if (isIE()) {
            $("#send_tips").text("工具->Internet 选项->安全->自定义级别->其他->通过域访问数据源->启用");
        }
        ajax({
            type: "get", url: listenMsg.queryUrl + "login.php" + in_info, dataType: "jsonp", success: function (data) {
                if (data["uid"] == -1) {
                    $("#send_tips").text("您的应用中心帐号已经被锁定，请咨询官方人员！");
                } else {
                    listenMsg.stop();
                    listenMsg.group($(".talkTo").attr("num"));
                    listenMsg.list(data["uid"]);
                    $(".talkTo").attr("verify", data["verify"]);
                    $(".talkTo a").text("公共频道");
                    $(".talkTo a").attr("uid", 0);
                    $("#send_tips").text("按 Enter 键快捷发送");
                    if ($("#list_reload").hasClass("chat002_title_t")) {
                        $("#list_reload").removeClass("chat002_title_t").addClass("chat02_title_t");
                    }
                    if ($("#_bar", window.parent.document)) {
                        $("#_bar", window.parent.document).css("background-image", "url(" + data["avatar"] + ")");
                    }
                }
            }
        });
    }, list: function (_uid) {
        ajax({
            type: "get",
            url: listenMsg.queryUrl + "list.php?uid=" + _uid,
            dataType: "jsonp",
            success: function (data) {
                $(".chat03_content").html(data["list"]);
                jQuery.getScript("static/pack/chat/js/menu.js", function () {
                    $(".chat03_content li").contextMenu("menu_list", {
                        bindings: {
                            space: function (t) {
                                window.open("http://" + t.title);
                            }, lock: function (t) {
                                lib.away(t.id.substr(4));
                            }
                        }
                    });
                });
            }
        });
    }, lock: function (_id) {
        ajax({
            type: "get",
            url: listenMsg.queryUrl + "lib.php/lock?id=" + _id,
            dataType: "jsonp",
            success: function (data) {
                if (data["lock"] == -1) {
                    layer.msg("请先登录管理中心！", 3, 11);
                } else if (data["lock"] == -2) {
                    layer.msg("请先登录应用中心！", 3, 11);
                } else if (data["lock"] == -3) {
                    layer.msg("站长不存在或已被管理员锁定！", 3, 11);
                } else if (data["lock"] == -4) {
                    layer.msg("您不能锁定自己！", 3, 8);
                } else {
                    layer.msg("恭喜，锁定站长成功！", 3, 1);
                    setTimeout("$('#list_reload').click();", 3e3);
                }
            }
        });
    }, first: function (_pswd) {
        if (_pswd.length < 6) {
            layer.msg("设置密码长度最短为6位！", 3, 8);
            return;
        }
        ajax({
            type: "get",
            url: listenMsg.queryUrl + "lib.php/first?pswd=" + escape(_pswd),
            dataType: "jsonp",
            success: function (data) {
                if (data["first"] == -1) {
                    layer.msg("请先登录应用中心！", 3, 11);
                } else if (data["first"] == -2) {
                    layer.msg("您已经设置过密码！", 3, 11);
                } else {
                    $(".talkTo").attr("verify", data["first"]);
                    layer.msg("密码设置成功，请继续您的操作！", 3, 1);
                }
            }
        });
    }, verify: function (_pswd) {
        ajax({
            type: "get",
            url: listenMsg.queryUrl + "lib.php/verify?pswd=" + escape(_pswd),
            dataType: "jsonp",
            success: function (data) {
                if (data["verify"] == -1) {
                    layer.msg("请先登录应用中心！", 3, 11);
                } else if (data["verify"] == -2) {
                    lib.reset();
                } else {
                    $(".talkTo").attr("verify", data["verify"]);
                    layer.msg("密码校验成功，请继续您的操作！", 3, 1);
                }
            }
        });
    }, game: function (_mid, _tid) {
        ajax({
            type: "get",
            url: in_ssl + "://" + in_server + "/source/pack/api/poker/enterTable.php?tableID=" + _tid,
            dataType: "text",
            success: function (data) {
                if (data == "failure") {
                    layer.tips("房间人数已满员！", "#" + _mid, {
                        style: ["background-color:#FF8901;color:#fff", "#FF8901"],
                        maxWidth: 185,
                        time: 3,
                        closeBtn: [0, true]
                    });
                } else {
                    lib.poker();
                }
            }
        });
    }, send: function () {
        if ($("#textarea").val() == "") {
            $("#textarea").focus();
            return;
        }
        ajax({
            type: "get",
            url: listenMsg.queryUrl + "send.php?text=" + escape($("#textarea").val()) + "&uname=" + $(".talkTo a").text() + "&uid=" + $(".talkTo a").attr("uid"),
            dataType: "jsonp",
            success: function (data) {
                if (data["send"] == -1) {
                    $("#send_tips").text("请先登录应用中心");
                } else if (data["send"] == -2) {
                    layer.prompt({title: "发送消息前，请先设置密码"}, function (_pswd) {
                        listenMsg.first(_pswd);
                    });
                } else if (data["send"] == -3) {
                    layer.prompt({title: "发送消息前，请先校验密码"}, function (_pswd) {
                        listenMsg.verify(_pswd);
                    });
                } else {
                    $("#textarea").val("");
                    if ($(".talkTo a").attr("uid") > 0) {
                        listenMsg.start($(".talkTo a").attr("uid"), "msg", 1);
                    } else {
                        listenMsg.group($(".talkTo").attr("num"));
                    }
                }
            }
        });
    }
};
(function () {
    lib = {
        press: function (_type, _id, _class) {
            var key = navigator.appName == "Netscape" ? event.which : window.event.keyCode;
            if (_type == "send" && key == 13) {
                listenMsg.send();
            } else if (_type == "value" && key == 27) {
                var val = _id == "_img" ? "[img]" + $("#_img").val() + "[/img]" : "[flash]" + $("#_flash").val() + "[/flash]";
                $("#textarea").val($("#textarea").val() + val);
                $("#textarea").focus();
                $("." + _class).hide();
            }
        }, disturb: function (_mode) {
            if (_mode > 0) {
                $("#list_reload").click();
                $("#set_disturb").attr("title", "开启免打扰");
                $("#set_disturb").attr("onclick", "lib.disturb(0)");
                $("#set_disturb").css("background", "url('static/pack/chat/icon/disturb.png') no-repeat 10px 8px");
                layer.tips("已关闭免打扰模式！", "#set_disturb", {
                    style: ["background-color:#FF8901;color:#fff", "#FF8901"],
                    maxWidth: 185,
                    time: 1
                });
            } else {
                listenMsg.stop();
                $("#set_disturb").attr("title", "关闭免打扰");
                $("#set_disturb").attr("onclick", "lib.disturb(1)");
                $("#set_disturb").css("background", "url('static/pack/chat/icon/nodisturb.png') no-repeat 10px 8px");
                layer.tips("已开启免打扰模式！", "#set_disturb", {
                    style: ["background-color:#99C521;color:#fff", "#99C521"],
                    maxWidth: 185,
                    closeBtn: [0, true]
                });
            }
        }, away: function (_id) {
            $.layer({
                shade: [0],
                area: ["auto", "auto"],
                dialog: {
                    msg: "确认要通过锁定来踢出该站长？", btns: 2, type: 4, btn: ["确认", "取消"], yes: function () {
                        listenMsg.lock(_id);
                    }, no: function () {
                        layer.msg("已取消锁定", 1, 0);
                    }
                }
            });
        }, reset: function () {
            $.layer({
                shade: [0],
                area: ["auto", "auto"],
                dialog: {
                    msg: "密码有误，是否重置密码？", btns: 2, type: 4, btn: ["确认", "取消"], yes: function () {
                        window.open(in_ssl + "://" + in_server + "/index/setting/resetpw/");
                    }, no: function () {
                        layer.msg("已取消重置", 1, 0);
                    }
                }
            });
        }, avatar: function () {
            $.layer({
                type: 1,
                title: "更新头像",
                area: ["auto", "auto"],
                page: {html: '<embed src="' + in_ssl + "://" + in_server + "/static/pack/upload/camera.swf?ucapi=" + in_avatar + "&input=uid%3D" + $(".talkTo").attr("verify") + '" width="459" height="266" wmode="transparent" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>'}
            });
        }, poker: function () {
            $.layer({
                type: 2,
                shade: [0],
                maxmin: true,
                title: "斗地主",
                area: ["826px", "549px"],
                iframe: {src: in_ssl + "://" + in_server + "/source/pack/api/poker/game.php", scrolling: "no"}
            });
        }, shake: function (_size, _time, _id, _speed) {
            if ($("#_dialog", window.parent.document) && $("#_dialog", window.parent.document).is(":hidden")) {
                $("#_dialog", window.parent.document).show();
            }
            $(".close_btn").html("<span>" + getplayer("shake") + "</span>");
            var len = _size, c = _time, step = 0, shake = $("#" + _id), off = shake.offset();
            this.step = 0;
            timer = setInterval(function () {
                var set = lib.pos();
                shake.offset({top: off.top + set.y * len, left: off.left + set.x * len});
                if (step++ >= c) {
                    shake.offset({top: off.top, left: off.left});
                    clearInterval(timer);
                }
            }, _speed);
        }, pos: function () {
            this.step = this.step ? this.step : 0;
            this.step = this.step == 4 ? 0 : this.step;
            var set = {0: {x: 0, y: -1}, 1: {x: -1, y: 0}, 2: {x: 0, y: 1}, 3: {x: 1, y: 0}};
            return set[this.step++];
        }
    };
})();
$(document).ready(function () {
    $("body").delegate(".chat03_content li", "mouseover", function () {
        $(this).addClass("hover").siblings().removeClass("hover");
    });
    $("body").delegate(".chat03_content li", "mouseout", function () {
        $(this).removeClass("hover").siblings().removeClass("hover");
    });
    $("body").delegate(".chat03_content li", "click", function () {
        $(this).addClass("choosed").siblings().removeClass("choosed");
        $(".talkTo a").text($(this).children(".chat03_name").text());
        $(".talkTo a").attr("uid", $(this).children(".chat03_name").attr("uid"));
        $(".message_box").text("");
        listenMsg.start($(this).children(".chat03_name").attr("uid"), "msg", 2);
    });
    $("#_emoji").mouseover(function () {
        $(this).removeClass("ctb00").addClass("ctb01");
        $(".wl_faces_box").show();
    }).mouseout(function () {
        $(this).removeClass("ctb01").addClass("ctb00");
        $(".wl_faces_box").hide();
    });
    $("#_record").mouseover(function () {
        $(this).removeClass("ctb07").addClass("ctb08");
        $(".wl_faces_box8").show();
    }).mouseout(function () {
        $(this).removeClass("ctb08").addClass("ctb07");
        $(".wl_faces_box8").hide();
    });
    $(".ctb02").mouseover(function () {
        $(".wl_faces_box2").show();
    }).mouseout(function () {
        $(".wl_faces_box2").hide();
    });
    $(".ctb03").mouseover(function () {
        $(".wl_faces_box3").show();
    }).mouseout(function () {
        $(".wl_faces_box3").hide();
    });
    $("#_shake").mouseover(function () {
        $(this).removeClass("ctb04").addClass("ctb05");
    }).mouseout(function () {
        $(this).removeClass("ctb05").addClass("ctb04");
    });
    $("#_shake").click(function () {
        $("#textarea").val($("#textarea").val() + "[event:shake]");
        $("#textarea").focus();
    });
    $("#_upload").mouseover(function () {
        $(this).removeClass("ctb09").addClass("ctb10");
    }).mouseout(function () {
        $(this).removeClass("ctb10").addClass("ctb09");
    });
    $(".ctb06").click(function () {
        if ($(".talkTo").attr("verify") == "8f00b204e9800998") {
            layer.prompt({title: "更新头像前，请先设置密码"}, function (_pswd) {
                listenMsg.first(_pswd);
            });
        } else if ($(".talkTo").attr("verify").match(/\:/)) {
            lib.avatar();
        } else {
            layer.prompt({title: "更新头像前，请先校验密码"}, function (_pswd) {
                listenMsg.verify(_pswd);
            });
        }
    });
    $(".ctb11").click(function () {
        lib.poker();
    });
    $(".chat02_title_l").click(function () {
        $(".talkTo").attr("num", 0);
        $("#list_reload").click();
    });
    $(".wl_faces_box").mouseover(function () {
        $("#_emoji").removeClass("ctb00").addClass("ctb01");
        $(this).show();
    }).mouseout(function () {
        $("#_emoji").removeClass("ctb01").addClass("ctb00");
        $(this).hide();
    });
    $(".wl_faces_box8").mouseover(function () {
        $("#_record").removeClass("ctb07").addClass("ctb08");
        $(this).show();
    }).mouseout(function () {
        $("#_record").removeClass("ctb08").addClass("ctb07");
        $(this).hide();
    });
    $(".wl_faces_box2").mouseover(function () {
        $(this).show();
    }).mouseout(function () {
        $(this).hide();
    });
    $(".wl_faces_box3").mouseover(function () {
        $(this).show();
    }).mouseout(function () {
        $(this).hide();
    });
    $(".wl_faces_close").click(function () {
        $(".wl_faces_box").hide();
    });
    $(".wl_faces_close8").click(function () {
        $(".wl_faces_box8").hide();
    });
    $(".wl_faces_close2").click(function () {
        $(".wl_faces_box2").hide();
    });
    $(".wl_faces_close3").click(function () {
        $(".wl_faces_box3").hide();
    });
    $(".close_btn").click(function () {
        $(".message_box").text("");
    });
    $("#list_reload").click(function () {
        listenMsg.login();
    });
    $(".wl_faces_main img").click(function () {
        var i = $(this).attr("src");
        $("#textarea").val($("#textarea").val() + "[emoji:" + i.substr(i.indexOf("emoji/") + 10, 2) + "]");
        $("#textarea").focus();
        $(".wl_faces_box").hide();
    });
});