<script type="text/javascript" src="<?= base_url();?>assets/ckeditor/ckeditor.js"></script>
<?=form_open_multipart('admin/produk/simpan');?>
 	<div class="control-group">
		<div>
			<input type="hidden" id="kategori1" value="<?=$kategori;?>">
			<input type="hidden" name="id_produk" value="<?=$id_produk;?>">
 			<input type="hidden" name="gambar" value="<?=$gambar;?>">
 			<input type="hidden" name="tipe" value="<?=$tipe;?>">
		 </div>
	</div>

	<div class="control-group">
		<label class="control-label">Judul</label>
		<div>
			<input type="text" name="judul_produk" id="judul-produk" placeholder="Judul" class="span5" value="<?=$judul_produk;?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Harga</label>
		<div>
			<input type="text" name="harga" id="harga" class="span2" placeholder="Harga" value="<?=$harga;?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Stok</label>
		<div>
			<input type="text" name="stok" id="stok" class="span2" placeholder="Stok" value="<?=$stok;?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Kategori</label>
		<div class="controls">
			<select name="kategori" id="kategori" required>
				<?php foreach($data->result() as $row):?>
				<option value="<?=$row->id_kategori;?>"><?=$row->kategori;?></option>
				<?php endforeach;?>
			</select>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Deskripsi</label>
		<div>
			<textarea type="text" name="isi" id="isi" class="ckeditor" ><?=$isi;?></textarea>
		</div>
	</div> 

	<div class="control-group">
		<label class="control-label">Cover</label>
		<div>
			<input type="file" id="id-input-file-1" name="userfile[]" id="userfile">
			<input type="file" id="id-input-file-2" name="userfile[]" id="userfile">
			<input type="file" id="id-input-file-3" name="userfile[]" id="userfile">
			<input type="file" id="id-input-file-4" name="userfile[]" id="userfile">
			<input type="file" id="id-input-file-5" name="userfile[]" id="userfile">

		</div>
	</div> 

	<button type="submit" class="btn btn-primary btn-small">Simpan</button>
	<a href="<?=site_url('/admin/produk');?>" class="btn btn-danger btn-small">Batal</a>
</form>

<?php 
	$pecah = explode(',', $gambar);
?>
<script type="text/javascript">
	$(function(){

		var gambar1 = '<?=$pecah[0];?>';
		var gambar2 = '<?=$pecah[1];?>';
		var gambar3 = '<?=$pecah[2];?>';
		var gambar4 = '<?=$pecah[3];?>';
		var gambar5 = '<?=$pecah[4];?>';

		if(gambar1.length > 0){
			$('#id-input-file-1').ace_file_input({
				no_file: gambar1,
				btn_choose:'Pilih',
				btn_change:'Ganti',
				droppable:false,
				onchange:null,
				thumbnail:false //| true | large
				//whitelist:'gif|png|jpg|jpeg'
				//blacklist:'exe|php'
				//onchange:''
				//
			});
		}else{
			$('#id-input-file-1').ace_file_input({
				no_file:'Tidak ada File ...',
				btn_choose:'Pilih',
				btn_change:'Ganti',
				droppable:false,
				onchange:null,
				thumbnail:false //| true | large
				//whitelist:'gif|png|jpg|jpeg'
				//blacklist:'exe|php'
				//onchange:''
				//
			});
		}

		if(gambar2.length > 0){
			$('#id-input-file-2').ace_file_input({
				no_file: gambar2,
				btn_choose:'Pilih',
				btn_change:'Ganti',
				droppable:false,
				onchange:null,
				thumbnail:false //| true | large
				//whitelist:'gif|png|jpg|jpeg'
				//blacklist:'exe|php'
				//onchange:''
				//
			});
		}else{
			$('#id-input-file-2').ace_file_input({
				no_file:'Tidak ada File ...',
				btn_choose:'Pilih',
				btn_change:'Ganti',
				droppable:false,
				onchange:null,
				thumbnail:false //| true | large
				//whitelist:'gif|png|jpg|jpeg'
				//blacklist:'exe|php'
				//onchange:''
				//
			});
		}

		if(gambar3.length > 0){
			$('#id-input-file-3').ace_file_input({
				no_file: gambar3,
				btn_choose:'Pilih',
				btn_change:'Ganti',
				droppable:false,
				onchange:null,
				thumbnail:false //| true | large
				//whitelist:'gif|png|jpg|jpeg'
				//blacklist:'exe|php'
				//onchange:''
				//
			});
		}else{
			$('#id-input-file-3').ace_file_input({
				no_file:'Tidak ada File ...',
				btn_choose:'Pilih',
				btn_change:'Ganti',
				droppable:false,
				onchange:null,
				thumbnail:false //| true | large
				//whitelist:'gif|png|jpg|jpeg'
				//blacklist:'exe|php'
				//onchange:''
				//
			});
		}

		if(gambar4.length > 0){
			$('#id-input-file-4').ace_file_input({
				no_file: gambar4,
				btn_choose:'Pilih',
				btn_change:'Ganti',
				droppable:false,
				onchange:null,
				thumbnail:false //| true | large
				//whitelist:'gif|png|jpg|jpeg'
				//blacklist:'exe|php'
				//onchange:''
				//
			});
		}else{
			$('#id-input-file-4').ace_file_input({
				no_file:'Tidak ada File ...',
				btn_choose:'Pilih',
				btn_change:'Ganti',
				droppable:false,
				onchange:null,
				thumbnail:false //| true | large
				//whitelist:'gif|png|jpg|jpeg'
				//blacklist:'exe|php'
				//onchange:''
				//
			});
		}

		if(gambar5.length > 0){
			$('#id-input-file-5').ace_file_input({
				no_file: gambar5,
				btn_choose:'Pilih',
				btn_change:'Ganti',
				droppable:false,
				onchange:null,
				thumbnail:false //| true | large
				//whitelist:'gif|png|jpg|jpeg'
				//blacklist:'exe|php'
				//onchange:''
				//
			});
		}else{
			$('#id-input-file-5').ace_file_input({
				no_file:'Tidak ada File ...',
				btn_choose:'Pilih',
				btn_change:'Ganti',
				droppable:false,
				onchange:null,
				thumbnail:false //| true | large
				//whitelist:'gif|png|jpg|jpeg'
				//blacklist:'exe|php'
				//onchange:''
				//
			});
		}

		var key = $("#kategori1").val();
		$("#kategori").val(key).prop({selected});
	});

</script>
