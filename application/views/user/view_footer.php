        <!-- START Template Footer -->
        <footer role="contentinfo" class="bgcolor-dark pt25">
            <!-- container -->
            <div class="container mb25">
                <!-- row -->
                <div class="row">
                    <!-- About -->
                    <div class="col-md-4">
                        <h4 class="font-alt mt0">Tentang Kami</h4>
                        <p>Kami adalah Penjual berbagai merek dan jenis GPS. Kami memiliki Ijin Postel Resmi,
                        lihat Sertifikasi Postel. Kami menjual GPS Tracker berkualitas dan berkerjasama </p>
                        <p>dengan pabrikan terkemuka, seperti MEITRACK dan CONCOX.</p>
                        <a href="<?=site_url('/home/about');?>" class="text-primary">Read more</a>
                    </div>
                    <div class="visible-sm visible-xs" style="margin-bottom:25px;"></div>
                    <!--/ About -->

                    <!-- Address + Social -->
                    <div class="col-md-4" style="background: url('<?=base_url();?>assets/front-end/image/others/map-vector.png') no-repeat center center;background-size: 100%;">
                        <h4 class="font-alt mt0">ALAMAT</h4>
                        <address>
                            Jl. Bukit Barisan B2 No.7<br>
                            Perum Permata Puri, Ngaliyan<br>
                            Semarang - 50189<br>
                            <abbr title="Phone">P:</abbr> 0857291111300
                        </address>
                    </div>
                    <div class="visible-sm visible-xs" style="margin-bottom:25px;"></div>
                    <!--/ Address + Social -->

                    <!-- Newsletter -->
                    <div class="col-md-4">
                        <h4 class="font-alt mt0">NEWS LETTER</h4>
                        <form role="form">
                            <div class="form-group">
                                <p class="form-control-static">Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="newsletter_email" placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Subscribe Now</button>
                        </form>
                    </div>
                    <!--/ Newsletter -->
                </div>
                <!--/ row -->
            </div>
            <!--/ container -->

            <!-- bottom footer -->
            <div class="footer-bottom pt15 pb15 bgcolor-dark bgcolor-dark-darken10">
                <!-- container -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- copyright -->
                            <p class="nm text-muted">&copy; Copyright 2016 by <a href="<?=site_url();?>" class="text-white">Top Tracker Store</a>. All Rights Reserved.</p>
                            <!--/ copyright -->
                        </div>
                        <div class="col-sm-6 text-right hidden-xs">
                            <a href="javascript:void(0);" class="text-white">Privacy Policy</a>
                            <span class="ml5 mr5">&#8226;</span>
                            <a href="javascript:void(0);" class="text-white">Terms of Service</a>
                        </div>
                    </div>
                </div>
                <!--/ container -->
            </div>
            <!--/ bottom footer -->
        </footer>
        <!--/ END Template Footer -->
        
        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="<?=base_url();?>assets/front-end/javascript/vendor.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/front-end/javascript/core.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/front-end/javascript/frontend/app.js"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
        <script type="text/javascript" src="<?=base_url();?>assets/front-end/plugins/smoothscroll/js/smoothscroll.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>