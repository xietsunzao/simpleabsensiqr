$(document).on("click", ".edit-personil", function () {
    var id_pr = $(this).data("id_pr");
	$(".modal-body #id").val( id_pr );
	
	var keti = $(this).data("daftar_ket");
	$(".modal-body #p_ket").val( keti );
	
	var nama_pr = $(this).data("nama_pr");
	$(".modal-body #p_nama2").val( nama_pr );
	var daftar_pangkat_pr = $(this).data("daftar_pangkat_pr");
	$(".modal-body #p_pangkat2").val( daftar_pangkat_pr );
	var daftar_nip_pr = $(this).data("daftar_nip_pr");
	$(".modal-body #p_nip2").val( daftar_nip_pr );
	var daftar_nrp_pr = $(this).data("daftar_nrp_pr");
	$(".modal-body #p_nrp2").val( daftar_nrp_pr );
	var daftar_jenis_pr = $(this).data("daftar_jenis_pr");
	$(".modal-body #p_jenis2").val( daftar_jenis_pr );
	var daftar_nohp = $(this).data("daftar_nohp");
	$(".modal-body #p_nohp2").val( daftar_nohp );
  
});











$(document).on("click", ".delete-personil", function () {
    var id = $(this).data('id_pr2');
	$(".modal-bodydelete #id3").val( id );
	var nama = $(this).data('nama_pr2');
	$(".modal-bodydelete #nama").html( nama );
	
  
});



$(document).on("click", ".booking", function () {
    var id = $(this).data('id_pr2');
	$(".modal-bodydelete #id3").val( id );
	
	 var id_jk = $(this).data('barb');
	$(".modal-bodydelete #id_byr").val( id_jk );
	
	var nama = $(this).data('nama_pr2');
	var aksi = $(this).data('aksi');
	var bttn = $(this).data('bttn');
	var inpt = $(this).data('inpt');
	$(".modal-bodydelete #inpt").val( inpt );
	$(".box-footer #nm_btn").html( bttn );
	$(".modal-bodydelete #nama").html( nama );
	$(".modal-header #myModalLabel").html( aksi );
	
  
});



$(document).on("click", ".delete-tamu", function () {
    var id = $(this).data('id_tm');
	$(".modal-bodydelete #id3").val( id );
	var nama = $(this).data('nama_tm');
	$(".modal-bodydelete #nama").html( nama );
	
  
});

$(document).on("click", ".delete-user", function () {
    var id = $(this).data('id_user');
	$(".modal-bodydelete #id3").val( id );
	var nama = $(this).data('user_name');
	$(".modal-bodydelete #nama").html( nama );
	
  
});


$(document).bind("contextmenu",function(e) {
    e.preventDefault();
});
  $(function () {
    $("#example1").DataTable();
    
  });
  $(function () {
    $("#example2").DataTable();
    
  });
  $(function () {
    $("#example3").DataTable();
    
  });
  $(function () {
    $("#example4").DataTable();
    
  });
  
  $(document).on("click", ".editpolisig", function () {
    var id_pr = $(this).data("id_pr");
	$(".bodyeditpolisi #id").val( id_pr );
	var nama_pr = $(this).data("nama_pr");
	$(".bodyeditpolisi #p_namar").val( nama_pr );
	var daftar_pangkat_pr = $(this).data("daftar_pangkat_pr");
	$(".bodyeditpolisi #p_n1").val( daftar_pangkat_pr );

});

$(document).on("click", ".edit-user", function () {
    var id_pr = $(this).data("id_user");
	$(".modal-bodyus #id").val( id_pr );
	var user_name = $(this).data("user_name");
	$(".modal-bodyus #u_nama2").val( user_name );
	

});


  $('#tgl').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});
$('#tgl1').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});


$(document).on("click", ".openp17", function () {
    var id_p17 = $(this).data("id_p17");
	$(".modal-p17 #kresid_p17").val( id_p17 );
	
	var nama_p17 = $(this).data("nama_p17");
	$(".modal-p17 #kresnama_p17").html( nama_p17 );
	
	var pasal_p17 = $(this).data("pasal_p17");
	$(".modal-p17 #krespasal_p17").html( pasal_p17 );
	
	var lokasip17 = $(this).data("lokasi");
	$(".modal-p17 #kreslokasip17").val( lokasip17 );
	
  
});
$('#tglp17').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});

$(document).on("click", ".berkastahap1", function () {
    var id_berkastahap1 = $(this).data("id_berkastahap1");
	$(".modal-berkastahap11 #kresid_berkastahap1").val( id_berkastahap1 );
	
	var nama_berkastahap1 = $(this).data("nama_berkastahap1");
	$(".modal-berkastahap11 #kresnama_berkastahap1").html( nama_berkastahap1 );
	
	var pasal_berkastahap1 = $(this).data("pasal_berkastahap1");
	$(".modal-berkastahap11 #krespasal_berkastahap1").html( pasal_berkastahap1 );
	
	var lokasi = $(this).data("lokasi");
	$(".modal-berkastahap11 #kreslokasiberkastahap1").val( lokasi );
	
 

});

