<?php $this->load->view($header);?>
<script src="<?=base_url();?>assets/js/jquery-2.0.3.min.js"></script>
<script>
    $(document).ready(function(){
        
        var keranjang = '<?=$this->cart->total_items();?>';

        if(keranjang == 0)
        {
            $('#proses-checkout').attr('disabled', 'disabled');;
        }

    });
</script>
<?php $this->load->view($menu);?>

            <!-- START Shop Content -->
            <section class="section">
                <div class="container">
                    <!-- START Section Header -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header text-center">
                                <h1 class="section-title font-alt mb25">Keranjang Belanja</h1>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <h4 class="thin text-muted text-center mb30">Cek kembali Keranjang belanja anda di bawah ini</h4>
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
                                        <?php if($this->cart->total_items() == 0): ?>
                                        <tr>
                                            <td colspan="5"><h3 class="thin text-muted text-center mb30">Keranjang Kosong</h3></td>
                                        </tr>

                                        <?php 
                                            endif;
                                            $total_harga = 0;
                                            foreach($this->cart->contents() as $items):
                                            $gambar	= $this->Model_produk->ambil_gambar($items['id']);
                                            $pecah  = explode(',', $gambar->gambar);
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
							
                                                        <img data-toggle="unveil" src="<?=base_url('assets/front-end/image/shop/placeholder.jpg');?>" data-src="<?=base_url('assets/images/produk/'.$pecah[0]);?>" alt="Photo" width="100%" />
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
                            <h3 class="section-title font-alt mt0">Transfer & Pengiriman</h3>

                            <p class="mb15">Jika transfer dilakukan sebelum Pukul 10.00 WIB maka barang akan diikutkan pengiriman siang hari. </p>
                            <p>Melakukan transfer Pukul 10.00 s/d 15.00 WIB maka barang akan dikirim sore bahkan sampai malam hari. Tergantung banyaknya pemesanan. </p>
                            <p>Jika transfer dikirim setelah Pukul 15.00 WIB maka barang akan dikirim mengikuti pengiriman keesokan harinya.</p>

                            <div class="clearfix">
                                <a href="<?=site_url('/user/checkout');?>" id="proses-checkout" class="btn btn-primary pull-left">Proses Checkout</a>
                                <a href="<?=site_url();?>" class="btn btn-link pull-left">Lanjutkan Belanja</a>
                            </div>
                        </div>
                    </div>
                    <!--/ END row -->
                </div>
            </section>
            <!--/ END Shop Content -->

<?php $this->load->view($footer);?>