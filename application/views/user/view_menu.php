    <!-- START Body -->
    <body>
        <!-- START Template Header -->
        <header id="header" class="navbar">
            <div class="container">
                <!-- START navbar header -->
                <div class="navbar-header navbar-header-transparent">
                    <!-- Brand -->
                    <a class="navbar-brand" href="javascript:void(0);">
                        <span class="logo-figure" style="margin-left:-4px;"></span>
                        <span class="logo-text"></span>
                    </a>
                    <!--/ Brand -->
                </div>
                <!--/ END navbar header -->

                <!-- START Toolbar -->
                <div class="navbar-toolbar clearfix">
                    <!-- START Left nav -->
                    <ul class="nav navbar-nav">
                        <!-- Navbar collapse: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                        <li class="navbar-main navbar-toggle">
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="meta">
                                    <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                                </span>
                            </a>
                        </li>
                        <!--/ Navbar collapse -->
                    </ul>
                    <!--/ END Left nav -->

                    <!-- START navbar form -->
                    <div class="navbar-form navbar-left dropdown" id="dropdown-form">
                        <form action="" role="search">
                            <div class="has-icon">
                                <input type="text" class="form-control input-lg" placeholder="Search this site...">
                                <i class="ico-search form-control-icon"></i>
                            </div>
                        </form>
                    </div>
                    <!-- START navbar form -->

                    <!-- START Right nav -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Search form toggler -->
                        <li>
                            <a href="javascript:void(0);" data-toggle="dropdown" data-target="#dropdown-form">
                                <span class="meta">
                                    <span class="icon"><i class="ico-search"></i></span>
                                </span>
                            </a>
                        </li>
                        <!--/ Search form toggler -->

                        <!-- Cart dropdown -->
                        <li class="dropdown custom" id="header-dd-cart">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="meta">
                                    <span class="icon"><i class="ico-cart4"></i></span>
                                    <span class="badge badge-primary pull-right"><?=$this->cart->total_items();?></span>
                                </span>
                            </a>

                            <!-- Dropdown menu -->
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-body slimscroll">
                                    <!-- indicator -->
                                    <div class="indicator"><span class="spinner spinner16"></span></div>
                                    <!--/ indicator -->

                                    <!-- Item list -->
                                    <div class="panel panel-minimal mb0">
                                        <ul class="list-group">
                                            
                                            <?php 
                                                $total_harga = 0;
                                                foreach($this->cart->contents() as $items): 
                                            ?>

                                            <li class="list-group-item pt20 pb20">
                                                <div class="row">
                                                    <div class="col-xs-7">
                                                        <h5 class="semibold ellipsis"><?=$items['name'];?></h5>
                                                    </div>
                                                    <div class="col-xs-5">
                                                        <h5 class="semibold text-info pull-left"><?=number_format($items['price'],0, '', '.');?></h5>
                                                        <a href="<?=site_url('/pesanan/remove/'.$items['rowid']);?>" class="pull-right text-muted"><i class="ico-close2"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <?php 
                                                $total_harga = $total_harga + $items['subtotal'];
                                                endforeach; 
                                            ?>

                                        </ul>
                                    </div>
                                    <!--/ Item list -->
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-xs-7">
                                            <h4 class="ellipsis font-alt text-success" style="margin-top:7px;"><?=number_format($total_harga,0, '', '.');?></h4>
                                        </div>
                                        <div class="col-xs-5 text-right">
                                            <a href="<?=site_url();?>/home/keranjang" class="btn btn-primary">Check Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Dropdown menu -->
                        </li>
                        <!--/ Login cart dropdown -->

                        <!-- Login cart dropdown -->
                        <li class="dropdown custom" id="header-dd-cart">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="meta">
                                    <?php 
                                    $username = $this->session->userdata('username');
                                    $email    = $this->session->userdata('email');
                                        if($username || $email):
                                    ?>
                                    <span class="icon"><i class="ico-cart4"></i></span>
                                    <span class="badge badge-primary pull-right"><?=$this->cart->total_items();?></span>
                                    <?php else: ?>
                                    <span class="icon">Masuk</span>
                                    <?php endif; ?>
                                </span>
                            </a>

                            <!-- Dropdown menu -->
                            <div class="dropdown-menu" role="menu">
                                <?php if($username || $email): ?>
                                <div class="dropdown-body slimscroll">
                                    <!-- indicator -->
                                    <div class="indicator"><span class="spinner spinner16"></span></div>
                                    <!--/ indicator -->

                                    <!-- Item list -->
                                    <div class="panel panel-minimal mb0">
                                        <ul class="list-group">
                                            
                                            <?php 
                                                $total_harga = 0;
                                                foreach($this->cart->contents() as $items): 
                                            ?>

                                            <li class="list-group-item pt20 pb20">
                                                <div class="row">
                                                    <div class="col-xs-7">
                                                        <h5 class="semibold ellipsis"><?=$items['name'];?></h5>
                                                    </div>
                                                    <div class="col-xs-5">
                                                        <h5 class="semibold text-info pull-left"><?=number_format($items['price'],0, '', '.');?></h5>
                                                        <a href="<?=site_url('/pesanan/remove/'.$items['rowid']);?>" class="pull-right text-muted"><i class="ico-close2"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <?php 
                                                $total_harga = $total_harga + $items['subtotal'];
                                                endforeach; 
                                            ?>

                                        </ul>
                                    </div>
                                    <!--/ Item list -->
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-xs-7">
                                            <h4 class="ellipsis font-alt text-success" style="margin-top:7px;"><?=number_format($total_harga,0, '', '.');?></h4>
                                        </div>
                                        <div class="col-xs-5 text-right">
                                            <a href="<?=site_url();?>/home/keranjang" class="btn btn-primary">Check Out</a>
                                        </div>
                                    </div>
                                </div>
                                <?php else: ?>
                                <form action="<?=site_url('/home/cek_login');?>" method="POST">
                                    <div class="dropdown-body slimscroll">
                                    <!-- indicator -->
                                    <div class="indicator"><span class="spinner spinner16"></span></div>
                                    <!--/ indicator -->
                                    
                                        <!-- Item list -->
                                        <div class="panel panel-minimal mb0">
                                            <div class="form-group">
                                                <div class="form-stack has-icon pull-left">
                                                    <input name="username" type="text" class="form-control input-lg" placeholder="Username / email" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your username / email" data-parsley-required>
                                                    <i class="ico-user2 form-control-icon"></i>
                                                </div>
                                                <div class="form-stack has-icon pull-left">
                                                    <input name="pass" type="password" class="form-control input-lg" placeholder="Password" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your password" data-parsley-required>
                                                    <i class="ico-lock2 form-control-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <!--/ Item list -->
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <button type="submit" class="btn btn-block btn-success"><span class="semibold">Masuk</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <?php endif;?>
                            </div>
                            <!--/ Dropdown menu -->
                        </li>
                        <!--/ Login cart dropdown -->

                        <!-- Login cart dropdown -->
                        <?php if($username || $email): ?>
                        <li class="dropdown custom" id="header-dd-cart">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="meta">
                                    <span class="icon"><i class="ico-user"></i></span>
                                </span>
                            </a>

                            <!-- Dropdown menu -->
                            <div class="dropdown-menu" role="menu">
                                <?php if($username || $email): ?>
                                <div class="dropdown-body slimscroll">
                                    <!-- indicator -->
                                    <div class="indicator"><span class="spinner spinner16"></span></div>
                                    <!--/ indicator -->

                                    <!-- Item list -->
                                    <div class="panel panel-minimal mb0">
                                        <ul class="list-group">

                                        </ul>
                                    </div>
                                    <!--/ Item list -->
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-xs-7">
                                        </div>
                                        <div class="col-xs-5 text-right">
                                            <a href="<?=site_url('/home/logout');?>" class="btn btn-danger">Keluar</a>
                                        </div>
                                    </div>
                                </div>
                                <?php else: ?>
                                <form action="<?=site_url('/home/cek_login');?>" method="POST">
                                    <div class="dropdown-body slimscroll">
                                    <!-- indicator -->
                                    <div class="indicator"><span class="spinner spinner16"></span></div>
                                    <!--/ indicator -->
                                    
                                        <!-- Item list -->
                                        <div class="panel panel-minimal mb0">
                                            <div class="form-group">
                                                <div class="form-stack has-icon pull-left">
                                                    <input name="username" type="text" class="form-control input-lg" placeholder="Username / email" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your username / email" data-parsley-required>
                                                    <i class="ico-user2 form-control-icon"></i>
                                                </div>
                                                <div class="form-stack has-icon pull-left">
                                                    <input name="pass" type="password" class="form-control input-lg" placeholder="Password" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your password" data-parsley-required>
                                                    <i class="ico-lock2 form-control-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <!--/ Item list -->
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <button type="submit" class="btn btn-block btn-success"><span class="semibold">Masuk</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <?php endif;?>
                            </div>
                            <!--/ Dropdown menu -->
                        </li>
                        <?php endif; ?>
                        <!--/ Login cart dropdown -->
                    </ul>
                    <!--/ END Right nav -->

                    <!-- START nav collapse -->
                    <div class="collapse navbar-collapse navbar-collapse-alt" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="<?=site_url();?>" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                                    <span class="meta">
                                        <span class="text">Home</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                                    <span class="meta">
                                        <span class="text">Tentang Kami</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                                    <span class="meta">
                                        <span class="text">Hubungi Kami</span>
                                    </span>
                                </a>
                            </li>
                            <li class="dropdown ">
                                <a href="#" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                                    <span class="meta">
                                        <span class="text">Download</span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-alt">
                                    <li><a href="#">GT06N Commands</a></li>
                                    <li><a href="#">MVT Series Commands</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/ END nav collapse -->
                </div>
                <!--/ END Toolbar -->
            </div>
        </header>
        <!--/ END Template Header -->

        <?php

        if($this->uri->total_segments() == 0)
        {

        }
        else
        {

        ?>
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START page header -->
            <section class="page-header page-header-block nm">
                <!-- pattern -->
                <div class="pattern pattern9"></div>
                <!--/ pattern -->
                <div class="container pt15 pb15">
                    <div class="page-header-section">
                        <h4 class="title">Shop Default</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">Shop</a></li>
                                <li class="active">Default</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
            </section>
            <?php };?>
            <div class="clearfix"></div>
            <!--/ END page header -->