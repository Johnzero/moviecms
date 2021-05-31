<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"/www/wwwroot/dyzb111.xyz/application/install/view/index/step2.html";i:1622161391;s:65:"/www/wwwroot/dyzb111.xyz/application/install/view/index/head.html";i:1622161391;s:65:"/www/wwwroot/dyzb111.xyz/application/install/view/index/foot.html";i:1622161391;}*/ ?>
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
        <legend><?php echo lang('install/environment_title'); ?></legend>
    </fieldset>
    <table class="layui-table" lay-skin="line">
        <thead>
            <tr>
                <th><?php echo lang('install/environment_name'); ?></th>
                <th><?php echo lang('install/required_config'); ?></th>
                <th><?php echo lang('install/current_config'); ?></th>
            </tr> 
        </thead>
        <tbody>
            <?php if(is_array($data['env']) || $data['env'] instanceof \think\Collection || $data['env'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['env'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr class="<?php echo $vo[4]; ?>">
                <td><?php echo $vo[0]; ?></td>
                <td><?php echo $vo[2]; ?></td>
                <td><?php echo $vo[3]; ?></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <table class="layui-table" lay-skin="line">
        <thead>
            <tr>
                <th><?php echo lang('install/dir_file'); ?></th>
                <th><?php echo lang('install/required_popedom'); ?></th>
                <th><?php echo lang('install/current_popedom'); ?></th>
            </tr> 
        </thead>
        <tbody>
            <?php if(is_array($data['dir']) || $data['dir'] instanceof \think\Collection || $data['dir'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['dir'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr class="<?php echo $vo[4]; ?>">
                <td><?php echo $vo[1]; ?></td>
                <td><?php echo $vo[2]; ?></td>
                <td><?php echo $vo[3]; ?></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <table class="layui-table" lay-skin="line">
        <thead>
            <tr>
                <th><?php echo lang('install/func_ext'); ?></th>
                <th><?php echo lang('install/type'); ?></th>
                <th><?php echo lang('install/result'); ?></th>
            </tr> 
        </thead>
        <tbody>
            <?php if(is_array($data['func']) || $data['func'] instanceof \think\Collection || $data['func'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['func'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr class="<?php echo $vo[2]; ?>">
                <td><?php echo $vo[0]; ?></td>
                <td><?php echo $vo[3]; ?></td>
                <td><?php echo $vo[1]; ?></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="step-btns">
        <a href="?index" class="layui-btn layui-btn-primary layui-btn-big fl"><?php echo lang('install/back_step'); ?></a>

        <a href="?step=3" class="layui-btn layui-btn-big layui-btn-normal fr"><?php echo lang('install/next_step'); ?></a>
        <a target="_blank" href="http://www.maccms.la/doc/v10/faq.html" class="layui-btn layui-btn-big layui-btn-danger fr"><?php echo lang('install/question'); ?></a>
    </div>
</div>
<div class="copyright">
    © <a href="http://www.maccms.la/?v10" target="_blank">MacCMS.LA</a> All Rights Reserved.
</div>
</body>
</html>