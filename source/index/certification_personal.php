<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-11-16 16:13:54
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;class certification_personal extends BaseUser{function index(){$O5hAW=$this->user['in_type']==2;if($O5hAW)goto O5heWjgx2;goto O5hldMhx2;O5heWjgx2:redirect('/index/certification_company');goto O5hx1;O5hldMhx2:O5hx1:$O5hAX=(bool)isset($_GET['ac']);if($O5hAX)goto O5heWjgx5;goto O5hldMhx5;O5heWjgx5:$O5hAW=$_GET['ac']=='redo';$O5hAX=(bool)$O5hAW;goto O5hx4;O5hldMhx5:O5hx4:if($O5hAX)goto O5heWjgx6;goto O5hldMhx6;O5heWjgx6:unset($O5htIAW);$this->user['in_verify']=0;goto O5hx3;O5hldMhx6:O5hx3:echo "        <!DOCTYPE html>
        <html lang=\"\">
        <head>
            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0\"/>
            <meta name=\"keywords\" content=\"";echo IN_KEYWORDS;echo "\"/>
            <meta name=\"description\" content=\"";echo IN_DESCRIPTION;echo "\"/>
            <title>个人实名认证 - ";echo IN_NAME;echo " - 免费应用内测托管平台|iOS应用Beta测试分发|Android应用内测分发</title>
            ";$O5hhC0=call_user_func_array(array($this,"static_"),array());echo "        </head>
        <body>
        ";$O5hhC0=call_user_func_array(array($this,"header"),array());echo "        <div class=\"real-name-wrap\">
            <div class=\"container\">
                <div class=\"crumbs\">
                    <a href=\"/\">首页</a>
                    <span>/</span>
                    <a href=\"/index/certification\">实名认证</a>
                    <span>/</span>个人认证
                </div>
                ";$O5hAW=$this->user['in_verify']==2;if($O5hAW)goto O5heWjgx8;goto O5hldMhx8;O5heWjgx8:echo "                    <div class=\"real-name real-name-error\">
                        <div class=\"top\">
                            <ul class=\"clearfix\">
                                <li class=\"clearfix active\">
                                    <span class=\"fl num\">1</span>
                                    <span class=\"fl text\">选择身份</span>
                                </li>
                                <li>
                                    <dl class=\"clearfix\">
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                    </dl>
                                </li>
                                <li class=\"clearfix active\">
                                    <span class=\"fl num\">2</span>
                                    <span class=\"fl text\">填写资料</span>
                                </li>
                                <li>
                                    <dl class=\"clearfix\">
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                    </dl>
                                </li>
                                <li class=\"clearfix\">
                                    <span class=\"fl num\">3</span>
                                    <span class=\"fl text\">完成认证</span>
                                </li>
                            </ul>
                        </div>
                        <div class=\"con con3\">
                            <div class=\"con3-top\">
                                <div class=\"text-center\">
                                    <img src=\"";echo IN_PATH;echo "static/index/image/icon-11.png\">
                                </div>
                                <h3 class=\"text-center\">个人 实名认证已经提交!</h3>
                                <h4 class=\"text-center\">一个工作日内完成认证</h4>
                            </div>
                        </div>
                    </div>
                ";goto O5hx7;O5hldMhx8:$O5hAW=$this->user['in_verify']==1;if($O5hAW)goto O5heWjgx9;goto O5hldMhx9;O5heWjgx9:echo "                    <div class=\"real-name real-name-error\">
                        <div class=\"top\">
                            <ul class=\"clearfix\">
                                <li class=\"clearfix active\">
                                    <span class=\"fl num\">1</span>
                                    <span class=\"fl text\">选择身份</span>
                                </li>
                                <li>
                                    <dl class=\"clearfix\">
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                    </dl>
                                </li>
                                <li class=\"clearfix active\">
                                    <span class=\"fl num\">2</span>
                                    <span class=\"fl text\">填写资料</span>
                                </li>
                                <li>
                                    <dl class=\"clearfix\">
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                    </dl>
                                </li>
                                <li class=\"clearfix active\">
                                    <span class=\"fl num\">3</span>
                                    <span class=\"fl text\">完成认证</span>
                                </li>
                            </ul>
                        </div>
                        <div class=\"con con3\">
                            <div class=\"con3-top\">
                                <div class=\"text-center\">
                                    <img src=\"";echo IN_PATH;echo "static/index/image/icon-15.png\">
                                </div>
                                <h3 class=\"text-center\">恭喜您，个人 实名认证成功! </h3>
                            </div>
                        </div>
                    </div>
                ";goto O5hx7;O5hldMhx9:$O5hAW=$this->user['in_verify']==3;if($O5hAW)goto O5heWjgxa;goto O5hldMhxa;O5heWjgxa:echo "                    <div class=\"real-name real-name-error\">
                        <div class=\"top\">
                            <ul class=\"clearfix\">
                                <li class=\"clearfix active\">
                                    <span class=\"fl num\">1</span>
                                    <span class=\"fl text\">选择身份</span>
                                </li>
                                <li>
                                    <dl class=\"clearfix\">
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                    </dl>
                                </li>
                                <li class=\"clearfix active\">
                                    <span class=\"fl num\">2</span>
                                    <span class=\"fl text\">填写资料</span>
                                </li>
                                <li>
                                    <dl class=\"clearfix\">
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                    </dl>
                                </li>
                                <li class=\"clearfix\">
                                    <span class=\"fl num\">3</span>
                                    <span class=\"fl text\">完成认证</span>
                                </li>
                            </ul>
                        </div>
                        <div class=\"con con3\">
                            <div class=\"con3-top\">
                                <div class=\"text-center\">
                                    <img src=\"";echo IN_PATH;echo "static/index/image/icon-16.png\">
                                </div>
								<h3 class=\"text-center\">个人 实名认证失败!</h3>
								<h4 class=\"text-center\">失败原因：<b class=\"color-red\">";echo $this->user['in_info'];echo "</b></h4>
								<div class=\"text-center mt30\"><a href=\"/index/certification_personal?ac=redo\" class=\"ms-btn ms-btn-primary\">重新提交认证</a></div>
                            </div>
                        </div>
                    </div>
                ";goto O5hx7;O5hldMhxa:echo "                    <div class=\"real-name\">
                        <div class=\"top\">
                            <ul class=\"clearfix\">
                                <li class=\"clearfix active\">
                                    <span class=\"fl num\">1</span>
                                    <span class=\"fl text\">选择身份</span>
                                </li>
                                <li>
                                    <dl class=\"clearfix\">
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                    </dl>
                                </li>
                                <li class=\"clearfix active\">
                                    <span class=\"fl num\">2</span>
                                    <span class=\"fl text\">填写资料</span>
                                </li>
                                <li>
                                    <dl class=\"clearfix\">
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                        <dd></dd>
                                    </dl>
                                </li>
                                <li class=\"clearfix\">
                                    <span class=\"fl num\">3</span>
                                    <span class=\"fl text\">完成认证</span>
                                </li>
                            </ul>
                        </div>
                        <div class=\"con con2 form-horizontal\">
                            <form class=\"form-horizontal\" id=\"certificationForm\" role=\"form\" id=\"inputValid\"
                                  novalidate=\"novalidate\" method=\"post\">
                                <div class=\"data-uploading\">
                                    <div class=\"warn-prompt mb40\">
                                        <span class=\"icon-warn iconfont\"></span>我们会严格保障您的个人信息安全。
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-sm-2\">
                                            <span class=\"mr10\">*</span>手机号码</label>
                                        <div class=\"col-sm-8\">
                                            <input class=\"form-control\" type=\"text\"
                                                   placeholder=\"";echo $this->user['in_mobile'];echo "\" disabled>
                                        </div>
                                        <div class=\"col-sm-2\">
                                            <a href=\"/index/bind_mobile\" target=\"_blank\" type=\"button\"
                                               class=\"ms-btn ms-btn-default\">绑定
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-sm-2\"><span class=\"mr10\">*</span>邮箱地址</label>
                                        <div class=\"col-sm-8\">
                                            <input class=\"form-control\" type=\"text\" placeholder=\"请填写邮箱地址\"
                                                   value=\"";echo $this->user['in_mail'];echo "\" name=\"email\"
                                                   disabled>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-sm-2 hidden-xs\"></label>
                                        <div class=\"col-sm-5\">
                                            <input name=\"code\" class=\"form-control\" type=\"text\" placeholder=\"请填写邮箱验证码\">
                                        </div>
                                        <div class=\"col-sm-3 text-right\">
                                            <button type=\"button\" class=\"ms-btn ms-btn-primary w-block\" id=\"sendcode\">
                                                获取邮箱验证码
                                            </button>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-sm-2\"><span class=\"mr10\">*</span>真实姓名</label>
                                        <div class=\"col-sm-8\">
                                            <input class=\"form-control\" type=\"text placeholder=\" 请填写真实姓名\"
                                            name=\"real_nick\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-sm-2\"><span class=\"mr10\">*</span>身份证号码</label>
                                        <div class=\"col-sm-8\">
                                            <input class=\"form-control\" type=\"text placeholder=\" 请填写身份证号码\"
                                            name=\"real_card\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-sm-2\"><span class=\"mr10\">*</span>身份证图片</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"color-danger font12 mt10\">
                                                应监管部门要求，网上发布APP必须进行实名登记，我们采用了高于行业标准的要求来保障您的信息安全，为了进一步的保护您的个人信息，建议您在上传的实名信息中添加水印文字-仅供实名认证使用。
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-sm-2\"></label>
                                        <div class=\"col-sm-4\">
                                            <div class=\"upload-img1\">
                                                <input type=\"file\" class=\"thumbnail\" name=\"card_front\"
                                                       accept=\"image/jpeg, image/png, image/jpg\">
                                                <div class=\"text\">
                                                    上传身份证正面照片
                                                </div>
                                                <div class=\"reset\">
                                                    重新上传
                                                </div>
                                                <div class=\"water-mark\">
                                                    <img src=\"/static/index/image/watermark.png\" class=\"img-responsive\">
                                                </div>
                                            </div>
                                            <div class=\"upload-img1\">
                                                <input type=\"file\" class=\"thumbnail\" name=\"card_back\"
                                                       accept=\"image/jpeg, image/png, image/jpg\">
                                                <div class=\"text\">
                                                    上传身份证反面照片
                                                </div>
                                                <div class=\"reset\">
                                                    重新上传
                                                </div>
                                                <div class=\"water-mark\">
                                                    <img src=\"/static/index/image/watermark.png\" class=\"img-responsive\">
                                                </div>
                                            </div>
                                            <div class=\"upload-img1\">
                                                <input type=\"file\" class=\"thumbnail\" name=\"card_hand\"
                                                       accept=\"image/jpeg, image/png, image/jpg\">
                                                <div class=\"text\">
                                                    上传手持身份证照片
                                                </div>
                                                <div class=\"reset\">
                                                    重新上传
                                                </div>
                                                <div class=\"water-mark\">
                                                    <img src=\"/static/index/image/watermark.png\" class=\"img-responsive\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-5\">
                                            <img src=\"/static/index/image/img-2.png\" class=\"img-responsive fr\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-sm-2\"></label>
                                        <div class=\"col-sm-9\">
                                            <p class=\"color-danger\">请上传3张身份证图片</p>
                                            <dl class=\"color-333 mt10\">
                                                <dt>提示：</dt>
                                                <dd class=\"lh28\">1. 单张照片大小不超过10M，支持PNG、JPG格式；</dd>
                                                <dd class=\"lh28\">2. 所上传的图片，保证文字和图片、人像清晰可见</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class=\"text-center\">
                                        <a href=\"JavaScript:history.go(-1)\" class=\"ms-btn color-hover\">上一步</a>
                                        <button type=\"button\" class=\"ms-btn ms-btn-primary submit ml10\" id=\"btn_submit\">
                                            提交
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                ";O5hx7:echo "            </div>
        </div>
        <div class=\"modal fade ms-modal\" id=\"msModal2\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog modal-sm\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <div class=\"text-center\">
                            <div>
                                <span class=\"icon icon-modal-error2\"></span>
                            </div>
                            <p class=\"color-333 bold font16 mt5 modal-title-msg\">
                            </p>
                            <p class=\"color-333 mt5 modal-content-msg\">
                            </p>
                            <div class=\"mt15\">
                                <button type=\"button\" class=\"ms-btn ms-btn-default w90\" data-dismiss=\"modal\">确定</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal fade ms-modal\" id=\"msModal3\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog modal-sm\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <div class=\"text-center\">
                            <div>
                                <span class=\"icon icon-modal-success1\"></span>
                            </div>
                            <p class=\"color-333 bold font16 mt5 modal-title-msg\">
                            </p>
                            <p class=\"color-333 mt5 modal-content-msg\">
                            </p>
                            <div class=\"mt15\">
                                <button type=\"button\" id=\"dtm_submit\" class=\"ms-btn ms-btn-default w90\"
                                        data-dismiss=\"modal\">
                                    确定
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal fade ms-modal auto-hide-modal\" id=\"msModal8\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog modal-sm\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <div class=\"text-center\">
                            <div class=\"auto-hide\">
                                <span class=\"icon icon-modal-success3\"></span>
                                <div class=\"mt5\">
                                    提交中，请稍后...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src=\"/static/index/js/jquery.form.js\"></script>
        <script src=\"/static/index/js/jquery.validate.min.js\"></script>
        <script src=\"/static/index/js/validate/message_zh.js\"></script>
        <script>
            // Layout.initUploadPic();
            var countdown = 60;

            function set_time(dom) {
                if (countdown == 0) {
                    dom.attr('disabled', false);
                    dom.text('获取验证码');
                    countdown = 60;
                } else {
                    dom.attr('disabled', true);
                    dom.text('重新获取(' + countdown + ')');
                    countdown--;
                    setTimeout(function () {
                        set_time(dom)
                    }, 1000)
                }
            }

            \$(function () {
                \$('body,html').css('scrollTop', 0);
                \$(\".form-horizontal\").on('click', '#sendcode', function () {
                    // 获取邮箱
                    _this = \$(this);
                    set_time(_this);
                    if (\$('input[name=\"email\"]').valid()) {
                        email = \$('input[name=\"email\"]').val();
                        \$.post('/index/ajax/send', {email: email}, function (result) {
                            if (result.code == 200) {

                            } else {
                                \$('#msModal2').find('.modal-content-msg').text(result.msg);
                                \$('#msModal2').modal('show');
                                _this.attr('disabled', false);
                                _this.text('获取验证码');
                                countdown = 0;
                            }
                        }, 'json');
                    }
                })
            });
            Upload.img({
                el: \".thumbnail\",
                prefix: \"card\"
            });
            \$(\"#btn_submit\").click(function () {
                if (Upload.isProcess()) {
                    return false;
                }
                var email = \$(\"input[name='email']\").val();
                if (!email) {
                    \$('#msModal2').find('.modal-content-msg').text('请填写邮箱');
                    \$('#msModal2').modal('show');
                    return false;
                }
                var code = \$(\"input[name='code']\").val();
                if (!code) {
                    \$('#msModal2').find('.modal-content-msg').text('请填写邮箱验证码');
                    \$('#msModal2').modal('show');
                    return false;
                }
                var real_nick = \$(\"input[name=real_nick]\").val();
                var real_card = \$(\"input[name=real_card]\").val();
                var card_front = \$(\"input[name=card_front]\").attr(\"data-key\");
                var card_back = \$(\"input[name=card_back]\").attr(\"data-key\");
                var card_hand = \$(\"input[name=card_hand]\").attr(\"data-key\");
                \$('#msModal8').modal('show');
                \$.post(\"/index/ajax_profile/send_verify\", {
                        email: email,
                        code: code,
                        real_nick: real_nick,
                        real_card: real_card,
                        card_front: card_front,
                        card_back: card_back,
                        card_hand: card_hand
                    }, function (res) {
                        \$('#msModal8').modal('hide');
                        if (res.code != 200) {
                            \$('#msModal2').find('.modal-content-msg').text(res.msg);
                            \$('#msModal2').modal('show');
                            return false;
                        }
                        \$('#msModal3').find('.modal-content-msg').text('提交成功，请等待审核');
                        \$('#msModal3').modal('show');
                        return false;
                    }
                    , 'json');
            });
            \$(\"#dtm_submit\").click(function () {
                window.location.reload();
            });
        </script>
        ";$O5hhC0=call_user_func_array(array($this,"footer"),array());echo "        </body>
        </html>

        ";}}
?>