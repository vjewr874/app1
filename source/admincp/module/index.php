<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-11-16 16:13:54
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\admin;class index extends Base{function initialize(){parent::initialize();}function index(){$O5hhC0=call_user_func_array(array($this,"Administrator"),array(1));echo "        <!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">
        <html lang=\"\">
        <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";echo IN_CHARSET;echo "\"/>
            <title>";echo IN_NAME;echo "管理中心</title>
            <link href=\"/static/admincp/css/main.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
            <style type=\"text/css\">
                #mod_dialog {
                    display: none
                }

                .dialog_mask {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 10000;
                    display: -webkit-box;
                    -webkit-box-pack: center;
                    -webkit-box-align: center;
                    background: rgba(0, 0, 0, .4)
                }

                .dialog_body {
                    width: 563px;
                    padding-top: 20px;
                    border-radius: 7px;
                    background: #fff
                }

                .dialog_tit {
                    margin: 0;
                    line-height: 22px;
                    text-align: center;
                    font-size: 17px;
                    color: #000
                }

                .dialog_cont {
                    margin: 10px 80px 15px;
                    overflow: hidden;
                    padding: 0
                }

                .dialog_txt {
                    margin: 0 30px 5px;
                    line-height: 16px;
                    text-align: center;
                    font-size: 14px;
                    color: #000
                }

                .dialog_txt a {
                    text-decoration: none;
                    color: #000
                }

                .dialog_operate {
                    position: relative;
                    display: -webkit-box
                }

                .dialog_operate:before {
                    content: \"\";
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    z-index: 1;
                    height: 1px;
                    background: rgba(0, 0, 0, .3)
                }

                .dialog_operate .dialog_btn {
                    display: block;
                    cursor: pointer;
                    -webkit-box-flex: 1;
                    position: relative;
                    height: 44px;
                    line-height: 44px;
                    text-decoration: none;
                    text-align: center;
                    font-size: 17px;
                    color: #157efb;
                    -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
                }

                .dialog_operate .dialog_btn:nth-child(2):before {
                    content: \"\";
                    position: absolute;
                    left: 0;
                    top: 0;
                    bottom: 0;
                    z-index: 1;
                    width: 1px;
                    background: rgba(0, 0, 0, .3)
                }

                .dialog_operate .dialog_btn span {
                    display: inline-block;
                    width: 120px
                }

                .dialog_operate .dialog_btn_strong {
                    font-weight: bold
                }

                @media only screen and (-webkit-min-device-pixel-ratio: 1.5) {
                    .dialog_operate:before {
                        -webkit-transform: scaleY(.5)
                    }

                    .dialog_operate .btn:nth-child(2):before {
                        -webkit-transform: scaleX(.5)
                    }
                }

                .SuspendedBall {
                    position: fixed;
                    width: 50px;
                    height: 50px;
                    background: #3071a9;
                    border-radius: 10px;
                    -moz-border-radius: 10px;
                    -webkit-border-radius: 10px;
                    filter: alpha(opacity=50);
                    -moz-opacity: .5;
                    opacity: .5;
                    z-index: 999;
                    cursor: pointer;
                    right: 0;
                    bottom: 0
                }

                .SuspendedBall > div {
                    width: 30px;
                    height: 30px;
                    margin: 10px;
                    background: #fff;
                    border-radius: 15px;
                    -moz-border-radius: 15px;
                    -webkit-border-radius: 15px;
                    filter: alpha(opacity=80);
                    -moz-opacity: .8;
                    opacity: .8;
                    background-image: url(\"static/pack/chat/icon/avatar.png\");
                    background-repeat: no-repeat;
                    background-size: 80% auto;
                    background-position-x: 50%;
                    background-position-y: 50%
                }

                .talk_mask {
                    display: none;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 10000;
                    -webkit-box-pack: center;
                    -webkit-box-align: center
                }

                .talk_body {
                    position: fixed;
                    background: #F2F9FD
                }
            </style>
            <script src=\"static/admincp/js/common.js\"></script>
        </head>
        <body style=\"margin: 0px\" scroll=\"no\">
        <div id=\"notice\">
            <a onclick=\"\$('main').src='?c=update&setup=checkup'\">
                程序有新版本发布<span>在线升级[<b id=\"build\" style=\"color:red\"></b>]</span>
            </a>
        </div>
        <table id=\"frametable\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" height=\"100%\">
            <tr>
                <td colspan=\"2\" height=\"45\">
                    <div class=\"mainhd\">
                        <a href=\"?c=index\" class=\"logo\">管理后台</a>
                        <div class=\"uinfo\" id=\"frameuinfo\">
                            <p>您好, <em>";echo $_COOKIE['in_adminname'];echo "</em> [<a href=\"?a=logout\">退出</a>]</p>
                            <p class=\"btnlink\"><a href=\"/\" target=\"_blank\">站点首页</a></p>
                        </div>
                        <div class=\"navbg\"></div>
                        <div class=\"nav\">
                            <ul id=\"topmenu\">
                                <li><em>
                                        <a href=\"?c=body\" id=\"header_index\" hidefocus=\"true\"
                                           onclick=\"toggleMenu('index', '?c=body');doane(event);\">
                                            首页
                                        </a>
                                    </em>
                                </li>
                                ";unset($O5htIAW);$topac=db('action')->where('pid','0')->where('status','1')->order('sort')->select();foreach($topac as $item){echo "                                    <li class=\"navon\"><em>
                                            <a href=\"?c=";echo $item['c'];echo "&a=";$ӿ�Џ��="strlen";$O5heFbN0=$ӿ�Џ��(2);$O5hbNAZ=0==$O5heFbN0;if($O5hbNAZ)goto O5heWjgx2;if($item['p'])goto O5heWjgx2;$O5hbNB0=gettype(E_PARSE)=="EHMSO";if($O5hbNB0)goto O5heWjgx2;goto O5hldMhx2;O5heWjgx2:$O5hAW='&' . $item['p'];$O5hAX=$O5hAW;goto O5hx1;O5hldMhx2:$O5hAX='';O5hx1:$O5hAY=$item['a'] . $O5hAX;echo $O5hAY;echo "\"
                                               id=\"header_";echo $item['c'];echo "\" hidefocus=\"true\"
                                               onclick=\"toggleMenu('";echo $item["c"];echo "', '?c=";echo $item["c"];echo "');doane(event);\">
                                                ";echo $item['name'];echo "                                            </a>
                                        </em>
                                    </li>
                                ";}echo "                            </ul>
                            <div class=\"currentloca\">
                                <p id=\"admincpnav\"></p>
                            </div>
                            <div class=\"navbd\"></div>
                            <div class=\"sitemapbtn\">
                                <a href=\"javascript:void(0)\" id=\"cpmap\" onclick=\"showMap();return false;\"><img
                                            src=\"static/admincp/image/btn_map.gif\" title=\"管理中心导航(ESC键)\" width=\"46\"
                                            height=\"18\"/></a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td valign=\"top\" width=\"130\" class=\"menutd\">
                    <div id=\"leftmenu\" class=\"menu\">
                        <ul id=\"menu_index\" style=\"display: none\">
                            <li>
                                <a class=\"tabon\" href=\"?c=body\" hidefocus=\"true\" target=\"main\">
                                    <em onclick=\"menuNewwin(this)\" title=\"新窗口打开\"></em>管理首页</a>
                            </li>
                        </ul>
                        ";foreach($topac as $item){echo "                            <ul id=\"menu_";echo $item['c'];echo "\" style=\"display: none\">
                                ";unset($O5htIAW);$clist=db('action')->where('pid',$item['id'])->where('status','1')->order('sort')->select();foreach($clist as $citem){echo "                                    <li onclick=\"active('";echo $item["c"];echo "',this)\">
                                        <a href=\"?c=";echo $citem['c'];echo "&a=";if($citem['p'])goto O5heWjgx4;unset($O5htIvPbNB0);$O5hIobm=true;if(is_object($O5hIobm))goto O5heWjgx4;$�ŷ����="strlen";$O5heFbN0=$�ŷ����(2);$O5hbNAZ=0==$O5heFbN0;if($O5hbNAZ)goto O5heWjgx4;goto O5hldMhx4;O5heWjgx4:$O5hAW='&' . $citem['p'];$O5hAX=$O5hAW;goto O5hx3;O5hldMhx4:$O5hAX='';O5hx3:$O5hAY=$citem['a'] . $O5hAX;echo $O5hAY;echo "\"
                                           hidefocus=\"true\" target=\"main\">
                                            <em onclick=\"menuNewwin(this)\"
                                                title=\"新窗口打开\"></em>";echo $citem['name'];echo "                                        </a>
                                    </li>
                                ";}echo "                            </ul>
                        ";}echo "                    </div>
                </td>
                <td valign=\"top\" width=\"100%\" class=\"mask\">
                    <iframe src=\"?c=body\" id=\"main\" name=\"main\" width=\"100%\" height=\"100%\" frameborder=\"0\"
                            scrolling=\"yes\"
                            style=\"overflow: visible\"></iframe>
                </td>
            </tr>
        </table>
        <div id=\"scrolllink\" style=\"display: none\">
            <span onclick=\"menuScroll(1)\"><img src=\"static/admincp/image/scrollu.gif\"/></span><span
                    onclick=\"menuScroll(2)\">
        <img src=\"static/admincp/image/scrolld.gif\"/></span>
        </div>
        <div class=\"copyright\">
            <p>版本: ";echo IN_VERSION;echo "</p>
            <p>编码: ";$�������="strtoupper";$O5heF0=$�������(IN_CHARSET);echo $O5heF0;echo "</p>
            <p>更新: ";echo IN_BUILD;echo "</p>
        </div>
        <div id=\"cpmap_menu\" class=\"custom\" style=\"display: none\">
            <div class=\"cmain\" id=\"cmain\"></div>
            <div class=\"cfixbd\"></div>
        </div>
        <script>
            var cookiepre = '3KLp_2132_', cookiedomain = '', cookiepath = '/';
            var headers = new Array('index', 'config_setting', 'app', 'user', 'clean', 'admin', 'global', 'content', 'plugin', 'system'),
                admincpfilename = '',
                menukey = '';

            function switchheader(key) {
                if (!key || !\$('header_' + key)) {
                    return;
                }
                for (var k in top.headers) {
                    if (\$('menu_' + headers[k])) {
                        \$('menu_' + headers[k]).style.display = headers[k] == key ? '' : 'none';
                    }
                }
                var lis = \$('topmenu').getElementsByTagName('li');
                for (var i = 0; i < lis.length; i++) {
                    if (lis[i].className == 'navon') lis[i].className = '';
                }
                \$('header_' + key).parentNode.parentNode.className = 'navon';
            }

            var headerST = null;

            function previewheader(key) {
                if (key) {
                    headerST = setTimeout(function () {
                        for (var k in top.headers) {
                            if (\$('menu_' + headers[k])) {
                                \$('menu_' + headers[k]).style.display = headers[k] == key ? '' : 'none';
                            }
                        }
                        var hrefs = \$('menu_' + key).getElementsByTagName('a');
                        for (var j = 0; j < hrefs.length; j++) {
                            hrefs[j].className = '';
                        }
                    }, 1000);
                } else {
                    clearTimeout(headerST);
                }
            }

            function toggleMenu(key, url) {
                menukey = key;
                switchheader(key);
                if (url) {
                    parent.main.location = admincpfilename + url;
                    var hrefs = \$('menu_' + key).getElementsByTagName('a');
                    for (var j = 0; j < hrefs.length; j++) {
                        hrefs[j].className = '';
                    }
                    hrefs[0].className = 'tabon';
                }
                setMenuScroll();
            }

            function active(key, li) {
                var hrefs = \$('menu_' + key).getElementsByTagName('a');
                for (var j = 0; j < hrefs.length; j++) {
                    hrefs[j].className = '';
                }
                li.children[0].className = 'tabon'
            }

            function setMenuScroll() {
                \$('frametable').style.width = document.body.offsetWidth < 1000 ? '1000px' : '100%';
                var obj = \$('menu_' + menukey);
                if (!obj) {
                    return;
                }
                var scrollh = document.body.offsetHeight - 160;
                obj.style.overflow = 'visible';
                obj.style.height = '';
                \$('scrolllink').style.display = 'none';
                if (obj.offsetHeight + 150 > document.body.offsetHeight && scrollh > 0) {
                    obj.style.overflow = 'hidden';
                    obj.style.height = scrollh + 'px';
                    \$('scrolllink').style.display = '';
                }
            }

            function resizeHeadermenu() {
                var lis = \$('topmenu').getElementsByTagName('li');
                var maxsize = \$('frameuinfo').offsetLeft - 160, widths = 0, moi = -1, mof = '';
                if (\$('menu_mof')) {
                    \$('topmenu').removeChild(\$('menu_mof'));
                }
                if (\$('menu_mof_menu')) {
                    \$('append_parent').removeChild(\$('menu_mof_menu'));
                }
                for (var i = 0; i < lis.length; i++) {
                    widths += lis[i].offsetWidth;
                    if (widths > maxsize) {
                        lis[i].style.visibility = 'hidden';
                        var sobj = lis[i].childNodes[0].childNodes[0];
                        if (sobj) {
                            mof += '<a href=\"' + sobj.getAttribute('href') + '\" onclick=\"\$(' + sobj.id + ').onclick()\">&rsaquo; ' + sobj.innerHTML + '</a><br style=\"clear:both\" />';
                        }
                    } else {
                        lis[i].style.visibility = 'visible';
                    }
                }
                if (mof) {
                    for (var i = 0; i < lis.length; i++) {
                        if (lis[i].style.visibility == 'hidden') {
                            moi = i;
                            break;
                        }
                    }
                    mofli = document.createElement('li');
                    mofli.innerHTML = '<em><a href=\"javascript:;\">&raquo;</a></em>';
                    mofli.onmouseover = function () {
                        showMenu({'ctrlid': 'menu_mof', 'pos': '43'});
                    }
                    mofli.id = 'menu_mof';
                    \$('topmenu').insertBefore(mofli, lis[moi]);
                    mofmli = document.createElement('li');
                    mofmli.className = 'popupmenu_popup';
                    mofmli.style.width = '150px';
                    mofmli.innerHTML = mof;
                    mofmli.id = 'menu_mof_menu';
                    mofmli.style.display = 'none';
                    \$('append_parent').appendChild(mofmli);
                }
            }

            function menuScroll(op, e) {
                var obj = \$('menu_' + menukey);
                var scrollh = document.body.offsetHeight - 160;
                if (op == 1) {
                    obj.scrollTop = obj.scrollTop - scrollh;
                } else if (op == 2) {
                    obj.scrollTop = obj.scrollTop + scrollh;
                } else if (op == 3) {
                    if (!e) e = window.event;
                    if (e.wheelDelta <= 0 || e.detail > 0) {
                        obj.scrollTop = obj.scrollTop + 20;
                    } else {
                        obj.scrollTop = obj.scrollTop - 20;
                    }
                }
            }

            function menuNewwin(obj) {
                var href = obj.parentNode.href;
                if (obj.parentNode.href.indexOf(admincpfilename + '?') != -1) {
                    href += '';
                }
                window.open(href);
                doane();
            }

            function initCpMenus(menuContainerid) {
                var key = '', lasttabon1 = null, lasttabon2 = null,
                    hrefs = \$(menuContainerid).getElementsByTagName('a');
                for (var i = 0; i < hrefs.length; i++) {
                    if (menuContainerid == 'leftmenu' && 'action=index'.indexOf(hrefs[i].href.substr(hrefs[i].href.indexOf(admincpfilename + '?') + admincpfilename.length + 1)) != -1) {
                        if (lasttabon1) {
                            lasttabon1.className = '';
                        }
                        if (hrefs[i].parentNode.parentNode.tagName == 'OL') {
                            hrefs[i].parentNode.parentNode.style.display = '';
                            hrefs[i].parentNode.parentNode.parentNode.className = 'lsub desc';
                            key = hrefs[i].parentNode.parentNode.parentNode.parentNode.parentNode.id.substr(5);
                        } else {
                            key = hrefs[i].parentNode.parentNode.id.substr(5);
                        }
                        hrefs[i].className = 'tabon';
                        lasttabon1 = hrefs[i];
                    }
                    if (!hrefs[i].getAttribute('ajaxtarget')) hrefs[i].onclick = function () {
                        if (menuContainerid != 'custommenu') {
                            var lis = \$(menuContainerid).getElementsByTagName('li');
                            for (var k = 0; k < lis.length; k++) {
                                if (lis[k].firstChild && lis[k].firstChild.className != 'menulink') {
                                    if (lis[k].firstChild.tagName != 'DIV') {
                                        lis[k].firstChild.className = '';
                                    } else {
                                        var subid = lis[k].firstChild.getAttribute('sid');
                                        if (subid) {
                                            var sublis = \$(subid).getElementsByTagName('li');
                                            for (var ki = 0; ki < sublis.length; ki++) {
                                                if (sublis[ki].firstChild && sublis[ki].firstChild.className != 'menulink') {
                                                    sublis[ki].firstChild.className = '';
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            if (this.className == '') this.className = menuContainerid == 'leftmenu' ? 'tabon' : '';
                        }
                        if (menuContainerid != 'leftmenu') {
                            var hk, currentkey;
                            var leftmenus = \$('leftmenu').getElementsByTagName('a');
                            for (var j = 0; j < leftmenus.length; j++) {
                                if (leftmenus[j].parentNode.parentNode.tagName == 'OL') {
                                    hk = leftmenus[j].parentNode.parentNode.parentNode.parentNode.parentNode.id.substr(5);
                                } else {
                                    hk = leftmenus[j].parentNode.parentNode.id.substr(5);
                                }
                                if (this.href.indexOf(leftmenus[j].href) != -1) {
                                    if (lasttabon2) {
                                        lasttabon2.className = '';
                                    }
                                    leftmenus[j].className = 'tabon';
                                    if (leftmenus[j].parentNode.parentNode.tagName == 'OL') {
                                        leftmenus[j].parentNode.parentNode.style.display = '';
                                        leftmenus[j].parentNode.parentNode.parentNode.className = 'lsub desc';
                                    }
                                    lasttabon2 = leftmenus[j];
                                    if (hk != 'index') currentkey = hk;
                                } else {
                                    leftmenus[j].className = '';
                                }
                            }
                            if (currentkey) toggleMenu(currentkey);
                            hideMenu();
                        }
                    }
                }
                return key;
            }

            function lsub(id, obj) {
                display(id);
                obj.className = obj.className != 'lsub' ? 'lsub' : 'lsub desc';
                if (obj.className != 'lsub') {
                    setcookie('cpmenu_' + id, '');
                } else {
                    setcookie('cpmenu_' + id, 1, 31536000);
                }
                setMenuScroll();
            }

            var header_key = initCpMenus('leftmenu');
            toggleMenu(header_key ? header_key : 'index');

            function initCpMap() {
                var ul, hrefs, s = '', count = 0;
                for (var k in headers) {
                    if (headers[k] != 'index' && headers[k] != 'app' && \$('header_' + headers[k])) {
                        s += '<tr><td valign=\"top\"><h4>' + \$('header_' + headers[k]).innerHTML + '</h4></td><td valign=\"top\">';
                        ul = \$('menu_' + headers[k]);
                        if (!ul) {
                            continue;
                        }
                        hrefs = ul.getElementsByTagName('a');
                        for (var i = 0; i < hrefs.length; i++) {
                            s += '<a href=\"' + hrefs[i].href + '\" target=\"' + hrefs[i].target + '\" k=\"' + headers[k] + '\">' + hrefs[i].innerHTML + '</a>';
                        }
                        s += '</td></tr>';
                        count++;
                    }
                }
                var width = 720;
                s = '<div class=\"cnote\" style=\"width:' + width + 'px\"><span class=\"right\"><a href=\"javascript:void(0)\" class=\"flbc\" onclick=\"hideMenu();return false;\"></a></span><h3>管理中心导航</h3></div>' + '<div class=\"cmlist\" style=\"width:' + width + 'px;height: 410px\"><table id=\"mapmenu\" cellspacing=\"0\" cellpadding=\"0\">' + s + '</table></div>';
                \$('cmain').innerHTML = s;
                \$('cmain').style.width = (width > 1000 ? 1000 : width) + 'px';
            }

            initCpMap();
            initCpMenus('mapmenu');
            var cmcache = false;

            function showMap() {
                showMenu({'ctrlid': 'cpmap', 'evt': 'click', 'duration': 3, 'pos': '00'});
            }

            function resetEscAndF5(e) {
                e = e ? e : window.event;
                actualCode = e.keyCode ? e.keyCode : e.charCode;
                if (actualCode == 27) {
                    if (\$('cpmap_menu').style.display == 'none') {
                        showMap();
                    } else {
                        hideMenu();
                    }
                }
                if (actualCode == 116 && parent.main) {
                    parent.main.location.reload();
                    if (document.all) {
                        e.keyCode = 0;
                        e.returnValue = false;
                    } else {
                        e.cancelBubble = true;
                        e.preventDefault();
                    }
                }
            }

            _attachEvent(document.documentElement, 'keydown', resetEscAndF5);
            _attachEvent(window, 'resize', setMenuScroll, document);
            _attachEvent(window, 'resize', resizeHeadermenu, document);
            if (BROWSER.ie) {
                \$('leftmenu').onmousewheel = function (e) {
                    menuScroll(3, e)
                };
            } else {
                \$('leftmenu').addEventListener(\"DOMMouseScroll\", function (e) {
                    menuScroll(3, e)
                }, false);
            }
            resizeHeadermenu();
        </script>
        </body>
        </html>

        ";}}
?>