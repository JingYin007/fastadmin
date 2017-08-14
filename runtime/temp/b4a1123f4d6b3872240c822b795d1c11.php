<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"D:\wamp\www\fastadmin\public/../application/index\view\user\register.html";i:1500027918;s:76:"D:\wamp\www\fastadmin\public/../application/index\view\layout\bootstrap.html";i:1500027918;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
        <title>FastAdmin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="基于ThinkPHP5和Bootstrap的极速后台开发框架">
        <meta name="renderer" content="webkit">
        <link rel="shortcut icon" href="__CDN__/assets/img/favicon.ico" />
        <!-- Loading Bootstrap -->
        <link href="__CDN__/assets/css/frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="__CDN__/assets/js/html5shiv.js"></script>
          <script src="__CDN__/assets/js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            var require = {
                config: <?php echo json_encode($config ); ?>
            };
        </script>
        <style>
            html{height:100%;overflow:auto;-webkit-overflow-scrolling: touch;}
            body{padding:70px 0 0 0;}
            footer {margin-top:20px;font-size:14px;padding:25px 0;background:#f4f6f6;}
            .footer-link ul li a{margin-top:10px;line-height: 25px;}
            #component-list .caption p {font-size:13px;line-height:20px;}
        </style>

        <script>
            var _hmt = _hmt || [];
            (function () {
                var hm = document.createElement("script");
                hm.src = "https://hm.baidu.com/hm.js?58347d769d009bcf6074e9a0ab7ba05e";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        </script>
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo url('/'); ?>" class="navbar-brand">FastAdmin</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-main">
                    <ul class="nav navbar-nav">
                        <li><a href="http://www.fastadmin.net">官网</a></li>
                        <li><a href="http://doc.fastadmin.net">文档</a></li>
                        <li><a href="http://forum.fastadmin.net">论坛</a></li>
                        <li class="divider"></li>
                        <li><a href="http://www.fastadmin.net#donate">打赏</a></li>
                        <li><a href="http://demo.fastadmin.net">演示</a></li>
                    </ul>
                    <form class="navbar-form navbar-left" action="http://forum.fastadmin.net">
                        <input name="q" type="text" class="form-control col-lg-8" placeholder="搜索">
                    </form>
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">你好!<?php echo $user->id?$user->nickname:'游客'; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a id="admin" href="<?php echo url('admin/index/index'); ?>"><span class="text text-danger">后台演示</span></a></li>
                                <li><a id="home" href="http://www.fastadmin.net?ref=demo"><span class="text text-info">返回官网</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="page-header" style="margin-top:10px;">
                <h4>注册</h4>
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="well">
                        <form id="registerForm" method="POST" action="#">
                            <div class="form-group">
                                <label for="email" class="control-label">邮箱</label>
                                <input type="text" class="form-control" id="email" name="email" value="" required="" placeholder="">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="username" class="control-label">用户名</label>
                                <input type="text" class="form-control" id="username" name="username" value="" required="" placeholder="">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="mobile" class="control-label">手机</label>
                                <input type="text" class="form-control" id="mobile" name="mobile" value="" placeholder="可选">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">密码</label>
                                <input type="password" class="form-control" id="password" name="password" value="" required="" />
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">验证码</label>
                                <div class="input-group">
                                    <input type="text" name="captcha" class="form-control" />
                                    <span class="input-group-addon" style="padding:0;border:none;">
                                        <img src="<?php echo captcha_src(); ?>" width="100" height="30" onclick="this.src = '<?php echo captcha_src(); ?>?r=' + Math.random();"/>
                                    </span>
                                </div>
                                <span class="help-block"></span>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">提 交</button>
                            <a href="<?php echo url('user/login'); ?>" class="btn btn-default btn-block">已经账号,立即登录</a>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <p class="lead">会员权益</p>
                    <ul class="list-unstyled" style="line-height: 2">
                        <li><span class="fa fa-check text-success"></span> 最新代码推送</li>
                        <li><span class="fa fa-check text-success"></span> 发布评论</li>
                        <li><span class="fa fa-check text-success"></span> 个性化头像</li>
                        <li><span class="fa fa-check text-success"></span> 定制专属页面</li>
                        <li><span class="fa fa-check text-success"></span> 发现更多</li>
                    </ul>
                    <a href="<?php echo url('user/third?action=redirect&platform=weibo'); ?>" class="btn btn-danger btn-block"><i class="fa fa-weibo"></i> 微博登录</a>
                    <a href="<?php echo url('user/third?action=redirect&platform=wechat'); ?>" class="btn btn-success btn-block"><i class="fa fa-wechat"></i> 微信登录</a>
                    <a href="<?php echo url('user/third?action=redirect&platform=qq'); ?>" class="btn btn-info btn-block"><i class="fa fa-qq"></i> QQ登录</a>
                </div>
            </div>
        </div>
    </div>
</div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer-link">
                            <ul class="list-inline">
                                <li><a href="http://www.fastadmin.net">官方网站</a></li>
                                <li><a href="http://doc.fastadmin.net">帮助文档</a></li>
                                <li><a href="https://git.oschina.net/karson/fastadmin">Git@OSC</a></li>
                                <li><a href="http://www.fastadmin.net/#donate" class="">捐赠打赏</a></li>
                                <li><a href="http://forum.fastadmin.net" class="">交流社区</a></li>
                                <li><a href="http://demo.fastadmin.net/" class="">在线演示</a></li>
                            </ul>
                        </div>

                        <div class="pull-left">
                            <p>
                                <span class="text-muted"><a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $site['beian']; ?></a></span>
                            </p>
                            <span class="small"></span>
                            <p>
                                Copyright © fastadmin.net 2017-2018 All rights reserved
                            </p>
                        </div>
                        <div class="pull-right hidden-xs hidden-sm">

                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </footer>

        <script src="__CDN__/assets/js/require.js" data-main="__CDN__/assets/js/require-frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>
    </body>
</html>