<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.13.10/css/dataTables.bootstrap5.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" />

	<style>
		/* change the color of active or hovered links */
		.navbar .nav-item:focus .nav-link,
		.navbar .nav-item:hover .nav-link {
			color: white;
			background-color: #ffc107;
		}

		.navbar-dark .navbar-nav a.nav-link {
			color: white !important;
		}
	</style>

	<title>Test Sefas Group</title>
</head>

<body>
	<nav class="navbar navbar-expand-sm navbar-light bg-light flex-sm-nowrap flex-wrap">
		<div class="container-fluid">
			<button class="navbar-toggler flex-grow-sm-1 flex-grow-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar5">
				<span class="navbar-toggler-icon"></span>
			</button>
			<span class="navbar-brand flex-grow-1"><b>CRM</b></span>
			<div class="navbar-collapse collapse flex-grow-1 justify-content-center" id="navbar5">
				<form class="navbar-nav mx-auto">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form>

			</div>
			<div class="d-flex">
				<ul class="navbar-nav ">
					<li class="nav-item">
						<a class="nav-link dropdown-toggle" href="#" id="navbar-pdf" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="far fa-file-alt"></i>
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbar-pdf">
						</ul>
					</li>

					<li class="nav-item">
						<a class="nav-link dropdown-toggle" href="#" id="navbar-bread" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fas fa-braille"></i>
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbar-bread">
						</ul>
					</li>

					<li class="nav-item">
						<a class="nav-link dropdown-toggle" href="#" id="navbar-user" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fas fa-user"></i>
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbar-user">

						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 0;">
		<div class="container-fluid">
			<!-- <a class="navbar-brand" href="#">Navbar</a> -->
			<a class="navbar-brand" href="#">
				<img src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#">Activites</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#">Relationships</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#">Inventory</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#">Report</a>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Settings
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Users</a></li>
							<li><a class="dropdown-item" href="#">Roles</a></li>
							<li><a class="dropdown-item" href="#">Employee</a></li>

						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Report</a>
					</li>
				</ul>
				<!-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
			</div>
		</div>
	</nav>
	<br>
	<div class="container">
		<div class="container">
			<h1 style="font-size:20pt">Data Karyawan</h1>
			<button type="button" onclick="addKaryawan()" class="text-white btn btn-primary"><i class="fas fa-plus"></i> Tambah Data Karyawan</button>

			<br />
			<br />

			<table id="table" class="display table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th width="5%">No</th>
						<th>Nama Karyawan</th>
						<th>Tanggal Lahir</th>
						<th>Jabatan</th>
						<th>Kota Asal</th>
						<th width="15%">Action</th>
					</tr>
				</thead>
				<tbody>
				</tbody>


			</table>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="modalKaryawan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="titleModalKaryawan">Modal title</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="#" id="formKaryawan" method="post" class="needs-validation" novalidate>
						<input type="hidden" name="id">
						<div class="mb-3">
							<label class="form-label">Nama Karyawan</label>
							<input type="text" class="form-control" name="nama_karyawan" required>
							<div class="invalid-feedback">
								Mohon untuk diisi Nama Karyawan
							</div>
						</div>
						<div class="mb-3">
							<label class="form-label">Tanggal Lahir</label>
							<input type="date" class="form-control" name="tanggal_lahir" required>
							<div class="invalid-feedback">
								Mohon untuk diisi Tanggal Lahir
							</div>
						</div>
						<div class="mb-3">
							<label class="form-label">Jabatan</label>
							<select class="form-select" name="jabatan" required>
								<option value="">Pilih Jabatan</option>
								<?php foreach ($jabatan as $data) { ?>
									<option value="<?= $data->id ?>"><?= $data->nama ?></option>
								<?php } ?>
							</select>
							<div class="invalid-feedback">
								Mohon untuk diisi Jabatan
							</div>
						</div>
						<div class="mb-3">
							<label class="form-label">Kota Asal</label>
							<select class="form-select" name="kota_asal" required>
								<option value="">Pilih Kota Asal</option>
								<?php foreach ($kota as $data) { ?>
									<option value="<?= $data->id ?>"><?= $data->nama ?></option>
								<?php } ?>
							</select>
							<div class="invalid-feedback">
								Mohon untuk diisi Kota Asal
							</div>
						</div>



				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Close</button>
					<button type="button" class="btn btn-primary btn-save" onclick="saveData()"><i class="fas fa-location-arrow"></i> Save changes</button>
				</div>
				</form>
			</div>
		</div>
	</div>




	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.10/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.10/js/dataTables.bootstrap5.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		(function() {
			'use strict'

			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.querySelectorAll('.needs-validation')

			// Loop over them and prevent submission
			Array.prototype.slice.call(forms)
				.forEach(function(form) {
					form.addEventListener('button', function(event) {
						if (!form.checkValidity()) {
							event.preventDefault()
							event.stopPropagation()
						}

						form.classList.add('was-validated')
					}, false)
				})
		})()

		function table() {
			$('#table').DataTable().destroy();
			$('#table tbody').empty();
			$('#table').DataTable({
				"processing": true,
				"serverSide": true,
				"order": [],
				"ajax": {
					"url": "<?= base_url('home/get_data_karyawan') ?>",
					"type": "POST"
				},
				"columnDefs": [{
					"targets": [0],
					"orderable": false,
				}, ],
			});
		}
		$(document).ready(function() {
			table()
		});

		function addKaryawan() {
			$('#modalKaryawan').modal('show');
			$('#formKaryawan')[0].reset();
			$('.btn-save').text('Tambah Data')
			$('#titleModalKaryawan').text('Tambah Data Karyawan')
			$('[name=id]').val('')
		}

		function editKaryawan(paramsId) {
			$('#modalKaryawan').modal('show');
			$('#formKaryawan')[0].reset();
			$('.btn-save').text('Ubah Data');
			$.ajax({
				url: "<?= base_url('home/editKaryawan/') ?>" + paramsId,
				type: "POST",
				dataType: "JSON",
				beforeSend: function() {},
				success: function(data) {
					$('[name=id]').val(data.id)
					$('[name=nama_karyawan]').val(data.nama_karyawan)
					$('[name=tanggal_lahir]').val(data.tanggal_lahir)
					$('[name=jabatan]').val(data.jabatan_id)
					$('[name=kota_asal]').val(data.kota_asal_id)
					$('#titleModalKaryawan').text('Ubah Data Karyawan ' + data.nama_karyawan);

				},
				error: function() {}
			});
		}

		function deleteKaryawan(paramsId, nama) {
			Swal.fire({
				icon: 'question',
				title: "Apakah yakin akan menghapus data karyawan " + nama + "?",
				showDenyButton: true,
				confirmButtonText: "Hapus",
				denyButtonText: `Tidak Hapus`
			}).then((result) => {
				/* Read more about isConfirmed, isDenied below */
				if (result.isConfirmed) {
					$.ajax({
						url: "<?= base_url('home/deleteKaryawan/') ?>" + paramsId,
						type: "POST",
						dataType: "JSON",
						beforeSend: function() {},
						success: function(data) {
							swal.fire({
								icon: 'success',
								title: 'Hapus Data',
								html: 'Hapus Data Karyawan: <b>' +
									nama + '</b>'
								// + data.nomor_item
							});
							table();
						},
						error: function() {}
					});
				} else if (result.isDenied) {
					Swal.fire("Tidak Hapus data karyawan " + nama, "", "info");
				}
			});
		}

		function saveData() {
			if ($("#formKaryawan")[0].checkValidity()) {
				var formData = new FormData($('#formKaryawan')[0]);
				var edit = $('[name=id]').val();
				if (edit == '') {
					var url = '<?= base_url('home/saveKaryawan') ?>';
				} else {
					var url = '<?= base_url('home/updateKaryawan') ?>';
				}
				$.ajax({
					url: url,
					type: "POST",
					data: formData,
					contentType: false,
					processData: false,
					dataType: "json",
					success: function(data) {
						$('#modalKaryawan').modal('hide');
						if (data.status == true) {
							swal.fire({
								icon: 'success',
								title: 'Save Data',
								text: 'Simpan Data Berhasil '
								// + data.nomor_item
							});
							table();
						} else if (data.status == false) {
							swal.fire({
								icon: 'warning',
								title: 'Terjadi Kesalahan',
								text: 'Harap Hubungi Admin'
							});
						}
					},
					error: function(jqXHR, textStatus, errorwhrown) {}
				});


			} else {
				$("#formKaryawan")[0].reportValidity();
				Swal.fire({
					title: "",
					text: "Ada field yang belum terisi",
					icon: "warning"
				});
			}


		}
	</script>
</body>

</html>