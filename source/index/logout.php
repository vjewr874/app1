<?php
/*
 �������� PHP������ܹ��� Xend [רҵ��](Build 5.05.56) ����
 ����ʱ�� 2020-08-31 21:57:37
 ����֧�� QQ:30370740 Mail:support@phpXend.com
 �Ͻ������롢������κ���ʽ����Ȩ��Ϊ��Υ�߽�׷����������
*/

namespace app\index;class logout extends BaseUser{function index(){$꘭����="time";$YudeFvP0=$꘭����();$YudvPZ3=$YudeFvP0-1;setcookie('in_userid','',$YudvPZ3,IN_PATH);$�������="time";$YudeFvP0=$�������();$YudvPZ3=$YudeFvP0-1;setcookie('in_username','',$YudvPZ3,IN_PATH);$�����="time";$YudeFvP0=$�����();$YudvPZ3=$YudeFvP0-1;setcookie('in_userpassword','',$YudvPZ3,IN_PATH);redirect('/index/login');}}
?>