<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:104:"D:\20170717workspace\UPUPW\UPUPW_NP7.0\htdocs\project\public/../application/admin\view\article\list.html";i:1503722550;}*/ ?>
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
                    <li class="active">文章管理</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon"
                        onClick="javascript:window.location.href = '<?php echo url('Article/add'); ?>'"><i class="fa fa-plus"></i>
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
                                            <th class="text-center">文章名称</th>
                                            <th class="text-center">作者</th>
                                            <th class="text-center">栏目</th>
                                            <th class="text-center">关键字</th>
                                            <th class="text-center">缩略图</th>
                                            <th class="text-center">上传时间</th>
                                            <th class="text-center">是否推荐</th>
                                            <th class="text-center">点击量</th>
                                            <th class="text-center">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!--{volist name="data" id="v"}-->
                                        <?php foreach($data as $v): ?>
                                        <tr>
                                            <td align="center" style="line-height: 70px"><?php echo $v['id']; ?></td>
                                            <td align="center" style="line-height: 70px"><?php echo $v['title']; ?></td>
                                            <td align="center" style="line-height: 70px"><?php echo $v['author']; ?></td>
                                            <td align="center" style="line-height: 70px"><?php echo $v['catename']; ?></td>
                                            <td align="center" style="line-height: 70px"><?php echo $v['keywords']; ?></td>
                                            <td align="center" style="line-height: 70px">
                                                <?php if($v['pic'] != ''): ?>
                                                <img src="<?php echo $v['pic']; ?>" alt="" width="100"></td>
                                                <?php else: ?>
                                                暂无缩略图
                                                <?php endif; ?>
                                            <td align="center" style="line-height: 70px"><?php echo date('Y-m-d H:i:s',$v['time']); ?></td>
                                            <td align="center" style="line-height: 70px"><?php echo $v['state']; ?></td>
                                            <td align="center" style="line-height: 70px"><?php echo $v['click']; ?></td>
                                            <td align="center"  style="line-height: 70px">
                                                <a href="<?php echo url('Article/edit',['id'=>$v['id']]); ?>"
                                                   class="btn btn-primary btn-sm shiny">
                                                    <i class="fa fa-edit"></i> 编辑
                                                </a>
                                                <a href="#"
                                                   onClick="warning('确实要删除吗', '<?php echo url('Article/del',['id'=>$v['id']]); ?>')"
                                                   class="btn btn-danger btn-sm shiny">
                                                    <i class="fa fa-trash-o"></i> 删除
                                                </a>
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