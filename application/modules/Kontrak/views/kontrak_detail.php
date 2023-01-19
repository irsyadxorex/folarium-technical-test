<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Karyawan</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Karyawan</li>
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
                            <h5 class="card-title mb-0">Detail Karyawan</h5>
                            <a href="<?= base_url('employee'); ?>" class="btn btn-light mt-2 "><i class="las la-angle-left"></i> Back</a>
                            <a href="<?= base_url('employee/edit'); ?>" class="btn btn-warning mt-2 "><i class="las la-pen "></i> Edit</a>
                        </div>
                        <div class="card-body row">
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="nama" class="form-label">Nama</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="nama" name="nama" value=": <?= $employee->nama; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="email" class="form-label">Email</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="email" class="form-control-plaintext" id="email" name="email" value=": <?= $employee->email; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="position" class="form-label">Jabatan</label>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control-plaintext" id="position" name="position" value=": <?= $employee->position != null ? $employee->position : '-'; ?>" readonly>
                                </div>
                                <div class="col-lg-3">
                                    <label for="site" class="form-label">Site</label>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control-plaintext" id="site" name="site" value=": <?= $employee->site != null ? $employee->site : '-'; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="nik" class="form-label">Nomor Induk Kependudukan (NIK)</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="nik" name="nik" value=": <?= $employee->nik != null ? $employee->nik : '-'; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="no_kk" class="form-label">No. Kartu Keluarga (KK)</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="no_kk" name="no_kk" value=": <?= $employee->no_kk != null ? $employee->no_kk : '-'; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                </div>
                                <div class="col-lg-9">
                                    <textarea class="form-control-plaintext " id="alamat" name="alamat" rows="3">: <?= $employee->alamat != null ? $employee->alamat : '-'; ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="tempat_lahir" name="tempat_lahir" value=": <?= $employee->tempat_lahir != null ? $employee->tempat_lahir : '-'; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="date" class="form-control-plaintext" id="tgl_lahir" name="tgl_lahir" value="<?= $employee->tgl_lahir != null ? $employee->tgl_lahir : ''; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamain</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="jenis_kelamin" name="jenis_kelamin" value=": <?= $employee->jenis_kelamin != null ? $employee->jenis_kelamin : '-'; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="no_telp" class="form-label">No. Telepone</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="no_telp" name="no_telp" value=": <?= $employee->no_telp != null ? $employee->no_telp : '-'; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="bpjs_kesehatan" class="form-label">No. BPJS Kesehatan</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="bpjs_kesehatan" name="bpjs_kesehatan" value=": <?= $employee->bpjs_kesehatan != null ? $employee->bpjs_kesehatan : '-'; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="bpjs_ketenagakerjaan" class="form-label">No. BPJS Ketenagakerjaan</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="bpjs_ketenagakerjaan" name="bpjs_ketenagakerjaan" value=": <?= $employee->bpjs_ketenagakerjaan != null ? $employee->bpjs_ketenagakerjaan : '-'; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="npwp" class="form-label">NPWP</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="npwp" name="npwp" value=": <?= $employee->npwp != null ? $employee->npwp : '-'; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="status_kawin" class="form-label">Status Pernikahan</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="status_kawin" name="status_kawin" value=": <?= $employee->status_kawin != 1 ? 'Belum Menikah' : 'Sudah Menikah'; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="date" class="form-control-plaintext" id="tgl_masuk" name="tgl_masuk" value="<?= $employee->tgl_masuk != null ? $employee->tgl_masuk : ''; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="bank" class="form-label">Masukan Bank</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="bank" name="bank" value=": <?= $employee->bank != null ? $employee->bank : '-'; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="no_rekening" class="form-label">Nomor Rekening</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="no_rekening" name="no_rekening" value=": <?= $employee->no_rekening != null ? $employee->no_rekening : '-'; ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Pendapatan</h5>
                        </div>

                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="gaji_dasar" class="form-label">Gaji Dasar</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="gaji_dasar" name="gaji_dasar" value=": <?= $employee->gaji_dasar != null ? $employee->gaji_dasar : '-'; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="tunj_jabatan" class="form-label">Tunjangan Jabatan</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="tunj_jabatan" name="tunj_jabatan" value=": <?= $employee->tunj_jabatan != null ? $employee->tunj_jabatan : '-'; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="tunj_pendidikan" class="form-label">Tunjangan Pendidikan</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="tunj_pendidikan" name="tunj_pendidikan" value=": <?= $employee->tunj_pendidikan != null ? $employee->tunj_pendidikan : '-'; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="tunj_masakerja" class="form-label">Tunjangan Masakerja</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="tunj_masakerja" name="tunj_masakerja" value=": <?= $employee->tunj_masakerja != null ? $employee->tunj_masakerja : '-'; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="tunj_pengalaman" class="form-label">Tunjangan Pengalaman</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="tunj_pengalaman" name="tunj_pengalaman" value=": <?= $employee->tunj_pengalaman != null ? $employee->tunj_pengalaman : '-'; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control-plaintext" id="gaji_pokok" name="gaji_pokok" value=": <?= $employee->gaji_pokok != null ? $employee->gaji_pokok : '-'; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-end">
                                <!-- <button type="submit" class="btn btn-success" name="submit"><i class="las la-save"></i> Simpan</button> -->
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </div>
        <!--end row-->
    </div>
</div>