<?php $this->load->view($header);?>
<?php $this->load->view($menu);?>

<!-- START Big Google Maps -->
<section class="maps">
    <div id="gmaps-marker" style="height:360px;"></div>
</section>
<!--/ END Big Google Maps -->

<!-- START Contact Form + Infos -->
<section class="section bgcolor-white">
    <div class="container">
        <!-- START Row -->
        <div class="row">
            <!-- START Left Section -->
            <div class="col-md-9">
                <!-- Form -->
                <h3 class="section-title font-alt mt0">Form Kontak</h3>
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="contact_name" class="control-label">Nama <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="contact_name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="contact_email" class="control-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="contact_email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="contact_email" class="control-label">Pesan Anda <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="6" id="contact_message" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
                <!--/ Form -->

                <div class="mb15 visible-xs visible-sm"></div>
            </div>
            <!--/ END Left Section -->
            
            <!-- START Right Section -->
            <div class="col-md-3">

                <!-- Address -->
                <div class="pt25 mb25">
                    <!-- Title -->
                    <h4 class="section-title font-alt mt0">Alamat</h4>
                    <!--/ Title -->
                    <address>
                        Jl. Bukit Barisan B2 No.7<br>
                        Perum Permata Puri, Ngaliyan<br>
                        Semarang - 50189 <br>
                        <abbr title="Phone">P:</abbr> 0857291111300
                    </address>
                </div>
                <!--/ Address -->

                <!-- Business Hour -->
                <div class="pt25 mb25">
                    <!-- Title -->
                    <h4 class="section-title font-alt mt0">Jam Kerja</h4>
                    <!--/ Title -->
                    <ul class="list-unstyled">
                        <li><strong>Senin - Sabtu:</strong> 08.00 - 17.00</li>
                        <li><strong>Minggu:</strong> Tutup</li>
                    </ul>
                </div>
                <!--/ Business Hour -->

            </div>
            <!--/ END Right Section -->
        </div>
        <!--/ END Row -->
    </div>
</section>
<!--/ END Contact Form + Infos -->

<?php $this->load->view($footer);?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="<?=base_url('assets/front-end/plugins/gmaps/js/gmaps.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/front-end/javascript/frontend/pages/contact.js');?>"></script>
