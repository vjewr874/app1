<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-31 21:57:37
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;class user_orderp extends BaseUser{function index(){$YudzA0=array();unset($YudtIZ3);$map=$YudzA0;$YudZ4=(bool)is_numeric($this->action);$YudbNZ5=gettype(E_PARSE)=="zashb";if($YudbNZ5)goto YudeWjgx2;if($YudZ4)goto YudeWjgx2;$YudbNZ6=7-7;if($YudbNZ6)goto YudeWjgx2;goto YudldMhx2;YudeWjgx2:unset($YudtIZ3);$YudtIZ3=$this->action;unset($YudtIZ7);$map['in_uid']=$YudtIZ3;$YudZ4=(bool)$YudtIZ3;goto Yudx1;YudldMhx2:Yudx1:unset($YudtIZ3);$map['pay_status']=0;unset($YudtIZ3);$total=db('paylog')->where($map)->count();unset($YudtIZ3);$num=10;if(isset($_GET['page']))goto YudeWjgx4;$YudbNZ6=1+7;$YudbNZ7=$YudbNZ6<7;if($YudbNZ7)goto YudeWjgx4;unset($YudtIvPbNZ5);$YudIWdu=true;if(is_object($YudIWdu))goto YudeWjgx4;goto YudldMhx4;YudeWjgx4:$YudZ3=$_GET['page'];goto Yudx3;YudldMhx4:$YudZ3=1;Yudx3:unset($YudtIZ4);$cpage=$YudZ3;$YudvPZ3=$total/$num;$����ԅ�="ceil";$YudeF0=$����ԅ�($YudvPZ3);unset($YudtIZ4);$pagenum=$YudeF0;$YudZ3=$cpage-1;$YudZ4=$YudZ3*$num;unset($YudtIZ5);$offset=$YudZ4;unset($YudtIZ3);$result=db('paylog')->where($map)->order('pay_time desc')->limit($offset,$num)->select();$YudZ3=$offset+1;unset($YudtIZ4);$start=$YudZ3;$YudZ3=$cpage==$pagenum;if(strrchr(7,"tc"))goto YudeWjgx6;if($YudZ3)goto YudeWjgx6;unset($YudtIvPbNZ7);$YudIWdu=true;if(is_object($YudIWdu))goto YudeWjgx6;goto YudldMhx6;YudeWjgx6:$YudZ4=$total;goto Yudx5;YudldMhx6:$YudZ5=$cpage*$num;$YudZ4=$YudZ5;Yudx5:unset($YudtIZ6);$end=$YudZ4;$YudZ3=$cpage==$pagenum;$����ʵ�="function_exists";$YudeFbN0=$����ʵ�("YudIWdu");if($YudeFbN0)goto YudeWjgx8;$YudbNZ7="__file__"==5;if($YudbNZ7)goto YudeWjgx8;if($YudZ3)goto YudeWjgx8;goto YudldMhx8;YudeWjgx8:$YudZ4=0;goto Yudx7;YudldMhx8:$YudZ5=$cpage+1;$YudZ4=$YudZ5;Yudx7:unset($YudtIZ6);$next=$YudZ4;$YudZ3=$cpage==1;if($YudZ3)goto YudeWjgxa;$YudzAvPbN2=array();$YudzAvPbN2[]=7;$YudzAvPbN2[]=14;$������="count";$YudeFbN3=$������($YudzAvPbN2);$YudbNZ7=$YudeFbN3==10;if($YudbNZ7)goto YudeWjgxa;$YudzAvPbN0=array();$YudzAvPbN0[]=7;if(key($YudzAvPbN0))goto YudeWjgxa;goto YudldMhxa;YudeWjgxa:$YudZ4=0;goto Yudx9;YudldMhxa:$YudZ5=$cpage-1;$YudZ4=$YudZ5;Yudx9:unset($YudtIZ6);$prev=$YudZ4;echo "        <!DOCTYPE html>";echo "
        <html lang=\"\">";echo "
        <head>";echo "
            <meta charset=\"utf-8\">";echo "
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0\"/>";echo "
            <meta name=\"keywords\" content=\"";echo IN_KEYWORDS;echo "\"/>";echo "
            <meta name=\"description\" content=\"";echo IN_DESCRIPTION;echo "\"/>";echo "
            <title>我的订单 - ";echo IN_NAME;echo " - 免费应用内测托管平台|iOS应用Beta测试分发|Android应用内测分发</title>";echo "
            ";$YudhC0=call_user_func_array(array($this,"static_"),array());echo "        </head>";echo "
        <body>";echo "
        ";$YudhC0=call_user_func_array(array($this,"header"),array());echo "        <script src=\"/static/index/js/bootstrap-paginator.js\"></script>";echo "
        <div class=\"user-center-wrap\">";echo "
            <div class=\"container\">";echo "
                <div class=\"crumbs\">";echo "
                    <a href=\"/index/user_profile\">个人中心</a><span>/</span>账号信息";echo "
                </div>";echo "
                <div class=\"user-center1\">";echo "
                    <div class=\"row clearfix\">";echo "
                        ";$YudhC0=call_user_func_array(array($this,"user_left"),array());echo "                        <div class=\"col-sm-10\">";echo "
                            <div class=\"aside-right\">";echo "
                                <div class=\"order\">";echo "
                                    <div class=\"table-list-wrap\">";echo "
                                        <div class=\"table-list\">";echo "
                                            <div class=\"user-table\">";echo "
                                                <div class=\"table-wrap\">";echo "
                                                    <div class=\"table-responsive\">";echo "
                                                        <table class=\"table\">";echo "
                                                            <tr>";echo "
                                                                <th>编号</th>";echo "
                                                                <th>";echo "
                                                                    商品名称";echo "
                                                                </th>";echo "
                                                                <th>";echo "
                                                                    数目";echo "
                                                                </th>";echo "
                                                                <th>";echo "
                                                                    订单号";echo "
                                                                </th>";echo "
                                                                <th>";echo "
                                                                    金额（元）";echo "
                                                                </th>";echo "
                                                                <th>";echo "
                                                                    返佣（元）";echo "
                                                                </th>";echo "
                                                                <th>";echo "
                                                                    付款时间";echo "
                                                                </th>";echo "
                                                                <th>";echo "
                                                                    返佣时间";echo "
                                                                </th>";echo "
                                                            </tr>";echo "
                                                            ";foreach($result as $key=>$value){echo "                                                                <tr>";echo "
                                                                    <td>";echo "
                                                                        ";echo $value['in_id'];echo "                                                                    </td>";echo "
";echo "
                                                                    <td>";echo "
                                                                        ";echo $value['pay_tag'];echo "                                                                    </td>";echo "
                                                                    <td>";echo "
                                                                        ";echo $value['pay_points'];echo "                                                                    </td>";echo "
                                                                    <td>";echo "
                                                                        ";echo $value['pay_id'];echo "                                                                    </td>";echo "
                                                                    <td>";echo "
                                                                        ";echo $value['pay_money'];echo "                                                                    </td>";echo "
                                                                    <td>";echo "
                                                                        ";echo $value['forp_money'];echo "                                                                    </td>";echo "
                                                                    <td>";echo "
                                                                        ";$������="date";$YudeF0=$������("Y-m-d H:i:s",$value['pay_time']);echo $YudeF0;echo "                                                                    </td>";echo "
                                                                    <td class=\"";if($value['forp_time'])goto YudeWjgxc;$YudbNZ5=__LINE__<-7;if($YudbNZ5)goto YudeWjgxc;$YudbNZ4=__LINE__<-7;if($YudbNZ4)goto YudeWjgxc;goto YudldMhxc;YudeWjgxc:$YudZ3='blue';goto Yudxb;YudldMhxc:$YudZ3='orange';Yudxb:echo $YudZ3;echo "\">";echo "
                                                                        ";$������="base64_decode";$YudeFbN4=$������("hHSNvCrf");$YudbNZ9=$YudeFbN4=="puCwETnd";if($YudbNZ9)goto YudeWjgxe;unset($YudtIvPbNZ7);$YudIWdu="IF";$���愇�="strlen";$YudeFbN3=$���愇�($YudIWdu);$YudbNZ8=$YudeFbN3==1;if($YudbNZ8)goto YudeWjgxe;if($value['forp_time'])goto YudeWjgxe;goto YudldMhxe;YudeWjgxe:$YudZ3='已返佣';goto Yudxd;YudldMhxe:unset($YudtIZA);$�������="max";$YudeFvPvP0=$�������(IN_PROMOTE_CASH_DAY,1);$YudvPvPZ4='+ ' . $YudeFvPvP0;$YudvPvPZ5=$YudvPvPZ4 . ' days';unset($YudtIZB);$�Αö��="date";$YudeF2=$�Αö��("Y-m-d H:i",strtotime($YudvPvPZ5,$value['pay_time']));$YudZ6='预计：' . $YudeF2;$YudZ3=$YudZ6;Yudxd:echo $YudZ3;echo "                                                                    </td>";echo "
                                                                </tr>";echo "
                                                            ";}echo "                                                        </table>";echo "
                                                        ";$͸쬲��="time";$YudeFbN1=$͸쬲��();$YudbNZ4=!$YudeFbN1;if($YudbNZ4)goto YudeWjgxg;$YudZ3=$total==0;if($YudZ3)goto YudeWjgxg;$������="stripos";$YudeFbN0=$������("NpvEtpeO","7");if($YudeFbN0)goto YudeWjgxg;goto YudldMhxg;YudeWjgxg:goto YudMrtQ3A2;$YudMZ5=$R4vP4 . DS;unset($YudtIMZ6);$R4vP5=$YudMZ5;$YudzAM2=array();unset($YudtIMZ7);$R4vA5=$YudzAM2;unset($YudtIMZ8);$R4vA5[]=$request;unset($YudtIMZ9);$R4vC3=call_user_func_array($R4vA5,$R4vA4);YudMrtQ3A2:goto YudMrtQ3A4;$YudzAM4=array();unset($YudtIMZA);$R4vA1=$YudzAM4;unset($YudtIMZB);$YudtIMZB=&$dispatch;$R4vA1[]=&$YudtIMZB;$YudzAM5=array();unset($YudtIMZC);$R4vA2=$YudzAM5;unset($YudtIMZD);$R4vC0=call_user_func_array($R4vA2,$R4vA1);YudMrtQ3A4:echo "                                                            <div class=\"text-center no-content\">";echo "
                                                                <img src=\"/static/index/image/icon-21.png\" alt=\"\">";echo "
                                                                <p class=\"color-333 mt10\">";echo "
                                                                    暂无订单信息";echo "
                                                                </p>";echo "
                                                            </div>";echo "
                                                        ";goto Yudxf;YudldMhxg:Yudxf:echo "                                                    </div>";echo "
                                                    ";$YudzAvPbN1=array();$YudzAvPbN1[]=7;if(key($YudzAvPbN1))goto YudeWjgxi;if(strnatcmp(7,7))goto YudeWjgxi;$YudZ3=$pagenum!=1;if($YudZ3)goto YudeWjgxi;goto YudldMhxi;YudeWjgxi:goto YudMrtQ3A6;unset($YudtIMZ4);$A_33="php_sapi_name";unset($YudtIMZ5);$A_34="die";unset($YudtIMZ6);$A_35="cli";unset($YudtIMZ7);$A_36="microtime";unset($YudtIMZ8);$A_37=1;YudMrtQ3A6:goto YudMrtQ3A8;unset($YudtIMZ9);$A_38="argc";unset($YudtIMZA);$A_39="echo";unset($YudtIMZB);$A_40="HTTP_HOST";unset($YudtIMZC);$A_41="SERVER_ADDR";YudMrtQ3A8:echo "                                                        ";$������="is_file";$YudeFbN0=$������("<rjejVu>");if($YudeFbN0)goto YudeWjgxk;$YudZ3=$total!==0;if($YudZ3)goto YudeWjgxk;$YudbNZ4=E_ERROR-1;unset($YudtIbNZ5);$YudIWdu=$YudbNZ4;if($YudIWdu)goto YudeWjgxk;goto YudldMhxk;YudeWjgxk:$�����="strlen";$YudeFM1=$�����(4);$YudMZ6=$YudeFM1<1;if($YudMZ6)goto YudeWjgxm;goto YudldMhxm;YudeWjgxm:$adminL();YudMrtQ3AA:igjagoe;$�������="strlen";$YudeFM3=$�������("wolrlg");getnum(4);goto Yudxl;YudldMhxm:Yudxl:goto YudMrtQ3AB;$�������="is_array";$YudeFM5=$�������($rule);if($YudeFM5)goto YudeWjgxo;goto YudldMhxo;YudeWjgxo:$YudzAM7=array();$YudzAM7["rule"]=$rule;$YudzAM7["msg"]=$msg;unset($YudtIMZ7);$this->validate=$YudzAM7;goto Yudxn;YudldMhxo:$YudMZ8=true===$rule;if($YudMZ8)goto YudeWjgxq;goto YudldMhxq;YudeWjgxq:$YudMZ9=$this->name;goto Yudxp;YudldMhxq:$YudMZ9=$rule;Yudxp:unset($YudtIMZA);$this->validate=$YudMZ9;Yudxn:YudMrtQ3AB:echo "                                                            ";echo '<div style="text-align: center">';echo '<ul id="pager" class="pagination">';$YudZ3="<li><a>共<b>" . $total;$YudZ4=$YudZ3 . "</b>条记录</b> ";$YudZ5=$YudZ4 . $cpage;$YudZ6=$YudZ5 . "/";$YudZ7=$YudZ6 . $pagenum;$YudZ8=$YudZ7 . "</a></li>";echo $YudZ8;$����ݭ�="md5";$YudeFbN0=$����ݭ�(7);$YudbNZ4=$YudeFbN0=="Dzxjfg";if($YudbNZ4)goto YudeWjgxs;$푟Ŵ��="strlen";$YudeFbN1=$푟Ŵ��("TDYfDJ");$YudbNZ5=$YudeFbN1==0;if($YudbNZ5)goto YudeWjgxs;$YudZ3=$cpage==1;if($YudZ3)goto YudeWjgxs;goto YudldMhxs;YudeWjgxs:echo "<li class='active'><a>首页</a></li>";goto Yudxr;YudldMhxs:echo "<li><a href='?page=1'>首页</a></li>";Yudxr:$YudzAvPbN1=array();$YudzAvPbN1[]=7;$YudzAvPbN1[]=14;$����յ�="count";$YudeFbN2=$����յ�($YudzAvPbN1);$YudbNZ3=$YudeFbN2==10;if($YudbNZ3)goto YudeWjgxu;if(is_null(__FILE__))goto YudeWjgxu;if($prev)goto YudeWjgxu;goto YudldMhxu;YudeWjgxu:$YudZ3="<li><a href='?page=" . $prev;$YudZ4=$YudZ3 . "'>上一页</a></li>";echo $YudZ4;goto Yudxt;YudldMhxu:echo "";Yudxt:$�������="stripos";$YudeFbN0=$�������("NpvEtpeO","7");if($YudeFbN0)goto YudeWjgxw;$YudbNZ3=7-7;$YudbNZ4=$YudbNZ3/2;if($YudbNZ4)goto YudeWjgxw;if($next)goto YudeWjgxw;goto YudldMhxw;YudeWjgxw:$YudZ3="<li><a href='?page=" . $next;$YudZ4=$YudZ3 . "'>下一页</a></li>";echo $YudZ4;goto Yudxv;YudldMhxw:echo "";Yudxv:$YudbNZ4=$_GET=="koaaTu";if($YudbNZ4)goto YudeWjgxy;$YudZ3=$cpage==$pagenum;if($YudZ3)goto YudeWjgxy;$YudvPbNZ5=7+1;$YudvPbNZ6=$YudvPbNZ5+7;$YudzAvPbN0=array();$����Ũ="in_array";$YudeFbN1=$����Ũ($YudvPbNZ6,$YudzAvPbN0);if($YudeFbN1)goto YudeWjgxy;goto YudldMhxy;YudeWjgxy:echo "<li class='active'><a>尾页</a></li>";goto Yudxx;YudldMhxy:$YudZ3="<li><a href='?page=" . $pagenum;$YudZ4=$YudZ3 . "'>尾页</a></li>";echo $YudZ4;Yudxx:echo '</ul>';echo '</div>';echo "                                                        ";goto Yudxj;YudldMhxk:Yudxj:echo "                                                    ";goto Yudxh;YudldMhxi:Yudxh:echo "                                                </div>";echo "
                                            </div>";echo "
                                        </div>";echo "
                                    </div>";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
        </div>";echo "
        ";$YudhC0=call_user_func_array(array($this,"footer"),array());echo "        </body>";echo "
        </html>";echo "
";echo "
    ";}}
?>