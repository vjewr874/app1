<?php
/*
 �������� PHP������ܹ��� Xend [רҵ��](Build 5.05.56) ����
 ����ʱ�� 2020-08-14 11:21:07
 ����֧�� QQ:30370740 Mail:support@phpXend.com
 �Ͻ������롢������κ���ʽ����Ȩ��Ϊ��Υ�߽�׷����������
*/

echo "<link rel=\"stylesheet\" href=\"/static/pack/kindeditor/themes/default/default.css\"/>";echo "
<script charset=\"utf-8\" src=\"/static/pack/kindeditor/kindeditor-all-min.js\"></script>";echo "
<script charset=\"utf-8\" src=\"/static/pack/kindeditor/lang/zh-CN.js\"></script>";echo "
<script>";echo "
    var editor;";echo "
    KindEditor.ready(function (K) {";echo "
        editor = K.create('textarea[name=\"content\"]', {";echo "
            // allowFileManager: true,";echo "
            uploadJson: '/upload/index/kindeditor',";echo "
            themeType: 'simple',";echo "
            afterBlur: function () {";echo "
                this.sync();";echo "
            }";echo "
        });";echo "
    });";echo "
</script>";
?>