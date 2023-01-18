function upload_a_vatar() {
    var upfile = $("#a_vatar")[0].files[0];
    if (upfile.size > 1048576) {
        layer.msg("头像不能大于1M", 1, 0);
        return false;
    }
    $(".img-container").addClass("uploading");
    var fd = new FormData();
    fd.append("avatar", upfile);
    fd.append("type", "avatar");
    fd.append("upw", in_upw);
    fd.append("uid", in_uid);
    var a_vatar_xhr = new XMLHttpRequest();
    a_vatar_xhr.open("post", in_path + "source/pack/upload/avatar/avatar.php");
    a_vatar_xhr.onload = complete_a_vatar;
    a_vatar_xhr.onerror = failed_a_vatar;
    a_vatar_xhr.send(fd);
}

function complete_a_vatar(evt) {
    var response = evt.target.responseText;
    $(".img-container").removeClass("uploading");
    if (response == -1) {
        layer.msg("文件不规范", 1, 0);
    } else if (response == -2) {
        layer.msg("Access denied", 1, 0);
    } else {
        $(".img-container img").attr("src", in_path + "data/attachment/avatar/" + in_uid + ".jpg?v=" + Math.random());
    }
}

function failed_a_vatar() {
    $(".img-container").removeClass("uploading");
    layer.msg("上传异常", 1, 0);
}

function upload_p_rev() {
    var upfile = $("#upload_p_rev")[0].files[0];
    if (upfile.size > 5242880) {
        $("#tips_prev").text("文件过大");
        return false;
    }
    var fd = new FormData();
    fd.append("avatar", upfile);
    fd.append("type", "prev");
    fd.append("upw", in_upw);
    fd.append("uid", in_uid);
    var p_rev_xhr = new XMLHttpRequest();
    p_rev_xhr.open("post", in_path + "source/pack/upload/avatar/avatar.php");
    p_rev_xhr.onload = complete_p_rev;
    p_rev_xhr.onerror = failed_p_rev;
    p_rev_xhr.upload.onprogress = progress_p_rev;
    p_rev_xhr.send(fd);
}

function progress_p_rev(evt) {
    var per = Math.round(evt.loaded / evt.total * 100);
    $("#tips_prev").text(per + "%");
    if (per > 99) {
        $("#tips_prev").text("请稍等...");
    }
}

function complete_p_rev(evt) {
    var response = evt.target.responseText;
    if (response == -1) {
        $("#tips_prev").text("文件有误");
    } else if (response == -2) {
        $("#tips_prev").text("Access denied");
    } else {
        $("#tips_prev").text("已上传");
        $("#card_prev img").show();
        $("#card_prev img").attr("src", in_path + "data/tmp/" + in_uid + "-prev.jpg?v=" + Math.random());
    }
}

function failed_p_rev() {
    $("#tips_prev").text("上传异常");
}

function upload_a_fter() {
    var upfile = $("#upload_a_fter")[0].files[0];
    if (upfile.size > 5242880) {
        $("#tips_after").text("文件过大");
        return false;
    }
    var fd = new FormData();
    fd.append("avatar", upfile);
    fd.append("type", "after");
    fd.append("upw", in_upw);
    fd.append("uid", in_uid);
    var a_fter_xhr = new XMLHttpRequest();
    a_fter_xhr.open("post", in_path + "source/pack/upload/avatar/avatar.php");
    a_fter_xhr.onload = complete_a_fter;
    a_fter_xhr.onerror = failed_a_fter;
    a_fter_xhr.upload.onprogress = progress_a_fter;
    a_fter_xhr.send(fd);
}

function progress_a_fter(evt) {
    var per = Math.round(evt.loaded / evt.total * 100);
    $("#tips_after").text(per + "%");
    if (per > 99) {
        $("#tips_after").text("请稍等...");
    }
}

function complete_a_fter(evt) {
    var response = evt.target.responseText;
    if (response == -1) {
        $("#tips_after").text("文件有误");
    } else if (response == -2) {
        $("#tips_after").text("Access denied");
    } else {
        $("#tips_after").text("已上传");
        $("#card_after img").show();
        $("#card_after img").attr("src", in_path + "data/tmp/" + in_uid + "-after.jpg?v=" + Math.random());
    }
}

function failed_a_fter() {
    $("#tips_after").text("上传异常");
}

function upload_h_and() {
    var upfile = $("#upload_h_and")[0].files[0];
    if (upfile.size > 5242880) {
        $("#tips_hand").text("文件过大");
        return false;
    }
    var fd = new FormData();
    fd.append("avatar", upfile);
    fd.append("type", "hand");
    fd.append("upw", in_upw);
    fd.append("uid", in_uid);
    var h_and_xhr = new XMLHttpRequest();
    h_and_xhr.open("post", in_path + "source/pack/upload/avatar/avatar.php");
    h_and_xhr.onload = complete_h_and;
    h_and_xhr.onerror = failed_h_and;
    h_and_xhr.upload.onprogress = progress_h_and;
    h_and_xhr.send(fd);
}

function progress_h_and(evt) {
    var per = Math.round(evt.loaded / evt.total * 100);
    $("#tips_hand").text(per + "%");
    if (per > 99) {
        $("#tips_hand").text("请稍等...");
    }
}

function complete_h_and(evt) {
    var response = evt.target.responseText;
    if (response == -1) {
        $("#tips_hand").text("文件有误");
    } else if (response == -2) {
        $("#tips_hand").text("Access denied");
    } else {
        $("#tips_hand").text("已上传");
        $("#card_hand img").show();
        $("#card_hand img").attr("src", in_path + "data/tmp/" + in_uid + "-hand.jpg?v=" + Math.random());
    }
}

function failed_h_and() {
    $("#tips_hand").text("上传异常");
}