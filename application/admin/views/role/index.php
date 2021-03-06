                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
                </script>
            </div>
            <div class="main-content">
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                    </script>

                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="#">首页</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('Role/index');?>">角色管理</a>
                        </li>
                        <li class="active">角色列表</li>
                    </ul>
                </div>
                <div class="page-content">
                    <div class="ace-settings-container" id="ace-settings-container">
                        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                            <i class="ace-icon fa fa-cog bigger-150"></i>
                        </div>
                        <div class="ace-settings-box clearfix" id="ace-settings-box">
                            <div class="pull-left width-50">
                                <!-- #section:settings.skins -->
                                <div class="ace-settings-item">
                                    <div class="pull-left">
                                        <select id="skin-colorpicker" class="hide">
                                            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                        </select>
                                    </div>
                                    <span>&nbsp; 选择皮肤</span>
                                </div>
                                <div class="ace-settings-item">
                                    <label class="lbl" for="ace-settings-hover"> <!-- Submenu on Hover --></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-content-area">
                        <div class="page-header">
                            <h1>
                                角色列表
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                </small>
                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
        <style>
            .inputs{display:none;width:40px;}
        </style>
        <form class="form-horizontal" action="<?php echo site_url('Role/batchDelRole'); ?>" method="post">
            <div class="row">
                <div class="col-xs-12">
                    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                        <tr>
                            <th class="left" width="25">
                                <label class="position-relative">
                                    <input type="checkbox" class="ace">
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th class="left" width="25">ID</th>
                            <th class="left">角色名</th>
                            <th class="left" width="119">操作</th>

                        </tr>
                        <?php foreach($rolelist as $key=>$role): ?>
                        <tr>
                            <td class="left">
                                <label class="position-relative">
                                    <input type="checkbox" class="ace" name="IDCheck[]" value="<?php echo $role['r_id'];?>">
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td class="left"><?php echo $role['r_id'];?></td>
                            <td class="left"><?php echo $role['r_name'];?></td>
                            <td>
                                <a class="blue pull-left" title="权限设置" href="<?php echo site_url('/Role/auth/'.$role['r_id']); ?>"><i class="ace-icon glyphicon glyphicon-cog bigger-130" style="margin:0px 5px 0px 0px;"></i></a>
								<a class="blue pull-left" title="成员管理" href="<?php echo site_url('/Manager/index/'.$role['r_id']); ?>"><i class="ace-icon glyphicon glyphicon-list-alt bigger-130" style="margin:0px 5px;"></i></a>
                                <a class="green pull-left" title="修改" href="<?php echo site_url('/Role/update/'.$role['r_id']); ?>"><i class="ace-icon fa fa-pencil bigger-130" style="margin:0px 5px;"></i></a>
                                <a class="red pull-left" title="删除" href="<?php echo site_url('/Role/delRole/'.$role['r_id']); ?>"><i class="ace-icon fa fa-trash-o bigger-120" style="margin:0px 5px;"></i></a>
                        </tr>
                        <?php endforeach;?>
                        <?php if (count($rolelist)<1): ?>
                            <tr class="unread checked">
                                <td colspan="9" align="center">暂无记录</td>
                            </tr>
                        <?php endif;?>
                    </table>
                    <div class="clear">
                        <input type="submit" class="btn-danger btn" style="float:left;margin:20px 0;padding:0;" value="删除选中"/>
                        <a href="<?php echo site_url('Role/add/'); ?>" class="btn-success btn" style="float:left;margin:20px 10px;padding:0;">添加角色</a>
                        <input type="hidden" name="offset" value="<?php echo $offset;?>">
                        <div style="float:right;"><?php echo $links;?></div> 
                        <input type="button" class="btn-default btn" style="float:right;margin:20px 10px;padding:0;" value='<?php echo "共".$count."条";?>'/>
                    </div>
                </div>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</div>
