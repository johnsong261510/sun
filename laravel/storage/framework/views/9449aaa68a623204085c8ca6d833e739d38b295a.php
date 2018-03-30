<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="shortcut icon" href="<?php echo e(asset('favicon.io')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('h-ui/static/h-ui/css/H-ui.min.css')); ?>">	
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('h-ui/static/h-ui.admin/css/H-ui.admin.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('h-ui/lib/Hui-iconfont/1.0.8/iconfont.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('h-ui/static/h-ui.admin/skin/default/skin.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('h-ui/static/h-ui.admin/css/style.css')); ?>">
<title><?php echo $__env->yieldContent('title'); ?></title>
<?php echo $__env->yieldContent('my-css'); ?>	
</head>
<body>
<?php echo $__env->yieldContent('content'); ?>
</body>
<script type="text/javascript" src="<?php echo e(asset('h-ui/lib/jquery/1.9.1/jquery.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('h-ui/lib/layer/2.4/layer.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('h-ui/static/h-ui/js/H-ui.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('h-ui/static/h-ui.admin/js/H-ui.admin.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('h-ui/lib/jquery.validation/1.14.0/jquery.validate.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('h-ui/lib/jquery.validation/1.14.0/validate-methods.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('h-ui/static/h-ui/js/H-ui.min.js')); ?>"></script>
<?php echo $__env->yieldContent('my-js'); ?>

</html>