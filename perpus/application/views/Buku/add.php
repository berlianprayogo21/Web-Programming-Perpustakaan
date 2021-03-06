<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-info">
				<div class="box-header">
					<h3 class="box-title">Tambah Buku</h3>
				</div>

				<div class="box-body">
					<form action="<?=site_url('buku/create');?>" method="post" accept-charset="utf-8">
						<div class="box-body">
						<div class="form-group">
							<label>Judul Buku</label>
							<input type="text" name="judul_buku" class="form-control" value="" placeholder="Masukan judul buku" required="required">
						</div>
						<div class="form-group">
							<label>Kategori</label>
							<select name="id_kategori" size="1" class="form-control">
								<?php
								foreach ($show_kategori as $key => $data_kategori) {
									echo '<option value="'.$data_kategori->id_kategori.'">'.$data_kategori->nama_kategori.'</option>';
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label>Pengarang</label>
							<input type="text" name="Pengarang" class="form-control" value="" placeholder="Masukan nama Pengarang" required="required">
						</div>
						<div class="form-group">
							<label>Tahun Terbit</label>
							<div class="input-group date">
								<div class="input-group addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="number" class="form-control" name="thn_terbit" min="0">
							</div>
							<!-- /.input group-->
						</div>
						<div class="form-group">
							<label for="exampeInputtext1">Penerbit</label>
							<input type="text" name="Penerbit" class="form-control" id="exampleInputtext1" placeholder="Penerbit" value="" required>
						</div>
						<div class="form-group">
							<label for="exampleInputtext1">ISBN</label>
							<input type="text" name="isbn" class="form-control" id="exampleInputtext1" placeholder="ISBN" value="" required>
						</div>
						<div class="form-group">
							<label for="exampleInputtext1">Jumlah</label>
							<input type="number" name="jumlah_buku" class="form-control" id="exampleInputtext1" placeholder="0" value="" required min="0">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Rak</label>
							<select name="Lokasi" size="1" class="form-control">
								<option value="1">Rak 1</option>
								<option value="2">Rak 2</option>
								<option value="3">Rak 3</option>
								<option value="4">Rak 4</option>
								<option value="5">Rak 5</option>
							</select>
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box_footer">
						<button type="button" class="btn btn-default"> <i class="fa fa-arrow-circle-left"></i> Batal</button>
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-send"></i> Tambah</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</section>
								
								