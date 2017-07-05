	function dashboard(){
		$('#mainContent').empty();
		$('#mainContent').append('<h1>DASHBOARD</h1>')
	}

	function tbUser(){
		var defaultRow = 10;
		$('#mainContent').empty();
		$('#mainContent').append('<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalCreateUser" id="btnCreateUser">Buat User</button>');
		$('#mainContent').append('<table class="table tbUser">'+
			'<thead>'+
			'<tr>'+
			'<th>#</th>'+
			'<th>E-Mail</th>'+
			'<th>Password</th>'+
			'<th>Salt</th>'+
			'<th>Role</th>'+
			'<th>Tanggal Pembuatan</th>'+
			'<th>Terakhir Login</th>'+
			'<th>Action</th>'+
			'</tr>'+
			'</thead>'+
			'<tbody id="rowUser">'+
			'</tbody>'+
			'</table>');
		var url = 'loadRowUser.php';
		$.ajax({
			type: "POST",
			dataType: "json",
			url: url,
			data: {'jmlBaris': defaultRow},
			success: function(data){
				console.log(data);
				console.log(data.length);
				console.log(data[0]);
				for(var i = 0; i<data.length; i++){
					$('#rowUser').append('<tr>+'+
						'<th scope="row">'+(i+1)+'</th>'+
						'<td>'+data[i].EMAIL+'</td>'+
						'<td>'+data[i].PASSWORD+'</td>'+
						'<td>'+data[i].SALT+'</td>'+
						'<td>'+data[i].ROLE+'</td>'+
						'<td>'+data[i].TANGGAL_PEMBUATAN+'</td>'+
						'<td>'+data[i].TERAKHIR_LOGIN+'</td>'+
						'<td>'+
						'<a class="blue-text readUser" id="'+data[i].ID_USER+'" data-toggle="modal" data-target="#modalUser" data-id="'+data[i].ID_USER+'"><i class="fa fa-user"></i></a>'+
						'<a class="teal-text updateUser" id="'+data[i].ID_USER+'" data-id="'+data[i].ID_USER+'"><i class="fa fa-pencil"></i></a>'+
						'<a class="red-text deleteUser" id="'+data[i].ID_USER+'" data-toggle="modal" data-target="#modalDeleteUser" data-id="'+data[i].ID_USER+'"><i class="fa fa-times"></i></a>'+
						'</td>'+
						'</tr>');
				}
			},
			error: function(jqXHR, status, err){
				alert("Load Row User");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		});
	}

	function tbPendonor(){
		var defaultRow = 10;
		$('#mainContent').empty();
		$('#mainContent').append('<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalCreatePendonor" id="btnCreatePendonor">Buat Pendonor</button>');
		$('#mainContent').append('<table class="table tbPendonor">'+
			'<thead>'+
			'<tr>'+
			'<th>#</th>'+
			'<th>Username</th>'+
			'<th>Password</th>'+
			'<th>Email</th>'+
			'<th>Salt</th>'+
			'<th>Tanggal Pembuatan</th>'+
			'<th>Terakhir Login</th>'+
			'<th>Action</th>'+
			'</tr>'+
			'</thead>'+
			'<tbody id="rowPendonor">'+
			'</tbody>'+
			'</table>');
		var url = 'loadRowPendonor.php';
		$.ajax({
			type: "POST",
			dataType: "json",
			url: url,
			data: {'jmlBaris': defaultRow},
			success: function(data){
				console.log(data);
				console.log(data.length);
				console.log(data[0]);
				for(var i = 0; i<data.length; i++){
					$('#rowPendonor').append('<tr>+'+
						'<th scope="row">'+(i+1)+'</th>'+
						'<td>'+data[i].USER_PENDONOR+'</td>'+
						'<td>'+data[i].PASSWORD_PENDONOR+'</td>'+
						'<td>'+data[i].EMAIL_PENDONOR+'</td>'+
						'<td>'+data[i].SALT_PENDONOR+'</td>'+
						'<td>'+data[i].TANGGAL_PEMBUATAN_PENDONOR+'</td>'+
						'<td>'+data[i].TERAKHIR_LOGIN_PENDONOR+'</td>'+
						'<td>'+
						'<a class="blue-text readPendonor" id="'+data[i].ID_PENDONOR+'" data-toggle="modal" data-target="#modalPendonor" data-id="'+data[i].ID_PENDONOR+'"><i class="fa fa-user"></i></a>'+
						'<a class="teal-text updatePendonor" id="'+data[i].ID_PENDONOR+'" data-id="'+data[i].ID_PENDONOR+'"><i class="fa fa-pencil"></i></a>'+
						'<a class="red-text deletePendonor" id="'+data[i].ID_PENDONOR+'" data-toggle="modal" data-target="#modalDeletePendonor" data-id="'+data[i].ID_PENDONOR+'"><i class="fa fa-times"></i></a>'+
						'</td>'+
						'</tr>');
				}
			},
			error: function(jqXHR, status, err){
				alert("Load Row User");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		});
	}

	function tbBeasiswa(){
		var defaultRow = 10;
		$('#mainContent').empty();
		$('#mainContent').append('<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalCreateBeasiswa" id="btnCreateBeasiswa">Buat Beasiswa</button>');
		$('#mainContent').append('<table class="table tbBeasiswa">'+
			'<thead>'+
			'<tr>'+
			'<th>#</th>'+
			'<th>Pendonor</th>'+
			'<th>Nama Beasiswa</th>'+
			'<th>Tanggal Dibuka</th>'+
			'<th>Deadline</th>'+
			'<th>Status</th>'+
			'<th>Jumlah Pendaftar</th>'+
			'<th>Action</th>'+
			'</tr>'+
			'</thead>'+
			'<tbody id="rowBeasiswa">'+
			'</tbody>'+
			'</table>');
		var url = 'loadRowBeasiswa.php';
		$.ajax({
			type: "POST",
			dataType: "json",
			url: url,
			data: {'jmlBaris': defaultRow},
			success: function(data){
				console.log(data);
				console.log(data.length);
				console.log(data[0]);
				for(var i = 0; i<data.length; i++){
					$('#rowBeasiswa').append('<tr>+'+
						'<th scope="row">'+(i+1)+'</th>'+
						'<td>'+data[i].PENDONOR+'</td>'+
						'<td>'+data[i].NAMA_BEASISWA+'</td>'+
						'<td>'+data[i].TANGGAL_BEASISWA_DIBUKA+'</td>'+
						'<td>'+data[i].DEADLINE_BEASISWA+'</td>'+
						'<td>'+data[i].STATUS_BEASISWA+'</td>'+
						'<td>'+data[i].PENDAFTAR_BEASISWA+'</td>'+
						'<td>'+
						'<a class="blue-text readBeasiswa" id="'+data[i].ID_BEASISWA+'" data-toggle="modal" data-target="#modalBeasiswa" data-id="'+data[i].ID_BEASISWA+'"><i class="fa fa-user"></i></a>'+
						'<a class="teal-text updateBeasiswa" id="'+data[i].ID_BEASISWA+'" data-id="'+data[i].ID_BEASISWA+'"><i class="fa fa-pencil"></i></a>'+
						'<a class="red-text deleteBeasiswa" id="'+data[i].ID_BEASISWA+'" data-toggle="modal" data-target="#modalDeleteBeasiswa" data-id="'+data[i].ID_BEASISWA+'"><i class="fa fa-times"></i></a>'+
						'</td>'+
						'</tr>');
				}
			},
			error: function(jqXHR, status, err){
				alert("Load Row User");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		});
	}

	function tbHistApply(){
		var defaultRow = 10;
		$('#mainContent').empty();
		$('#mainContent').append('<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalCreateApply" id="btnCreateApplyBeasiswa">Buat Record Apply Beasiswa</button>');
		$('#mainContent').append('<table class="table tbHistApply">'+
			'<thead>'+
			'<tr>'+
			'<th>#</th>'+
			'<th>Email Mahasiswa</th>'+
			'<th>Nama Beasiswa</th>'+
			'<th>Tanggal Apply</th>'+
			'<th>Status Penerimaan</th>'+
			'<th>Status Dokumen</th>'+
			'<th>Action</th>'+
			'</tr>'+
			'</thead>'+
			'<tbody id="rowApplyBeasiswa">'+
			'</tbody>'+
			'</table>');
		var url = 'loadRowApplyBeasiswa.php';
		$.ajax({
			type: "POST",
			dataType: "json",
			url: url,
			data: {'jmlBaris': defaultRow},
			success: function(data){
				console.log(data);
				console.log(data.length);
				console.log(data[0]);
				for(var i = 0; i<data.length; i++){
					$('#rowApplyBeasiswa').append('<tr>+'+
						'<th scope="row">'+(i+1)+'</th>'+
						'<td>'+data[i].EMAIL_MAHASISWA+'</td>'+
						'<td>'+data[i].NAMA_BEASISWA+'</td>'+
						'<td>'+data[i].TANGGAL_APPLY+'</td>'+
						'<td>'+data[i].STATUS_PENERIMAAN+'</td>'+
						'<td>'+data[i].STATUS_DOKUMEN+'</td>'+
						'<td>'+
						'<a class="blue-text readApplyBeasiswa" id="'+data[i].ID_USER+','+data[i].ID_BEASISWA+'" data-toggle="modal" data-target="#modalApplyBeasiswa" data-id="'+data[i].ID_USER+','+data[i].ID_BEASISWA+'"><i class="fa fa-user"></i></a>'+
						'<a class="teal-text updateApplyBeasiswa" id="'+data[i].ID_USER+','+data[i].ID_BEASISWA+'" data-id="'+data[i].ID_USER+','+data[i].ID_BEASISWA+'"><i class="fa fa-pencil"></i></a>'+
						'<a class="red-text deleteApplyBeasiswa" id="'+data[i].ID_USER+','+data[i].ID_BEASISWA+'" data-toggle="modal" data-target="#modalDeleteApplyBeasiswa" data-id="'+data[i].ID_USER+','+data[i].ID_BEASISWA+'"><i class="fa fa-times"></i></a>'+
						'</td>'+
						'</tr>');
				}
			},
			error: function(jqXHR, status, err){
				alert("Load Row History GAGAL");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		});
	}

	function tbDokumen(){
		var defaultRow = 10;
		$('#mainContent').empty();
		$('#mainContent').append('<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalCreateDokumen" id="btnCreateDokumen">Buat Record Dokumen</button>');
		$('#mainContent').append('<table class="table tbDokumen">'+
			'<thead>'+
			'<tr>'+
			'<th>#</th>'+
			'<th>Email Pemilik</th>'+
			'<th>Nama Dokumen</th>'+
			'<th>Path Dokumen</th>'+
			'<th>Jenis Dokumen</th>'+
			'<th>Action</th>'+
			'</tr>'+
			'</thead>'+
			'<tbody id="rowDokumen">'+
			'</tbody>'+
			'</table>');
		var url = 'loadRowDokumen.php';
		$.ajax({
			type: "POST",
			dataType: "json",
			url: url,
			data: {'jmlBaris': defaultRow},
			success: function(data){
				console.log(data);
				console.log(data.length);
				console.log(data[0]);
				for(var i = 0; i<data.length; i++){
					$('#rowDokumen').append('<tr>+'+
						'<th scope="row">'+(i+1)+'</th>'+
						'<td>'+data[i].EMAIL+'</td>'+
						'<td>'+data[i].NAMA_DOKUMEN+'</td>'+
						'<td>'+data[i].PATH_DOKUMEN+'</td>'+
						'<td>'+data[i].JENIS_DOKUMEN+'</td>'+
						'<td>'+
						'<a class="blue-text readDokumen" id="'+data[i].ID_DOKUMEN+'" data-toggle="modal" data-target="#modalDokumen" data-id="'+data[i].ID_DOKUMEN+'"><i class="fa fa-user"></i></a>'+
						'<a class="teal-text updateDokumen" id="'+data[i].ID_DOKUMEN+'" data-id="'+data[i].ID_DOKUMEN+'"><i class="fa fa-pencil"></i></a>'+
						'<a class="red-text deleteDokumen" id="'+data[i].ID_DOKUMEN+'" data-toggle="modal" data-target="#modalDeleteDokumen" data-id="'+data[i].ID_DOKUMEN+'"><i class="fa fa-times"></i></a>'+
						'</td>'+
						'</tr>');
				}
			},
			error: function(jqXHR, status, err){
				alert("Load Row Dokumen Gagal");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		});
	}

	function tbRequestDokumen(){
		var defaultRow = 10;
		$('#mainContent').empty();
		$('#mainContent').append('<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalCreateRequest" id="btnCreateRequestDokumen">Buat Record Request Dokumen</button>');
		$('#mainContent').append('<table class="table tbRequestDokumen">'+
			'<thead>'+
			'<tr>'+
			'<th>#</th>'+
			'<th>Email Pemohon</th>'+
			'<th>Nama Dokumen</th>'+
			'<th>Jenis Dokumen</th>'+
			'<th>Tanggal Request</th>'+
			'<th>Tanggal Dipenuhi</th>'+
			'<th>Status</th>'+
			'<th>Catatan</th>'+
			'<th>Action</th>'+
			'</tr>'+
			'</thead>'+
			'<tbody id="rowRequestDokumen">'+
			'</tbody>'+
			'</table>');
		var url = 'loadRowRequestDokumen.php';
		$.ajax({
			type: "POST",
			dataType: "json",
			url: url,
			data: {'jmlBaris': defaultRow},
			success: function(data){
				console.log(data);
				console.log(data.length);
				console.log(data[0]);
				for(var i = 0; i<data.length; i++){
					$('#rowRequestDokumen').append('<tr>+'+
						'<th scope="row">'+(i+1)+'</th>'+
						'<td>'+data[i].EMAIL_MAHASISWA+'</td>'+
						'<td>'+data[i].NAMA_DOKUMEN_PROSES+'</td>'+
						'<td>'+data[i].JENIS_DOKUMEN_PROSES+'</td>'+
						'<td>'+data[i].TANGGAL_REQUEST_DOKUMEN+'</td>'+
						'<td>'+data[i].TANGGAL_REQUEST_DIPENUHI+'</td>'+
						'<td>'+data[i].STATUS_REQUEST_DOKUMEN+'</td>'+
						'<td>'+data[i].CATATAN_TAMBAHAN_REQUEST+'</td>'+
						'<td>'+
						'<a class="blue-text readRequestDokumen" id="'+data[i].ID_USER+','+data[i].ID_DOKUMEN_PROSES+'" data-toggle="modal" data-target="#modalRequestDokumen" data-id="'+data[i].ID_USER+','+data[i].ID_DOKUMEN_PROSES+'"><i class="fa fa-user"></i></a>'+
						'<a class="teal-text updateRequestDokumen" id="'+data[i].ID_USER+','+data[i].ID_DOKUMEN_PROSES+'" data-id="'+data[i].ID_USER+','+data[i].ID_DOKUMEN_PROSES+'"><i class="fa fa-pencil"></i></a>'+
						'<a class="red-text deleteRequestDokumen" id="'+data[i].ID_USER+','+data[i].ID_DOKUMEN_PROSES+'" data-toggle="modal" data-target="#modalDeleteRequestDokumen" data-id="'+data[i].ID_USER+','+data[i].ID_DOKUMEN_PROSES+'"><i class="fa fa-times"></i></a>'+
						'</td>'+
						'</tr>');
				}
			},
			error: function(jqXHR, status, err){
				alert("Load Row History Request GAGAL");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		});
	}

	// =====================================================================================

	$('#modalUser').on('show.bs.modal', function(event){
		var button = $(event.relatedTarget);
		var idUser = button.data('id');
		var modal = $(this)
		var url = 'readUser.php';

		$.ajax({
			type: "POST",
			dataType: "json",
			url: url,
			data: {'idUser': idUser},
			success: function(data){
				console.log(data);
				console.log(data.length);
				console.log(data[0]);
				modal.find('#modalUserLabel').text('Detail User ID : '+idUser);
				modal.find('#contNama').text(data.NAMA_LENGKAP);
				modal.find('#contEmail').text(data.EMAIL);
				modal.find('#contRole').text(data.ROLE);

				if(data.NRP == null){
					modal.find('#contNomId').text(data.NIP);
				}else{
					modal.find('#contNomId').text(data.NRP);
				}

				modal.find('#contPassword').text(data.PASSWORD);
				modal.find('#contSalt').text(data.SALT);
				modal.find('#contTanggalPembuatan').text(data.TANGGAL_PEMBUATAN);
				modal.find('#contTanggalLahir').text(data.TANGGAL_LAHIR);
				modal.find('#contTempatLahir').text(data.TEMPAT_LAHIR);
				modal.find('#contUsia').text(data.USIA);
				modal.find('#contAlamat').text(data.ALAMAT +', '+data.KOTA+', '+data.PROVINSI);
				modal.find('#contProdi').text(data.PRODI);
				modal.find('#contJurusan').text(data.JURUSAN);
				modal.find('#contKelas').text(data.KELAS+' '+data.PRODI+' '+data.PARAREL);
				modal.find('#contSemester').text(data.SEMESTER);
				modal.find('#contTanggalMasuk').text(data.TANGGAL_MASUK);
				modal.find('#contTerakhirMasuk').text(data.TERAKHIR_LOGIN);
			},
			error: function(jqXHR, status, err){
				alert("Read User ID gagal");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		})
	});

	$('#modalPendonor').on('show.bs.modal', function(event){
		var button = $(event.relatedTarget);
		var idPendonor = button.data('id');
		var modal = $(this)
		var url = 'readPendonor.php';

		$.ajax({
			type: "POST",
			dataType: "json",
			url: url,
			data: {'idPendonor': idPendonor},
			success: function(data){
				console.log(data);
				console.log(data.length);
				console.log(data[0]);
				modal.find('#modalUserLabel').text('Detail Pendonor ID : '+idPendonor);
				modal.find('#contNamaPendonor').text(data.NAMA_PENDONOR);
				modal.find('#contUsernamePendonor').text(data.USER_PENDONOR);
				modal.find('#contEmailPendonor').text(data.EMAIL_PENDONOR);
				modal.find('#contNomTelpPendonor').text(data.NOMOR_TELEPON_PENDONOR);

				modal.find('#contPasswordPendonor').text(data.PASSWORD_PENDONOR);
				modal.find('#contSaltPendonor').text(data.SALT_PENDONOR);
				modal.find('#contTanggalPembuatanPendonor').text(data.TANGGAL_PEMBUATAN_PENDONOR);
				modal.find('#contAlamatPendonor').text(data.ALAMAT_PENDONOR);
				modal.find('#contDokumenLegalisir').text(data.PATH_DOKUMEN_LEGALISIR);
				modal.find('#contPenanggungjawab').text(data.NAMA_PJ_BEASISWA);
				modal.find('#contStatusPendonor').text(data.STATUS_AKUN_PENDONOR);
				modal.find('#contTerakhirMasukPendonor').text(data.TERAKHIR_LOGIN_PENDONOR);
			},
			error: function(jqXHR, status, err){
				alert("Read User ID gagal");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		})
	});

	$('#modalBeasiswa').on('show.bs.modal', function(event){
		var button = $(event.relatedTarget);
		var idBeasiswa = button.data('id');
		var modal = $(this)
		var url = 'readBeasiswa.php';

		$.ajax({
			type: "POST",
			dataType: "json",
			url: url,
			data: {'idBeasiswa': idBeasiswa},
			success: function(data){
				console.log(data);
				console.log(data.length);
				console.log(data[0]);
				modal.find('#modalBeasiswaLabel').text('Detail Beasiswa ID : '+idBeasiswa);
				modal.find('#contIDPendonor').text(data.ID_PENDONOR);
				modal.find('#contAsalBeasiswa').text(data.ASAL_BEASISWA);
				modal.find('#contNamaBeasiswa').text(data.NAMA_BEASISWA);
				modal.find('#contStatusBeasiswa').text(data.STATUS_BEASISWA);
				modal.find('#contCPTelpBeasiswa').text(data.CONTACT_PERSON_TELEPON);                        
				modal.find('#contCPEmailBeasiswa').text(data.CONTACT_PERSON_EMAIL);
				modal.find('#contJenisBeasiswa').text(data.JENIS_BEASISWA);
				modal.find('#contDeskripsiBeasiswa').text(data.DESKRIPSI_BEASISWA);
				modal.find('#contTargetJurusan').text(data.TARGET_JURUSAN);
				modal.find('#contTargetProdi').text(data.TARGET_PRODI);
				modal.find('#contTargetSemester').text(data.TARGET_SEMESTER);
				modal.find('#contJumlahPendaftar').text(data.PENDAFTAR_BEASISWA);
				modal.find('#contPersyaratanDokumen').text(data.PERSYARATAN_DOKUMEN);
				modal.find('#contLinkFotoBeasiswa').text(data.PATH_FOTO_BEASISWA);
				modal.find('#contLinkFotoFeatured').text(data.PATH_FOTO_FEATURED);
				modal.find('#contTanggalDibuka').text(data.TANGGAL_BEASISWA_DIBUKA);
				modal.find('#contDeadlineBeasiswa').text(data.DEADLINE_BEASISWA);
			},
			error: function(jqXHR, status, err){
				alert("Read User ID gagal");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		})
	});

	$('#modalDokumen').on('show.bs.modal', function(event){
		var button = $(event.relatedTarget);
		var idDokumen = button.data('id');
		var modal = $(this)
		var url = 'readDokumen.php';

		$.ajax({
			type: "POST",
			dataType: "json",
			url: url,
			data: {'idDokumen': idDokumen},
			success: function(data){
				console.log(data);
				console.log(data.length);
				console.log(data[0]);
				modal.find('#modalDokumenLabel').text('Dokumen ID : '+idDokumen);
				modal.find('#contIDPemilikDokumen').text(data.ID_USER);
				modal.find('#contNamaDokumen').text(data.NAMA_DOKUMEN);
				modal.find('#contJenisDokumen').text(data.JENIS_DOKUMEN);
				modal.find('#contLinkDokumen').text(data.PATH_DOKUMEN);
			},
			error: function(jqXHR, status, err){
				alert("Read User ID gagal");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		})
	});

	$('#modalApplyBeasiswa').on('show.bs.modal', function(event){
		var button = $(event.relatedTarget);
		var parse = button.data('id');
		var arrayChar = parse.split(',');
		var idMahasiswa = arrayChar[0];
		var idBeasiswa = arrayChar[1];
		var modal = $(this)
		var url = 'readApplyBeasiswa.php';

		$.ajax({
			type: "POST",
			dataType: "json",
			url: url,
			data: {'idBeasiswa': idBeasiswa, 'idMahasiswa': idMahasiswa},
			success: function(data){
				console.log(data);
				console.log(data.length);
				console.log(data[0]);
				modal.find('#modalApplyBeasiswaLabel').text('Riwayat Apply ID : '+idMahasiswa+' '+idBeasiswa);
				modal.find('#contIDMahasiswaApply').text(data.ID_USER);
				modal.find('#contIDBeasiswaApply').text(data.ID_BEASISWA);
				modal.find('#contTanggalApply').text(data.TANGGAL_APPLY);
				modal.find('#contStatusPenerimaan').text(data.STATUS_PENERIMAAN);
				modal.find('#contStatusDokumen').text(data.STATUS_DOKUMEN);
			},
			error: function(jqXHR, status, err){
				alert("Read User ID gagal");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		})
	});

	$('#modalRequestDokumen').on('show.bs.modal', function(event){
		var button = $(event.relatedTarget);
		var parse = button.data('id');
		var arrayChar = parse.split(',');
		var idMahasiswa = arrayChar[0];
		var idDokumenProses = arrayChar[1];
		var modal = $(this)
		var url = 'readRequestDokumen.php';

		$.ajax({
			type: "POST",
			dataType: "json",
			url: url,
			data: {'idMahasiswa': idMahasiswa, 'idDokumenProses': idDokumenProses},
			success: function(data){
				console.log(data);
				console.log(data.length);
				console.log(data[0]);
				modal.find('#modalRequestDokumenLabel').text('Riwayat Apply ID : '+idMahasiswa+' '+idDokumenProses);
				modal.find('#contIDMahasiswaRequest').text(data.ID_USER);
				modal.find('#contIDDokumenRequest').text(data.ID_DOKUMEN_PROSES);
				modal.find('#contNamaDokumenProses').text(data.NAMA_DOKUMEN_PROSES);
				modal.find('#contJenisDokumenProses').text(data.JENIS_DOKUMEN_PROSES);
				modal.find('#contTanggalRequestDokumen').text(data.TANGGAL_REQUEST_DOKUMEN);
				modal.find('#contTanggalDiproses').text(data.TANGGAL_REQUEST_DIPENUHI);
				modal.find('#contStatusRequest').text(data.STATUS_REQUEST_DOKUMEN);
				modal.find('#contCatatanTambahan').text(data.CATATAN_TAMBAHAN_REQUEST);
			},
			error: function(jqXHR, status, err){
				alert("Read User ID gagal");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		})
	});

	// ==================================================================================

	$('#modalDeleteUser').on('show.bs.modal', function(event){
		var button = $(event.relatedTarget);
		var idUser = button.data('id');
		var modal = $(this);

		modal.find('#modalDeleteUserLabel').text("Menghapus ID : "+idUser);
		modal.find('#idUserDihapus').text(idUser);
	});

	$('#btnDeleteUser').click(function(){
		console.log($('#idUserDihapus').text())
		var idDihapus = $('#idUserDihapus').text();
		var url = 'deleteUser.php';
		$('#modalDeleteUser').modal('toggle');
		$.ajax({
			type: "POST",
			url: url,
			data: {'idDihapus': idDihapus},
			success: function(data){
				alert("User Berhasil DIhapus")
				console.log(data);
				tbUser();

			},
			error: function(jqXHR, status, err){
				alert("Delete Gagal");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		});
	});

	$('#modalDeletePendonor').on('show.bs.modal', function(event){
		var button = $(event.relatedTarget);
		var idPendonor = button.data('id');
		var modal = $(this);

		modal.find('#modalDeletePendonorLabel').text("Menghapus ID : "+idPendonor);
		modal.find('#idPendonorDihapus').text(idPendonor);
	});

	$('#btnDeletePendonor').click(function(){
		console.log($('#idPendonorDihapus').text())
		var idDihapus = $('#idPendonorDihapus').text();
		var url = 'deletePendonor.php';
		$('#modalDeletePendonor').modal('toggle');
		$.ajax({
			type: "POST",
			url: url,
			data: {'idDihapus': idDihapus},
			success: function(data){
				alert("Pendonor Berhasil DIhapus")
				console.log(data);
				tbUser();

			},
			error: function(jqXHR, status, err){
				alert("Delete Gagal");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		});
	});

	$('#modalDeleteBeasiswa').on('show.bs.modal', function(event){
		var button = $(event.relatedTarget);
		var idBeasiswa = button.data('id');
		var modal = $(this);

		modal.find('#modalDeleteBeasiswaLabel').text("Menghapus Beasiswa ID : "+idBeasiswa);
		modal.find('#idBeasiswaDihapus').text(idBeasiswa);
	});

	$('#btnDeleteBeasiswa').click(function(){
		console.log($('#idBeasiswaDihapus').text())
		var idDihapus = $('#idBeasiswaDihapus').text();
		var url = 'deleteBeasiswa.php';
		$('#modalDeleteBeasiswa').modal('toggle');
		$.ajax({
			type: "POST",
			url: url,
			data: {'idDihapus': idDihapus},
			success: function(data){
				alert("Beasiswa Berhasil Dihapus")
				console.log(data);
				tbBeasiswa();

			},
			error: function(jqXHR, status, err){
				alert("Delete Gagal");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		});
	});

	$('#modalDeleteDokumen').on('show.bs.modal', function(event){
		var button = $(event.relatedTarget);
		var idDokumen = button.data('id');
		var modal = $(this);

		modal.find('#modalDeleteDokumenLabel').text("Menghapus Dokumen ID : "+idDokumen);
		modal.find('#idDokumenDihapus').text(idDokumen);
	});

	$('#btnDeleteDokumen').click(function(){
		console.log($('#idDokumenDihapus').text())
		var idDihapus = $('#idDokumenDihapus').text();
		var url = 'deleteDokumen.php';
		$('#modalDeleteDokumen').modal('toggle');
		$.ajax({
			type: "POST",
			url: url,
			data: {'idDihapus': idDihapus},
			success: function(data){
				alert("Dokumen Berhasil Dihapus")
				console.log(data);
				tbDokumen();

			},
			error: function(jqXHR, status, err){
				alert("Delete Gagal");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		});
	});

	$('#modalDeleteRequestDokumen').on('show.bs.modal', function(event){
		var button = $(event.relatedTarget);
		var stringnya = button.data('id');
		var arrayID = stringnya.split(",");
		var idMahasiswa = arrayID[0];
		var idDokumenProses = arrayID[1];
		var modal = $(this);

		modal.find('#modalDeleteRequestDokumenLabel').text("Menghapus Request Dokumen ID Mahasiswa/Dokumen Request : "+idMahasiswa+"/"+idDokumenProses+"");
		modal.find('#idRequestDokumenDihapus').text(stringnya);
	});

	$('#btnDeleteRequestDokumen').click(function(){
		console.log($('#idRequestDokumenDihapus').text());
		var stringnya = $('#idRequestDokumenDihapus').text();
		var arrayID = stringnya.split(",");
		var idMahasiswa = arrayID[0];
		var idDokumenProses = arrayID[1];
		var url = 'deleteRequestDokumen.php';
		$('#modalDeleteRequestDokumen').modal('toggle');
		$.ajax({
			type: "POST",
			url: url,
			data: {'idMahasiswa': idMahasiswa, 'idDokumenProses': idDokumenProses},
			success: function(data){
				console.log("ID MAHASISWA : ");
				console.log(idMahasiswa);
				console.log("ID DOKUMEN PROSES : ");
				console.log(idDokumenProses);
				alert("Request Dokumen Berhasil Dihapus")
				console.log(data);
				tbRequestDokumen();

			},
			error: function(jqXHR, status, err){
				alert("Delete Gagal");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		});
	});

	$('#modalDeleteApplyBeasiswa').on('show.bs.modal', function(event){
		var button = $(event.relatedTarget);
		var stringnya = button.data('id');
		var arrayID = stringnya.split(",");
		var idMahasiswa = arrayID[0];
		var idBeasiswa = arrayID[1];
		var modal = $(this);

		modal.find('#modalDeleteApplyBeasiswaLabel').text("Menghapus Request Dokumen ID Mahasiswa/Beasiswa Request : "+idMahasiswa+"/"+idBeasiswa+"");
		modal.find('#idApplyBeasiswaDihapus').text(stringnya);
	});

	$('#btnDeleteApply').click(function(){
		console.log($('#idApplyBeasiswaDihapus').text());
		var stringnya = $('#idApplyBeasiswaDihapus').text();
		var arrayID = stringnya.split(",");
		var idMahasiswa = arrayID[0];
		var idBeasiswa = arrayID[1];
		var url = 'deleteApplyBeasiswa.php';
		$('#modalDeleteApplyBeasiswa').modal('toggle');
		$.ajax({
			type: "POST",
			url: url,
			data: {'idMahasiswa': idMahasiswa, 'idBeasiswa': idBeasiswa},
			success: function(data){
				console.log("ID MAHASISWA : ");
				console.log(idMahasiswa);
				console.log("ID DOKUMEN PROSES : ");
				console.log(idBeasiswa);
				alert("Apply Beasiswa Berhasil Dihapus")
				console.log(data);
				tbHistApply();

			},
			error: function(jqXHR, status, err){
				alert("Delete Gagal");
				console.log("jqXHR : "+jqXHR);
				console.log("status : "+status);
				console.log("err : "+err);
			}
		});
	});

	// =======================================================================================

	$('#btnTbRequestDokumen').click(function(){
		tbRequestDokumen();
	});

	$('#btnTbDokumen').click(function(){
		tbDokumen();
	});

	$('#btnTbApplyBeasiswa').click(function(){
		tbHistApply();
	});

	$('#btnTbBeasiswa').click(function(){
		tbBeasiswa();
	});

	$('#btnTbUser').click(function(){
		tbUser();
	});

	$('#btnTbPendonor').click(function(){
		tbPendonor();
	});

	$('#btnDashboard').click(function(){
		dashboard();
	});