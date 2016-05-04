<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Wordpress Navi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
       
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.min.css">
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.panelslider.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
    <div id="header">
        <div class="container clearfix">
            <a id="left-panel-link" href="#sidebar"><span class="glyphicon glyphicon-option-vertical"></span></a>
            <h1 id="site_title">WordPress Navi</h1>
            <p>WordPressによる開発ノウハウをまとめました。</p>
            <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">ログイン</button>
            <button type="submit" class="btn btn-primary">新規登録</button>
          </form>
        </div>
    </div>
<?php wp_head(); ?>
