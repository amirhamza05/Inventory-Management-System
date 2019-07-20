<div style="background-color: #ffffff; height: 100%; position: absolute;">
    <div class="sidebar-nav" style="">
        <style type="text/css">
            .img_style {
                height: 74px;
                width: 70px;
                margin: -5px;
            }
        </style>
        <style type="text/css">
            .side_bar_ul a {
                text-decoration: none;
            }
    
    .side_bar_icon {
        background-color: rgba(0, 0, 0, 0.1);
        margin-right: 10px;
        font-size: 15px;
        width: 30px;
        height: 30px;
        line-height: 30px!important;
        text-align: center!important;
        border-radius: 5px;
        padding-left: 9px;
    }
    
    .side_bar_ul {
        color: var(--font-color);
        opacity: 0.9;
    }
</style>
    
    <?php
        $user_name=$login_user['uname'];
        $phone=$login_user['phone'];
        $id=4;
        $photo="png";
    ?>

            <ul class="side_bar_ul">

                <li class="side-user" style="">

                    <div class="user-head">
                        <div>
                            <a class="inbox-avatar" style="border-radius: 0%" href="user_info.php?user_id=<?php echo " $id "; ?>">
        <img class="img_style"  width="74" hieght="70" src="<?php echo"$photo"; ?>">
    </a>
                            <div class="user-name" style="">
                                <h5><a href="user_info.php?user_id=<?php echo "$id"; ?>"><?php echo "$user_name"; ?></a></h5>
                                <span><a href="user_info.php?user_id=<?php echo "$id"; ?>"><?php echo "$phone"; ?></a></span>
                            </div>
                        </div>

                    </div>

                </li>

                <li><a href="index.php" class="nav-header"><i class="fa fa-fw fa-dashboard side_bar_icon"></i> Dashboard</a></li>

                <li><a href="pos.php" class="nav-header"><i class="fa fa-fw fa-dashboard side_bar_icon"></i> Pos</a></li>

                <li><a href="product_list.php" class="nav-header"><i class="fa fa-outdent  side_bar_icon"></i> Product List</a></li>

                <li><a href="page_view.php?action=brand" class="nav-header"><i class="fa fa-outdent  side_bar_icon"></i> Brand</a></li>

                <li><a href="page_view.php?action=unit" class="nav-header"><i class="fa fa-renren side_bar_icon"></i> Unit</a></li>

                <li><a href="page_view.php?action=category" class="nav-header"><i class="fa fa-fw fa-book side_bar_icon"></i> Category</a></li>

                

                <li><a href="javascript:void(0)" data-target=".setting" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-cogs side_bar_icon"></i> Report<i class="fa fa-collapse"></i></a></li>

                <li>
                    <ul class="setting nav nav-list collapse">
                        <li><a href="setting.php" class="l_active"><span class="fa fa-caret-right"></span>Genaral Setting</a></li>

                    </ul>
                </li>
            </ul>
    </div>

</div>