$('#tglberkastahap1').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});
  
  
  $(document).on("click", ".p18", function () {
    var id_p18 = $(this).data("id_p18");
	$(".modal-p18 #kresid_p18").val( id_p18 );
	
	var nama_p18 = $(this).data("nama_p18");
	$(".modal-p18 #kresnama_p18").html( nama_p18 );
	
	var pasal_p18 = $(this).data("pasal_p18");
	$(".modal-p18 #krespasal_p18").html( pasal_p18 );
	
	var lokasi = $(this).data("lokasi");
	$(".modal-p18 #kreslokasip18").val( lokasi );
	
 

});

$('#tglp18').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});

$(document).on("click", ".p21", function () {
    var id_p21 = $(this).data("id_p21");
	$(".modal-p21 #kresid_p21").val( id_p21 );
	
	var nama_p21 = $(this).data("nama_p21");
	$(".modal-p21 #kresnama_p21").html( nama_p21 );
	
	var pasal_p21 = $(this).data("pasal_p21");
	$(".modal-p21 #krespasal_p21").html( pasal_p21 );
	
	var lokasi = $(this).data("lokasi");
	$(".modal-p21 #kreslokasip21").val( lokasi );
	
 

});

$('#tglp21').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});

$(document).on("click", ".p19", function () {
    var id_p19 = $(this).data("id_p19");
	$(".modal-p19 #kresid_p19").val( id_p19 );
	
	var nama_p19 = $(this).data("nama_p19");
	$(".modal-p19 #kresnama_p19").html( nama_p19 );
	
	var pasal_p19 = $(this).data("pasal_p19");
	$(".modal-p19 #krespasal_p19").html( pasal_p19 );
	
	var lokasi = $(this).data("lokasi");
	$(".modal-p19 #kreslokasip19").val( lokasi );
	
 

});

$('#tglp19').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});

$(document).on("click", ".p20", function () {
    var id_p20 = $(this).data("id_p20");
	$(".modal-p20 #kresid_p20").val( id_p20 );
	
	var nama_p20 = $(this).data("nama_p20");
	$(".modal-p20 #kresnama_p20").html( nama_p20 );
	
	var pasal_p20 = $(this).data("pasal_p20");
	$(".modal-p20 #krespasal_p20").html( pasal_p20 );
	
	
 

});

$('#tglp20').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});		
$('#tglp201').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});		 

function p1(){
	document.getElementById("opt1").checked = true;
	document.getElementById("opt2").checked = false;
	$("#opt").html("Masukkan tanggal penghentian perkara P20 atau SP3 Kepolisian lakukan tekan tombol simpan hanya 1 kali.");
	$("#kreslokasip20").val("p20");
	}
	function p2(){
	document.getElementById("opt1").checked = false;
	document.getElementById("opt2").checked = true;
	$("#opt").html("Khusus untuk Pelaksanaan Diversi Yang Berhasil silahkan isikan tanggal penetapan pengadilan dibawah ini.");
	$("#kreslokasip20").val("diversi");
	};
	
	
	$(document).on("click", ".p21a", function () {
    var id_p21a = $(this).data("id_p21a");
	$(".modal-p21a #kresid_p21a").val( id_p21a );
	
	var nama_p21a = $(this).data("nama_p21a");
	$(".modal-p21a #kresnama_p21a").html( nama_p21a );
	
	var pasal_p21a = $(this).data("pasal_p21a");
	$(".modal-p21a #krespasal_p21a").html( pasal_p21a );	
	var lokasi = $(this).data("lokasi");
	$(".modal-p21a #kreslokasip21a").val( lokasi );
});

$('#tglp21a').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});

$(document).on("click", ".tahap2", function () {
    var id_tahap2 = $(this).data("id_tahap2");
	$(".modal-tahap2 #kresid_tahap2").val( id_tahap2 );
	
	var nama_tahap2 = $(this).data("nama_tahap2");
	$(".modal-tahap2 #kresnama_tahap2").html( nama_tahap2 );
	
	var pasal_tahap2 = $(this).data("pasal_tahap2");
	$(".modal-tahap2 #krespasal_tahap2").html( pasal_tahap2 );
	var lokasi = $(this).data("lokasi");
	$(".modal-tahap2 #kreslokasitahap2").val( lokasi );	
});

$('#tgltahap2').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});

$(document).on("click", ".p31", function () {
    var id_p31 = $(this).data("id_p31");
	$(".modal-p31 #kresid_p31").val( id_p31 );
	
	var nama_p31 = $(this).data("nama_p31");
	$(".modal-p31 #kresnama_p31").html( nama_p31 );
	
	var pasal_p31 = $(this).data("pasal_p31");
	$(".modal-p31 #krespasal_p31").html( pasal_p31 );
	var lokasi = $(this).data("lokasi");
	$(".modal-p31 #kreslokasip31").val( lokasi );	
});

$('#tglp31').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});

