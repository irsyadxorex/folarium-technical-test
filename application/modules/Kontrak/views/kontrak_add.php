<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0">Kontrak</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
							<li class="breadcrumb-item ">Kontrak</li>
							<li class="breadcrumb-item active">Tambah</li>
						</ol>
					</div>

				</div>
			</div>
		</div>
		<!-- end page title -->
		<div class="row">
			<div class="col-lg-12">
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title mb-0">Form Kontrak</h5>
							<a href="<?= base_url('kontrak'); ?>" class="btn btn-light mt-2 "><i class="las la-angle-left"></i> Back</a>
						</div>
						<div class="card-body row">
							<div class="row mb-3">
								<div class="col-lg-3">
									<label for="nama" class="form-label">Pegawai</label>
								</div>
								<div class="col-lg-9">
									<select class="form-select <?= form_error('nama') ? 'is-invalid' : ''; ?>" name="nama" id="nama">
										<option value="">--Pilih--</option>
										<?php foreach ($pegawai as  $dt) : ?>
											<option value="<?= $dt['id_pegawai']; ?>" <?= set_value('nama') == $dt['id_pegawai'] ? 'selected' : ''; ?>><?= $dt['nama']; ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-lg-3">
									<label for="jabatan" class="form-label">Jabatan</label>
								</div>
								<div class="col-lg-9">
									<select class="form-select <?= form_error('jabatan') ? 'is-invalid' : ''; ?>" name="jabatan" id="jabatan">
										<option value="">--Pilih--</option>
										<?php foreach ($jabatan as $key => $dt) : ?>
											<option value="<?= $dt['id_jabatan']; ?>" <?= set_value('jabatan') == $dt['id_jabatan'] ? 'selected' : ''; ?>><?= $dt['nama_jabatan']; ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>

							<div class="row mb-3">
								<div class="col-lg-3">
									<label for="tgl_kontrak" class="form-label">Tanggal Kontrak</label>
								</div>
								<div class="col-lg-9">
									<input type="date" class="form-control <?= form_error('tgl_kontrak') ? 'is-invalid' : ''; ?>" data-provider="flatpickr" id="tgl_kontrak" name="tgl_kontrak" value="<?= date('Y-m-d'); ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-lg-3">
									<label for="tgl_mulai" class="form-label">Tanggal Mulai</label>
								</div>
								<div class="col-lg-9">
									<input type="date" class="form-control <?= form_error('tgl_mulai') ? 'is-invalid' : ''; ?>" data-provider="flatpickr" id="tgl_mulai" name="tgl_mulai" value="<?= set_value('tgl_mulai'); ?>" placeholder="Pilih Tanggal Mulai">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-lg-3">
									<label for="tgl_akhir" class="form-label">Tanggal Akhir</label>
								</div>
								<div class="col-lg-9">
									<input type="date" class="form-control <?= form_error('tgl_akhir') ? 'is-invalid' : ''; ?>" data-provider="flatpickr" id="tgl_akhir" name="tgl_akhir" value="<?= set_value('tgl_akhir'); ?>" placeholder="Pilih Tanggal Akhir">
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="text-end">
								<button type="submit" class="btn btn-success" name="submit"><i class="las la-save"></i> Simpan</button>
							</div>
						</div>
					</div>


				</form>
			</div>
		</div>
		<!--end row-->
	</div>
</div>


<!-- filepond js -->
<script src="<?= base_url('assets'); ?>/libs/filepond/filepond.min.js"></script>
<script src="<?= base_url('assets'); ?>/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
<script src="<?= base_url('assets'); ?>/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
<script src="<?= base_url('assets'); ?>/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
<script src="<?= base_url('assets'); ?>/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>

<!-- <script src="<?= base_url('assets'); ?>/js/pages/form-file-upload.init.js"></script> -->
