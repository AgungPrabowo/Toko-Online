<?php $this->load->view($header);?>
<?php $this->load->view($menu);?>

            <!-- START Shop Content -->
            <section class="section">
                <div class="container">
                    <!-- START Section Header -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header text-center">
                                <h1 class="section-title font-alt mb25">Shopping Cart</h1>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <h4 class="thin text-muted text-center mb30">Please review your order below</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ END Section Header -->

                    <!-- START row -->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="panel nm" style="border-bottom-width:1px;">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th width="15%">Gambar</th>
                                            <th>Nama Produk</th>
                                            <th width="15%">Kuantiti</th>
                                            <th width="15%">Harga</th>
                                            <th width="5%">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                            $total_harga = 0;
                                            foreach($this->cart->contents() as $items):
                                            $gambar	= $this->Model_produk->ambil_gambar($items['id']);
                                        ?>

                                        <tr>
                                            <td>
                                                <!-- thumbnail -->
                                                <div class="thumbnail nm">
                                                    <!-- media -->
                                                    <div class="media">
                                                        <!-- indicator -->
                                                        <div class="indicator"><span class="spinner"></span></div>
                                                        <!--/ indicator -->
							
                                                        <img data-toggle="unveil" src="<?=site_url('assets/image/shop/placeholder.jpg');?>" data-src="<?=base_url('assets/images/produk/'.$gambar->gambar);?>" alt="Photo" width="100%" />
                                                    </div>
                                                    <!--/ media -->
                                                </div>
                                                <!--/ thumbnail -->
                                            </td>
                                            <td>
                                                <h4 class="mt0"><?=$items['name'];?></h4>
                                            </td>
                                            <td>
                                                <h4 class="font-alt nm"><?=$items['qty'];?></h4>
                                            </td>
                                            <td>
                                                <?php $total_harga = $total_harga + $items['subtotal'];?>
                                                <h4 class="font-alt text-primary nm"><?=$items['subtotal'];?></h4>
                                            </td>
                                            <td>
                                                <h5 class="nm"><a href="<?=site_url('/pesanan/remove/'.$items['rowid']);?>"><i class="ico-close2"></i></a></h5>
                                            </td>
                                        </tr>

                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h3 class="section-title font-alt mt0">Some note for you</h3>

                            <p class="mb15">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                            <p class="mb15">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident.</p>

                            <div class="clearfix">
                                <a href="<?=site_url('/user/checkout/'.$id_user);?>" class="btn btn-primary pull-left">Proses Checkout</a>
                                <a href="<?=site_url();?>" class="btn btn-link pull-left">Lanjutkan Belanja</a>
                            </div>
                        </div>
                    </div>
                    <!--/ END row -->
                </div>
            </section>
            <!--/ END Shop Content -->

            <!-- START Related Product -->
            <section class="section bgcolor-white">
                <div class="container">
                    <!-- START Section Header -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header text-center">
                                <h1 class="section-title font-alt mb25">Related Product</h1>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <h4 class="thin text-muted text-center">Hey!, we have some related products just for you.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ END Section Header -->

                    <!-- START row -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel no-border overflow-hidden">
                                <!-- thumbnail -->
                                <div class="thumbnail nm">
                                    <!-- media -->
                                    <div class="media">
                                        <!-- indicator -->
                                        <div class="indicator"><span class="spinner"></span></div>
                                        <!--/ indicator -->

                                        <img data-toggle="unveil" src="<?=base_url();?>assets/front-end/image/shop/placeholder.jpg" data-src="<?=base_url();?>assets/front-end/image/shop/item1.jpg" alt="Photo" width="100%" />

                                        <!-- meta -->
                                        <span class="meta meta-hover bottom light">
                                            <i class="ico-star6 text-primary"></i>
                                            <i class="ico-star6 text-primary"></i>
                                            <i class="ico-star6 text-primary"></i>
                                            <i class="ico-star6 text-primary"></i>
                                            <i class="ico-star5 text-primary"></i>
                                        </span>
                                    </div>
                                    <!--/ media -->
                                </div>
                                <!--/ thumbnail -->
                                <!-- Meta -->
                                <div class="panel-footer" style="padding:25px;border:0;">
                                    <h4 class="text-center mt0"><a href="#" class="text-default">505 Fit Jeans</a></h4>
                                    <h3 class="font-alt text-center text-accent mt0">$102.50</h3>
                                </div>
                                <!--/ Meta -->
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="panel no-border overflow-hidden">
                                <!-- thumbnail -->
                                <div class="thumbnail nm">
                                    <!-- media -->
                                    <div class="media">
                                        <!-- indicator -->
                                        <div class="indicator"><span class="spinner"></span></div>
                                        <!--/ indicator -->

                                        <img data-toggle="unveil" src="<?=base_url();?>assets/front-end/image/shop/placeholder.jpg" data-src="<?=base_url();?>assets/front-end/image/shop/item7.jpg" alt="Photo" width="100%" />

                                        <!-- meta -->
                                        <span class="meta meta-hover bottom light">
                                            <i class="ico-star6 text-primary"></i>
                                            <i class="ico-star6 text-primary"></i>
                                            <i class="ico-star5 text-primary"></i>
                                            <i class="ico-star4 text-primary"></i>
                                            <i class="ico-star4 text-primary"></i>
                                        </span>
                                    </div>
                                    <!--/ media -->
                                </div>
                                <!--/ thumbnail -->
                                <!-- Meta -->
                                <div class="panel-footer" style="padding:25px;border:0;">
                                    <h4 class="text-center mt0"><a href="#" class="text-default">Long Sleeve Tee</a></h4>
                                    <h3 class="font-alt text-center text-accent mt0">$42.00</h3>
                                </div>
                                <!--/ Meta -->
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="panel no-border overflow-hidden">
                                <!-- thumbnail -->
                                <div class="thumbnail nm">
                                    <!-- media -->
                                    <div class="media">
                                        <!-- indicator -->
                                        <div class="indicator"><span class="spinner"></span></div>
                                        <!--/ indicator -->

                                        <img data-toggle="unveil" src="<?=base_url();?>assets/front-end/image/shop/placeholder.jpg" data-src="<?=base_url();?>assets/front-end/image/shop/item3.jpg" alt="Photo" width="100%" />

                                        <!-- meta -->
                                        <span class="meta meta-hover bottom light">
                                            <i class="ico-star6 text-primary"></i>
                                            <i class="ico-star6 text-primary"></i>
                                            <i class="ico-star6 text-primary"></i>
                                            <i class="ico-star6 text-primary"></i>
                                            <i class="ico-star6 text-primary"></i>
                                        </span>
                                    </div>
                                    <!--/ media -->
                                </div>
                                <!--/ thumbnail -->
                                <!-- Meta -->
                                <div class="panel-footer" style="padding:25px;border:0;">
                                    <h4 class="text-center mt0"><a href="#" class="text-default">Chino Shorts</a></h4>
                                    <h3 class="font-alt text-center text-accent mt0">$99.00</h3>
                                </div>
                                <!--/ Meta -->
                            </div>
                        </div>
                    </div>
                    <!--/ END row -->
                </div>
            </section>
            <!--/ END Related Product -->

<?php $this->load->view($footer);?>