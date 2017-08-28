<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:102:"D:\20170717workspace\UPUPW\UPUPW_NP7.0\htdocs\project\public/../application/admin\view\admin\list.html";i:1503735832;}*/ ?>
<?php echo widget('Blog/header'); ?>

<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <?php echo widget('Blog/left'); ?>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo url('Index/index'); ?>">系统</a>
                    </li>
                    <li class="active">用户管理</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon"
                        onClick="javascript:window.location.href = '<?php echo url('Admin/add'); ?>'"><i class="fa fa-plus"></i>
                    Add
                </button>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="flip-scroll">
                                    <table class="table table-bordered table-hover">
                                        <thead class="">
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">管理员名称</th>
                                            <th class="text-center">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!--{volist name="data" id="v"}-->
                                        <?php foreach($data as $v): ?>
                                        <tr>
                                            <td align="center"><?php echo $v['id']; ?></td>
                                            <td align="center"><?php echo $v['username']; ?></td>
                                            <td align="center" >
                                                <a href="<?php echo url('Admin/edit',['id'=>$v['id']]); ?>"
                                                   class="btn btn-primary btn-sm shiny">
                                                    <i class="fa fa-edit"></i> 编辑
                                                </a>
                                                <?php if($v['id'] == '1'): else: ?>
                                                <a href="#"
                                                   onClick="warning('确实要删除吗', '<?php echo url('Admin/del',['id'=>$v['id']]); ?>')"
                                                   class="btn btn-danger btn-sm shiny">
                                                    <i class="fa fa-trash-o"></i> 删除
                                                </a>
                                                <a href="#"
                                                   onClick="warning('确实要冻结吗', '<?php echo url('Admin/dongjie',['id'=>$v['id'],'zt'=>1]); ?>')"
                                                   class="btn btn-primary btn-sm shiny">
                                                    <i class="fa fa-trash-o"></i> 冻结
                                                </a>
                                                <a href="#"
                                                   onClick="warning('确实要冻结吗', '<?php echo url('Admin/dongjie',['id'=>$v['id'],'zt'=>0]); ?>')"
                                                   class="btn btn-danger btn-sm shiny">
                                                    <i class="fa fa-trash-o"></i> 解冻
                                                </a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>


                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                </div>
                            </div>
                            <!--显示分页输出-->
                            <?php echo $data->render(); ?>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
</div>

<!--Basic Scripts-->
<script src="__STATIC__/admin/style/jquery_002.js"></script>
<script src="__STATIC__/admin/style/bootstrap.js"></script>
<script src="__STATIC__/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__STATIC__/admin/style/beyond.js"></script>


</body></html>