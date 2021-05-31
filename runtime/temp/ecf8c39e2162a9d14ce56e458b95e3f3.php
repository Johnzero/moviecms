<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"/www/wwwroot/dyzb111.xyz/application/admin/view/template/info.html";i:1622161391;s:64:"/www/wwwroot/dyzb111.xyz/application/admin/view/public/head.html";i:1622161391;s:64:"/www/wwwroot/dyzb111.xyz/application/admin/view/public/foot.html";i:1622161391;}*/ ?>
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
    <form class="layui-form layui-form-pane" method="post" action="">
        <input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
        <blockquote class="layui-elem-quote layui-quote-nm">
            提示信息：<br>
            为了安全考量避免通过模板写入后门文件，文件内出现以下任意字符串时禁止在线保存修改，如需修改请使用其他方式。<br>
            <?php echo $filter; ?>
        </blockquote>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('path'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $fpath; ?>" placeholder="" id="fpath" name="fpath" readonly="readonly">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('file_name'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $fname; ?>" placeholder="<?php echo lang('admin/template/name_tip'); ?>" id="fname" name="fname" <?php if($fname != ''): ?>readonly="readonly"<?php endif; ?>>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('content'); ?>：</label>
            <div class="layui-input-block">
                <textarea name="fcontent" cols="" rows="" class="layui-textarea"  placeholder="" style="height:550px;"><?php echo $fcontent; ?></textarea>
            </div>
        </div>

        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit" data-child="true"><?php echo lang('btn_save'); ?></button>
                <button class="layui-btn layui-btn-warm" type="reset"><?php echo lang('btn_reset'); ?></button>
            </div>
        </div>
    </form>

</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>

<script type="text/javascript">

</script>

</body>
</html>