<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"/www/wwwroot/dyzb111.xyz/application/admin/view/index/quickmenu.html";i:1622161391;s:64:"/www/wwwroot/dyzb111.xyz/application/admin/view/public/head.html";i:1622161391;s:64:"/www/wwwroot/dyzb111.xyz/application/admin/view/public/foot.html";i:1622161391;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?> - <?php echo lang('admin/public/head/title'); ?></title>
    <link rel="stylesheet" href="/static/layui/css/layui.css?v=1024">
    <link rel="stylesheet" href="/static/css/admin_style.css?v=1024">
    <script type="text/javascript" src="/static/js/jquery.js?v=1024"></script>
    <script type="text/javascript" src="/static/layui/layui.js?v=1024"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION="v10";
    </script>
</head>
<body>

<div class="page-container">
    <fieldset class="layui-elem-field layui-field-title" class="mt10">
        <legend><?php echo lang('admin/index/quickmenu/name'); ?></legend>
    </fieldset>

    <blockquote class="layui-elem-quote layui-quote-nm">
        <?php echo lang('admin/index/quickmenu/tip'); ?>
    </blockquote>

    <form class="layui-form" action="">
        <input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
        <div class="layui-form-item layui-form-text">
            <textarea name="quickmenu" placeholder="<?php echo lang('filed_empty'); ?>" class="layui-textarea" style="height:600px; resize:none"><?php echo $quickmenu; ?></textarea>
        </div>
        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit"><?php echo lang('btn_save'); ?></button>
                <button class="layui-btn layui-btn-warm" type="reset"><?php echo lang('btn_reset'); ?></button>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>

</body>
</html>