$(document).on("click", ".skpp", function () {
    var id_skpp = $(this).data("id_skpp");
	$(".modal-skpp #kresid_skpp").val( id_skpp );
	
	var nama_skpp = $(this).data("nama_skpp");
	$(".modal-skpp #kresnama_skpp").html( nama_skpp );
	
	var pasal_skpp = $(this).data("pasal_skpp");
	$(".modal-skpp #krespasal_skpp").html( pasal_skpp );
	
});

$('#tglskpp').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});

function p11(){
	document.getElementById("opt11").checked = true;
	document.getElementById("opt22").checked = false;
	$("#optt").html("Khusus untuk Pelaksanaan Diversi Yang Berhasil silahkan isikan tanggal penetapan pengadilan dibawah ini");
	$("#ala").html('Alasan Dihentikan :<strong>DIVERSI</strong>');
	$("#kreslokasiskpp").val("DIVERSI");
	}
	function p22(){
	document.getElementById("opt11").checked = false;
	document.getElementById("opt22").checked = true;
	$("#optt").html("Khusus untuk Pelaksanaan Diversi Yang Berhasil silahkan isikan tanggal penetapan pengadilan dibawah ini.");
	$("#ala").html('Alasan Dihentikan :<strong>SKPP</strong>');
	$("#kreslokasiskpp").val("SKPP");
	};
	
	$(document).on("click", ".tapsidang", function () {
    var id_tapsidang = $(this).data("id_tapsidang");
	$(".modal-tapsidang #kresid_tapsidang").val( id_tapsidang );
	
	var nama_tapsidang = $(this).data("nama_tapsidang");
	$(".modal-tapsidang #kresnama_tapsidang").html( nama_tapsidang );
	
	var pasal_tapsidang = $(this).data("pasal_tapsidang");
	$(".modal-tapsidang #krespasal_tapsidang").html( pasal_tapsidang );
	
	var lokasi = $(this).data("lokasi");
	$(".modal-tapsidang #kreslokasitapsidang").val( lokasi );	
	
});

$('#tgltapsidang').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});

$(document).on("click", ".tuntutan", function () {
    var id_tuntutan = $(this).data("id_tuntutan");
	$(".modal-tuntutan #kresid_tuntutan").val( id_tuntutan );
	
	var nama_tuntutan = $(this).data("nama_tuntutan");
	$(".modal-tuntutan #kresnama_tuntutan").html( nama_tuntutan );
	
	var pasal_tuntutan = $(this).data("pasal_tuntutan");
	$(".modal-tuntutan #krespasal_tuntutan").html( pasal_tuntutan );
	
	var lokasi = $(this).data("lokasi");
	$(".modal-tuntutan #kreslokasituntutan").val( lokasi );	
	
});

$('#tgltuntutan').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});

$(document).on("click", ".putusan", function () {
    var id_putusan = $(this).data("id_putusan");
	$(".modal-putusan #kresid_putusan").val( id_putusan );
	
	var nama_putusan = $(this).data("nama_putusan");
	$(".modal-putusan #kresnama_putusan").html( nama_putusan );
	
	var pasal_putusan = $(this).data("pasal_putusan");
	$(".modal-putusan #krespasal_putusan").html( pasal_putusan );
	
	var lokasi = $(this).data("lokasi");
	$(".modal-putusan #kreslokasiputusan").val( lokasi );	
	
});

$('#tglputusan').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});



$(document).on("click", ".upayahukum", function () {
    var id_upayahukum = $(this).data("id_upayahukum");
	$(".modal-upayahukum #kresid_upayahukum").val( id_upayahukum );
	
	var nama_upayahukum = $(this).data("nama_upayahukum");
	$(".modal-upayahukum #kresnama_upayahukum").html( nama_upayahukum );
	
	var pasal_upayahukum = $(this).data("pasal_upayahukum");
	$(".modal-upayahukum #krespasal_upayahukum").html( pasal_upayahukum );
	
	var lokasi = $(this).data("lokasi");
	$(".modal-upayahukum #kreslokasiupayahukum").val( lokasi );	
	
});

$('#tglupayahukum').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});



$(document).on("click", ".eksekusi", function () {
    var id_eksekusi = $(this).data("id_eksekusi");
	$(".modal-eksekusi #kresid_eksekusi").val( id_eksekusi );
	
	var nama_eksekusi = $(this).data("nama_eksekusi");
	$(".modal-eksekusi #kresnama_eksekusi").html( nama_eksekusi );
	
	var pasal_eksekusi = $(this).data("pasal_eksekusi");
	$(".modal-eksekusi #krespasal_eksekusi").html( pasal_eksekusi );
	
	var lokasi = $(this).data("lokasi");
	$(".modal-eksekusi #kreslokasieksekusi").val( lokasi );	
	
});

$('#tgleksekusi').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});
$('#tgleksekusii').datepicker({
 dateFormat: 'dd/mm/yy',
 changeMonth: true,
 changeYear: true,
 autoclose: true
});
$(document).on("click", ".edit-user-photo", function () {
    var id_pr = $(this).data("id_user");
	$(".modal-poto #id").val( id_pr );
	var nama = $(this).data("user_name");
	$(".modal-poto #usernamee").html( nama );
	var gambar = $(this).data("gambar");
	document.getElementById("ph").src = gambar;
	
});

	