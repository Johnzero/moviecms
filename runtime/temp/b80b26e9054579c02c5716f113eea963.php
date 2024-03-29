<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"/www/wwwroot/dyzb111.xyz/application/admin/view/template/ads.html";i:1622161391;s:64:"/www/wwwroot/dyzb111.xyz/application/admin/view/public/head.html";i:1622161391;s:64:"/www/wwwroot/dyzb111.xyz/application/admin/view/public/foot.html";i:1622161391;}*/ ?>
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
<div class="page-container p10">
    <div class="my-btn-box lh30" >
        <div class="layui-btn-group fl">
            <a data-full="1" data-href="<?php echo url('info'); ?>?fpath=<?php echo $curpath; ?>&fname=" class="layui-btn layui-btn-primary j-iframe"><i class="layui-icon">&#xe654;</i><?php echo lang('add'); ?></a>
        </div>
        <div class="page-filter fr" >

        </div>
    </div>

    <form class="layui-form layui-form-pane" action="">
        <table class="layui-table mt10">
        <thead>
        <tr>
            <th><?php echo lang('file_name'); ?></th>
            <th width="150"><?php echo lang('file_des'); ?></th>
            <th width="150"><?php echo lang('file_size'); ?></th>
            <th width="150"><?php echo lang('file_time'); ?></th>
            <th width="200"><?php echo lang('admin/template/call_code'); ?></th>
            <th width="130"><?php echo lang('opt'); ?></th>
        </tr>
        </thead>
            <?php if(is_array($files) || $files instanceof \think\Collection || $files instanceof \think\Paginator): $i = 0; $__LIST__ = $files;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>

                <th><?php echo $vo['name']; ?></a></th>
                <td><?php echo $vo['note']; ?></td>
                <td><?php echo $vo['size']; ?></td>
                <td><?php echo mac_day($vo['time'],color); ?></td>
                <td>
                    <input id="txt<?php echo $key; ?>" type="text" value='<script src="{$maccms.path_ads}<?php echo $vo['name']; ?>"></script>' size="60">
                </td>
                <td>
                    <a class="layui-badge-rim j-clipboard" data-clipboard-target="#txt<?php echo $key; ?>" href="javascript:;" title="<?php echo lang('copy'); ?>"><?php echo lang('copy'); ?></a>
                    <a class="layui-badge-rim j-iframe" data-full="1" data-href="<?php echo url('info'); ?>?fpath=<?php echo $vo['path']; ?>&fname=<?php echo $vo['name']; ?>" href="javascript:;" title="<?php echo lang('edit'); ?>"><?php echo lang('edit'); ?></a>
                    <a class="layui-badge-rim j-tr-del" data-href="<?php echo url('del'); ?>?fname=<?php echo $vo['fullname']; ?>" href="javascript:;" title="<?php echo lang('del'); ?>"><?php echo lang('del'); ?></a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
        <tfoot>
            <tr><td colspan="6"><?php echo lang('admin/template/current_dir'); ?>：<?php echo str_replace('@','/',$curpath); ?>，<?php echo lang('sum'); ?><b class="red"><?php echo $num_file; ?></b><?php echo lang('file'); ?>,<?php echo lang('occupies'); ?><b class="red"><?php echo $sum_size; ?></b><?php echo lang('space'); ?></td></tr>
        </tfoot>
    </table>
    </form>
</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript" src="/static/js/jquery.clipboard.js"></script>
<script type="text/javascript">
    var clipboard = new ClipboardJS('.j-clipboard');
    clipboard.on('success', function(e) {
       layer.msg('copy ok');
    });

    function data_info(path,name)
    {
        var index = layer.open({
            type: 2,
            shade:0.4,
            title: "<?php echo lang('edit'); ?>",
            content: "<?php echo url('template/info'); ?>?fpath="+path+'&fname='+name
        });

        layer.full(index);
    }

    function data_del(id)
    {
        if(!id){
            id  = checkIds('fname[]');
        }
        layer.confirm("<?php echo lang('del_confirm'); ?>", function (index) {
            location.href = "<?php echo url('template/del'); ?>?fname=" + id;
        });
    }

    $(function(){

    });
</script>
</body>
</html>