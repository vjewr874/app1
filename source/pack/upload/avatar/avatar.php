<?php

include '../../../system/db.class.php';
if (!empty($_FILES)) {
    $filepart = pathinfo($_FILES['avatar']['name']);
    if (in_array(strtolower($filepart['extension']), array('jpg', 'jpeg', 'gif', 'png'))) {
        $type = $_POST['type'];
        $upw = SafeSql($_POST['upw']);
        $uid = intval($_POST['uid']);
        if (!db('user')->where('in_userid', $uid)->where('in_userpassword', $upw)->count()) {
            exit('-2');
        }
        if ($type == 'avatar') {
            $path = IN_ROOT . 'data/attachment/avatar/' . $uid;
            @move_uploaded_file($_FILES['avatar']['tmp_name'], $path . '.jpg');
        } elseif (in_array($type, array('prev', 'after', 'hand'))) {
            $dir = IN_ROOT . 'data/tmp/';
            if (!is_dir($dir)) {
                @mkdir($dir, 0777, true);
            }
            @move_uploaded_file($_FILES['avatar']['tmp_name'], $dir . $uid . '-' . $type . '.jpg');
        }
        echo '1';
    } else {
        echo '-1';
    }
}