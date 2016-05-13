<?php $this->load->view($header);?>
<?php $this->load->view($menu);?>

<!-- START Welcome Message + Video -->
<section class="section bgcolor-white">
    <div class="container">
        <!-- START Row -->
        <div class="row">
            <div class="col-md-6">
                <h3 class="font-alt mt0">Visi & Misi</h3>
                <p>Kami adalah Penjual berbagai merek dan jenis GPS. Kami memiliki Ijin Postel Resmi, 
                lihat Sertifikasi Postel. Kami menjual GPS Tracker berkualitas dan berkerjasama 
                dengan pabrikan terkemuka, seperti MEITRACK dan CONCOX.</p>

                <p>Kami melihat adanya kebutuhan untuk pengendara kendaraan akan barang 
                elektronik berkualitas untuk keamanan kendaraannya. Melihat maraknya aksi 
                pencurian di Indonesia dan resahnya bagi pengendara kendaraan, maka dari itu 
            	Kami ingin membantu Anda dan meminimalisir pencurian kendaraan yang semakin banyak.</p>

                <blockquote class="mb0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>

                <div class="mb15 visible-xs visible-sm"></div>
            </div>

            <div class="col-md-6">
                <!-- Iframe container -->
                <div class="iframe-container">
                    <iframe src="//player.vimeo.com/video/7449107" webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder="0"></iframe>
                </div>
                <!--/ Iframe container -->
            </div>
        </div>
        <!--/ END Row -->
    </div>
</section>
<!--/ END Welcome Message + Video -->

<?php $this->load->view($footer);?>
