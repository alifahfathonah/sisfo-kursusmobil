  <div class="content-wrapper" >
    <section class="content-header">
      <h3>
        Ubah Testimoni
      </h3>
    </section>

    <!-- Main content -->
    <section class="content" >
      <div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">
						<span>Silahkan melengkapi form berikut</span>
					</h3>
				</div>
				<div class="box-body">
				  <div class="row">
				  <?php echo form_open_multipart("admin/testimoni_aksi_ubah/".$tbl_testimoni->testimoni_id); ?>
					<div class="col-md-4">
					  <div class="form-group">
						<label>Urutan</label>
						<input type="text" class="form-control" name="testimoni_namauser" value="<?php echo set_value('testimoni_namauser', $tbl_testimoni->testimoni_namauser); ?>">
					  </div>
					  <div class="form-group">
						<label>Keterangan</label>
						<textarea class="form-control" rows="5" name="testimoni_keterangan"><?php echo set_value('testimoni_keterangan', $tbl_testimoni->testimoni_keterangan); ?></textarea>
					  </div>
					  <div class="form-group">
						<label>Foto</label>
						<input type="file" onchange="readURL(this);"  class="form-control" name="userfiles">
						<input type="hidden" name="testimoni_foto" value="<?php echo set_value('testimoni_foto', $tbl_testimoni->testimoni_foto); ?>">
					  </div>
					  <div class="form-group">
						<input type="submit" value="Submit" class="btn btn-success">
					  </div>
					</div>
					<div class="col-md-4">
					  <div class="form-group" style="text-align:center;">
						<img class="img img-responsive user-image" id="blah" src="<?php echo base_url();?>assets/dist/img/testimoni/<?php echo $tbl_testimoni->testimoni_foto."?".strtotime("now");?>">
					  </div>
					</div>
					<?php echo form_close(); ?>
				  </div>
				</div>
			</div>
		</div>
      </div>
    </section>
  </div>
 <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>