<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户注册 - 趣二手</title>

    <!-- ThirdParty -->
    <script src="/platform/Public/lib/vue.min.js"></script>
    <script src="/platform/Public/lib/element.min.js"></script>
    <link rel="stylesheet" href="/platform/Public/lib/normalize.css">
    <link rel="stylesheet" href="/platform/Public/lib/element.min.css">
    <link rel="stylesheet" href="/platform/Public/lib/fonts/iconfont.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="/platform/Public/css/login/register.css">
</head>
<body>
    <!-- Layout -->
    <div id="app">
        <el-container>

            <!-- Header 区域 -->
            <el-header><span class="logo">趣二手</span></el-header>

            <!-- 内容区域 -->
            <el-main>
                <div class="wrap">
                    <div class="left">
                            <img src="/platform/Public/img/login/bg-register.png" alt="注册趣二手账号！" title="注册趣二手账号！">
                    </div>
                    <div class="right">
                        <div class="title">新用户注册</div>
                        <div class="items">
                            <!-- 注册表单 -->
                            <form action="" method="POST">
                                <div class="item">
                                    <label class="label" for="username"><i class="icon iconfont icon-people_fill"></i></label>
                                    <input name="username" type="text" class="cont" placeholder="输入账号" autocomplete="off">
                                </div>
                                <div class="item">
                                    <label class="label" for="password"><i class="icon iconfont icon-brush"></i></label>
                                    <input name="password" type="password" class="cont" placeholder="输入密码">
                                </div>
                                <div class="item">
                                    <label class="label" for="password-confirm"><i class="icon iconfont icon-brush_fill"></i></label>
                                    <input name="repassword" type="password" class="cont" placeholder="重复密码">
                                </div>
                                <div class="item">
                                    <label class="label" for="phone"><i class="icon iconfont icon-mobilephone_fill"></i></label>
                                    <input name="phone" type="text" class="cont" placeholder="联系方式" autocomplete="off">
                                </div>
                                <div class="item">
                                    <label class="label" for="email"><i class="icon iconfont icon-order"></i></label>
                                    <input name="email" type="text" class="cont" placeholder="电子邮箱" autocomplete="off">
                                </div>
                                <input class="submit-Btn" type="submit" value="立即注册">
                                <div class="tips">
                                    <a href="./login.html">已有帐号，去登录</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </el-main>

            <!-- Footer区域 -->
            <el-footer>
                <div class="links"> 
                    <a target="_blank" class="link" href="http://www.xiyou.edu.cn/">西邮官网</a> | 
                    <a target="_blank" class="link" href="http://cs.xupt.edu.cn:81/xiyoucs/index.asp">计算机学院</a> | 
                    <a target="_blank" class="link" href="http://gr.xupt.edu.cn/">研究生院</a> | 
                    <a class="link" href="./login-admin.html">管理员登录</a>
                </div>
                <p class="copyright"> Copyright © 2018 趣二手 All Rights Reserved </p>
            </el-footer>

        </el-container>
    </div>

    <!-- VUE -->
    <script>
        var app = new Vue({
            el: '#app',
            data: {
            },
            methods: {
            }
        })
    </script>
</body>
</html>