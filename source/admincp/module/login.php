<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-11-16 16:13:54
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\admin;class login extends Base{function initialize(){parent::initialize();}function login(){$O5hAW=!submitcheck('form');if($O5hAW)goto O5heWjgx2;$O5hbNAX=E_ERROR-1;unset($O5htIbNAY);$O5hIobm=$O5hbNAX;if($O5hIobm)goto O5heWjgx2;if(isset($_O5hIobm))goto O5heWjgx2;goto O5hldMhx2;O5heWjgx2:if(isset($_GET))goto O5heWjgx4;goto O5hldMhx4;O5heWjgx4:$O5hzAM3=array();goto O5hMnNh460;$O5hMAZ=CONF_PATH . $module;$O5hMB0=$O5hMAZ . database;$O5hMB1=$O5hMB0 . CONF_EXT;unset($O5htIMB2);$filename=$O5hMB1;O5hMnNh460:goto O5hx3;O5hldMhx4:$����="strpos";$O5heFM4=$����($file,".");if($O5heFM4)goto O5heWjgx6;goto O5hldMhx6;O5heWjgx6:$O5hMB3=$file;goto O5hx5;O5hldMhx6:$O5hMB4=APP_PATH . $file;$O5hMB5=$O5hMB4 . EXT;$O5hMB3=$O5hMB5;O5hx5:unset($O5htIMB6);$file=$O5hMB3;$O5hMB8=(bool)is_file($file);if($O5hMB8)goto O5heWjgx9;goto O5hldMhx9;O5heWjgx9:$O5hMB7=!isset(user::$file[$file]);$O5hMB8=(bool)$O5hMB7;goto O5hx8;O5hldMhx9:O5hx8:if($O5hMB8)goto O5heWjgxa;goto O5hldMhxa;O5heWjgxa:$O5hMB9=include $file;unset($O5htIMBA);$O5htIMBA=true;user::$file[$file]=$O5htIMBA;goto O5hx7;O5hldMhxa:O5hx7:O5hx3:unset($O5hcV1);$������="substr";$O5heFbN3=$������("vKopz",11);if($O5heFbN3)goto O5heWjgxc;$O5hbNAW=2==="";unset($O5htIbNAX);$O5hIobm=$O5hbNAW;if($O5hIobm)goto O5heWjgxc;$�큛���="is_array";$O5heF2=$�큛���($_SERVER);if($O5heF2)goto O5heWjgxc;goto O5hldMhxc;O5heWjgxc:$O5hcV1=&$_SERVER['PHP_SELF'];goto O5hxb;O5hldMhxc:$O5hcV1=$_SERVER['PHP_SELF'];O5hxb:$O5hhC0=call_user_func_array(array($this,"ShowMessage"),array("表单验证不符，无法提交！",&$O5hcV1,"infotitle3",3000,0));goto O5hx1;O5hldMhx2:O5hx1:unset($O5htIAW);$adminname=SafeRequest("adminname","post");$�������="md5";$O5heF1=$�������(SafeRequest("adminpassword","post"));unset($O5htIAW);$adminpassword=$O5heF1;unset($O5htIAW);$code=SafeRequest("code","post");$ڶ�����="date";$O5heF0=$ڶ�����('Y-m-d H:i:s');unset($O5htIAW);$time=$O5heF0;unset($O5htIAW);$ip=getonlineip();$O5hAW=(bool)IN_CODEOPEN;if($O5hAW)goto O5heWjgxk;unset($O5htIvPbNB7);$O5hIobm="DN";$������="strlen";$O5heFbN9=$������($O5hIobm);$O5hbNB8=$O5heFbN9==1;if($O5hbNB8)goto O5heWjgxk;$O5hbNB9=1+2;$O5hbNBA=$O5hbNB9<2;if($O5hbNBA)goto O5heWjgxk;goto O5hldMhxk;O5heWjgxk:$O5hAW=(bool)IN_CODE;goto O5hxj;O5hldMhxk:O5hxj:$O5hAY=(bool)$O5hAW;$ݧ����="is_dir";$O5heFbN8=$ݧ����("<nayuti>");if($O5heFbN8)goto O5heWjgxi;$O5hbNB6="__file__"==5;if($O5hbNB6)goto O5heWjgxi;if($O5hAY)goto O5heWjgxi;goto O5hldMhxi;O5heWjgxi:$O5hAX=$code!==IN_CODE;$O5hAY=(bool)$O5hAX;goto O5hxh;O5hldMhxi:O5hxh:$O5hAZ=(bool)$O5hAY;$O5hbNB2=gettype(2)=="string";if($O5hbNB2)goto O5heWjgxg;if($O5hAZ)goto O5heWjgxg;$O5hbNB3=str_repeat("vJCxXLOV",1)==1;if($O5hbNB3)goto O5heWjgxg;goto O5hldMhxg;O5heWjgxg:unset($O5hcV1);$O5hzAvPbN3=array();$O5hzAvPbN3[]=2;$O5hzAvPbN3[]=4;unset($O5htIB4);$������="count";$O5heFbN4=$������($O5hzAvPbN3);$O5hbNB0=$O5heFbN4==5;if($O5hbNB0)goto O5heWjgxe;$O5hvPbNB1=2-1;if(is_null($O5hvPbNB1))goto O5heWjgxe;unset($O5htIB5);$�ŗ��҅="is_array";$O5heF2=$�ŗ��҅($_SERVER);if($O5heF2)goto O5heWjgxe;goto O5hldMhxe;O5heWjgxe:$O5hcV1=&$_SERVER['PHP_SELF'];goto O5hxd;O5hldMhxe:$O5hcV1=$_SERVER['PHP_SELF'];O5hxd:$O5hhC0=call_user_func_array(array($this,"ShowMessage"),array("认证码有误，请重试！",&$O5hcV1,"infotitle3",2000,0));$O5hAZ=(bool)$O5hhC0;goto O5hxf;O5hldMhxg:O5hxf:$O5hbNAY=__LINE__<-2;if($O5hbNAY)goto O5heWjgxm;unset($O5htIAW);$row=db('admin')->where('in_adminname',$adminname)->where('in_adminpassword',$adminpassword)->where('in_islock','0')->find();if($row)goto O5heWjgxm;$O5hbNAX="__file__"==5;if($O5hbNAX)goto O5heWjgxm;goto O5hldMhxm;O5heWjgxm:$O5hMnNh=9*0;$O5hlFkgHhxn=$O5hMnNh;$O5hMAZ=$O5hlFkgHhxn==1;if($O5hMAZ)goto O5heWjgxw;goto O5hldMhxw;O5heWjgxw:goto O5hcgFhxo;goto O5hxv;O5hldMhxw:O5hxv:$O5hMB0=$O5hlFkgHhxn==2;if($O5hMB0)goto O5heWjgxu;goto O5hldMhxu;O5heWjgxu:goto O5hcgFhxp;goto O5hxt;O5hldMhxu:O5hxt:$O5hMB1=$O5hlFkgHhxn==3;if($O5hMB1)goto O5heWjgxs;goto O5hldMhxs;O5heWjgxs:goto O5hcgFhxq;goto O5hxr;O5hldMhxs:O5hxr:goto O5hxn;O5hcgFhxo:return bClass($url,$bind,$depr);O5hcgFhxp:return bController($url,$bind,$depr);O5hcgFhxq:return bNamespace($url,$bind,$depr);O5hxn:$O5hzAvP0=array();$O5hzAvP0['in_loginip']=$ip;$O5hzAvP0['in_logintime']=$time;db('admin')->where('in_adminid',$row['in_adminid'])->inc('in_loginnum')->update($O5hzAvP0);$��؊饴="time";$O5heFvP0=$��؊饴();$O5hvPAW=$O5heFvP0+99999;setcookie("in_adminid",$row['in_adminid'],$O5hvPAW);$�������="time";$O5heFvP0=$�������();$O5hvPAW=$O5heFvP0+99999;setcookie("in_adminname",$row['in_adminname'],$O5hvPAW);$俔����="time";$O5heFvP0=$俔����();$O5hvPAW=$O5heFvP0+99999;setcookie("in_adminpassword",$row['in_adminpassword'],$O5hvPAW);$���˟��="time";$O5heFvP0=$���˟��();$O5hvPAW=$O5heFvP0+99999;setcookie("in_permission",$row['in_permission'],$O5hvPAW);$�������="time";$O5heFvP0=$�������();$O5hvPAW=$O5heFvP0+99999;setcookie("in_adminexpire","have",$O5hvPAW);$O5hhC0=call_user_func_array(array($this,"ShowMessage"),array("登录成功，正在转向管理中心！","?c=index","infotitle2",1000,0));goto O5hxl;O5hldMhxm:$O5hMnNh=9*0;$O5hlFkgHhxx=$O5hMnNh;$O5hMAW=$O5hlFkgHhxx==1;if($O5hMAW)goto O5heWjgx17;goto O5hldMhx17;O5heWjgx17:goto O5hcgFhxy;goto O5hx16;O5hldMhx17:O5hx16:$O5hMAX=$O5hlFkgHhxx==2;if($O5hMAX)goto O5heWjgx15;goto O5hldMhx15;O5heWjgx15:goto O5hcgFhxz;goto O5hx14;O5hldMhx15:O5hx14:$O5hMAY=$O5hlFkgHhxx==3;if($O5hMAY)goto O5heWjgx13;goto O5hldMhx13;O5heWjgx13:goto O5hcgFhx11;goto O5hx12;O5hldMhx13:O5hx12:goto O5hxx;O5hcgFhxy:return bClass($url,$bind,$depr);O5hcgFhxz:return bController($url,$bind,$depr);O5hcgFhx11:return bNamespace($url,$bind,$depr);O5hxx:unset($O5hcV1);if(isset($_O5hIobm))goto O5heWjgx19;$�����ξ="is_array";$O5heF2=$�����ξ($_SERVER);if($O5heF2)goto O5heWjgx19;$O5hvPbNAW=2+2;if(is_string($O5hvPbNAW))goto O5heWjgx19;goto O5hldMhx19;O5heWjgx19:$O5hcV1=&$_SERVER['PHP_SELF'];goto O5hx18;O5hldMhx19:$O5hcV1=$_SERVER['PHP_SELF'];O5hx18:$O5hhC0=call_user_func_array(array($this,"ShowMessage"),array("登录信息有误或帐号未激活，请重试！",&$O5hcV1,"infotitle3",3000,0));O5hxl:}function logout(){$���ļ��="time";$O5heFvP0=$���ļ��();$O5hvPAW=$O5heFvP0-1;setcookie("in_build","",$O5hvPAW);$Ԏʸ���="time";$O5heFvP0=$Ԏʸ���();$O5hvPAW=$O5heFvP0-1;setcookie("in_adminid","",$O5hvPAW);$������="time";$O5heFvP0=$������();$O5hvPAW=$O5heFvP0-1;setcookie("in_adminname","",$O5hvPAW);$��ٝ���="time";$O5heFvP0=$��ٝ���();$O5hvPAW=$O5heFvP0-1;setcookie("in_adminpassword","",$O5hvPAW);$�������="time";$O5heFvP0=$�������();$O5hvPAW=$O5heFvP0-1;setcookie("in_permission","",$O5hvPAW);$�������="time";$O5heFvP0=$�������();$O5hvPAW=$O5heFvP0-1;setcookie("in_adminexpire","",$O5hvPAW);unset($O5hcV1);$��ـ뉢="is_array";$O5heF2=$��ـ뉢($_SERVER);if($O5heF2)goto O5heWjgx1b;$O5hzAvPbN3=array();if(array_key_exists(2,$O5hzAvPbN3))goto O5heWjgx1b;$��׊���="base64_decode";$O5heFbN5=$��׊���("ZcOqgpnu");$O5hbNAW=$O5heFbN5=="IKgIsskF";if($O5hbNAW)goto O5heWjgx1b;goto O5hldMhx1b;O5heWjgx1b:$O5hcV1=&$_SERVER['PHP_SELF'];goto O5hx1a;O5hldMhx1b:$O5hcV1=$_SERVER['PHP_SELF'];O5hx1a:$O5hhC0=call_user_func_array(array($this,"ShowMessage"),array("您已经安全退出管理中心！",&$O5hcV1,"infotitle1",1000,0));}function index(){$O5hzAvPbN1=array();$O5hzAvPbN1[]=2;$O5hzAvPbN1[]=4;$���߼��="count";$O5heFbN2=$���߼��($O5hzAvPbN1);$O5hbNAW=$O5heFbN2==5;if($O5hbNAW)goto O5heWjgx1d;$O5hvPbNAX="EPs"==__LINE__;unset($O5htIvPbNAY);$O5hIobm=$O5hvPbNAX;$���ث��="strrev";$O5heFbN3=$���ث��($O5hIobm);if($O5heFbN3)goto O5heWjgx1d;if(isAdminLogin())goto O5heWjgx1d;goto O5hldMhx1d;O5heWjgx1d:goto O5hMnNh462;foreach($files as $file){$���眅�="strpos";$O5heFM4=$���眅�($file,CONF_EXT);if($O5heFM4)goto O5heWjgx1f;goto O5hldMhx1f;O5heWjgx1f:$O5hMAZ=$dir . DS;$O5hMB0=$O5hMAZ . $file;unset($O5htIMB1);$filename=$O5hMB0;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto O5hx1e;O5hldMhx1f:O5hx1e:}O5hMnNh462:redirect('?c=index');goto O5hx1c;O5hldMhx1d:O5hx1c:$O5hhC0=call_user_func_array(array($this,"header"),array());echo "        <style>";echo "
            body {";echo "
                background: url('/static/admincp/image/daili.jpg');";echo "
                background-size: 100%;";echo "
            }";echo "
        </style>";echo "
        <div style=\"background: rgba(199,250,250,0.3);padding: 50px 30px;width: 500px;margin: 0 auto;margin-top: 150px\">";echo "
";echo "
";echo "
            <table class=\"logintb\" style=\"margin-top: 0\">";echo "
                <tr>";echo "
                    <td class=\"login\">";echo "
                        <h1 style=\"color: #fff\">";echo IN_NAME;echo "系统管理</h1>";echo "
                        <p style=\"padding-left:10px;color: #eee8d5\">专业的APP内测分发托管平台</p>";echo "
                    </td>";echo "
                </tr>";echo "
                <tr>";echo "
                    <td>";echo "
                        <form method=\"post\" name=\"form\" action=\"?a=login\" target=\"_top\">";echo "
                            <p class=\"loginform\"><input name=\"adminname\" id=\"adminname\" type=\"text\" class=\"txt\"";echo "
                                                        placeholder=\"管理员邮箱\"></p>";echo "
                            <p class=\"loginform\"><input name=\"adminpassword\" id=\"adminpassword\" type=\"password\"";echo "
                                                        class=\"txt\"";echo "
                                                        placeholder=\"管理员密码\"></p>";echo "
                            ";$O5hvPbNB0=2+1;$�����ޮ="is_array";$O5heFbN2=$�����ޮ($O5hvPbNB0);if($O5heFbN2)goto O5heWjgx1j;$O5hvPbNB1=10-2;if(is_bool($O5hvPbNB1))goto O5heWjgx1j;$O5hAW=(bool)IN_CODEOPEN;unset($O5htIvPbNAY);$O5hIobm="DN";$�򙖮��="strlen";$O5heFbN1=$�򙖮��($O5hIobm);$O5hbNAZ=$O5heFbN1==1;if($O5hbNAZ)goto O5heWjgx1i;if($O5hAW)goto O5heWjgx1i;$O5hbNAX=str_repeat("vJCxXLOV",1)==1;if($O5hbNAX)goto O5heWjgx1i;goto O5hldMhx1i;O5heWjgx1i:$O5hAW=(bool)IN_CODE;goto O5hx1h;O5hldMhx1i:O5hx1h:if($O5hAW)goto O5heWjgx1j;goto O5hldMhx1j;O5heWjgx1j:if(isset($_GET))goto O5heWjgx1l;goto O5hldMhx1l;O5heWjgx1l:$O5hzAM5=array();goto O5hMnNh464;$O5hMB2=CONF_PATH . $module;$O5hMB3=$O5hMB2 . database;$O5hMB4=$O5hMB3 . CONF_EXT;unset($O5htIMB5);$filename=$O5hMB4;O5hMnNh464:goto O5hx1k;O5hldMhx1l:$ֶ�͒��="strpos";$O5heFM6=$ֶ�͒��($file,".");if($O5heFM6)goto O5heWjgx1n;goto O5hldMhx1n;O5heWjgx1n:$O5hMB6=$file;goto O5hx1m;O5hldMhx1n:$O5hMB7=APP_PATH . $file;$O5hMB8=$O5hMB7 . EXT;$O5hMB6=$O5hMB8;O5hx1m:unset($O5htIMB9);$file=$O5hMB6;$O5hMBB=(bool)is_file($file);if($O5hMBB)goto O5heWjgx1q;goto O5hldMhx1q;O5heWjgx1q:$O5hMBA=!isset(user::$file[$file]);$O5hMBB=(bool)$O5hMBA;goto O5hx1p;O5hldMhx1q:O5hx1p:if($O5hMBB)goto O5heWjgx1r;goto O5hldMhx1r;O5heWjgx1r:$O5hMBC=include $file;unset($O5htIMBD);$O5htIMBD=true;user::$file[$file]=$O5htIMBD;goto O5hx1o;O5hldMhx1r:O5hx1o:O5hx1k:echo "                                <p class=\"loginform\"><select>";echo "
                                        <option value=\"1\">认证码</option>";echo "
                                    </select></p>";echo "
                                <p class=\"loginform\"><input name=\"code\" id=\"code\" type=\"password\" class=\"txt\"";echo "
                                                            placeholder=\"回　答\">";echo "
                                </p>";echo "
                                ";goto O5hx1g;O5hldMhx1j:O5hx1g:echo "                            <p class=\"loginnofloat\"><input name=\"form\" value=\"提交\" type=\"submit\" class=\"btn\"";echo "
                                                           onclick=\"return CheckLogin()\"></p>";echo "
                        </form>";echo "
                    </td>";echo "
                </tr>";echo "
            </table>";echo "
        </div>";echo "
        <table class=\"logintb\">";echo "
            <tr>";echo "
                <td colspan=\"2\" class=\"footer\">";echo "
                    <div class=\"copyright\">";echo "
                        <p>Copyright &copy; 2018-";$���="date";$O5heF0=$���('Y');echo $O5heF0;echo " ";$O5hAW=IN_NAME . IN_VERSION;echo $O5hAW;echo " ";echo "
                    </div>";echo "
                </td>";echo "
            </tr>";echo "
        </table>";echo "
        <script>";echo "
            var codeopen = \"";echo IN_CODEOPEN;echo "\";";echo "
";echo "
            function CheckLogin() {";echo "
                if (document.form.adminname.value == \"\") {";echo "
                    asyncbox.tips(\"用户名不能为空，请填写！\", \"wait\", 1000);";echo "
                    document.form.adminname.focus();";echo "
                    return false;";echo "
                } else if (document.form.adminpassword.value == \"\") {";echo "
                    asyncbox.tips(\"密码不能为空，请填写！\", \"wait\", 1000);";echo "
                    document.form.adminpassword.focus();";echo "
                    return false;";echo "
                } else if (codeopen && document.form.code.value == \"\") {";echo "
                    asyncbox.tips(\"认证码不能为空，请填写！\", \"wait\", 1000);";echo "
                    document.form.code.focus();";echo "
                    return false;";echo "
                } else {";echo "
                    return true;";echo "
                }";echo "
            }";echo "
        </script>";echo "
        ";$O5hhC0=call_user_func_array(array($this,"footer"),array());}}
?>