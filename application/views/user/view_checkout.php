<?php $this->load->view('user/view_header'); ?>
<link rel="stylesheet" href="<?=base_url('assets/front-end/plugins/steps/css/jquery-steps.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/js/jquery-easyui-1.4.4/themes/black/easyui.css');?>">
<script type="text/javascript" src="<?=base_url('assets/js/jquery-easyui-1.4.4/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/numeral.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/front-end/javascript/backend/forms/wizard.js');?>"></script>
<script type="text/javascript">
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

  $('#destination').combobox({
    onSelect : function(){
    var origin      = $('#origin').val();
    var destination = $('#destination').combobox('getValue');
    var destination1= $('#destination').combobox('getText');
    var weight      = $('#berat').val();
    var key         = 'konfirmasi order';
    var courier     = $('#courier').val();
      if(courier != 0)
      {
        $('#destination1').attr('value',destination1);

          // ambil biaya ongkir
          $.get('<?=site_url();?>/user/result_ongkir/'+origin+'/'+destination+'/'+courier+'/'+key+'/'+weight,function(data){
            $('#result').html(data);
        });
      }
      else
      {
        return false;
      }
    }
  });

   $('#simpan').click(function(){
    $('form').submit();
   });

    var prov = $("#provinsi1").val();
    $("#provinsi").val(prov).prop({selected});


  $('#courier').change(function(){
  var origin      = $('#origin').val();
  var destination = $('#destination').combobox('getValue');
  var destination1= $('#destination').combobox('getText');
  var courier     = $('#courier').val();
  var weight      = $('#berat').val();
  var key         = 'konfirmasi order';
  if(destination == 0)
  {
    return false;
  }
  else
  {
    //ambil nilai #destination
    $('#destination1').attr('value',destination1);

      // ambil biaya ongkir
      $.get('<?=site_url();?>/user/result_ongkir/'+origin+'/'+destination+'/'+courier+'/'+key+'/'+weight,function(data){
        $('#result').html(data);
      });
    }
  });
});
</script>
<?php $this->load->view('user/view_menu'); ?>

<!-- START Template Main -->
<section id="main" role="main">
    <!-- START Template Container -->
    <div class="container-fluid">

        <!-- START row -->
        <div class="row">
            <div class="col-md-12">
                <!-- START Panel -->
                <div class="panel panel-default">
                    <!-- panel heading/header -->
                    <div class="panel-heading">
                        <?=br(2);?>
                    </div>
                    <!--/ panel heading/header -->
                    <!-- START Form Wizard -->         
                    <form class="form-horizontal form-bordered" action="<?=site_url('/user/simpan_pesanan');?>" method="post" id="wizard-validate">

                        <!-- Wizard Container 1 -->
                        <div class="wizard-title">Detail Penagihan</div>
                        <div class="wizard-container">
<!--                                     <div class="form-group">
                                <div class="col-md-12">
                                    <h5 class="semibold text-primary nm">Provide some of your details.</h5>
                                    <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
-->                         <div class="form-group">
                                <label class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-4">
                                    <input type="text" name="nama-depan" class="form-control" placeholder="Nama Depan" value="<?=$nama_depan;?>" data-parsley-group="informasi-penagihan" data-parsley-required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" name="nama-belakang" class="form-control" placeholder="Nama Belakang" value="<?=$nama_belakang;?>" data-parsley-group="informasi-penagihan" data-parsley-required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <textarea name="alamat" class="form-control mb5" placeholder="Masukan alamat pengiriman"><?=$alamat;?></textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="kode-pos" class="form-control mb5" placeholder="Kode Pos" value="<?=$kode_pos;?>" data-parsley-group="informasi-penagihan" data-parsley-required>
                                        </div>
                                        <div class="col-sm-6">
                                            <select name="id_regencies" id="kota" class="form-control mb5" data-parsley-group="informasi-penagihan" data-parsley-required>
                                                <option value="">--PILIH KOTA---</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select name="id_provinces" id="provinsi" class="form-control" data-parsley-group="informasi-penagihan" data-parsley-required>
                                                    <option value="">--PILIH PROVINSI---</option>
                                                <?php foreach($provinsi->result() as $prov): ?>
                                                    <option value="<?=$prov->id;?>"><?=$prov->name;?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">No Telp</label>
                                <div class="col-sm-5">
                                    <input type="text" name="telp" class="form-control" data-parsley-group="informasi-penagihan" value="<?=$no_telp;?>" data-parsley-required placeholder="Nomor Telephone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Kota Tujuan</label>
                                <div class="col-sm-5">
                                   <input type="hidden" name="id_user" value="<?=$id_user;?>">
                                   <input type="hidden" name="origin" id="origin" value="399">
                                   <input type="hidden" name="destination" id="destination1">
                                   <input type="hidden" id="berat" value="<?=$berat;?>000">
                                   <input type="hidden" id="kota1" value="<?=$kota1;?>">
                                   <input type="hidden" id="provinsi1" value="<?=$provinsi1;?>">
                                   <input class="easyui-combobox" id="destination" prompt="Kota Asal Penerima" style="width:100%" data-options="
                                   valueField: 'city_id',
                                   textField: 'city_name',
                                   url:'<?=site_url();?>/user/ambil_kota',
                                   method:'get',
                                   panelHeight:'30%'">
                                </div>
                            </div>
                        </div>
                        <!--/ Wizard Container 1 -->

                        <!-- Wizard Container 2 -->
                        <div class="wizard-title">Metode Pengiriman</div>
                        <div class="wizard-container">
