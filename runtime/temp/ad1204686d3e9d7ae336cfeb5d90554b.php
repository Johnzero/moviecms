<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"/www/wwwroot/dyzb111.xyz/application/admin/view/role/index.html";i:1622161391;s:64:"/www/wwwroot/dyzb111.xyz/application/admin/view/public/head.html";i:1622161391;s:64:"/www/wwwroot/dyzb111.xyz/application/admin/view/public/foot.html";i:1622161391;}*/ ?>
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

    <div class="my-toolbar-box">
        <?php if($param['select'] != 1): ?>
        <div class="center mb10">
            <form class="layui-form " method="post" action="<?php echo url('data'); ?>">
                <input type="hidden" value="<?php echo $param['select']; ?>" name="select">
                <input type="hidden" value="<?php echo $param['input']; ?>" name="input">
                <div class="layui-input-inline w150">
                    <select name="status">
                        <option value=""><?php echo lang('select_status'); ?></option>
                        <option value="0" <?php if($param['status'] == '0'): ?>selected <?php endif; ?>><?php echo lang('reviewed_not'); ?></option>
                        <option value="1" <?php if($param['status'] == '1'): ?>selected <?php endif; ?>><?php echo lang('reviewed'); ?></option>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="level">
                        <option value=""><?php echo lang('select_level'); ?></option>
                        <option value="9" <?php if($param['level'] == '9'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>9-<?php echo lang('slide'); ?></option>
                        <option value="1" <?php if($param['level'] == '1'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>1</option>
                        <option value="2" <?php if($param['level'] == '2'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>2</option>
                        <option value="3" <?php if($param['level'] == '3'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>3</option>
                        <option value="4" <?php if($param['level'] == '4'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>4</option>
                        <option value="5" <?php if($param['level'] == '5'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>5</option>
                        <option value="6" <?php if($param['level'] == '6'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>6</option>
                        <option value="7" <?php if($param['level'] == '7'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>7</option>
                        <option value="8" <?php if($param['level'] == '8'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>8</option>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="pic">
                        <option value=""><?php echo lang('select_pic'); ?></option>
                        <option value="1" <?php if($param['pic'] == '1'): ?>selected<?php endif; ?>><?php echo lang('pic_empty'); ?></option>
                        <option value="2" <?php if($param['pic'] == '2'): ?>selected<?php endif; ?>><?php echo lang('pic_remote'); ?></option>
                        <option value="3" <?php if($param['pic'] == '3'): ?>selected<?php endif; ?>><?php echo lang('pic_sync_err'); ?></option>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="order">
                        <option value=""><?php echo lang('select_sort'); ?></option>
                        <option value="role_time" <?php if($param['order'] == 'role_time'): ?>selected<?php endif; ?>><?php echo lang('update_time'); ?></option>
                        <option value="role_id" <?php if($param['order'] == 'role_id'): ?>selected<?php endif; ?>><?php echo lang('id'); ?></option>
                        <option value="role_hits" <?php if($param['order'] == 'role_hits'): ?>selected<?php endif; ?>><?php echo lang('hits'); ?></option>
                        <option value="role_hits_month" <?php if($param['order'] == 'role_hits_month'): ?>selected<?php endif; ?>><?php echo lang('hits_month'); ?></option>
                        <option value="role_hits_week" <?php if($param['order'] == 'role_hits_week'): ?>selected<?php endif; ?>><?php echo lang('hits_week'); ?></option>
                        <option value="role_hits_day" <?php if($param['order'] == 'role_hits_day'): ?>selected<?php endif; ?>><?php echo lang('hits_day'); ?></option>
                    </select>
                </div>

                <div class="layui-input-inline">
                    <input type="text" autocomplete="off" placeholder="<?php echo lang('wd'); ?>" class="layui-input" name="wd" value="<?php echo $param['wd']; ?>">
                </div>
                <button class="layui-btn mgl-20 j-search" ><?php echo lang('btn_search'); ?></button>
            </form>
        </div>
        <?php endif; ?>

        <div class="layui-btn-group">
            <?php if($param['select'] == 1 && $param['rid'] != ''): ?>
            <a data-href="<?php echo url('info'); ?>?tab=<?php echo $param['tab']; ?>&rid=<?php echo $param['rid']; ?>" data-full="1" class="layui-btn layui-btn-primary j-iframe"><i class="layui-icon">&#xe654;</i><?php echo lang('add'); ?></a>
            <?php endif; ?>
            <a data-href="<?php echo url('del'); ?>" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe640;</i><?php echo lang('del'); ?></a>
            <a data-href="<?php echo url('index/select'); ?>?tab=role&col=role_level&tpl=select_level&url=role/field" data-width="270" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i><?php echo lang('level'); ?></a>
            <a data-href="<?php echo url('index/select'); ?>?tab=role&col=role_hits&tpl=select_hits&url=role/field" data-width="470" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i><?php echo lang('hits'); ?></a>
            <a data-href="<?php echo url('index/select'); ?>?tab=role&col=role_status&tpl=select_status&url=role/field" data-width="470" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i><?php echo lang('status'); ?></a>
            <a class="layui-btn layui-btn-primary j-iframe" data-href="<?php echo url('images/opt?tab=role'); ?>" href="javascript:;" title="<?php echo lang('pic_sync'); ?>"><i class="layui-icon">&#xe620;</i><?php echo lang('pic_sync'); ?></a>
        </div>

    </div>


    <form class="layui-form " method="post" id="pageListForm">
        <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th width="50"><?php echo lang('id'); ?></th>
                <th ><?php echo lang('vod_name'); ?></th>
                <th width="150"><?php echo lang('role_name'); ?></th>
                <th width="150"><?php echo lang('actor_name'); ?></th>
                <th width="40"><?php echo lang('sort'); ?></th>
                <th width="40"><?php echo lang('hits'); ?></th>
                <th width="40"><?php echo lang('level'); ?></th>
                <th width="120"><?php echo lang('update_time'); ?></th>
                <th width="80"><?php echo lang('opt'); ?></th>
            </tr>
            </thead>

            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><input type="checkbox" name="ids[]" value="<?php echo $vo['role_id']; ?>" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td><?php echo $vo['role_id']; ?></td>
                <td><a target="_blank" class="layui-badge-rim " href="<?php echo mac_url_vod_detail($vo['data']); ?>">[<?php echo htmlspecialchars($vo['data']['vod_name']); ?>]</a></td>
                <td> <a target="_blank" class="layui-badge-rim " href="<?php echo mac_url_role_detail($vo); ?>"><?php echo htmlspecialchars($vo['role_name']); ?></a> <?php if($vo['role_status'] == 0): ?> <span class="layui-badge"><?php echo lang('reviewed_not'); ?></span><?php endif; if($vo['role_lock'] == 1): ?> <span class="layui-badge"><?php echo lang('lock'); ?></span><?php endif; ?></td>
                <td><?php echo htmlspecialchars($vo['role_actor']); ?></td>
                <td><?php echo $vo['role_sort']; ?></td>
                <td><?php echo $vo['role_hits']; ?></td>
                <td><a data-href="<?php echo url('index/select'); ?>?tab=role&col=role_level&tpl=select_level&url=role/field&ids=<?php echo $vo['role_id']; ?>" data-width="270" data-height="100" class=" j-select"><span class="layui-badge layui-bg-orange"><?php echo $vo['role_level']; ?></span></a></td>
                <td><?php echo mac_day($vo['role_time'],color); ?></td>
                <td>
                    <a class="layui-badge-rim j-iframe" data-full="1" data-href="<?php echo url('info?id='.$vo['role_id']); ?>" href="javascript:;" title="<?php echo lang('edit'); ?>"><?php echo lang('edit'); ?></a>
                    <a class="layui-badge-rim j-tr-del" data-href="<?php echo url('del?ids='.$vo['role_id']); ?>" href="javascript:;" title="<?php echo lang('del'); ?>"><?php echo lang('del'); ?></a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <div id="pages" class="center"></div>
    </form>
</div>




<script type="text/javascript" src="/static/js/admin_common.js"></script>

<script type="text/javascript">
    var curUrl="<?php echo url('role/data',$param); ?>";
    layui.use(['laypage', 'layer','form'], function() {
        var laypage = layui.laypage
                , layer = layui.layer,
                form = layui.form;

        laypage.render({
            elem: 'pages'
            ,count: <?php echo $total; ?>
            ,limit: <?php echo $limit; ?>
            ,curr: <?php echo $page; ?>
            ,layout: ['count', 'prev', 'page', 'next', 'limit', 'skip']
            ,jump: function(obj,first){
                if(!first){
                    location.href = curUrl.replace('%7Bpage%7D',obj.curr).replace('%7Blimit%7D',obj.limit);
                }
            }
        });


    });
</script>
</body>
</html>