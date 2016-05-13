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
                    <div class="ls-slide" data-ls="transition2d:73;">
                        <img src="<?=base_url('assets/images/perbaikan/a.JPG');?>" class="ls-bg" alt="Gambar Perbaikan">
                    </div>
                    <div class="ls-slide" data-ls="transition2d:73;">
                        <img src="<?=base_url('assets/images/perbaikan/b.JPG');?>" class="ls-bg" alt="Gambar Perbaikan">
                    </div>
                    <div class="ls-slide" data-ls="transition2d:73;">
                        <img src="<?=base_url('assets/images/perbaikan/c.JPG');?>" class="ls-bg" alt="Gambar Perbaikan">
                    </div>
                    <div class="ls-slide" data-ls="transition2d:73;">
                        <img src="<?=base_url('assets/images/perbaikan/d.JPG');?>" class="ls-bg" alt="Gambar Perbaikan">
                    </div>
                    <div class="ls-slide" data-ls="transition2d:73;">
                        <img src="<?=base_url('assets/images/perbaikan/f.JPG');?>" class="ls-bg" alt="Gambar Perbaikan">
                    </div>
                </div>
                <div class="mb25 visible-xs visible-sm"></div>
            </div>
            <!--/ END Carousel -->

            <!-- START Detail -->
            <div class="col-md-6">
                <h3 class="section-title font-alt mt0">Perbaikan GPS TRACKER</h3>

                <hr><!-- horizontal line -->

                <p class="mb15">Menerima perbaikan GPS Tracker dengan dukungan penuh Pabrikan.</p>
                <p class="mb15">GPS Anda Rusak, Hank, Restart terus menerus atau bahkan Mati ? Kami Siap Memperbaiki GPS Tracker Anda.</p>
                <p class="mb15">Bagi Anda yang diluar kota, jangan sungkan dan percayakan kepada Kami. Anda bisa:
								<br>- Kirim GPS Tracker Anda ke Kami dengan menggunakan ekspedisi (JNE, Tiki, dsb).
								<br>- Datang ke Toko Kami.</p>
				<p class="mb15">Kami hadir sebagai mitra Anda. Menerima perbaikan serta menyediakan beberapa jenis dan tipe GPS Tracker untuk kebutuhan Anda.</p>

                <hr><!-- horizontal line -->

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
