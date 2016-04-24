<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta name="keywords" content="<?php echo $meta_keywords; ?>" />
<meta name="description" content="<?php echo $meta_description; ?>" />
<meta name="author" content="zanjs">
<meta property="og:title" content="" />
<meta property="og:site_name" content="" />
<meta property="og:url" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="Julian DM">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title><?php echo $meta_title; ?></title>
<!--if lt IE 9]>
　　<script src="//apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
<![endif]-->
<link href="<?php echo HOME_THEME_PATH; ?>build/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!--<link href="<?php echo HOME_THEME_PATH; ?>build/css/sprite.css" type="text/css" rel="stylesheet"  >-->
<link href="<?php echo HOME_THEME_PATH; ?>build/css/app.css" type="text/css" rel="stylesheet"  >
<link rel="dns-prefetch" href="">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo HOME_THEME_PATH; ?>favicon.ico?v=0.4.5.2">
<script type="text/javascript">
   var siteUrl = '<?php echo SITE_URL; ?>',
        md5 = '<?php echo md5(SYS_KEY); ?>';
</script>
<script type="text/javascript" src="<?php echo HOME_THEME_PATH; ?>build/js/app.js"></script>
</head>
<body>
<noscript>
    error ！
</noscript>
<?php if ($fn_include = $this->_include("nav.html")) include($fn_include); ?>