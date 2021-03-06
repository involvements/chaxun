<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>{{ config('chaxun.sitename') }}</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate icon" type="image/png" href="/assets/i/favicon.png">
  <link rel="stylesheet" href="/assets/css/amazeui.min.css"/>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>{{ config('chaxun.sitename') }}</h1>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">

    <h3>登录</h3>
    <hr>
@if (count($errors) > 0)
  <div class="am-alert am-alert-warning" id="login-error" data-am-alert>
    <button type="button" class="am-close">×</button>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
     </ul>
  </div>
  <script>$('#login-error').alert();</script>
@endif
    <form method="post" class="am-form" action="">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label for="name">用户名:</label>
      <input type="text" name="name" id="name" value="{{ old('name') }}">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="password" id="password" value="">
      <br>
<!--       <label for="remember-me">
        <input id="remember-me" type="checkbox">
        记住密码
      </label> -->
      <br />
      <div class="am-cf">
        <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
        <input type="submit" name="" value="忘记密码 ^_^? " class="am-btn am-btn-default am-btn-sm am-fr">
      </div>
    </form>
    <hr>
    <p>© 2016 Power by weihan. Licensed under MIT license.</p>
  </div>
</div>


<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/assets/js/amazeui.min.js"></script>
</body>
</html>
