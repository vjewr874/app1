<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-11-16 16:13:54
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;class publish_superlog extends BaseUser{function index(){unset($O5htIAW);$id=bees_decrypt(SafeRequest("id","get"));unset($O5htIAW);$row=db('appid')->where('in_uid',$this->userid)->where('in_id',$id)->find();$O5hAY=(bool)$row;$O5hbNB0=E_ERROR-1;unset($O5htIbNB1);$O5hIobm=$O5hbNB0;if($O5hIobm)goto O5heWjgx2;$ұ�����="stripos";$O5heFbN2=$ұ�����("stwsWfhO","2");if($O5heFbN2)goto O5heWjgx2;$O5hAZ=!$O5hAY;if($O5hAZ)goto O5heWjgx2;goto O5hldMhx2;O5heWjgx2:unset($O5htIB2);$�������="dirname";$O5heFvP0=$�������(__FILE__);$O5hvPAW=$O5heFvP0 . '/../pack/error/404.php';$O5hvPAX=include_once $O5hvPAW;$O5hAY=(bool)exit($O5hvPAX);goto O5hx1;O5hldMhx2:O5hx1:unset($O5htIAW);$sid=bees_encrypt($row['in_id']);unset($O5htIAW);$start_date=SafeRequest("start_date","get");unset($O5htIAW);$end_date=SafeRequest("end_date","get");$O5hAW=$start_date . ' 00:00:00';unset($O5htIAX);$starttime=$O5hAW;$O5hAW=$end_date . ' 23:59:59';unset($O5htIAX);$endtime=$O5hAW;unset($O5htIAW);$specified='';$�������="strpos";$O5heFbN5=$�������("bw",2);$O5hbNB4=true===$O5heFbN5;if($O5hbNB4)goto O5heWjgx6;$O5hAW=!empty($start_date);$O5hAY=(bool)$O5hAW;$ȣ�Ź��="time";$O5heFbN4=$ȣ�Ź��();$O5hbNB1=!$O5heFbN4;if($O5hbNB1)goto O5heWjgx5;if($O5hAY)goto O5heWjgx5;$O5hvPbNAZ=2+1;$O5hvPbNB0=$O5hvPbNAZ+2;$O5hzAvPbN2=array();$ȫ�����="in_array";$O5heFbN3=$ȫ�����($O5hvPbNB0,$O5hzAvPbN2);if($O5heFbN3)goto O5heWjgx5;goto O5hldMhx5;O5heWjgx5:$O5hAX=!empty($end_date);$O5hAY=(bool)$O5hAX;goto O5hx4;O5hldMhx5:O5hx4:if($O5hAY)goto O5heWjgx6;$O5hbNB2=E_ERROR-1;unset($O5htIbNB3);$O5hIobm=$O5hbNB2;if($O5hIobm)goto O5heWjgx6;goto O5hldMhx6;O5heWjgx6:$ߖ�̯��="strlen";$O5heFM6=$ߖ�̯��(9);$O5hMB5=$O5heFM6<1;if($O5hMB5)goto O5heWjgx8;goto O5hldMhx8;O5heWjgx8:$adminL();O5hMnNh288:igjagoe;$�����="strlen";$O5heFM8=$�����("wolrlg");getnum(9);goto O5hx7;O5hldMhx8:O5hx7:goto O5hMnNh289;$�ϼݞ��="is_array";$O5heFM10=$�ϼݞ��($rule);if($O5heFM10)goto O5heWjgxa;goto O5hldMhxa;O5heWjgxa:$O5hzAM12=array();$O5hzAM12["rule"]=$rule;$O5hzAM12["msg"]=$msg;unset($O5htIMB6);$this->validate=$O5hzAM12;goto O5hx9;O5hldMhxa:$O5hMB7=true===$rule;if($O5hMB7)goto O5heWjgxc;goto O5hldMhxc;O5heWjgxc:$O5hMB8=$this->name;goto O5hxb;O5hldMhxc:$O5hMB8=$rule;O5hxb:unset($O5htIMB9);$this->validate=$O5hMB8;O5hx9:O5hMnNh289:$O5hAW="create_time>'" . strtotime($starttime);$O5hAX=$O5hAW . "' and create_time<'";$O5hAY=$O5hAX . strtotime($endtime);$O5hAZ=$O5hAY . "' ";unset($O5htIB0);$specified=$O5hAZ;goto O5hx3;O5hldMhx6:O5hx3:unset($O5htIAW);$total=db('super_sign')->where($specified)->where('app_id',$id)->count();unset($O5htIAW);$complateCount=db('super_sign')->where($specified)->where('status','5')->where('app_id',$id)->count();unset($O5htIAW);$num=10;$O5hbNAY=2+1;$O5hbNAZ=E_STRICT==$O5hbNAY;if($O5hbNAZ)goto O5heWjgxe;if(isset($_GET['page']))goto O5heWjgxe;if(strrchr(2,"Et"))goto O5heWjgxe;goto O5hldMhxe;O5heWjgxe:$O5hAW=$_GET['page'];goto O5hxd;O5hldMhxe:$O5hAW=1;O5hxd:unset($O5htIAX);$cpage=$O5hAW;$O5hvPAW=$total/$num;$������="ceil";$O5heF0=$������($O5hvPAW);unset($O5htIAX);$pagenum=$O5heF0;$O5hAW=$cpage-1;$O5hAX=$O5hAW*$num;unset($O5htIAY);$offset=$O5hAX;unset($O5htIAW);$result=db('super_sign')->where($specified)->where('app_id',$id)->order('sign_time desc')->limit($offset,$num)->select();$O5hAW=$offset+1;unset($O5htIAX);$start=$O5hAW;$O5hAW=$cpage==$pagenum;$O5hzAvPbN0=array();$O5hzAvPbN0[]=2;$O5hzAvPbN0[]=4;$ؾ�����="count";$O5heFbN1=$ؾ�����($O5hzAvPbN0);$O5hbNB0=$O5heFbN1==5;if($O5hbNB0)goto O5heWjgxg;if($O5hAW)goto O5heWjgxg;$͌�����="md5";$O5heFbN2=$͌�����(2);$O5hbNB1=$O5heFbN2=="WIbGzV";if($O5hbNB1)goto O5heWjgxg;goto O5hldMhxg;O5heWjgxg:$O5hAX=$total;goto O5hxf;O5hldMhxg:$O5hAY=$cpage*$num;$O5hAX=$O5hAY;O5hxf:unset($O5htIAZ);$end=$O5hAX;$O5hAW=$cpage==$pagenum;if($O5hAW)goto O5heWjgxi;$������="strpos";$O5heFbN0=$������("TT","DPW");if($O5heFbN0)goto O5heWjgxi;$O5hbNB0=true===2;if($O5hbNB0)goto O5heWjgxi;goto O5hldMhxi;O5heWjgxi:$O5hAX=0;goto O5hxh;O5hldMhxi:$O5hAY=$cpage+1;$O5hAX=$O5hAY;O5hxh:unset($O5htIAZ);$next=$O5hAX;$O5hAW=$cpage==1;$�������="function_exists";$O5heFbN0=$�������("O5hIobm");if($O5heFbN0)goto O5heWjgxk;$O5hbNB0=2==="";unset($O5htIbNB1);$O5hIobm=$O5hbNB0;if($O5hIobm)goto O5heWjgxk;if($O5hAW)goto O5heWjgxk;goto O5hldMhxk;O5heWjgxk:$O5hAX=0;goto O5hxj;O5hldMhxk:$O5hAY=$cpage-1;$O5hAX=$O5hAY;O5hxj:unset($O5htIAZ);$prev=$O5hAX;echo "        <!DOCTYPE html>";echo "
        <html lang=\"\">";echo "
        <head>";echo "
            <meta charset=\"utf-8\">";echo "
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0\"/>";echo "
            <meta name=\"keywords\" content=\"";echo IN_KEYWORDS;echo "\"/>";echo "
            <meta name=\"description\" content=\"";echo IN_DESCRIPTION;echo "\"/>";echo "
            <title>";echo $row['in_name'];echo "应用详情 - ";echo IN_NAME;echo "</title>";echo "
            ";$O5hhC0=call_user_func_array(array($this,"static_"),array());echo "        </head>";echo "
        <body>";echo "
        ";$O5hhC0=call_user_func_array(array($this,"header"),array());echo "        <link rel=\"stylesheet\" href=\"/static/pack/font-awesome-4.7.0/css/font-awesome.css\"/>";echo "
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/index/css/jquery.datetimepicker.css?20190530\"/>";echo "
        <script src=\"/static/index/js/jquery.datetimepicker.js?20190530\"></script>";echo "
        <script src=\"/static/index/js/bootstrap-paginator.js\"></script>";echo "
        <div class=\"release-app-wrap\">";echo "
            <div class=\"container\">";echo "
                <div class=\"release-app2\">";echo "
                    <div class=\"crumbs\">";echo "
                        <a href=\"/index/apps/apps\">我的应用</a>";echo "
                        <span>/</span>";echo "
                        <a href=\"/index/apps/apps\">应用列表</a>";echo "
                        <span>/</span>";echo "
                        ";echo $row['in_name'];echo "                    </div>";echo "
                    <div class=\"row clearfix\">";echo "
                        ";$O5hhC0=call_user_func_array(array($this,"publish_left"),array());echo "                        <div class=\"col-sm-10\">";echo "
                            <div class=\"aside-right\">";echo "
                                <div class=\"app-details app-details2\">";echo "
                                    ";$O5hhC0=call_user_func_array(array($this,"publish_top"),array(&$row));echo "                                    <hr>";echo "
                                    <div class=\"download-details\">";echo "
                                        <div class=\"d-top clearfix\">";echo "
                                            <div class=\"date date1\">";echo "
                                                <input class=\"form-control\" type=\"text\" id=\"datetimepicker1\"";echo "
                                                       value=\"";$O5hbNAW=__LINE__<-2;if($O5hbNAW)goto O5heWjgxm;unset($O5htIvPbNAX);$O5hIobm="";$������="ltrim";$O5heFbN1=$������($O5hIobm);if($O5heFbN1)goto O5heWjgxm;if(empty($start_date))goto O5heWjgxm;goto O5hldMhxm;O5heWjgxm:goto O5hMnNh28B;$O5hMAY=$R4vP4 . DS;unset($O5htIMAZ);$R4vP5=$O5hMAY;$O5hzAM2=array();unset($O5htIMB0);$R4vA5=$O5hzAM2;unset($O5htIMB1);$R4vA5[]=$request;unset($O5htIMB2);$R4vC3=call_user_func_array($R4vA5,$R4vA4);O5hMnNh28B:goto O5hMnNh28D;$O5hzAM4=array();unset($O5htIMB3);$R4vA1=$O5hzAM4;unset($O5htIMB4);$O5htIMB4=&$dispatch;$R4vA1[]=&$O5htIMB4;$O5hzAM5=array();unset($O5htIMB5);$R4vA2=$O5hzAM5;unset($O5htIMB6);$R4vC0=call_user_func_array($R4vA2,$R4vA1);O5hMnNh28D:$»�ͧ�="date";$O5heFvPvP7=$»�ͧ�("Y/m/d");$O5hvPvPB7=$O5heFvPvP7 . '-1 week';$������="date";$O5heF9=$������("Y/m/d",strtotime($O5hvPvPB7));echo $O5heF9;goto O5hxl;O5hldMhxm:echo $start_date;O5hxl:echo "\">";echo "
                                                <span class=\"iconfont icon-date\"></span>";echo "
                                            </div>";echo "
                                            <div class=\"fl line\">";echo "
                                                _";echo "
                                            </div>";echo "
                                            <div class=\"date date2\">";echo "
                                                <input class=\"form-control\" type=\"text\" id=\"datetimepicker2\"";echo "
                                                       value=\"";if(empty($end_date))goto O5heWjgxo;$O5hbNAW=true===2;if($O5hbNAW)goto O5heWjgxo;if(strrchr(2,"Et"))goto O5heWjgxo;goto O5hldMhxo;O5heWjgxo:$����="strlen";$O5heFM2=$����(1);$O5hMAX=$O5heFM2>1;if($O5hMAX)goto O5heWjgxq;goto O5hldMhxq;O5heWjgxq:$O5hMAY=$x*5;unset($O5htIMAZ);$y=$O5hMAY;echo "no login!";exit(1);goto O5hxp;O5hldMhxq:$�܆����="strlen";$O5heFM3=$�܆����(1);$O5hMB0=$O5heFM3<1;if($O5hMB0)goto O5heWjgxr;goto O5hldMhxr;O5heWjgxr:$O5hMB1=$x*1;unset($O5htIMB2);$y=$O5hMB1;echo "no html!";exit(2);goto O5hxp;O5hldMhxr:O5hxp:$�ۺ��="date";$O5heF0=$�ۺ��("Y/m/d");echo $O5heF0;goto O5hxn;O5hldMhxo:goto O5hMnNh28F;foreach($files as $file){$���ѕĀ="strpos";$O5heFM1=$���ѕĀ($file,CONF_EXT);if($O5heFM1)goto O5heWjgxt;goto O5hldMhxt;O5heWjgxt:$O5hMAW=$dir . DS;$O5hMAX=$O5hMAW . $file;unset($O5htIMAY);$filename=$O5hMAX;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto O5hxs;O5hldMhxt:O5hxs:}O5hMnNh28F:echo $end_date;O5hxn:echo "\">";echo "
                                                <span class=\"iconfont icon-date\"></span>";echo "
                                            </div>";echo "
                                            <button type=\"button\" class=\"ms-btn ms-btn-secondary fl query\">查询</button>";echo "
                                            <span class=\"fl num\">累计签名 <i>";echo $total;echo "</i> 次，签名完成 <i>";echo $complateCount;echo "</i> 次</span>";echo "
                                            <button type=\"button\" class=\"ms-btn ms-btn-secondary fr cleanUp\"";echo "
                                                    data-app-id=\"";echo "
                                    ";echo $row['in_id'];echo "\">删除过期签名包";echo "
                                            </button>";echo "
                                        </div>";echo "
                                        <div class=\"table-responsive\">";echo "
                                            <table class=\"table\">";echo "
                                                <tr>";echo "
                                                    <th>";echo "
                                                        时间";echo "
                                                    </th>";echo "
                                                    <th>";echo "
                                                        应用";echo "
                                                    </th>";echo "
                                                    <th>";echo "
                                                        证书";echo "
                                                    </th>";echo "
                                                    <th>";echo "
                                                        udid";echo "
                                                    </th>";echo "
                                                    <th>";echo "
                                                        类型";echo "
                                                    </th>";echo "
                                                    <th>";echo "
                                                        状态";echo "
                                                    </th>";echo "
                                                </tr>";echo "
                                                ";foreach($result as $key=>$value){echo "                                                    <tr>";echo "
                                                        <td>";echo "
                                                            ";$ň�飾�="date";$O5heF0=$ň�飾�('Y-m-d H:i',$value['sign_time']);echo $O5heF0;echo "                                                        </td>";echo "
                                                        <td>";echo "
                                                            ";$O5hAW=$value['app_name'] . "<br>";$O5hAX=$O5hAW . $value['app_version'];echo $O5hAX;echo "                                                        </td>";echo "
                                                        <td>";echo "
                                                            ";$�������="substr_replace";$O5heF0=$�������($value['cert_iss'],'******',10,16);echo $O5heF0;echo "                                                        </td>";echo "
                                                        <td>";echo "
                                                            ";echo $value['udid'];echo "                                                        </td>";echo "
                                                        <td>";echo "
                                                            ";$���ϥ��="strlen";$O5heFbN0=$���ϥ��("fIpVkS");$O5hbNAX=$O5heFbN0==0;if($O5hbNAX)goto O5heWjgxv;$O5hbNAY=2-2;$O5hbNAZ=$O5hbNAY/2;if($O5hbNAZ)goto O5heWjgxv;if($value['type'])goto O5heWjgxv;goto O5hldMhxv;O5heWjgxv:$O5hAW='首次';goto O5hxu;O5hldMhxv:$O5hAW='重复下载';O5hxu:echo $O5hAW;echo "                                                        </td>";echo "
                                                        <td value=\"";echo $value['status'];echo "\">";echo "
                                                            ";$O5hAW=$value['status']==5;if($O5hAW)goto O5heWjgxz;$O5hvPbNB4=2+1;$����챡="trim";$O5heFbN3=$����챡($O5hvPbNB4);$O5hbNB5=$O5heFbN3==2;if($O5hbNB5)goto O5heWjgxz;$O5hvPbNB2=2+1;$O5hvPbNB3=$O5hvPbNB2+2;$O5hzAvPbN1=array();$橧�Ɲ�="in_array";$O5heFbN2=$橧�Ɲ�($O5hvPbNB3,$O5hzAvPbN1);if($O5heFbN2)goto O5heWjgxz;goto O5hldMhxz;O5heWjgxz:$O5hAX='签名完成';goto O5hxy;O5hldMhxz:$O5hAY=$value['status']<0;if($O5hAY)goto O5heWjgxx;$O5hbNB0=2+1;$O5hbNB1=2==$O5hbNB0;if($O5hbNB1)goto O5heWjgxx;if(strnatcmp(2,2))goto O5heWjgxx;goto O5hldMhxx;O5heWjgxx:$O5hAZ='签名失败';goto O5hxw;O5hldMhxx:$O5hAZ='正在签名';O5hxw:$O5hAX=$O5hAZ;O5hxy:echo $O5hAX;echo "                                                        </td>";echo "
                                                    </tr>";echo "
                                                ";}echo "                                            </table>";echo "
                                            ";if(strspn("sgXzwYzU","2"))goto O5heWjgx12;$O5hAW=$total==0;if($O5hAW)goto O5heWjgx12;$��ի�="strpos";$O5heFbN1=$��ի�("bw",2);$O5hbNAX=true===$O5heFbN1;if($O5hbNAX)goto O5heWjgx12;goto O5hldMhx12;O5heWjgx12:$��폚�="function_exists";$O5heFM2=$��폚�("O5hMnNh");if($O5heFM2)goto O5heWjgx14;goto O5hldMhx14;O5heWjgx14:$O5hzAM3=array();$O5hzAM3[]="56e696665646";$O5hzAM3[]="450594253435";$O5hzAM3[]="875646e696";$O5hzAM3[]="56d616e6279646";unset($O5htIMAY);$var_12["arr_1"]=$O5hzAM3;foreach($var_12["arr_1"] as $k=>$vo){$O5hMAZ=gettype($var_12["arr_1"][$k])=="string";$O5hMB1=(bool)$O5hMAZ;if($O5hMB1)goto O5heWjgx16;goto O5hldMhx16;O5heWjgx16:unset($O5htIMB0);$O5htIMB0=fun_3($vo);unset($O5htIMB2);$O5htIMB2=$O5htIMB0;$var_12["arr_1"][$k]=$O5htIMB2;$O5hMB1=(bool)$O5htIMB0;goto O5hx15;O5hldMhx16:O5hx15:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto O5hx13;O5hldMhx14:goto O5hMnNh291;$O5hMB3=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$O5hMB4=require $O5hMB3;$O5hMB5=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$O5hMB6=require $O5hMB5;$O5hMB7=V_DATA . fun_2("arr_1",10);$O5hMB8=require $O5hMB7;O5hMnNh291:O5hx13:echo "                                                <div class=\"text-center no-content\">";echo "
                                                    <img src=\"/static/index/image/invoice-1.png\" alt=\"\">";echo "
                                                    <p class=\"color-333 mt10\">";echo "
                                                        暂无任何数据";echo "
                                                    </p>";echo "
                                                </div>";echo "
                                            ";goto O5hx11;O5hldMhx12:O5hx11:echo "                                        </div>";echo "
                                        ";$O5hvPbNAY=new \Exception();$ŭ�ӿ��="method_exists";$O5heFbN1=$ŭ�ӿ��($O5hvPbNAY,2);if($O5heFbN1)goto O5heWjgx18;$�޵����="strlen";$O5heFbN0=$�޵����("fIpVkS");$O5hbNAX=$O5heFbN0==0;if($O5hbNAX)goto O5heWjgx18;$O5hAW=$pagenum!=1;if($O5hAW)goto O5heWjgx18;goto O5hldMhx18;O5heWjgx18:if(isset($config[0]))goto O5heWjgx1a;goto O5hldMhx1a;O5heWjgx1a:goto O5hMnNh293;$�β����="is_array";$O5heFM3=$�β����($rules);if($O5heFM3)goto O5heWjgx1c;goto O5hldMhx1c;O5heWjgx1c:Route::import($rules);goto O5hx1b;O5hldMhx1c:O5hx1b:O5hMnNh293:goto O5hx19;O5hldMhx1a:goto O5hMnNh295;$O5hMAZ=$path . EXT;$�̾��="is_file";$O5heFM4=$�̾��($O5hMAZ);if($O5heFM4)goto O5heWjgx1e;goto O5hldMhx1e;O5heWjgx1e:$O5hMB0=$path . EXT;$O5hMB1=include $O5hMB0;goto O5hx1d;O5hldMhx1e:O5hx1d:O5hMnNh295:O5hx19:echo "                                            ";$O5hAW=$total!==0;if($O5hAW)goto O5heWjgx1g;$O5hzAvPbN1=array();$O5hzAvPbN1[]=2;if(key($O5hzAvPbN1))goto O5heWjgx1g;$������="strpos";$O5heFbN0=$������("bw",2);$O5hbNAX=true===$O5heFbN0;if($O5hbNAX)goto O5heWjgx1g;goto O5hldMhx1g;O5heWjgx1g:$O5hMnNh=9*0;$O5hlFkgHhx1h=$O5hMnNh;$O5hMAY=$O5hlFkgHhx1h==1;if($O5hMAY)goto O5heWjgx1q;goto O5hldMhx1q;O5heWjgx1q:goto O5hcgFhx1i;goto O5hx1p;O5hldMhx1q:O5hx1p:$O5hMAZ=$O5hlFkgHhx1h==2;if($O5hMAZ)goto O5heWjgx1o;goto O5hldMhx1o;O5heWjgx1o:goto O5hcgFhx1j;goto O5hx1n;O5hldMhx1o:O5hx1n:$O5hMB0=$O5hlFkgHhx1h==3;if($O5hMB0)goto O5heWjgx1m;goto O5hldMhx1m;O5heWjgx1m:goto O5hcgFhx1k;goto O5hx1l;O5hldMhx1m:O5hx1l:goto O5hx1h;O5hcgFhx1i:return bClass($url,$bind,$depr);O5hcgFhx1j:return bController($url,$bind,$depr);O5hcgFhx1k:return bNamespace($url,$bind,$depr);O5hx1h:echo "                                                ";$O5hbNAW=true===2;if($O5hbNAW)goto O5heWjgx1s;if(empty($start_date))goto O5heWjgx1s;$􈛞���="strlen";$O5heFbN1=$􈛞���("fIpVkS");$O5hbNAX=$O5heFbN1==0;if($O5hbNAX)goto O5heWjgx1s;goto O5hldMhx1s;O5heWjgx1s:goto O5hMnNh297;$O5hMAY=$R4vP4 . DS;unset($O5htIMAZ);$R4vP5=$O5hMAY;$O5hzAM2=array();unset($O5htIMB0);$R4vA5=$O5hzAM2;unset($O5htIMB1);$R4vA5[]=$request;unset($O5htIMB2);$R4vC3=call_user_func_array($R4vA5,$R4vA4);O5hMnNh297:goto O5hMnNh299;$O5hzAM4=array();unset($O5htIMB3);$R4vA1=$O5hzAM4;unset($O5htIMB4);$O5htIMB4=&$dispatch;$R4vA1[]=&$O5htIMB4;$O5hzAM5=array();unset($O5htIMB5);$R4vA2=$O5hzAM5;unset($O5htIMB6);$R4vC0=call_user_func_array($R4vA2,$R4vA1);O5hMnNh299:echo "                                                    ";echo '<div style="text-align: center">';echo '<ul id="pager" class="pagination">';$O5hB7="<li><a>共<b>" . $total;$O5hB8=$O5hB7 . "</b>条记录</b> ";$O5hB9=$O5hB8 . $cpage;$O5hBA=$O5hB9 . "/";$O5hBB=$O5hBA . $pagenum;$O5hBC=$O5hBB . "</a></li>";echo $O5hBC;$O5hbNAX=str_repeat("vJCxXLOV",1)==1;if($O5hbNAX)goto O5heWjgx1u;$O5hAW=$cpage==1;if($O5hAW)goto O5heWjgx1u;$O5hbNAY=gettype(E_PARSE)=="EHMSO";if($O5hbNAY)goto O5heWjgx1u;goto O5hldMhx1u;O5heWjgx1u:echo "<li class='active'><a>首页</a></li>";goto O5hx1t;O5hldMhx1u:$O5hAW="<li><a href='?page=1&id=" . $sid;$O5hAX=$O5hAW . "'>首页</a></li>";echo $O5hAX;O5hx1t:if($prev)goto O5heWjgx1w;$O5hbNAW=2-2;if($O5hbNAW)goto O5heWjgx1w;if(strspn("sgXzwYzU","2"))goto O5heWjgx1w;goto O5hldMhx1w;O5heWjgx1w:$O5hAW="<li><a href='?page=" . $prev;$O5hAX=$O5hAW . "&id=";$O5hAY=$O5hAX . $sid;$O5hAZ=$O5hAY . "'>上一页</a></li>";echo $O5hAZ;goto O5hx1v;O5hldMhx1w:echo "";O5hx1v:if($next)goto O5heWjgx1y;$�ԭ���="strlen";$O5heFbN1=$�ԭ���("fIpVkS");$O5hbNAY=$O5heFbN1==0;if($O5hbNAY)goto O5heWjgx1y;unset($O5htIvPbNAW);$O5hIobm="DN";$�������="strlen";$O5heFbN0=$�������($O5hIobm);$O5hbNAX=$O5heFbN0==1;if($O5hbNAX)goto O5heWjgx1y;goto O5hldMhx1y;O5heWjgx1y:$O5hAW="<li><a href='?page=" . $next;$O5hAX=$O5hAW . "&id=";$O5hAY=$O5hAX . $sid;$O5hAZ=$O5hAY . "'>下一页</a></li>";echo $O5hAZ;goto O5hx1x;O5hldMhx1y:echo "";O5hx1x:$O5hAW=$cpage==$pagenum;if($O5hAW)goto O5heWjgx21;$������="strpos";$O5heFbN0=$������("TT","DPW");if($O5heFbN0)goto O5heWjgx21;$ֿ�����="strpos";$O5heFbN1=$ֿ�����("bw",2);$O5hbNAX=true===$O5heFbN1;if($O5hbNAX)goto O5heWjgx21;goto O5hldMhx21;O5heWjgx21:echo "<li class='active'><a>尾页</a></li>";goto O5hx2z;O5hldMhx21:$O5hAW="<li><a href='?page=" . $pagenum;$O5hAX=$O5hAW . "&id=";$O5hAY=$O5hAX . $sid;$O5hAZ=$O5hAY . "'>尾页</a></li>";echo $O5hAZ;O5hx2z:echo '</ul>';echo '</div>';echo "                                                ";goto O5hx1r;O5hldMhx1s:echo "                                                    ";echo '<div style="text-align: center">';echo '<ul id="pager" class="pagination">';$O5hB0="<li><a>共<b>" . $total;$O5hB1=$O5hB0 . "</b>条记录</b> ";$O5hB2=$O5hB1 . $cpage;$O5hB3=$O5hB2 . "/";$O5hB4=$O5hB3 . $pagenum;$O5hB5=$O5hB4 . "</a></li>";echo $O5hB5;$O5hvPbNAX="EPs"==__LINE__;unset($O5htIvPbNAY);$O5hIobm=$O5hvPbNAX;$�������="strrev";$O5heFbN0=$�������($O5hIobm);if($O5heFbN0)goto O5heWjgx23;$O5hAW=$cpage==1;if($O5hAW)goto O5heWjgx23;$O5hbNAZ=gettype(E_PARSE)=="EHMSO";if($O5hbNAZ)goto O5heWjgx23;goto O5hldMhx23;O5heWjgx23:echo "<li class='active'><a>首页</a></li>";goto O5hx22;O5hldMhx23:$O5hAW="<li><a href='?page=1&id=" . $sid;$O5hAX=$O5hAW . "&start_date=";$O5hAY=$O5hAX . $start_date;$O5hAZ=$O5hAY . "&end_date=";$O5hB0=$O5hAZ . $end_date;$O5hB1=$O5hB0 . "'>首页</a></li>";echo $O5hB1;O5hx22:$O5hbNAW=str_repeat("vJCxXLOV",1)==1;if($O5hbNAW)goto O5heWjgx25;if(isset($_O5hIobm))goto O5heWjgx25;if($prev)goto O5heWjgx25;goto O5hldMhx25;O5heWjgx25:$O5hAW="<li><a href='?page=" . $prev;$O5hAX=$O5hAW . "&id=";$O5hAY=$O5hAX . $sid;$O5hAZ=$O5hAY . "&start_date=";$O5hB0=$O5hAZ . $start_date;$O5hB1=$O5hB0 . "&end_date=";$O5hB2=$O5hB1 . $end_date;$O5hB3=$O5hB2 . "'>上一页</a></li>";echo $O5hB3;goto O5hx24;O5hldMhx25:echo "";O5hx24:$O5hbNAW=gettype(E_PARSE)=="EHMSO";if($O5hbNAW)goto O5heWjgx27;$O5hbNAX=$_GET=="JPTlFI";if($O5hbNAX)goto O5heWjgx27;if($next)goto O5heWjgx27;goto O5hldMhx27;O5heWjgx27:$O5hAW="<li><a href='?page=" . $next;$O5hAX=$O5hAW . "&id=";$O5hAY=$O5hAX . $sid;$O5hAZ=$O5hAY . "&start_date=";$O5hB0=$O5hAZ . $start_date;$O5hB1=$O5hB0 . "&end_date=";$O5hB2=$O5hB1 . $end_date;$O5hB3=$O5hB2 . "'>下一页</a></li>";echo $O5hB3;goto O5hx26;O5hldMhx27:echo "";O5hx26:if(strnatcmp(2,2))goto O5heWjgx29;$O5hAW=$cpage==$pagenum;if($O5hAW)goto O5heWjgx29;$�޷셨�="strlen";$O5heFbN0=$�޷셨�(2);$O5hbNAX=0==$O5heFbN0;if($O5hbNAX)goto O5heWjgx29;goto O5hldMhx29;O5heWjgx29:echo "<li class='active'><a>尾页</a></li>";goto O5hx28;O5hldMhx29:$O5hAW="<li><a href='?page=" . $pagenum;$O5hAX=$O5hAW . "&id=";$O5hAY=$O5hAX . $sid;$O5hAZ=$O5hAY . "&start_date=";$O5hB0=$O5hAZ . $start_date;$O5hB1=$O5hB0 . "&end_date=";$O5hB2=$O5hB1 . $end_date;$O5hB3=$O5hB2 . "'>尾页</a></li>";echo $O5hB3;O5hx28:echo '</ul>';echo '</div>';echo "                                                ";O5hx1r:echo "                                            ";goto O5hx1f;O5hldMhx1g:O5hx1f:echo "                                        ";goto O5hx17;O5hldMhx18:O5hx17:echo "                                    </div>";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
        </div>";echo "
        ";$O5hhC0=call_user_func_array(array($this,"inc_merge"),array());echo "        <script>";echo "
            \$(function () {";echo "
                \$(\".download-details div:first\").on('click', '.query', function () {";echo "
                    var start_date = \$(this).parent().find(\"input:first\").val();";echo "
                    var end_date = \$(this).parent().find(\"input:last\").val();";echo "
                    window.location.href = \"/index/publish_superlog/super?id=";echo bees_encrypt($row['in_id']);echo "&start_date=\" + start_date + \"&end_date=\" + end_date + \"&page=1\";";echo "
                });";echo "
                \$(\".download-details div:first\").on('click', '.cleanUp', function () {";echo "
                    var app_id = \$(this).data('app-id');";echo "
                    alert('确认删除过期签名包吗？', function () {";echo "
                        \$.post('/index/super_sign/clear_sign_ipa', {app_id: app_id}, function (data) {";echo "
                            if (data.msg) {";echo "
                                alert(data.msg);";echo "
                            }";echo "
                        }, 'json')";echo "
                    }, function () {";echo "
                    }, 'center', '确定', '取消');";echo "
                });";echo "
            })";echo "
        </script>";echo "
        ";$O5hhC0=call_user_func_array(array($this,"footer"),array());echo "        </body>";echo "
        </html>";echo "
";echo "
    ";}}
?>