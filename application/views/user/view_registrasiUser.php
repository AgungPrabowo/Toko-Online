<?php $this->load->view('user/view_header'); ?>
<script src="<?=base_url();?>assets/js/jquery-2.0.3.min.js"></script>
<script>
$(document).ready(function(){
//ambil id/nilai PROVINSI dan kirim ke function getkota jika sukses ambil data getkota letakan di #kota dan #kota1
  $("#provinsi").change(function(){
    var key = $("#provinsi").val();
    var url = '<?=site_url();?>/home/getKota/'+key;


    $.ajax({
      type    : 'POST',
      url     : '<?=site_url();?>/home/getKota/'+key,
      success : function(){
        $.get(url).done(function(data){
          $("#kota").html(data);
            });
      }
    });
  });
});
</script>
<?php $this->load->view('user/view_menu'); ?>

            <!-- START Register Content -->
            <section class="section">
                <div class="container">
                    <!-- START Section Header -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header text-center">
                                <h1 class="section-title font-alt mb25">Create your Account</h1>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <h4 class="thin text-muted text-center">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua..
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ END Section Header -->

                    <!-- START Row -->
                    <div class="row">
                        <div class="col-md-6">
                            <!-- features #1 -->
                            <div class="table-layout">
                                <div class="col-xs-2 valign-top"><img src="<?=base_url();?>assets/front-end/image/icons/brandprotection.png" width="100%"></div>
                                <div class="col-xs-10 valign-top pl15">
                                    <h4 class="section-title font-alt mt0">Serious security</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non
                                    proident.</p>
                                </div>
                            </div>
                            <!-- features #1 -->
                            <div class="visible-md visible-lg" style="margin-bottom:50px;"></div><!-- spacer -->
                            <!-- features #2 -->
                            <div class="table-layout">
                                <div class="col-xs-2 valign-top"><img src="<?=base_url();?>assets/front-end/image/icons/seoperfomance.png" width="100%"></div>
                                <div class="col-xs-10 valign-top pl15">
                                    <h4 class="section-title font-alt mt0">Powerful integrations</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                </div>
                            </div>
                            <!-- features #2 -->
                            <div class="visible-md visible-lg" style="margin-bottom:50px;"></div><!-- spacer -->
                            <!-- features #3 -->
                            <div class="table-layout">
                                <div class="col-xs-2 valign-top"><img src="<?=base_url();?>assets/front-end/image/icons/responsivewebdesign.png" width="100%"></div>
                                <div class="col-xs-10 valign-top pl15">
                                    <h4 class="section-title font-alt mt0">Browse With Any Device</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia.</p>
                                </div>
                            </div>
                            <!-- features #3 -->
                            <div class="visible-md visible-lg" style="margin-bottom:50px;"></div><!-- spacer -->
                            <!-- features #4 -->
                            <div class="table-layout">
                                <div class="col-xs-2 valign-top"><img src="<?=base_url();?>assets/front-end/image/icons/supportservices.png" width="100%"></div>
                                <div class="col-xs-10 valign-top pl15">
                                    <h4 class="section-title font-alt mt0">24 Hour Support</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                </div>
                            </div>
                            <!-- features #4 -->
                        </div>

                        <div class="col-md-6">
                            <!-- Register form -->
                            <form class="panel no-border nm" action="<?=site_url('/home/simpan_registrasiUser');?>" method="POST">
                                <ul class="list-table pa15">
                                    <li>
                                        <!-- Alert message -->
									  	<?php $info = $this->session->flashdata('info');
									  			if(!empty($info)):?>
                                        <div class="alert alert-danger nm">
                                            <?=$info;?>
                                        </div>
                                        <?php endif;?>
                                        <!--/ Alert message -->
                                    </li>
                                    <li class="text-right" style="width:20px;"><a href="javascript:void(0);"><i class="ico-question-sign fsize16"></i></a></li>
                                </ul>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="control-label">Username</label>
                                        <div class="has-icon pull-left">
                                        	<input type="hidden" name="id_">
                                            <input type="text" class="form-control" name="username" data-parsley-required>
                                            <i class="ico-user2 form-control-icon"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <div class="has-icon pull-left">
                                            <input type="password" class="form-control" name="pass" data-parsley-required>
                                            <i class="ico-key2 form-control-icon"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Ulangi Password</label>
                                        <div class="has-icon pull-left">
                                            <input type="password" class="form-control" name="re-pass" data-parsley-equalto="input[name=pass]">
                                            <i class="ico-asterisk form-control-icon"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Nama Lengkap</label>
                                        <div class="has-icon pull-left">
                                            <input type="text" class="form-control" name="nama_user" data-parsley-required>
                                            <i class="ico-user2 form-control-icon"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Alamat</label>
                                        <div class="has-icon pull-left">
                                        	<textarea name="alamat" class="form-control" rows="3"></textarea>
                                            <i class="ico-address-book form-control-icon"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Provinsi</label>
                                        <select class="form-control" id="provinsi" name="provinsi">
                                        	<option value="0">---Pilih Provinsi</option>
								                <?php foreach($provinsi->result() as $prov): ?>
								                <option value="<?=$prov->id;?>"><?=$prov->name;?></option>
								                <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Kota</label>
                                        <select class="form-control" id="kota" name="kota">
                                        	<option value="0">---Pilih Kota---</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Nomor Telp</label>
                                        <div class="has-icon pull-left">
                                            <input type="text" class="form-control" name="no_telp" data-parsley-required>
                                            <i class="ico-phone form-control-icon"></i>
                                        </div>
                                    </div>
                                    <p class="semibold text-muted">To confirm and activate your new account, we will need to send the activation code to your e-mail.</p>
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <div class="has-icon pull-left">
                                            <input type="email" class="form-control" name="email" placeholder="you@mail.com">
                                            <i class="ico-envelop form-control-icon"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="agree" id="agree" value="1">  
                                            <label for="agree">&nbsp;&nbsp;I agree to the <a class="semibold" href="javascript:void(0);">Term Of Services</a></label>   
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="news" id="news" value="1">  
                                            <label for="news">&nbsp;&nbsp;Send me Newsletters.</label>   
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button type="submit" class="btn btn-block btn-lg btn-success"><span class="semibold">Daftar</span></button>
                                </div>
                            </form>
                            <!-- Register form -->
                        </div>
                    </div>
                    <!--/ END Row -->
                </div>
            </section>
            <!--/ END Register Content -->

<?php $this->load->view('user/view_footer'); ?>