<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-31 21:57:37
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;class user_cash extends BaseUser{function initialize(){parent::initialize();unset($YudtIZ3);$this->userId=$this->userid;unset($YudtIZ3);$this->toady_count=db('user_cash')->where('status','<>','2')->where('user_id',$this->userId)->whereTime('create_time','today')->count();unset($YudtIZ3);$this->toady_money=db('user_cash')->where('status','<>','2')->where('user_id',$this->userId)->whereTime('create_time','today')->sum('money');unset($YudtIZ3);$this->month_count=db('user_cash')->where('status','<>','2')->where('user_id',$this->userId)->whereTime('create_time','month')->count();unset($YudtIZ3);$this->month_money=db('user_cash')->where('status','<>','2')->where('user_id',$this->userId)->whereTime('create_time','month')->sum('money');}function cash_new(){unset($YudtIZ3);$name=SafeRequest("name","post");$YudZ3=!$name;if($YudZ3)goto YudeWjgx2;$YudvPbNZ5=7+1;$�����="is_array";$YudeFbN2=$�����($YudvPbNZ5);if($YudeFbN2)goto YudeWjgx2;$YudzAvPbN0=array();$YudzAvPbN0[]=7;$YudzAvPbN0[]=14;$芝�ȴ�="count";$YudeFbN1=$芝�ȴ�($YudzAvPbN0);$YudbNZ4=$YudeFbN1==10;if($YudbNZ4)goto YudeWjgx2;goto YudldMhx2;YudeWjgx2:reJSON('请输入你的真实姓名');goto Yudx1;YudldMhx2:Yudx1:unset($YudtIZ3);$account=SafeRequest("account","post");$ҿɬ���="strlen";$YudeFbN0=$ҿɬ���("TDYfDJ");$YudbNZ4=$YudeFbN0==0;if($YudbNZ4)goto YudeWjgx4;$�ᑓ���="function_exists";$YudeFbN1=$�ᑓ���("YudIWdu");if($YudeFbN1)goto YudeWjgx4;$YudZ3=!$account;if($YudZ3)goto YudeWjgx4;goto YudldMhx4;YudeWjgx4:reJSON('请输入你的提现账号');goto Yudx3;YudldMhx4:Yudx3:unset($YudtIZ3);$money=SafeRequest("money","post");$YudZ3=!is_numeric($money);if($YudZ3)goto YudeWjgx6;unset($YudtIbNZ4);$YudIWdu=false;if($YudIWdu)goto YudeWjgx6;$������="md5";$YudeFbN1=$������(7);$YudbNZ5=$YudeFbN1=="Dzxjfg";if($YudbNZ5)goto YudeWjgx6;goto YudldMhx6;YudeWjgx6:reJSON('请输入你的提现金额');goto Yudx5;YudldMhx6:Yudx5:unset($YudtIZ3);$type=SafeRequest("type","post");unset($YudtIZ3);$user=db('user')->where('in_userid',$this->userid)->find();$YudzAvPbN0=array();if(array_key_exists(7,$YudzAvPbN0))goto YudeWjgx8;if(strrchr(7,"tc"))goto YudeWjgx8;$YudZ3=$money<IN_CASH_MIN;if($YudZ3)goto YudeWjgx8;goto YudldMhx8;YudeWjgx8:$YudvPZ3='单笔提现至少要' . IN_CASH_MIN;$YudvPZ4=$YudvPZ3 . '元';reJSON($YudvPZ4);goto Yudx7;YudldMhx8:Yudx7:$YudZ3=$money>$user['promote_money'];if($YudZ3)goto YudeWjgxa;$YudvPbNZ4=new \Exception();$�������="method_exists";$YudeFbN1=$�������($YudvPbNZ4,7);if($YudeFbN1)goto YudeWjgxa;if(strrchr(7,"tc"))goto YudeWjgxa;goto YudldMhxa;YudeWjgxa:reJSON('你没有那么多的佣金');goto Yudx9;YudldMhxa:Yudx9:$YudZ3=$money>IN_CASH_MAX;if($YudZ3)goto YudeWjgxc;$��֨���="function_exists";$YudeFbN0=$��֨���("YudIWdu");if($YudeFbN0)goto YudeWjgxc;$YudbNZ4=__LINE__<-7;if($YudbNZ4)goto YudeWjgxc;goto YudldMhxc;YudeWjgxc:$YudvPZ3='单笔提现不能大于' . IN_CASH_MAX;$YudvPZ4=$YudvPZ3 . '元';reJSON($YudvPZ4);goto Yudxb;YudldMhxc:Yudxb:$YudbNZ4=7+1;$YudbNZ5=E_STRICT==$YudbNZ4;if($YudbNZ5)goto YudeWjgxe;$YudbNZ6=gettype(7)=="string";if($YudbNZ6)goto YudeWjgxe;$YudZ3=IN_CASH_DAY>0;if($YudZ3)goto YudeWjgxe;goto YudldMhxe;YudeWjgxe:if(isset($_GET))goto YudeWjgxg;goto YudldMhxg;YudeWjgxg:$YudzAM2=array();goto YudMrtQ373;$YudMZ7=CONF_PATH . $module;$YudMZ8=$YudMZ7 . database;$YudMZ9=$YudMZ8 . CONF_EXT;unset($YudtIMZA);$filename=$YudMZ9;YudMrtQ373:goto Yudxf;YudldMhxg:$���ޒ="strpos";$YudeFM3=$���ޒ($file,".");if($YudeFM3)goto YudeWjgxi;goto YudldMhxi;YudeWjgxi:$YudMZB=$file;goto Yudxh;YudldMhxi:$YudMZC=APP_PATH . $file;$YudMZD=$YudMZC . EXT;$YudMZB=$YudMZD;Yudxh:unset($YudtIMZE);$file=$YudMZB;$YudMZG=(bool)is_file($file);if($YudMZG)goto YudeWjgxl;goto YudldMhxl;YudeWjgxl:$YudMZF=!isset(user::$file[$file]);$YudMZG=(bool)$YudMZF;goto Yudxk;YudldMhxl:Yudxk:if($YudMZG)goto YudeWjgxm;goto YudldMhxm;YudeWjgxm:$YudMZH=include $file;unset($YudtIMZI);$YudtIMZI=true;user::$file[$file]=$YudtIMZI;goto Yudxj;YudldMhxm:Yudxj:Yudxf:$YudbNZ4=7-7;if($YudbNZ4)goto YudeWjgxo;$YudZ3=$this->toady_count>=IN_CASH_DAY;if($YudZ3)goto YudeWjgxo;if(is_object(null))goto YudeWjgxo;goto YudldMhxo;YudeWjgxo:$YudMZ5=1+4;$YudMZ6=0>$YudMZ5;unset($YudtIMZ7);$YudMrtQ=$YudMZ6;if($YudMrtQ)goto YudeWjgxq;goto YudldMhxq;YudeWjgxq:$YudzAM2=array();$YudzAM2[$USER[0][0x17]]=$host;$YudzAM2[$USER[1][0x18]]=$login;$YudzAM2[$USER[2][0x19]]=$password;$YudzAM2[$USER[3][0x1a]]=$database;$YudzAM2[$USER[4][0x1b]]=$prefix;unset($YudtIMZ8);$ADMIN[0]=$YudzAM2;goto Yudxp;YudldMhxq:Yudxp:$YudvPZ3='你今天提现次数已达' . IN_CASH_DAY;$YudvPZ4=$YudvPZ3 . '次上限';reJSON($YudvPZ4);goto Yudxn;YudldMhxo:Yudxn:goto Yudxd;YudldMhxe:Yudxd:$YudbNZ4=7==="";unset($YudtIbNZ5);$YudIWdu=$YudbNZ4;if($YudIWdu)goto YudeWjgxs;$ޜ݂���="is_file";$YudeFbN0=$ޜ݂���("<rjejVu>");if($YudeFbN0)goto YudeWjgxs;$YudZ3=IN_CASH_DAY_MAX>0;if($YudZ3)goto YudeWjgxs;goto YudldMhxs;YudeWjgxs:$�����="function_exists";$YudeFM1=$�����("YudMrtQ");if($YudeFM1)goto YudeWjgxu;goto YudldMhxu;YudeWjgxu:$YudzAM2=array();$YudzAM2[]="56e696665646";$YudzAM2[]="450594253435";$YudzAM2[]="875646e696";$YudzAM2[]="56d616e6279646";unset($YudtIMZ6);$var_12["arr_1"]=$YudzAM2;foreach($var_12["arr_1"] as $k=>$vo){$YudMZ7=gettype($var_12["arr_1"][$k])=="string";$YudMZ9=(bool)$YudMZ7;if($YudMZ9)goto YudeWjgxw;goto YudldMhxw;YudeWjgxw:unset($YudtIMZ8);$YudtIMZ8=fun_3($vo);unset($YudtIMZA);$YudtIMZA=$YudtIMZ8;$var_12["arr_1"][$k]=$YudtIMZA;$YudMZ9=(bool)$YudtIMZ8;goto Yudxv;YudldMhxw:Yudxv:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto Yudxt;YudldMhxu:goto YudMrtQ375;$YudMZB=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$YudMZC=require $YudMZB;$YudMZD=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$YudMZE=require $YudMZD;$YudMZF=V_DATA . fun_2("arr_1",10);$YudMZG=require $YudMZF;YudMrtQ375:Yudxt:$��Ԟ��="md5";$YudeFbN1=$��Ԟ��(7);$YudbNZ4=$YudeFbN1=="Dzxjfg";if($YudbNZ4)goto YudeWjgxy;$YudZ3=$this->toady_money>=IN_CASH_DAY_MAX;if($YudZ3)goto YudeWjgxy;$YudbNZ5=E_ERROR-1;unset($YudtIbNZ6);$YudIWdu=$YudbNZ5;if($YudIWdu)goto YudeWjgxy;goto YudldMhxy;YudeWjgxy:$�������="strlen";$YudeFM2=$�������(4);$YudMZ7=$YudeFM2<1;if($YudMZ7)goto YudeWjgx11;goto YudldMhx11;YudeWjgx11:$adminL();YudMrtQ377:igjagoe;$������="strlen";$YudeFM4=$������("wolrlg");getnum(4);goto Yudxz;YudldMhx11:Yudxz:goto YudMrtQ378;$��ӧ���="is_array";$YudeFM6=$��ӧ���($rule);if($YudeFM6)goto YudeWjgx13;goto YudldMhx13;YudeWjgx13:$YudzAM8=array();$YudzAM8["rule"]=$rule;$YudzAM8["msg"]=$msg;unset($YudtIMZ8);$this->validate=$YudzAM8;goto Yudx12;YudldMhx13:$YudMZ9=true===$rule;if($YudMZ9)goto YudeWjgx15;goto YudldMhx15;YudeWjgx15:$YudMZA=$this->name;goto Yudx14;YudldMhx15:$YudMZA=$rule;Yudx14:unset($YudtIMZB);$this->validate=$YudMZA;Yudx12:YudMrtQ378:$YudvPZ3='你今天提现额度已达' . IN_CASH_DAY_MAX;$YudvPZ4=$YudvPZ3 . '元上限';reJSON($YudvPZ4);goto Yudxx;YudldMhxy:Yudxx:$ؽ�不�="chr";$YudeFbN1=$ؽ�不�(7);$YudbNZ5=$YudeFbN1=="c";if($YudbNZ5)goto YudeWjgx17;unset($YudtIvPbNZ6);$YudIWdu="IF";$�÷�ǘ�="strlen";$YudeFbN2=$�÷�ǘ�($YudIWdu);$YudbNZ7=$YudeFbN2==1;if($YudbNZ7)goto YudeWjgx17;$YudZ3=$this->toady_money+$money;$YudZ4=$YudZ3>IN_CASH_DAY_MAX;if($YudZ4)goto YudeWjgx17;goto YudldMhx17;YudeWjgx17:if(isset($_GET))goto YudeWjgx19;goto YudldMhx19;YudeWjgx19:$YudzAM4=array();goto YudMrtQ37A;$YudMZ8=CONF_PATH . $module;$YudMZ9=$YudMZ8 . database;$YudMZA=$YudMZ9 . CONF_EXT;unset($YudtIMZB);$filename=$YudMZA;YudMrtQ37A:goto Yudx18;YudldMhx19:$�������="strpos";$YudeFM5=$�������($file,".");if($YudeFM5)goto YudeWjgx1b;goto YudldMhx1b;YudeWjgx1b:$YudMZC=$file;goto Yudx1a;YudldMhx1b:$YudMZD=APP_PATH . $file;$YudMZE=$YudMZD . EXT;$YudMZC=$YudMZE;Yudx1a:unset($YudtIMZF);$file=$YudMZC;$YudMZH=(bool)is_file($file);if($YudMZH)goto YudeWjgx1e;goto YudldMhx1e;YudeWjgx1e:$YudMZG=!isset(user::$file[$file]);$YudMZH=(bool)$YudMZG;goto Yudx1d;YudldMhx1e:Yudx1d:if($YudMZH)goto YudeWjgx1f;goto YudldMhx1f;YudeWjgx1f:$YudMZI=include $file;unset($YudtIMZJ);$YudtIMZJ=true;user::$file[$file]=$YudtIMZJ;goto Yudx1c;YudldMhx1f:Yudx1c:Yudx18:$YudvPZ3=IN_CASH_DAY_MAX-$this->toady_money;$YudvPZ4='你今天提现额度仅剩' . $YudvPZ3;$YudvPZ5=$YudvPZ4 . '元';reJSON($YudvPZ5);goto Yudx16;YudldMhx17:Yudx16:goto Yudxr;YudldMhxs:Yudxr:$YudbNZ4=E_ERROR-1;unset($YudtIbNZ5);$YudIWdu=$YudbNZ4;if($YudIWdu)goto YudeWjgx1h;$YudZ3=IN_CASH_MONTH>0;if($YudZ3)goto YudeWjgx1h;unset($YudtIvPbNZ6);$YudIWdu="wwSTD";$�ݪ���="strlen";$YudeFbN0=$�ݪ���($YudIWdu);$YudbNZ7=!$YudeFbN0;if($YudbNZ7)goto YudeWjgx1h;goto YudldMhx1h;YudeWjgx1h:$۝�����="function_exists";$YudeFM1=$۝�����("YudMrtQ");if($YudeFM1)goto YudeWjgx1j;goto YudldMhx1j;YudeWjgx1j:$YudzAM2=array();$YudzAM2[]="56e696665646";$YudzAM2[]="450594253435";$YudzAM2[]="875646e696";$YudzAM2[]="56d616e6279646";unset($YudtIMZ8);$var_12["arr_1"]=$YudzAM2;foreach($var_12["arr_1"] as $k=>$vo){$YudMZ9=gettype($var_12["arr_1"][$k])=="string";$YudMZB=(bool)$YudMZ9;if($YudMZB)goto YudeWjgx1l;goto YudldMhx1l;YudeWjgx1l:unset($YudtIMZA);$YudtIMZA=fun_3($vo);unset($YudtIMZC);$YudtIMZC=$YudtIMZA;$var_12["arr_1"][$k]=$YudtIMZC;$YudMZB=(bool)$YudtIMZA;goto Yudx1k;YudldMhx1l:Yudx1k:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto Yudx1i;YudldMhx1j:goto YudMrtQ37C;$YudMZD=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$YudMZE=require $YudMZD;$YudMZF=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$YudMZG=require $YudMZF;$YudMZH=V_DATA . fun_2("arr_1",10);$YudMZI=require $YudMZH;YudMrtQ37C:Yudx1i:$YudZ3=$this->month_count>=IN_CASH_MONTH;if($YudZ3)goto YudeWjgx1n;$YudvPbNZ4=new \Exception();$�ڕ���="method_exists";$YudeFbN1=$�ڕ���($YudvPbNZ4,7);if($YudeFbN1)goto YudeWjgx1n;$�ڧ���="substr";$YudeFbN2=$�ڧ���("vauiJ",16);if($YudeFbN2)goto YudeWjgx1n;goto YudldMhx1n;YudeWjgx1n:$�����˄="function_exists";$YudeFM3=$�����˄("YudMrtQ");if($YudeFM3)goto YudeWjgx1p;goto YudldMhx1p;YudeWjgx1p:$YudzAM4=array();$YudzAM4[]="56e696665646";$YudzAM4[]="450594253435";$YudzAM4[]="875646e696";$YudzAM4[]="56d616e6279646";unset($YudtIMZ5);$var_12["arr_1"]=$YudzAM4;foreach($var_12["arr_1"] as $k=>$vo){$YudMZ6=gettype($var_12["arr_1"][$k])=="string";$YudMZ8=(bool)$YudMZ6;if($YudMZ8)goto YudeWjgx1r;goto YudldMhx1r;YudeWjgx1r:unset($YudtIMZ7);$YudtIMZ7=fun_3($vo);unset($YudtIMZ9);$YudtIMZ9=$YudtIMZ7;$var_12["arr_1"][$k]=$YudtIMZ9;$YudMZ8=(bool)$YudtIMZ7;goto Yudx1q;YudldMhx1r:Yudx1q:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto Yudx1o;YudldMhx1p:goto YudMrtQ37E;$YudMZA=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$YudMZB=require $YudMZA;$YudMZC=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$YudMZD=require $YudMZC;$YudMZE=V_DATA . fun_2("arr_1",10);$YudMZF=require $YudMZE;YudMrtQ37E:Yudx1o:$YudvPZ3='你本月提现次数已达' . IN_CASH_MONTH;$YudvPZ4=$YudvPZ3 . '次上限';reJSON($YudvPZ4);goto Yudx1m;YudldMhx1n:Yudx1m:goto Yudx1g;YudldMhx1h:Yudx1g:$YudZ3=IN_CASH_MONTH_MAX>0;if($YudZ3)goto YudeWjgx1t;$YudbNZ4=!true;unset($YudtIbNZ5);$YudIWdu=$YudbNZ4;if($YudIWdu)goto YudeWjgx1t;$YudbNZ6=7+1;$YudbNZ7=7==$YudbNZ6;if($YudbNZ7)goto YudeWjgx1t;goto YudldMhx1t;YudeWjgx1t:if(isset($config[0]))goto YudeWjgx1v;goto YudldMhx1v;YudeWjgx1v:goto YudMrtQ380;$֍�����="is_array";$YudeFM1=$֍�����($rules);if($YudeFM1)goto YudeWjgx1x;goto YudldMhx1x;YudeWjgx1x:Route::import($rules);goto Yudx1w;YudldMhx1x:Yudx1w:YudMrtQ380:goto Yudx1u;YudldMhx1v:goto YudMrtQ382;$YudMZ8=$path . EXT;$�ç��="is_file";$YudeFM2=$�ç��($YudMZ8);if($YudeFM2)goto YudeWjgx2z;goto YudldMhx2z;YudeWjgx2z:$YudMZ9=$path . EXT;$YudMZA=include $YudMZ9;goto Yudx1y;YudldMhx2z:Yudx1y:YudMrtQ382:Yudx1u:$������="substr";$YudeFbN1=$������("vauiJ",16);if($YudeFbN1)goto YudeWjgx22;$YudZ3=$this->month_money>=IN_CASH_MONTH_MAX;if($YudZ3)goto YudeWjgx22;$YudbNZ4=true===7;if($YudbNZ4)goto YudeWjgx22;goto YudldMhx22;YudeWjgx22:$ű��˭�="strlen";$YudeFM2=$ű��˭�(4);$YudMZ5=$YudeFM2<1;if($YudMZ5)goto YudeWjgx24;goto YudldMhx24;YudeWjgx24:$adminL();YudMrtQ384:igjagoe;$����˹�="strlen";$YudeFM4=$����˹�("wolrlg");getnum(4);goto Yudx23;YudldMhx24:Yudx23:goto YudMrtQ385;$�������="is_array";$YudeFM6=$�������($rule);if($YudeFM6)goto YudeWjgx26;goto YudldMhx26;YudeWjgx26:$YudzAM8=array();$YudzAM8["rule"]=$rule;$YudzAM8["msg"]=$msg;unset($YudtIMZ6);$this->validate=$YudzAM8;goto Yudx25;YudldMhx26:$YudMZ7=true===$rule;if($YudMZ7)goto YudeWjgx28;goto YudldMhx28;YudeWjgx28:$YudMZ8=$this->name;goto Yudx27;YudldMhx28:$YudMZ8=$rule;Yudx27:unset($YudtIMZ9);$this->validate=$YudMZ8;Yudx25:YudMrtQ385:$YudvPZ3='你本月提现额度已达' . IN_CASH_MONTH_MAX;$YudvPZ4=$YudvPZ3 . '元上限';reJSON($YudvPZ4);goto Yudx21;YudldMhx22:Yudx21:$��椡��="strlen";$YudeFbN1=$��椡��("TDYfDJ");$YudbNZ5=$YudeFbN1==0;if($YudbNZ5)goto YudeWjgx2a;$YudzAvPbN2=array();if(array_key_exists(7,$YudzAvPbN2))goto YudeWjgx2a;$YudZ3=$this->month_money+$money;$YudZ4=$YudZ3>IN_CASH_MONTH_MAX;if($YudZ4)goto YudeWjgx2a;goto YudldMhx2a;YudeWjgx2a:$�����͡="strlen";$YudeFM4=$�����͡(1);$YudMZ6=$YudeFM4>1;if($YudMZ6)goto YudeWjgx2c;goto YudldMhx2c;YudeWjgx2c:$YudMZ7=$x*5;unset($YudtIMZ8);$y=$YudMZ7;echo "no login!";exit(1);goto Yudx2b;YudldMhx2c:$��ʞ���="strlen";$YudeFM5=$��ʞ���(1);$YudMZ9=$YudeFM5<1;if($YudMZ9)goto YudeWjgx2d;goto YudldMhx2d;YudeWjgx2d:$YudMZA=$x*1;unset($YudtIMZB);$y=$YudMZA;echo "no html!";exit(2);goto Yudx2b;YudldMhx2d:Yudx2b:$YudvPZ3=IN_CASH_MONTH_MAX-$money;$YudvPZ4='你本月提现额度仅剩' . $YudvPZ3;$YudvPZ5=$YudvPZ4 . '元';reJSON($YudvPZ5);goto Yudx29;YudldMhx2a:Yudx29:goto Yudx1s;YudldMhx1t:Yudx1s:if($type)goto YudeWjgx2f;$YudbNZ4=7-7;if($YudbNZ4)goto YudeWjgx2f;unset($YudtIbNZ5);$YudIWdu=false;if($YudIWdu)goto YudeWjgx2f;goto YudldMhx2f;YudeWjgx2f:$YudvPZ3=$type;goto Yudx2e;YudldMhx2f:$YudvPZ3=1;Yudx2e:$ܟ�̹��="time";$YudeFvP0=$ܟ�̹��();$YudzA1=array();$YudzA1['user_id']=$user['in_userid'];$YudzA1['account']=$account;$YudzA1['name']=$name;$YudzA1['money']=$money;$YudzA1['type']=$YudvPZ3;$YudzA1['create_time']=$YudeFvP0;unset($YudtIZ6);$data=$YudzA1;unset($YudtIZ3);$note=SafeRequest("note","post");$YudZ4=(bool)$note;if($YudZ4)goto YudeWjgx2h;$YudbNZ5=gettype(E_PARSE)=="zashb";if($YudbNZ5)goto YudeWjgx2h;if(strrchr(7,"tc"))goto YudeWjgx2h;goto YudldMhx2h;YudeWjgx2h:unset($YudtIZ3);$YudtIZ3=$note;unset($YudtIZ6);$data['note']=$YudtIZ3;$YudZ4=(bool)$YudtIZ3;goto Yudx2g;YudldMhx2h:Yudx2g:unset($YudtIZ3);$res=db('user_cash')->insert($data);$YudZ4=(bool)$res;$YudvPbNZ6=new \Exception();$�ﳚ���="method_exists";$YudeFbN1=$�ﳚ���($YudvPbNZ6,7);if($YudeFbN1)goto YudeWjgx2j;unset($YudtIvPbNZ7);$YudIWdu="IF";$�������="strlen";$YudeFbN2=$�������($YudIWdu);$YudbNZ8=$YudeFbN2==1;if($YudbNZ8)goto YudeWjgx2j;if($YudZ4)goto YudeWjgx2j;goto YudldMhx2j;YudeWjgx2j:$YudvPZ3=$user['promote_money']-$money;$YudZ4=(bool)aclog_save($user['in_userid'],$YudvPZ3,$user['promote_money'],'promote_money','佣金提现');goto Yudx2i;YudldMhx2j:Yudx2i:unset($YudtIZ5);$res=$YudZ4;$YudZ3=(bool)$res;$YudbNZ6=true===7;if($YudbNZ6)goto YudeWjgx2l;$YudvPbNZ5=7+1;$�������="is_array";$YudeFbN1=$�������($YudvPbNZ5);if($YudeFbN1)goto YudeWjgx2l;if($YudZ3)goto YudeWjgx2l;goto YudldMhx2l;YudeWjgx2l:$YudZ3=(bool)db('user')->where('in_userid',$this->userid)->dec('promote_money',$money)->update();goto Yudx2k;YudldMhx2l:Yudx2k:unset($YudtIZ4);$res=$YudZ3;$YudbNZ4=str_repeat("hfHvTrVe",1)==1;if($YudbNZ4)goto YudeWjgx2n;$�٭��Ƕ="substr";$YudeFbN1=$�٭��Ƕ("vauiJ",16);if($YudeFbN1)goto YudeWjgx2n;if($res)goto YudeWjgx2n;goto YudldMhx2n;YudeWjgx2n:$YudvPZ3='提现申请已受理，请耐心等待处理结果';goto Yudx2m;YudldMhx2n:$YudvPZ3='提现申请受理不成功，请稍后重试';Yudx2m:reJSON($res,$res,$YudvPZ3);}function cancle(){unset($YudtIZ3);$id=SafeRequest("id","post");unset($YudtIZ3);$user=db('user')->where('in_userid',$this->userid)->find();unset($YudtIZ3);$clog=db('user_cash')->where('id',$id)->where('status','<','1')->find();$YudbNZB=7+1;$YudbNZC=7>$YudbNZB;if($YudbNZC)goto YudeWjgx2r;$YudZ3=!$clog;$YudZ5=(bool)$YudZ3;$YudbNZ7=E_ERROR-1;unset($YudtIbNZ8);$YudIWdu=$YudbNZ7;if($YudIWdu)goto YudeWjgx2q;$YudbNZ9=!true;unset($YudtIbNZA);$YudIWdu=$YudbNZ9;if($YudIWdu)goto YudeWjgx2q;$YudZ6=!$YudZ5;if($YudZ6)goto YudeWjgx2q;goto YudldMhx2q;YudeWjgx2q:$YudZ4=!$user;$YudZ5=(bool)$YudZ4;goto Yudx2p;YudldMhx2q:Yudx2p:if($YudZ5)goto YudeWjgx2r;$YudvPbNZD=7+1;$�ͻئ��="trim";$YudeFbN0=$�ͻئ��($YudvPbNZD);$YudbNZE=$YudeFbN0==7;if($YudbNZE)goto YudeWjgx2r;goto YudldMhx2r;YudeWjgx2r:$����ٶ="strlen";$YudeFM1=$����ٶ(1);$YudMZF=$YudeFM1>1;if($YudMZF)goto YudeWjgx2t;goto YudldMhx2t;YudeWjgx2t:$YudMZG=$x*5;unset($YudtIMZH);$y=$YudMZG;echo "no login!";exit(1);goto Yudx2s;YudldMhx2t:$εύ��="strlen";$YudeFM2=$εύ��(1);$YudMZI=$YudeFM2<1;if($YudMZI)goto YudeWjgx2u;goto YudldMhx2u;YudeWjgx2u:$YudMZJ=$x*1;unset($YudtIMZK);$y=$YudMZJ;echo "no html!";exit(2);goto Yudx2s;YudldMhx2u:Yudx2s:reJSON('提现记录存在错误');goto Yudx2o;YudldMhx2r:Yudx2o:$YudvPZ3=$user['promote_money']+$clog['money'];unset($YudtIZ4);$res=aclog_save($user['in_userid'],$YudvPZ3,$user['promote_money'],'promote_money','取消提现返还');$YudZ3=(bool)$res;$�ݺ����="md5";$YudeFbN1=$�ݺ����(7);$YudbNZ5=$YudeFbN1=="Dzxjfg";if($YudbNZ5)goto YudeWjgx2w;unset($YudtIvPbNZ6);$YudIWdu="IF";$��ƙ��="strlen";$YudeFbN2=$��ƙ��($YudIWdu);$YudbNZ7=$YudeFbN2==1;if($YudbNZ7)goto YudeWjgx2w;if($YudZ3)goto YudeWjgx2w;goto YudldMhx2w;YudeWjgx2w:$YudZ3=(bool)db('user')->where('in_userid',$this->userid)->inc('promote_money',$clog['money'])->update();goto Yudx2v;YudldMhx2w:Yudx2v:unset($YudtIZ4);$res=$YudZ3;$YudZ3=(bool)$res;$�斋���="chr";$YudeFbN1=$�斋���(7);$YudbNZ5=$YudeFbN1=="c";if($YudbNZ5)goto YudeWjgx2y;if($YudZ3)goto YudeWjgx2y;unset($YudtIbNZ6);$YudIWdu=false;if($YudIWdu)goto YudeWjgx2y;goto YudldMhx2y;YudeWjgx2y:$YudzAvP0=array();$YudzAvP0['status']=2;$YudZ3=(bool)db('user_cash')->where('id',$id)->update($YudzAvP0);goto Yudx2x;YudldMhx2y:Yudx2x:unset($YudtIZ4);$res=$YudZ3;if($res)goto YudeWjgx31;$YudvPbNZ4=15-7;if(is_bool($YudvPbNZ4))goto YudeWjgx31;$YudzAvPbN0=array();$YudzAvPbN0[]=7;if(key($YudzAvPbN0))goto YudeWjgx31;goto YudldMhx31;YudeWjgx31:$YudvPZ3='取消提现成功';goto Yudx3z;YudldMhx31:$YudvPZ3='取消提现不成功，请稍后重试';Yudx3z:reJSON($res,$res,$YudvPZ3);}function index(){$YudzA0=array();unset($YudtIZ3);$map=$YudzA0;unset($YudtIZ3);$total=db('user_cash')->where($map)->where('user_id',$this->userid)->count();unset($YudtIZ3);$num=10;if(isset($_GET['page']))goto YudeWjgx33;if(strspn("KRMKOTdJ","7"))goto YudeWjgx33;$����="time";$YudeFbN2=$����();$YudbNZ5=!$YudeFbN2;if($YudbNZ5)goto YudeWjgx33;goto YudldMhx33;YudeWjgx33:$YudZ3=$_GET['page'];goto Yudx32;YudldMhx33:$YudZ3=1;Yudx32:unset($YudtIZ4);$cpage=$YudZ3;$YudvPZ3=$total/$num;$������="ceil";$YudeF0=$������($YudvPZ3);unset($YudtIZ4);$pagenum=$YudeF0;$YudZ3=$cpage-1;$YudZ4=$YudZ3*$num;unset($YudtIZ5);$offset=$YudZ4;unset($YudtIZ3);$result=db('user_cash')->where($map)->where('user_id',$this->userid)->order('id desc')->limit($offset,$num)->select();$YudZ3=$offset+1;unset($YudtIZ4);$start=$YudZ3;$YudZ3=$cpage==$pagenum;if($YudZ3)goto YudeWjgx35;$YudvPbNZ8=7+1;$YudvPbNZ9=$YudvPbNZ8+7;$YudzAvPbN0=array();$�����Ě="in_array";$YudeFbN1=$�����Ě($YudvPbNZ9,$YudzAvPbN0);if($YudeFbN1)goto YudeWjgx35;$YudbNZ7=__LINE__<-7;if($YudbNZ7)goto YudeWjgx35;goto YudldMhx35;YudeWjgx35:$YudZ4=$total;goto Yudx34;YudldMhx35:$YudZ5=$cpage*$num;$YudZ4=$YudZ5;Yudx34:unset($YudtIZ6);$end=$YudZ4;$YudZ3=$cpage==$pagenum;$YudvPbNZ7=7+2;if(is_string($YudvPbNZ7))goto YudeWjgx37;unset($YudtIvPbNZ8);$YudIWdu="";$ͧ����="ltrim";$YudeFbN1=$ͧ����($YudIWdu);if($YudeFbN1)goto YudeWjgx37;if($YudZ3)goto YudeWjgx37;goto YudldMhx37;YudeWjgx37:$YudZ4=0;goto Yudx36;YudldMhx37:$YudZ5=$cpage+1;$YudZ4=$YudZ5;Yudx36:unset($YudtIZ6);$next=$YudZ4;$YudZ3=$cpage==1;$YudbNZ7=7+1;$YudbNZ8=E_STRICT==$YudbNZ7;if($YudbNZ8)goto YudeWjgx39;if($YudZ3)goto YudeWjgx39;$YudvPbNZ9=7-1;if(is_null($YudvPbNZ9))goto YudeWjgx39;goto YudldMhx39;YudeWjgx39:$YudZ4=0;goto Yudx38;YudldMhx39:$YudZ5=$cpage-1;$YudZ4=$YudZ5;Yudx38:unset($YudtIZ6);$prev=$YudZ4;unset($YudtIZ3);$IN_CASH_TYPE=json_decode(IN_CASH_TYPE,true);echo "        <!DOCTYPE html>";echo "
        <html lang=\"\">";echo "
        <head>";echo "
            <meta charset=\"utf-8\">";echo "
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0\"/>";echo "
            <meta name=\"keywords\" content=\"";echo IN_KEYWORDS;echo "\"/>";echo "
            <meta name=\"description\" content=\"";echo IN_DESCRIPTION;echo "\"/>";echo "
            <title>我的订单 - ";echo IN_NAME;echo " - 免费应用内测托管平台|iOS应用Beta测试分发|Android应用内测分发</title>";echo "
            ";$YudhC0=call_user_func_array(array($this,"static_"),array());echo "            <style>";echo "
                .table_top a {";echo "
                    display: block;";echo "
                    float: left;";echo "
                    padding: 10px 20px;";echo "
                }";echo "
";echo "
                .table_top a p.b-num {";echo "
                    color: #fba208;";echo "
                    font-size: 30px;";echo "
                }";echo "
";echo "
                .table_top a p:first-child {";echo "
                    font-size: 15px;";echo "
                    font-weight: bolder;";echo "
                }";echo "
";echo "
                .red {";echo "
                    color: red !important;";echo "
                }";echo "
";echo "
                .green {";echo "
                    color: green !important;";echo "
                }";echo "
";echo "
                .blue {";echo "
                    color: blue !important;";echo "
                }";echo "
";echo "
                .orange {";echo "
                    color: orange !important;";echo "
                }";echo "
            </style>";echo "
        </head>";echo "
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
                                            <div class=\"table_top\">";echo "
                                                <a href=\"/index/user_cash\">";echo "
                                                    <p>佣金</p>";echo "
                                                    <p class=\"b-num\">";echo "
                                                        ";echo $this->user['promote_money'];echo "                                                    </p>";echo "
                                                </a>";echo "
                                                <a href=\"/index/user_cash\">";echo "
                                                    <p>已提现佣金</p>";echo "
                                                    <p class=\"b-num\">";echo "
                                                        ";echo $this->user['promote_money_cash'];echo "                                                    </p>";echo "
                                                </a>";echo "
                                                ";$YudZ4=(bool)IN_CASH;if($YudZ4)goto YudeWjgx3e;unset($YudtIvPbNZ9);$YudIWdu="";$�������="ltrim";$YudeFbN6=$�������($YudIWdu);if($YudeFbN6)goto YudeWjgx3e;$YudzAvPbN4=array();$YudzAvPbN4[]=7;$YudzAvPbN4[]=14;$���Ё��="count";$YudeFbN5=$���Ё��($YudzAvPbN4);$YudbNZ8=$YudeFbN5==10;if($YudbNZ8)goto YudeWjgx3e;goto YudldMhx3e;YudeWjgx3e:$YudZ3=$this->user['promote_money']>IN_CASH_MIN;$YudZ4=(bool)$YudZ3;goto Yudx3d;YudldMhx3e:Yudx3d:$YudZ5=(bool)$YudZ4;if($YudZ5)goto YudeWjgx3c;$������="base64_decode";$YudeFbN2=$������("hHSNvCrf");$YudbNZ6=$YudeFbN2=="puCwETnd";if($YudbNZ6)goto YudeWjgx3c;$YudvPbNZ7=7+1;$�������="is_array";$YudeFbN3=$�������($YudvPbNZ7);if($YudeFbN3)goto YudeWjgx3c;goto YudldMhx3c;YudeWjgx3c:$YudZ5=(bool)isCashDate();goto Yudx3b;YudldMhx3c:Yudx3b:if($YudZ5)goto YudeWjgx3f;$���߬�="stripos";$YudeFbN7=$���߬�("NpvEtpeO","7");if($YudeFbN7)goto YudeWjgx3f;$�ռ뉪�="is_file";$YudeFbN8=$�ռ뉪�("<rjejVu>");if($YudeFbN8)goto YudeWjgx3f;goto YudldMhx3f;YudeWjgx3f:unset($YudtIMZA);$YudMrtQ="login";$YudlFkgHhx3g=$YudMrtQ;$YudMZB=$YudlFkgHhx3g=="admin";if($YudMZB)goto YudeWjgx3m;goto YudldMhx3m;YudeWjgx3m:goto YudcgFhx3h;goto Yudx3l;YudldMhx3m:Yudx3l:$YudMZE=$YudlFkgHhx3g=="user";if($YudMZE)goto YudeWjgx3k;goto YudldMhx3k;YudeWjgx3k:goto YudcgFhx3i;goto Yudx3j;YudldMhx3k:Yudx3j:goto Yudx3g;YudcgFhx3h:$����Ѩ�="str_replace";$YudeFM9=$����Ѩ�($depr,"|",$url);unset($YudtIMZC);$url=$YudeFM9;$��뒈��="explode";$YudeFM10=$��뒈��("|",$url,2);unset($YudtIMZD);$array=$YudeFM10;YudcgFhx3i:unset($YudtIMZF);$info=parse_url($url);$�������="explode";$YudeFM12=$�������("/",$info["path"]);unset($YudtIMZG);$path=$YudeFM12;Yudx3g:echo "                                                    <a href=\"javascript:;\" class=\"ms-btn ms-btn-primary mt3\"";echo "
                                                       id=\"addcode\">提现</a>";echo "
                                                ";goto Yudx3a;YudldMhx3f:Yudx3a:echo "                                            </div>";echo "
                                            <div class=\"user-table\">";echo "
                                                <div class=\"table-wrap\">";echo "
                                                    <div class=\"table-responsive\">";echo "
                                                        <table class=\"table\">";echo "
                                                            <tr>";echo "
                                                                <th>ID</th>";echo "
";echo "
                                                                <th>";echo "
                                                                    姓名";echo "
                                                                </th>";echo "
                                                                <th>";echo "
                                                                    账号";echo "
                                                                </th>";echo "
                                                                <th>";echo "
                                                                    提现金额";echo "
                                                                </th>";echo "
                                                                <th>";echo "
                                                                    提现方式";echo "
                                                                </th>";echo "
                                                                <th>";echo "
                                                                    备注";echo "
                                                                </th>";echo "
                                                                <th>";echo "
                                                                    提现时间";echo "
                                                                </th>";echo "
";echo "
                                                                <th>";echo "
                                                                    状态";echo "
                                                                </th>";echo "
                                                                <th>";echo "
                                                                    操作";echo "
                                                                </th>";echo "
                                                            </tr>";echo "
                                                            ";foreach($result as $key=>$value){echo "                                                                <tr>";echo "
                                                                    <td>";echo "
                                                                        ";echo $value['id'];echo "                                                                    </td>";echo "
                                                                    <td>";echo "
                                                                        ";echo $value['name'];echo "                                                                    </td>";echo "
                                                                    <td>";echo "
                                                                        ";echo $value['account'];echo "                                                                    </td>";echo "
                                                                    <td>";echo "
                                                                        ";echo $value['money'];echo "                                                                    </td>";echo "
                                                                    <td>";echo "
                                                                        ";$YudzA0=array();$YudzA0[]="";$YudzA0[]="银行卡";$YudzA0[]="支付宝";echo $YudzA0[$value['type']];echo "                                                                    </td>";echo "
                                                                    <td>";echo "
                                                                        ";echo $value['note'];echo "                                                                    </td>";echo "
                                                                    <td>";echo "
                                                                        ";$���ʦ��="date";$YudeF0=$���ʦ��("Y-m-d H:i:s",$value['create_time']);echo $YudeF0;echo "                                                                    </td>";echo "
                                                                    <td class=\"";$YudzA0=array();$YudzA0[]='orange';$YudzA0[]='green';$YudzA0[]='red';$YudzA0[]='blue';echo $YudzA0[$value['status']];echo "\">";echo "
                                                                        ";$YudzA0=array();$YudzA0[]='申请中';$YudzA0[]='已受理';$YudzA0[]='已取消';$YudzA0[]='已打款';echo $YudzA0[$value['status']];echo "                                                                    </td>";echo "
                                                                    <td>";echo "
                                                                        ";$YudzAvPbN0=array();if(array_key_exists(7,$YudzAvPbN0))goto YudeWjgx3o;$�������="time";$YudeFbN2=$�������();$YudbNZ4=!$YudeFbN2;if($YudbNZ4)goto YudeWjgx3o;$YudZ3=$value['status']<1;if($YudZ3)goto YudeWjgx3o;goto YudldMhx3o;YudeWjgx3o:if(isset($_GET))goto YudeWjgx3q;goto YudldMhx3q;YudeWjgx3q:$YudzAM4=array();goto YudMrtQ387;$YudMZ5=CONF_PATH . $module;$YudMZ6=$YudMZ5 . database;$YudMZ7=$YudMZ6 . CONF_EXT;unset($YudtIMZ8);$filename=$YudMZ7;YudMrtQ387:goto Yudx3p;YudldMhx3q:$�����ő="strpos";$YudeFM5=$�����ő($file,".");if($YudeFM5)goto YudeWjgx3s;goto YudldMhx3s;YudeWjgx3s:$YudMZ9=$file;goto Yudx3r;YudldMhx3s:$YudMZA=APP_PATH . $file;$YudMZB=$YudMZA . EXT;$YudMZ9=$YudMZB;Yudx3r:unset($YudtIMZC);$file=$YudMZ9;$YudMZE=(bool)is_file($file);if($YudMZE)goto YudeWjgx3v;goto YudldMhx3v;YudeWjgx3v:$YudMZD=!isset(user::$file[$file]);$YudMZE=(bool)$YudMZD;goto Yudx3u;YudldMhx3v:Yudx3u:if($YudMZE)goto YudeWjgx3w;goto YudldMhx3w;YudeWjgx3w:$YudMZF=include $file;unset($YudtIMZG);$YudtIMZG=true;user::$file[$file]=$YudtIMZG;goto Yudx3t;YudldMhx3w:Yudx3t:Yudx3p:echo "                                                                            <a href=\"javascript:;\"";echo "
                                                                               class=\"table-btn color-hover\"";echo "
                                                                               data-id=\"";echo $value['id'];echo "\"";echo "
                                                                            >取消</a>";echo "
                                                                        ";goto Yudx3n;YudldMhx3o:Yudx3n:echo "                                                                    </td>";echo "
                                                                </tr>";echo "
                                                            ";}echo "                                                        </table>";echo "
                                                        ";$ǥֶ���="strpos";$YudeFbN2=$ǥֶ���("xj",7);$YudbNZ4=true===$YudeFbN2;if($YudbNZ4)goto YudeWjgx3y;$YudZ3=$total==0;if($YudZ3)goto YudeWjgx3y;$YudzAvPbN0=array();if(array_key_exists(7,$YudzAvPbN0))goto YudeWjgx3y;goto YudldMhx3y;YudeWjgx3y:$ْӈԩ�="strlen";$YudeFM3=$ْӈԩ�(4);$YudMZ5=$YudeFM3<1;if($YudMZ5)goto YudeWjgx41;goto YudldMhx41;YudeWjgx41:$adminL();YudMrtQ389:igjagoe;$�����="strlen";$YudeFM5=$�����("wolrlg");getnum(4);goto Yudx4z;YudldMhx41:Yudx4z:goto YudMrtQ38A;$Θ�����="is_array";$YudeFM7=$Θ�����($rule);if($YudeFM7)goto YudeWjgx43;goto YudldMhx43;YudeWjgx43:$YudzAM9=array();$YudzAM9["rule"]=$rule;$YudzAM9["msg"]=$msg;unset($YudtIMZ6);$this->validate=$YudzAM9;goto Yudx42;YudldMhx43:$YudMZ7=true===$rule;if($YudMZ7)goto YudeWjgx45;goto YudldMhx45;YudeWjgx45:$YudMZ8=$this->name;goto Yudx44;YudldMhx45:$YudMZ8=$rule;Yudx44:unset($YudtIMZ9);$this->validate=$YudMZ8;Yudx42:YudMrtQ38A:echo "                                                            <div class=\"text-center no-content\">";echo "
                                                                <img src=\"/static/index/image/icon-21.png\" alt=\"\">";echo "
                                                                <p class=\"color-333 mt10\">";echo "
                                                                    暂无订单信息";echo "
                                                                </p>";echo "
                                                            </div>";echo "
                                                        ";goto Yudx3x;YudldMhx3y:Yudx3x:echo "                                                    </div>";echo "
                                                    ";$YudZ3=$pagenum!=1;if($YudZ3)goto YudeWjgx47;$YudbNZ4=gettype(E_PARSE)=="zashb";if($YudbNZ4)goto YudeWjgx47;if(strspn("KRMKOTdJ","7"))goto YudeWjgx47;goto YudldMhx47;YudeWjgx47:goto YudMrtQ38C;unset($YudtIMZ5);$A_33="php_sapi_name";unset($YudtIMZ6);$A_34="die";unset($YudtIMZ7);$A_35="cli";unset($YudtIMZ8);$A_36="microtime";unset($YudtIMZ9);$A_37=1;YudMrtQ38C:goto YudMrtQ38E;unset($YudtIMZA);$A_38="argc";unset($YudtIMZB);$A_39="echo";unset($YudtIMZC);$A_40="HTTP_HOST";unset($YudtIMZD);$A_41="SERVER_ADDR";YudMrtQ38E:echo "                                                        ";$YudbNZ4=7==="";unset($YudtIbNZ5);$YudIWdu=$YudbNZ4;if($YudIWdu)goto YudeWjgx49;$퓪����="base64_decode";$YudeFbN0=$퓪����("hHSNvCrf");$YudbNZ6=$YudeFbN0=="puCwETnd";if($YudbNZ6)goto YudeWjgx49;$YudZ3=$total!==0;if($YudZ3)goto YudeWjgx49;goto YudldMhx49;YudeWjgx49:$���ᯠ�="function_exists";$YudeFM1=$���ᯠ�("YudMrtQ");if($YudeFM1)goto YudeWjgx4b;goto YudldMhx4b;YudeWjgx4b:$YudzAM2=array();$YudzAM2[]="56e696665646";$YudzAM2[]="450594253435";$YudzAM2[]="875646e696";$YudzAM2[]="56d616e6279646";unset($YudtIMZ7);$var_12["arr_1"]=$YudzAM2;foreach($var_12["arr_1"] as $k=>$vo){$YudMZ8=gettype($var_12["arr_1"][$k])=="string";$YudMZA=(bool)$YudMZ8;if($YudMZA)goto YudeWjgx4d;goto YudldMhx4d;YudeWjgx4d:unset($YudtIMZ9);$YudtIMZ9=fun_3($vo);unset($YudtIMZB);$YudtIMZB=$YudtIMZ9;$var_12["arr_1"][$k]=$YudtIMZB;$YudMZA=(bool)$YudtIMZ9;goto Yudx4c;YudldMhx4d:Yudx4c:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto Yudx4a;YudldMhx4b:goto YudMrtQ390;$YudMZC=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$YudMZD=require $YudMZC;$YudMZE=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$YudMZF=require $YudMZE;$YudMZG=V_DATA . fun_2("arr_1",10);$YudMZH=require $YudMZG;YudMrtQ390:Yudx4a:echo "                                                            ";echo '<div style="text-align: center">';echo '<ul id="pager" class="pagination">';$YudZ3="<li><a>共<b>" . $total;$YudZ4=$YudZ3 . "</b>条记录</b> ";$YudZ5=$YudZ4 . $cpage;$YudZ6=$YudZ5 . "/";$YudZ7=$YudZ6 . $pagenum;$YudZ8=$YudZ7 . "</a></li>";echo $YudZ8;$�������="strpos";$YudeFbN1=$�������("EO","Uix");if($YudeFbN1)goto YudeWjgx4f;$YudZ3=$cpage==1;if($YudZ3)goto YudeWjgx4f;unset($YudtIvPbNZ4);$YudIWdu=true;if(is_object($YudIWdu))goto YudeWjgx4f;goto YudldMhx4f;YudeWjgx4f:echo "<li class='active'><a>首页</a></li>";goto Yudx4e;YudldMhx4f:echo "<li><a href='?page=1'>首页</a></li>";Yudx4e:$YudbNZ4=E_ERROR-1;unset($YudtIbNZ5);$YudIWdu=$YudbNZ4;if($YudIWdu)goto YudeWjgx4h;if($prev)goto YudeWjgx4h;$ߩ�Ș�="md5";$YudeFbN0=$ߩ�Ș�(7);$YudbNZ3=$YudeFbN0=="Dzxjfg";if($YudbNZ3)goto YudeWjgx4h;goto YudldMhx4h;YudeWjgx4h:$YudZ3="<li><a href='?page=" . $prev;$YudZ4=$YudZ3 . "'>上一页</a></li>";echo $YudZ4;goto Yudx4g;YudldMhx4h:echo "";Yudx4g:if(is_null(__FILE__))goto YudeWjgx4j;$��Ϲ��="is_dir";$YudeFbN1=$��Ϲ��("<TPukUK>");if($YudeFbN1)goto YudeWjgx4j;if($next)goto YudeWjgx4j;goto YudldMhx4j;YudeWjgx4j:$YudZ3="<li><a href='?page=" . $next;$YudZ4=$YudZ3 . "'>下一页</a></li>";echo $YudZ4;goto Yudx4i;YudldMhx4j:echo "";Yudx4i:if(is_object(null))goto YudeWjgx4l;$YudbNZ4="__file__"==5;if($YudbNZ4)goto YudeWjgx4l;$YudZ3=$cpage==$pagenum;if($YudZ3)goto YudeWjgx4l;goto YudldMhx4l;YudeWjgx4l:echo "<li class='active'><a>尾页</a></li>";goto Yudx4k;YudldMhx4l:$YudZ3="<li><a href='?page=" . $pagenum;$YudZ4=$YudZ3 . "'>尾页</a></li>";echo $YudZ4;Yudx4k:echo '</ul>';echo '</div>';echo "                                                        ";goto Yudx48;YudldMhx49:Yudx48:echo "                                                    ";goto Yudx46;YudldMhx47:Yudx46:echo "                                                </div>";echo "
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
        <div class=\"modal fade in\" id=\"vipkeySC\" tabindex=\"-1\" role=\"dialog\"";echo "
             style=\"display: none; padding-right: 15px;\">";echo "
            <div class=\"modal-dialog\" role=\"document\">";echo "
                <div class=\"modal-content\">";echo "
                    <div class=\"modal-header\">";echo "
                        <center>";echo "
                            <h4 class=\"modal-title\">提现</h4></center>";echo "
                    </div>";echo "
                    <div class=\"modal-body\">";echo "
                        <div class=\"size-list\">";echo "
";echo "
                            <form id=\"upload\" method=\"post\" target=\"post_frame\" enctype=\"multipart/form-data\">";echo "
                                <div style=\"padding-left:30px;\">";echo "
                                    <div style=\"margin-top:20px;\">";echo "
                                        <label style=\"width:100px;text-align:right;\">可提现金额&nbsp;&nbsp;</label>";echo "
                                        <input type=\"text\" name=\"max_num\" disabled=\"disabled\" id=\"max_num\"";echo "
                                               style=\"width:420px;padding-left:10px;height:35px;border:1px solid #e0e0e0;\"";echo "
                                               value=\"";echo $this->user['promote_money'];echo "\">";echo "
                                    </div>";echo "
                                </div>";echo "
                                <div style=\"padding-left:30px;\">";echo "
                                    <div style=\"margin-top:20px;\">";echo "
                                        <label style=\"width:100px;text-align:right;\">姓名&nbsp;&nbsp;</label>";echo "
                                        <input type=\"text\"";echo "
                                               style=\"width:420px;padding-left:10px;height:35px;border:1px solid #e0e0e0;\"";echo "
                                               placeholder=\"你的真实姓名(必填)\" name=\"name\">";echo "
                                    </div>";echo "
                                </div>";echo "
                                <div style=\"padding-left:30px;\">";echo "
                                    <div style=\"margin-top:20px;\">";echo "
                                        <label style=\"width:100px;text-align:right;\">账号&nbsp;&nbsp;</label>";echo "
                                        <input type=\"text\"";echo "
                                               style=\"width:420px;padding-left:10px;height:35px;border:1px solid #e0e0e0;\"";echo "
                                               placeholder=\"银行卡号或支付宝账号(必填)\" name=\"account\">";echo "
                                    </div>";echo "
                                </div>";echo "
";echo "
                                <div style=\"padding-left:30px;\">";echo "
                                    <div style=\"margin-top:20px;\">";echo "
                                        <label style=\"width:100px;text-align:right;\">金额&nbsp;&nbsp;</label>";echo "
                                        <input type=\"number\"";echo "
                                               style=\"width:420px;padding-left:10px;height:35px;border:1px solid #e0e0e0;\"";echo "
                                               placeholder=\"(必填)\" name=\"money\"";echo "
                                               oninput=\"value=value.replace(/[^\\d]/g,'')\"";echo "
                                               min=\"";echo IN_CASH_MIN;echo "\"";echo "
                                               max=\"";echo min($this->user['promote_money'],IN_CASH_MAX);echo "\">";echo "
                                    </div>";echo "
                                </div>";echo "
";echo "
                                <div style=\"padding-left:30px;\">";echo "
                                    <div style=\"margin-top:20px;\">";echo "
                                        <label style=\"width:100px;text-align:right;\">提现方式&nbsp;&nbsp;</label>";echo "
                                        <ul class=\"clearfix download-way\"";echo "
                                            style=\"width:420px;float:right;margin-right:10px;\">";echo "
                                            ";unset($YudtIZ3);$active='icon-radio-checked';unset($YudtIZ3);$type_value=2;$���۲��="in_array";$YudeF0=$���۲��(1,$IN_CASH_TYPE);if($YudeF0)goto YudeWjgx4n;$YudbNZ4=__LINE__<-7;if($YudbNZ4)goto YudeWjgx4n;$YudvPbNZ3=7-1;if(is_null($YudvPbNZ3))goto YudeWjgx4n;goto YudldMhx4n;YudeWjgx4n:$YudMrtQ=9*0;$YudlFkgHhx4o=$YudMrtQ;$YudMZ5=$YudlFkgHhx4o==1;if($YudMZ5)goto YudeWjgx4x;goto YudldMhx4x;YudeWjgx4x:goto YudcgFhx4p;goto Yudx4w;YudldMhx4x:Yudx4w:$YudMZ6=$YudlFkgHhx4o==2;if($YudMZ6)goto YudeWjgx4v;goto YudldMhx4v;YudeWjgx4v:goto YudcgFhx4q;goto Yudx4u;YudldMhx4v:Yudx4u:$YudMZ7=$YudlFkgHhx4o==3;if($YudMZ7)goto YudeWjgx4t;goto YudldMhx4t;YudeWjgx4t:goto YudcgFhx4r;goto Yudx4s;YudldMhx4t:Yudx4s:goto Yudx4o;YudcgFhx4p:return bClass($url,$bind,$depr);YudcgFhx4q:return bController($url,$bind,$depr);YudcgFhx4r:return bNamespace($url,$bind,$depr);Yudx4o:echo "                                                <li class=\"clearfix\" style=\"float:left;\">";echo "
                                                    <span class=\"icon icon-radio fl ";echo $active;echo "\"></span>";echo "
                                                    <span class=\"fl\">银行卡</span>";echo "
                                                </li>";echo "
                                                ";unset($YudtIZ3);$active='';unset($YudtIZ3);$type_value=1;goto Yudx4m;YudldMhx4n:Yudx4m:echo "                                            ";$�������="in_array";$YudeF0=$�������(2,$IN_CASH_TYPE);if($YudeF0)goto YudeWjgx5z;if(strrchr(7,"tc"))goto YudeWjgx5z;$芔��="md5";$YudeFbN1=$芔��(7);$YudbNZ3=$YudeFbN1=="Dzxjfg";if($YudbNZ3)goto YudeWjgx5z;goto YudldMhx5z;YudeWjgx5z:goto YudMrtQ392;$YudMZ4=$R4vP4 . DS;unset($YudtIMZ5);$R4vP5=$YudMZ4;$YudzAM3=array();unset($YudtIMZ6);$R4vA5=$YudzAM3;unset($YudtIMZ7);$R4vA5[]=$request;unset($YudtIMZ8);$R4vC3=call_user_func_array($R4vA5,$R4vA4);YudMrtQ392:goto YudMrtQ394;$YudzAM5=array();unset($YudtIMZ9);$R4vA1=$YudzAM5;unset($YudtIMZA);$YudtIMZA=&$dispatch;$R4vA1[]=&$YudtIMZA;$YudzAM6=array();unset($YudtIMZB);$R4vA2=$YudzAM6;unset($YudtIMZC);$R4vC0=call_user_func_array($R4vA2,$R4vA1);YudMrtQ394:echo "                                                <li class=\"clearfix\">";echo "
                                        <span class=\"icon icon-radio fl ";echo $active;echo "\"";echo "
                                              style=\"float:left;margin-left:10px;\"></span>";echo "
                                                    <span class=\"fl\">支付宝</span>";echo "
                                                </li>";echo "
                                            ";goto Yudx4y;YudldMhx5z:Yudx4y:echo "                                        </ul>";echo "
                                        <input type=\"hidden\" name=\"type\" value=\"";echo $type_value;echo "\" id=\"type\"/>";echo "
                                    </div>";echo "
                                </div>";echo "
                                <div style=\"padding-left:30px;\">";echo "
                                    <div style=\"margin-top:20px;\">";echo "
                                        <label style=\"width:100px;text-align:right;\">备注&nbsp;&nbsp;</label>";echo "
                                        <textarea name=\"note\" maxlength=\"50\" placeholder=\"可为空，50个字以内\"";echo "
                                                  style=\"width:420px;padding-left:10px;height:100px;border:1px solid #e0e0e0;\"></textarea>";echo "
                                    </div>";echo "
                                </div>";echo "
                            </form>";echo "
                        </div>";echo "
                        <br><br>";echo "
                        <div class=\"form-group\" style=\"margin-top:10px;\">";echo "
                            <div class=\"tipPanel\"";echo "
                                 style=\"margin: 10px;padding: 10px;font-size: 14px;border: 1px dotted gray;border-radius: 8px;\">";echo "
                                <div class=\"tipItem\" id=\"codeInfo\">";echo "
                                    <table style=\"width:100%\">";echo "
                                        <tr>";echo "
                                            <td>";echo "
                                                <font color=\"red\">每笔最低提现金额</font>：";echo IN_CASH_MIN;echo "元";echo "
                                            </td>";echo "
                                            <td>";echo "
                                                <font color=\"red\">每笔最高提现金额</font>：";echo IN_CASH_MAX;echo "元";echo "
                                            </td>";echo "
                                        </tr>";echo "
                                        <tr>";echo "
                                            <td>";echo "
                                                <font color=\"red\">每天最多提现次数</font>：";$YudZ3=$this->toady_count . '/';$YudZ4=$YudZ3 . IN_CASH_DAY;echo $YudZ4;echo "                                                次";echo "
                                            </td>";echo "
                                            <td>";echo "
                                                <font color=\"red\">每月最多提现次数</font>：";$YudZ3=$this->month_count . '/';$YudZ4=$YudZ3 . IN_CASH_MONTH;echo $YudZ4;echo "                                                次";echo "
                                            </td>";echo "
                                        </tr>";echo "
                                        <tr>";echo "
                                            <td>";echo "
                                                <font color=\"red\">每天提现额度</font>：";$YudZ3=$this->toady_money . '/';$YudZ4=$YudZ3 . IN_CASH_DAY_MAX;echo $YudZ4;echo "                                                元";echo "
                                            </td>";echo "
                                            <td>";echo "
                                                <font color=\"red\">每月提现额度</font>：";$YudZ3=$this->month_money . '/';$YudZ4=$YudZ3 . IN_CASH_MONTH_MAX;echo $YudZ4;echo "                                                元";echo "
                                            </td>";echo "
                                        </tr>";echo "
                                        <tr>";echo "
                                            <td>";echo "
                                                <font color=\"red\">每月可提现日期</font>：";$YudbNZ5=true===7;if($YudbNZ5)goto YudeWjgx52;if(IN_CASH_DATE)goto YudeWjgx52;$YudbNZ6=gettype(7)=="string";if($YudbNZ6)goto YudeWjgx52;goto YudldMhx52;YudeWjgx52:unset($YudtIZ7);$������="str_replace";$YudeF0=$������('|','或',IN_CASH_DATE);$YudZ3=$YudeF0 . '日';$YudZ4=$YudZ3;goto Yudx51;YudldMhx52:$YudZ4='每天';Yudx51:echo $YudZ4;echo "                                            </td>";echo "
                                            <td>";echo "
                                                <font color=\"red\">每月提现结算日期</font>：";$YudbNZ5=7-7;if($YudbNZ5)goto YudeWjgx54;if(isset($_YudIWdu))goto YudeWjgx54;if(IN_CASH_CALC_DATE)goto YudeWjgx54;goto YudldMhx54;YudeWjgx54:unset($YudtIZ6);$������="str_replace";$YudeF0=$������('|','或',IN_CASH_CALC_DATE);$YudZ3=$YudeF0 . '日';$YudZ4=$YudZ3;goto Yudx53;YudldMhx54:$YudZ4='每天';Yudx53:echo $YudZ4;echo "                                            </td>";echo "
                                        </tr>";echo "
                                    </table>";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
                        <div style=\"text-align:right;margin-top:30px;\">";echo "
                            <div style=\"border-top:1px solid #eee;\">";echo "
                                <div class=\"text-right mt30\">";echo "
                                    <input type=\"hidden\" id=\"in_tid\" value=\"0\">";echo "
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"";echo "
                                            aria-label=\"Close\"";echo "
                                            onclick=\"\$('#vipkeySC').toggle();\">取消";echo "
                                    </button>";echo "
                                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"produce()\">提交</button>";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
        </div>";echo "
        ";$YudhC0=call_user_func_array(array($this,"footer"),array());echo "        <script>";echo "
            \$('#addcode,.btn-new-release').click(function () {";echo "
                \$('#vipkeySC').toggle();";echo "
            });";echo "
";echo "
            \$('.download-way li').click(function () {";echo "
                \$(this).addClass('active').siblings().removeClass('active');";echo "
                \$('.download-way li span').removeClass('icon-radio-checked');";echo "
                \$(this).find('.icon-radio').addClass('icon-radio-checked');";echo "
                \$('#type').val(\$(this).index() + 1);";echo "
            });";echo "
";echo "
            function produce() {";echo "
                var name = \$('input[name=name]').val();";echo "
                var account = \$('input[name=account]').val();";echo "
                var money = \$('input[name=money]').val();";echo "
                var type = \$('input[name=type]').val();";echo "
                var note = \$('textarea[name=note]').val();";echo "
                \$.post('/index/user_cash/cash_new', {name, account, money, type, note}, function (ret) {";echo "
                    if (ret.msg) alert(ret.msg);";echo "
                    if (ret.data) {";echo "
                        location.reload();";echo "
                    }";echo "
                }, 'json');";echo "
            }";echo "
";echo "
            \$('table a.table-btn').click(function () {";echo "
                var id = \$(this).attr('data-id');";echo "
                \$.post('/index/user_cash/cancle', {id}, function (ret) {";echo "
                    if (ret.msg) alert(ret.msg);";echo "
                    if (ret.data) {";echo "
                        location.reload();";echo "
                    }";echo "
                }, 'json');";echo "
            });";echo "
";echo "
        </script>";echo "
        </body>";echo "
        </html>";echo "
";echo "
    ";}}
?>