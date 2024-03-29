<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"/www/wwwroot/dyzb111.xyz/application/admin/view/index/login.html";i:1622161391;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo lang('admin/index/login/title'); ?></title>
    <link rel="stylesheet" href="/static/layui/css/layui.css?v=1024">
    <link rel="stylesheet" href="/static/css/admin_style.css?v=1024">
    <style type="text/css">
        body {
            color:#999;
            background:url('<?php echo $background; ?>');
            background-size:cover;
        }
    </style>
</head>
<body class="login-body body">
<div class="login-head">
    <h1><a href="//www.maccms.la/"><?php echo lang('admin/index/login/tip_welcome'); ?></a></h1>
</div>
<div class="login-box">
    <form class="layui-form layui-form-pane" method="post" action="">
        <div class="layui-form-item">
            <h3><?php echo lang('admin/index/login/tip_sys'); ?></h3>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('account'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" name="admin_name" class="layui-input" lay-verify="admin_name" placeholder="" autocomplete="on" maxlength="20"/>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('pass'); ?>：</label>
            <div class="layui-input-block">
                <input type="password" name="admin_pwd" class="layui-input" lay-verify="admin_pwd" placeholder="" maxlength="20"/>
            </div>
        </div>
        <?php if($GLOBALS['config']['app']['admin_login_verify'] != '0'): ?>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('verify'); ?>：</label>
            <div class="layui-input-block">
                <input type="number" name="verify" class="layui-input" lay-verify="verify" placeholder="" maxlength="4"  max="9999"/><img id="verify_img" src="/index.php/verify/index.html" onclick="this.src = this.src+'?'">
            </div>
        </div>
        <?php endif; ?>
        <button type="button" class="layui-btn btn-submit" lay-submit="" lay-filter="sub"><?php echo lang('admin/index/login/btn_submit'); ?></button>
    </form>
    <div class="copyright">
        <?php echo lang('maccms_copyright'); ?>
    </div>

    <fieldset class="layui-elem-field">
        <legend><?php echo lang('admin/index/login/tip_declare'); ?></legend>
        <div class="layui-field-box">
            <?php echo lang('admin/index/login/tip_declare_txt'); ?>
        </div>
    </fieldset>
</div>

<script type="text/javascript" src="/static/layui/layui.js"></script>
<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript">
    layui.use(['form', 'layer'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery;

        // 验证
        form.verify({
            admin_name: function (value) {
                if (value == "") {
                    return "<?php echo lang('admin/index/login/verify_no'); ?>";
                }
            },
            admin_pwd: function (value) {
                if (value == "") {
                    return "<?php echo lang('admin/index/login/verify_pass'); ?>";
                }
            },
            verify: function (value) {
                if (value == "") {
                    return "<?php echo lang('admin/index/login/verify_verify'); ?>";
                }
            }
        });

        // 提交监听
        form.on('submit(sub)', function (data) {
            layer.msg("<?php echo lang('wait_submit'); ?>",{time:500000});
            $.post("<?php echo url('index/login'); ?>",data.field,function(r){
                if(r.code==1){
                    location.href="<?php echo url('index/index'); ?>";
                }
                else{
                    layer.msg(r.msg,{time:1800});
                    $('#verify_img').click();
                }
            });
            return false;
        });


        $("input[name='admin_name']").bind('keypress',function(event){
            if(event.keyCode == "13") {
                if($("input[name='admin_name']").val()!=''){
                    $("input[name='admin_pwd']").focus();
                }
            }
        });

        $("input[name='admin_pwd']").bind('keypress',function(event){
            if(event.keyCode == "13") {
                if($("input[name='admin_pwd']").val()!=''){
                    $("input[name='verify']").focus();
                }
            }
        });

        $("input[name='verify']").bind('keypress',function(event){
            if(event.keyCode == "13") {
                if($("input[name='verify']").val()!=''){
                    $('.btn-submit').click();
                }
            }
        });
    });

</script>
</body>
</html>