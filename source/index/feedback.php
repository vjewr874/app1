<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-31 21:57:37
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;class feedback extends Base{function index(){echo "        <!DOCTYPE html>
        <html lang=\"\">
        <head>
            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0\"/>
            <meta name=\"keywords\" content=\"";echo IN_KEYWORDS;echo "\"/>
            <meta name=\"description\" content=\"";echo IN_DESCRIPTION;echo "\"/>
            <title>建议和反馈 - ";echo IN_NAME;echo " - 免费应用内测托管平台|iOS应用Beta测试分发|Android应用内测分发</title>
            ";$YudhC0=call_user_func_array(array($this,"static_"),array());echo "        </head>
        <body>
        ";$YudhC0=call_user_func_array(array($this,"header"),array());echo "        <div class=\"bg-body\">
            <div class=\"container\">
                <div class=\"feedback-wrap\">
                    <div class=\"feedback\">
                        <div class=\"row clearfix\">
                            <div class=\"col-sm-10\">
                                <div class=\"tit\">
                                    我们珍视您的每个建议，您的建议是我们产品不断改进的动力！
                                </div>
                                <div class=\"form-group\">
                                    <label><span>*</span>产品类型</label>
                                    <ul class=\"clearfix type radio-round\">
                                        <li data-type=\"1\" class=\"active\"><span
                                                    class=\"icon icon-radio icon-radio-checked\"></span>企业签名
                                        </li>
                                        <li data-type=\"2\"><span class=\"icon icon-radio\"></span>封装APP</li>
                                        <li data-type=\"3\"><span class=\"icon icon-radio\"></span>分发下载</li>
                                        <li data-type=\"4\"><span class=\"icon icon-radio\"></span>其他</li>
                                    </ul>
                                </div>
                                <div class=\"form-group\">
                                    <label><span>*</span>问题反馈</label>
                                    <textarea class=\"form-control\" rows=\"5\" placeholder=\"请在这里描述您遇到的问题\"></textarea>
                                </div>
                                <div class=\"form-group\">
                                    <label>问题截图</label>
                                    <div class=\"feedback-img clearfix upload-img-more\">
                                        <div class=\"fl upload-img\">
                                            <input type=\"file\" class=\"upload\" name=\"\" value=\"\">
                                            <div class=\"text\">
                                                上传图片
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label><span>*</span>您的QQ</label>
                                    <input type=\"text\" class=\"form-control\" name=\"qq\"
                                           placeholder=\"请留下您的联系方式，我们可能与您联系，一起参与到我们的产品改进中。\">
                                </div>
                                <div class=\"text-center\">
                                    <button class=\"ms-btn ms-btn-primary submit\" type=\"button\">提交</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            Layout.initUploadPics({
                imgLength: 6
            });
            tab.radioRound({
                el: \".radio-round li\",
                checkedClass: \"icon-radio-checked\"
            });
            \$(function () {
                \$(\".feedback\").find(\"button\").on('click', function () {
                    var type = \$(\".feedback .type li.active\").data('type');
                    var content = \$(\".feedback textarea\").val();
                    var screenshots = {};
                    \$(\".feedback .uploaded-img\").find(\"img\").each(function (index) {
                        screenshots[index] = \$(this).attr('src');
                    });
                    var qq = \$(\".feedback\").find(\"input[name='qq']\").val();
                    formData = new FormData();
                    formData.append('type', type);
                    formData.append('content', content);
                    formData.append('screenshots', JSON.stringify(screenshots));
                    formData.append('qq', qq);
                    \$.ajax({
                        url: '/index/ajax/feedback',
                        type: 'POST',
                        dataType: 'json',
                        cache: false,
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function (result) {
                            if (result.code == 200) {
                                alert('感谢您的反馈', function () {
                                    window.location.href = '/'
                                });
                            } else {
                                alert(result.msg);
                            }
                        }
                    });
                });
            })
        </script>
        ";$YudhC0=call_user_func_array(array($this,"footer"),array());echo "        </body>
        </html>

        ";}}
?>