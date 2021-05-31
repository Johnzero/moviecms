<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"/www/wwwroot/dyzb111.xyz/application/install/view/index/step3.html";i:1622161391;s:65:"/www/wwwroot/dyzb111.xyz/application/install/view/index/head.html";i:1622161391;s:65:"/www/wwwroot/dyzb111.xyz/application/install/view/index/foot.html";i:1622161391;}*/ ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?php echo lang('install/title'); ?></title>
        <link rel="stylesheet" href="/static/layui/css/layui.css">
        <link rel="stylesheet" href="/static/css/admin_style.css">
        <link rel="stylesheet" href="/static/css/install.css">
        <script type="text/javascript" src="/static/layui/layui.js"></script>
        <script>
            var ROOT_PATH = "", ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>";
        </script>
    </head>
<body>
<div class="header">
    <h1><?php echo lang('install/header'); ?></h1>
</div>
<style type="text/css">
.layui-table td, .layui-table th{text-align:left;}
.layui-table tbody tr.no{background-color:#f00;color:#fff;}
</style>
<div class="install-box">
    <fieldset class="layui-elem-field layui-field-title">
        <legend><?php echo lang('install/database_config'); ?></legend>
    </fieldset>
    <form class="layui-form layui-form-pane" action="?step=4" method="post">
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('install/server_address'); ?></label>
            <div class="layui-input-inline w200">
                <input type="text" class="layui-input" name="hostname" lay-verify="title" value="127.0.0.1">
            </div>
            <div class="layui-form-mid layui-word-aux"><?php echo lang('install/server_address_tip'); ?></div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('install/database_port'); ?></label>
            <div class="layui-input-inline w200">
                <input type="text" class="layui-input" name="hostport" lay-verify="title" value="3306">
            </div>
            <div class="layui-form-mid layui-word-aux"><?php echo lang('install/database_port_tip'); ?></div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('install/database_name'); ?></label>
            <div class="layui-input-inline w200">
                <input type="text" class="layui-input" name="database" lay-verify="title">
            </div>
            <div class="layui-form-mid layui-word-aux"><?php echo lang('install/database_name_tip'); ?></div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('install/database_username'); ?></label>
            <div class="layui-input-inline w200">
                <input type="text" class="layui-input" name="username" lay-verify="title">
            </div>
            <div class="layui-form-mid layui-word-aux"><?php echo lang('install/database_username_tip'); ?></div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('install/database_pass'); ?></label>
            <div class="layui-input-inline w200">
                <input type="password" class="layui-input" name="password" lay-verify="title">
            </div>
            <div class="layui-form-mid layui-word-aux"><?php echo lang('install/database_pass_tip'); ?></div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('install/database_pre'); ?></label>
            <div class="layui-input-inline w200">
                <input type="text" class="layui-input" name="prefix" lay-verify="title" value="mac_">
            </div>
            <div class="layui-form-mid layui-word-aux"><?php echo lang('install/database_pre_tip'); ?></div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('install/overwrite_database'); ?></label>
            <div class="layui-input-inline w200">
                <input type="radio" name="cover" value="1" title="<?php echo lang('install/overwrite'); ?>">
                <input type="radio" name="cover" value="0" title="<?php echo lang('install/not_overwrite'); ?>" checked>
            </div>
            <div class="layui-form-mid layui-word-aux"><?php echo lang('install/overwrite_tip'); ?></div>
        </div>
        <div class="layui-form-item">
            <button type="submit" class="layui-btn fl" style="margin-left:120px;" lay-submit="" lay-filter="formTest"><?php echo lang('install/test_connect'); ?></button>
            <div class="layui-form-mid layui-word-aux"><?php echo lang('install/test_connect_tip'); ?></div>
        </div>
    </form>
    <form class="layui-form layui-form-pane" action="?step=5" method="post">
        <input type="hidden" name="install_dir" value="<?php echo $install_dir; ?>">
        <input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
        <fieldset class="layui-elem-field layui-field-title">
            <legend><?php echo lang('install/other_config'); ?></legend>
        </fieldset>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('install/admin_name'); ?></label>
            <div class="layui-input-inline w200">
                <input type="text" class="layui-input" name="account" lay-verify="title">
            </div>
            <div class="layui-form-mid layui-word-aux"><?php echo lang('install/admin_name_tip'); ?></div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('install/admin_pass'); ?></label>
            <div class="layui-input-inline w200">
                <input type="password" class="layui-input" name="password" lay-verify="title">
            </div>
            <div class="layui-form-mid layui-word-aux"><?php echo lang('install/admin_pass_tip'); ?></div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('install/init_data'); ?></label>
            <div class="layui-input-inline w200" >
                <input type="radio" name="initdata" value="1" title="<?php echo lang('install/create'); ?>" checked="">
                <input type="radio" name="initdata" value="0" title="<?php echo lang('install/not_create'); ?>" >
            </div>
            <div class="layui-form-mid layui-word-aux"><?php echo lang('install/create_tip'); ?></div>
        </div>
        <div class="step-btns">
            <a href="?step=2" class="layui-btn layui-btn-primary layui-btn-big fl"><?php echo lang('install/back_step'); ?></a>
            <button type="submit" class="layui-btn layui-btn-big layui-btn-normal fr" lay-submit="" lay-filter="formSubmit" ><?php echo lang('install/exec'); ?></button>
        </div>
    </form>
</div>
<span style="display: none">
<iframe src="//www.maccms.la/tongji.html?v10-php" MARGINWIDTH="0" MARGINHEIGHT="0" HSPACE="0" VSPACE="0" FRAMEBORDER="0" SCROLLING="no" width="0" height="0"></iframe>
</span>
<div class="copyright">
    © <a href="http://www.maccms.la/?v10" target="_blank">MacCMS.LA</a> All Rights Reserved.
</div>
</body>
</html>
<script type="text/javascript">
    var test=0;
layui.define(['element', 'form'], function(exports) {
    var $ = layui.jquery, layer = layui.layer, form = layui.form;
    form.on('submit(formTest)', function(data) {
        var _form = '';
        if ($(this).attr('data-form')) {
            _form = $($(this).attr('data-form'));
        } else {
            _form = $(this).parents('form');
        }
        
        layer.msg("<?php echo lang('wait_submit'); ?>",{time:500000});
        $.ajax({
            type: "POST",
            url: _form.attr('action'),
            data: _form.serialize(),
            dataType:'json',
            success: function(res) {
                if(res.code==1){
                    test=1;
                }
                layer.msg(res.msg);
            }
        });
        return false;
    });
    form.on('submit(formSubmit)', function(data) {
        if(test==0){
            layer.msg("<?php echo lang('install/submit_tip'); ?>");
            return false;
        }

    });
});
</script>