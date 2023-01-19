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
							<li class="breadcrumb-item active">Kontrak</li>
						</ol>
					</div>

				</div>
			</div>
		</div>
		<!-- end page title -->
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">Daftar Kontrak</h5>
						<a href="<?= base_url('kontrak/add'); ?>" class="btn btn-primary mt-2 "><i class="las la-user-plus"></i> Tambah</a>
					</div>
					<div class="card-body">
						<?= $this->session->flashdata('message'); ?>
						<table id="kontrak-datatables" class="table table-bordered nowrap table-striped align-middle" style="width:100%">
							<thead>
								<tr>
									<!-- <th>#</th> -->
									<th>Nama</th>
									<th>NIK</th>
									<th>Jabatan</th>
									<th>Tanggal Kontrak</th>
									<th>Tangal Mulai</th>
									<th>Tangal Akhir</th>
									<th>Status</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!--end row-->
	</div>
</div>

<div id="detailKontrakModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myModalLabel">Detail Kontrak</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body table-responsive">
				<table class="table table-bordered no-margin">
					<tbody>
						<tr>
							<th>Nama</th>
							<td><span id="nama"></span></td>
						</tr>
						<tr>
							<th>NIK</th>
							<td><span id="nik"></span></td>
						</tr>
						<tr>
							<th>Tempat Lahir</th>
							<td><span id="tempat_lahir"></span></td>
						</tr>
						<tr>
							<th>Tanggal Lahir</th>
							<td><span id="tgl_lahir"></span></td>
						</tr>
						<tr>
							<th>Jenis Kelamin</th>
							<td><span id="jenis_kelamin"></span></td>
						</tr>
						<tr>
							<th>Alamat</th>
							<td><span id="alamat"></span></td>
						</tr>
						<tr>
							<th>Telepon</th>
							<td><span id="telp"></span></td>
						</tr>
						<tr>
							<th>Jabatan</th>
							<td><span id="jabatan"></span></td>
						</tr>
						<tr>
							<th>Tanggal Kontrak</th>
							<td><span id="tgl_kontrak"></span></td>
						</tr>
						<tr>
							<th>Tanggal Mulai</th>
							<td><span id="tgl_mulai"></span></td>
						</tr>
						<tr>
							<th>Tanggal Akhir</th>
							<td><span id="tgl_akhir"></span></td>
						</tr>
					</tbody>
				</table>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>

<script>
	$(document).ready(function() {
		$('#kontrak-datatables').DataTable({
			responsive: {
				details: {
					display: $.fn.dataTable.Responsive.display.modal({
						header: function(e) {
							e = e.data();
							return "Details for " + e[0] + " " + e[1]
						}
					}),
					renderer: $.fn.dataTable.Responsive.renderer.tableAll({
						tableClass: "table"
					})
				}
			},
			"processing": true,
			"serverSide": true,
			"ajax": {
				"url": "<?= site_url('kontrak/get_ajax') ?>",
				"type": "POST"
			},
			"columnDefs": [{
				"targets": [0],
				"orderable": false,
			}, ],
			"order": [],
			"lengthMenu": [
				[15, 30, 50, 100, -1],
				[15, 30, 50, 100, "All"]
			]
		});
	});

	$(document).ready(function() {
		$(document).on('click', '#set_detail', function() {
			var nama = $(this).data('nama');
			var nik = $(this).data('nik');
			var tempat_lahir = $(this).data('tempat_lahir');
			var tgl_lahir = $(this).data('tgl_lahir');
			var jenis_kelamin = $(this).data('jenis_kelamin');
			var alamat = $(this).data('alamat');
			var telp = $(this).data('telp');
			var jabatan = $(this).data('jabatan');
			var tgl_kontrak = $(this).data('tgl_kontrak');
			var tgl_mulai = $(this).data('tgl_mulai');
			var tgl_akhir = $(this).data('tgl_akhir');
			$('#nama').text(nama);
			$('#nik').text(nik);
			$('#tempat_lahir').text(tempat_lahir);
			$('#tgl_lahir').text(tgl_lahir);
			$('#jenis_kelamin').text(jenis_kelamin);
			$('#alamat').text(alamat);
			$('#telp').text(telp);
			$('#jabatan').text(jabatan);
			$('#tgl_kontrak').text(tgl_kontrak);
			$('#tgl_mulai').text(tgl_mulai);
			$('#tgl_akhir').text(tgl_akhir);
		})
	})
</script>
