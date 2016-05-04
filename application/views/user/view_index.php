<?php $this->load->view($header);?>
<!-- Plugins stylesheet : optional -->
<link rel="stylesheet" href="<?=base_url();?>/assets/front-end/plugins/owl/css/owl-carousel.css">
<link rel="stylesheet" href="<?=base_url();?>/assets/front-end/plugins/layerslider/css/layerslider.css">
<?php $this->load->view($menu);?>

        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Layerslider -->
            <section id="layerslider"style="width:100%; height:553px;">
                <!-- Slide #1 -->
                <div class="ls-slide" data-ls="transition2d:1; slidedelay:8000;">
                    <!-- slide background -->
                    <img src="<?=base_url();?>assets/front-end/image/layerslider/bg3.png" class="ls-bg">
                    <!--/ slide background -->

                    <!-- Layer #1 -->
                    <img class="ls-l" style="top:90px;left:68%;" src="<?=base_url();?>assets/front-end/image/layerslider/layer/people2.png" data-ls="delayin:1000; easingin:easeOutElastic;">
                    <!--/ Layer #1 -->

                    <!-- Layer #2 -->
                    <h1 class="ls-l font-alt" style="top:110px;left:150px;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;">
                        Welcome To <span class="text-primary">Adminre</span> 
                    </h1>
                    <!--/ Layer #2 -->

                    <!-- Layer #3 -->
                    <h4 class="ls-l" style="top:170px;left:150px;width:550px;" data-ls="offsetxin:0; durationin:2000; delayin:2000; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% top 0; offsetxout:-400;">
                        Adminre is a clean and flat backend and frontend theme build with Twitter bootstrap
                    </h4>
                    <!--/ Layer #3 -->

                    <!-- Layer #4 -->
                    <p class="ls-l text-default" style="top:230px;left:150px;width:550px;" data-ls="offsetxin:0; durationin:2000; delayin:2500; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% top 0; offsetxout:-400;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud.
                    </p>
                    <!--/ Layer #4 -->

                    <!-- Layer #5 -->
                    <a href="javascript:void(0);" class="ls-l btn btn-primary" style="top:310px; left:150px;" data-ls="offsetxin:0; durationin:2000; delayin:3000; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% top 0; offsetxout:-400;">
                        Purchase Now <i class="ico-angle-right ml5"></i>
                    </a>
                    <!--/ Layer #5 -->

                    <!-- Layer #6 -->
                    <img class="ls-l" style="top:320px;left:300px;" src="<?=base_url();?>assets/front-end/image/layerslider/layer/arrow.png" data-ls="delayin:3500; offsetxin:0; offsetyin:-30; easingin:easeOutElastic;">
                    <!--/ Layer #6 -->
                </div>
                <!-- Slide #1 -->

                <!-- Slide #2 -->
                <div class="ls-slide" data-ls="transition2d:1; slidedelay:8000;">
                    <!-- slide background -->
                    <img src="<?=base_url();?>assets/front-end/image/layerslider/bg2.png" class="ls-bg" alt="Slide background">
                    <!--/ slide background -->
                    
                    <!-- Layer #1 -->
                    <h4 class="ls-l text-default text-right" style="top:120px;left:65%;width:550px;" data-ls="easingin:easeOutElastic; delayin:0;">
                        Fully Responsive &amp; Clean Design
                    </h4>
                    <!--/ Layer #1 -->

                    <!-- Layer #2 -->
                    <h1 class="ls-l font-alt text-right" style="top:150px;left:65%;width:550px;" data-ls="easingin:easeOutElastic; delayin:500;">
                        <span class="text-primary">Mobile</span> Devices Optimize
                    </h1>
                    <!--/ Layer #2 -->

                    <!-- Layer #3 -->
                    <p class="ls-l text-default text-right" style="top:210px;left:65%;width:550px;" data-ls="easingin:easeOutElastic; delayin:1000;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation.
                    </p>
                    <!--/ Layer #3 -->

                    <!-- Layer #5 -->
                    <p class="ls-l text-default text-right" style="top:290px;left:65%;width:550px;" data-ls="easingin:easeOutElastic; delayin:1500;">
                        <a href="javascript:void(0);" class="btn btn-primary">
                            Learn More <i class="ico-angle-right ml5"></i>
                        </a>
                    </p>
                    <!--/ Layer #5 -->

                    <!-- Layer #6 -->
                    <img class="ls-l" style="top:80px;left:250px;" src="<?=base_url();?>assets/front-end/image/layerslider/layer/iphone-5s.png" data-ls="delayin:2000; easingin:easeOutElastic;">
                    <!--/ Layer #6 -->
                </div>
                <!-- Slide #2 -->
            </section>
            <!--/ END Layerslider -->


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

<!-- Plugins and page level script : optional -->
<script type="text/javascript" src="<?=base_url();?>/assets/front-end/plugins/owl/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?=base_url();?>/assets/front-end/plugins/layerslider/js/greensock.js"></script>
<script type="text/javascript" src="<?=base_url();?>/assets/front-end/plugins/layerslider/js/layerslider.transitions.js"></script>
<script type="text/javascript" src="<?=base_url();?>/assets/front-end/plugins/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script type="text/javascript" src="<?=base_url();?>/assets/front-end/javascript/frontend/home/home-v1.js"></script>
<!--/ Plugins and page level script : optional -->
