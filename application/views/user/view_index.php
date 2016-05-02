<?php $this->load->view($header);?>
<?php $this->load->view($menu);?>

            <!-- START Shop Content -->
            <section class="section bgcolor-white">
                <div class="container">
                    <!-- START Section Header -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header text-center">
                                <h1 class="section-title font-alt mb25">Quality Product</h1>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <h4 class="thin text-muted text-center mb30">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </h4>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        <button type="button" class="btn btn-primary btn-outline btn-rounded">New In</button>&nbsp;
                                        <button type="button" class="btn btn-primary btn-outline btn-rounded">Shoes</button>&nbsp;
                                        <button type="button" class="btn btn-primary btn-outline btn-rounded">Clothing</button>&nbsp;
                                        <button type="button" class="btn btn-primary btn-outline btn-rounded">Accessories</button>&nbsp;
                                        <button type="button" class="btn btn-primary btn-outline btn-rounded">Bags</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ END Section Header -->

                    <!-- START row -->
                    <div class="row">

  					<?php foreach($produk->result() as $row):?>

                        <div class="col-sm-4">
                            <div class="panel no-border overflow-hidden">
                                <!-- thumbnail -->
                                <div class="thumbnail nm">
                                    <!-- media -->
                                    <div class="media">
                                        <!-- indicator -->
                                        <div class="indicator"><span class="spinner"></span></div>
                                        <!--/ indicator -->

                                        <img data-toggle="unveil" src="<?=base_url();?>assets/front-end/image/shop/placeholder.jpg" data-src="<?=base_url('assets/images/produk/'.$row->gambar);?>" alt="Photo" width="100%" />

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
                                    <h4 class="text-center mt0"><?=$row->judul;?></h4>
                                    <h3 class="font-alt text-center text-accent mt0"><?=number_format($row->harga,0, '', '.');?></h3>
                                </div>
                                <div class="panel-footer" style="padding:15px 25px;">
                                    <ul class="list-table">
                                        <li class="text-left">
                                        	<form action="<?=site_url('/pesanan/add_to_cart/'.$row->id_produk);?>" method="POST">
                                        		<input type="hidden" name="qty" value="1">
                                        		<button type="submit" class="btn btn-primary">
                                        			<i class="ico-cart-add fsize14">&nbsp;&nbsp;Beli</i>
                                        		</button>
                                        	</form>
                                        </li>
                                        <li class="text-right">
                                            <a href="shop-item-detail.html" class="btn btn-link text-default"><i class="ico-list-ul fsize14"></i>&nbsp;&nbsp;Item detail</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--/ Meta -->
                            </div>
                        </div>

                    <?php endforeach;?>

                    </div>
                    <!--/ END row -->

                    <!-- pager -->
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <ul class="pagination mb0">
                                <li><a href="javascript:void(0);"><i class="ico-angle-left"></i></a></li>
                                <li class="active"><a href="javascript:void(0);">1</a></li>
                                <li><a href="javascript:void(0);">2</a></li>
                                <li><a href="javascript:void(0);">3</a></li>
                                <li><a href="javascript:void(0);"><i class="ico-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/ pager -->
                </div>
            </section>
            <!--/ END Shop Content -->

            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
            <!--/ END To Top Scroller -->
        </section>
        <!--/ END Template Main -->

<?php $this->load->view($footer);?>