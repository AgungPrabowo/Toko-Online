<script>
	
	$('input[name="layanan"]').on('click', function(){
		// mengambil nilai setelah tanda koma (,)
	    // mencari total
		var ongkir = $('input[name="layanan"]:checked').val().split(',').pop();
	    var sub_total = $('#sub-total').text().replace( /[\,]/g , '');
	    var total     = parseInt(sub_total.substring(3, sub_total.length)) + parseInt(ongkir); // cari total dan convert string ke parseInt
		$('#ongkir').html('Rp. '+numeral(ongkir).format('0,0'));
	    $('#total').html('Rp. '+numeral(total).format('0,0'));
	});

</script>
 <label class="col-sm-2 control-label">Layanan</label>
 <div class="col-md-5">
 <?php
 for ($i=0; $i < count($data['rajaongkir']['results']); $i++):
	 for ($j=0; $j < count($data['rajaongkir']['results'][$i]['costs']); $j++):
	 ?>

	 <label>
	 	<!-- nilai dari layanan digabungkan dengan biaya kirim -->
	 	<input type="radio" id="total-ongkir" class="<?=$data['rajaongkir']['results'][$i]['costs'][$j]['cost'][0]['value'];?>" name="layanan" value="<?=$data['rajaongkir']['results'][$i]['costs'][$j]['service'];?>,<?=$data['rajaongkir']['results'][$i]['costs'][$j]['cost'][0]['value'];?>" 
	 											  data-parsley-group="metode-pengiriman" data-parsley-required>
	 	<b><?=$data['rajaongkir']['results'][$i]['costs'][$j]['service'];?></b>
	 	<span style="float:right">
	 		<div id="ongkir-total">
	 			<?="&nbspRp. ".number_format($data['rajaongkir']['results'][$i]['costs'][$j]['cost'][0]['value'],0,'','.');?>
	 		</div>
	 	</span>
	 </label><br>

	 <?php
	 endfor;
 endfor;
 ?>
	<small class="help-block text-danger">&nbsp;* Pengiriman Dari <b><?=$data['rajaongkir']['origin_details']['city_name'];?> </b>
	 ke <b><?=$data['rajaongkir']['destination_details']['city_name'];?></b> @ <?php echo $weight;?> Kg
	</small>
 </div>