<!--                                     <div class="form-group">
                                <div class="col-md-12">
                                    <h5 class="semibold text-primary nm">Proceed to payment</h5>
                                    <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
-->
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Kurir</label>
                            <div class="col-sm-5">
                              <select name="courier" id="courier" class="form-control" data-parsley-group="metode-pengiriman" data-parsley-required>
                                <option value="jne">JNE</option>
                                <option value="tiki">TIKI</option>
                                <option value="pos">POS</option>
                              </select>
                            </div>
                          </div>

                          <div id="result" class="form-group"></div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label">Catatan</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" name="note-kirim" rows="5" placeholder="Tambahkan catatan jika dibutuhkan"></textarea>
                            </div>
                          </div>
                        </div>
                        <!--/ Wizard Container 2 -->

                        <!-- Wizard Container 3 -->
                        <div class="wizard-title">Metode Pembayaran</div>
                        <div class="wizard-container">
<!--                                     <div class="form-group">
                                <div class="col-md-12">
                                    <h5 class="semibold text-primary nm">Checkout</h5>
                                    <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
-->                          
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Pilih Bank</label>
                                <div class="col-sm-5">
                                    <label>
                                        <input type="radio" name="metode-bayar" value="BCA" data-parsley-group="metode-pembayaran" data-parsley-required>  
                                        <span>
                                            &nbsp;&nbsp;Transfer via Bank BCA   
                                        </span>
                                    </label><br>
                                    <label>
                                        <input type="radio" name="metode-bayar" value="MANDIRI" data-parsley-group="metode-pembayaran" data-parsley-required>  
                                        <span>
                                            &nbsp;&nbsp;Transfer via Bank Mandiri   
                                        </span>
                                    </label><br>
                                    <label>
                                        <input type="radio" name="metode-bayar" value="BNI" data-parsley-group="metode-pembayaran" data-parsley-required>  
                                        <span>
                                            &nbsp;&nbsp;Transfer via Bank BNI
                                        </span>
                                    </label><br>
                                    <label>
                                        <input type="radio" name="metode-bayar" value="COD" data-parsley-group="metode-pembayaran" data-parsley-required>  
                                        <span>
                                            &nbsp;&nbsp;Cash On Delivery   
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Catatan</label>
                                <div class="col-md-5">
                                    <textarea class="form-control" name="note-transfer" rows="5" placeholder="Tambahkan catatan jika dibutuhkan"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Wizard Container 3 -->

                        <!-- Wizard Container 4 -->
                        <div class="wizard-title">Konfirmasi Order</div>
                        <div class="wizard-container">
<!--                                     <div class="form-group">
                                <div class="col-md-12">
                                    <h5 class="semibold text-primary nm">Checkout</h5>
                                    <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="panel nm" style="border-bottom-width:1px;">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nama Produk</th>
                                                    <th width="20%">Kuantiti</th>
                                                    <th width="20%">Harga</th>
                                                    <th width="10%">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php 
                                                    $total_harga = 0;
                                                    foreach($this->cart->contents() as $items):
                                                    $gambar = $this->Model_produk->ambil_gambar($items['id']);
                                                ?>

                                                <tr>
                                                    <td>
                                                        <h4 class="mt0"><?=$items['name'];?></h4>
                                                    </td>
                                                    <td>
                                                        <h4 class="font-alt nm"><?=$items['qty'];?></h4>
                                                    </td>
                                                    <td>
                                                        <?php $total_harga = $total_harga + $items['subtotal'];?>
                                                        <h4 class="font-alt text-primary nm">Rp. <?=number_format($items['subtotal'],0, '', ',');?></h4>
                                                    </td>
                                                    <td>
                                                        Rp. <?=number_format($items['subtotal'] * $items['qty'],0, '', ',');?>
                                                    </td>
                                                </tr>

                                                <?php endforeach; ?>

                                                <tr>
                                                    <td colspan="3">
                                                        <b style="float:right">Sub-Total :</b>
                                                    </td>
                                                    <td id="sub-total">Rp. <?=number_format($total_harga,0, '', ',');?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <b style="float:right">Ongkir :</b>
                                                    </td>
                                                    <td>
                                                        <div id="ongkir"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <b style="float:right">Total :</b>
                                                    </td>
                                                    <td id="total">
                                                        
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                        </div>
                        <!-- Wizard Container 4 -->

                    </form>
                    <!--/ END Form Wizard --> 
                </div>
                <!--/ END Panel -->
            </div>
        </div>
        <!--/ END row --> 

    <!-- START To Top Scroller -->
    <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
    <!--/ END To Top Scroller -->
</section><br><br><br>
<!--/ END Template Main -->
<?php $this->load->view('user/view_footer');?>
<script>
$(function(){
    var kota = $("#kota1").val();

    $("#kota").val(kota).prop({selected});

});
</script>
<!-- Plugins and page level script : optional -->
<script type="text/javascript" src="<?=base_url();?>assets/front-end/plugins/steps/js/jquery-steps.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/front-end/plugins/parsley/js/parsley.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/front-end/plugins/inputmask/js/inputmask.js"></script>
<script type="text/javascript" src="<?=base_url('assets/js/jquery-easyui-1.4.4/jquery.easyui.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/jquery-easyui-1.4.4/jquery.easyui.mobile.js');?>"></script>
<!--/ Plugins and page level script : optional -->
<!--/ END JAVASCRIPT SECTION -->