<?php
/*
 �������� PHP������ܹ��� Xend [רҵ��](Build 5.05.56) ����
 ����ʱ�� 2020-08-14 11:21:07
 ����֧�� QQ:30370740 Mail:support@phpXend.com
 �Ͻ������롢������κ���ʽ����Ȩ��Ϊ��Υ�߽�׷����������
*/

echo "<link rel=\"stylesheet\" href=\"/static/pack/kindeditor/themes/default/default.css\"/>
<script charset=\"utf-8\" src=\"/static/pack/kindeditor/kindeditor-all-min.js\"></script>
<script charset=\"utf-8\" src=\"/static/pack/kindeditor/lang/zh-CN.js\"></script>
<script>
    var editor;
    KindEditor.ready(function (K) {
        editor = K.create('textarea[name=\"content\"]', {
            // allowFileManager: true,
            uploadJson: '/upload/index/kindeditor',
            themeType: 'simple',
            afterBlur: function () {
                this.sync();
            }
        });
    });
</script>";
?>