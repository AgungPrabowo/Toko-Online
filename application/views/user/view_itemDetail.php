<?php $this->load->view($header);?>
<link rel="stylesheet" href="<?=base_url('assets/front-end/plugins/touchspin/css/touchspin.css');?>">
<link rel="stylesheet" href="<?=base_url('assets/front-end/plugins/layerslider/css/layerslider.css');?>">
<?php $this->load->view($menu);?>

<!-- START Item Detail -->
<section class="section bgcolor-white">
    <div class="container">
        <!-- START row -->
        <div class="row">
            <!-- START Carousel -->
            <div class="col-md-6">
                <div id="layerslider" style="width:100%; height:550px;">
                    <?php 
                        foreach($gambar as $key): 
                    ?>
                        <div class="ls-slide" data-ls="transition2d:73;">
                            <img src="<?=base_url('assets/images/produk/'.$key);?>" class="ls-bg" alt="">
                        </div>
                    <?php 
                        endforeach; 
                        if($id_kategori == 4)
                        {
                            $disabled = 'disabled';
                        }
                        else
                        {
                            $disabled = '';
                        }
                    ?>    
                </div>
                <div class="mb25 visible-xs visible-sm"></div>
            </div>
            <!--/ END Carousel -->

            <!-- START Detail -->
            <div class="col-md-6">
                <h3 class="section-title font-alt mt0"><?=$judul;?></h3>
                <div class="clearfix mb15">
                    <h4 class="section-title font-alt text-primary nm pull-left"><?="Rp ".number_format($harga,0,',','.');?></h4>
                </div>

                <hr><!-- horizontal line -->

                <p class="mb15"><?=$isi;?></p>

                <hr><!-- horizontal line -->

                <form name="add-to-cart" action="<?=site_url('/pesanan/add_to_cart/'.$id_produk);?>" method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label class="control-label">Kuantiti</label>
                                <input type="text" value="" name="quantity" <?=$disabled;?>>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit" <?=$disabled;?>><i class="ico-cart4"></i> Beli</button>
                    </div>
                </form>
            </div>
            <!--/ END Detail -->
        </div>
        <!--/ END row -->
    </div>
</section>
<!--/ END Item Detail -->

<?php $this->load->view($footer);?>

<script type="text/javascript" src="<?=base_url();?>assets/front-end/plugins/layerslider/js/layerslider.transitions.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/front-end/plugins/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/front-end/plugins/touchspin/js/jquery.bootstrap-touchspin.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/front-end/javascript/frontend/shop/shop-item-detail.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/front-end/plugins/layerslider/js/greensock.js"></script>
