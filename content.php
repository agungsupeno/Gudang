<?php
/* panggil file database.php untuk koneksi ke database */
require_once "config/database.php";
/* panggil file fungsi tambahan */
require_once "config/fungsi_tanggal.php";
require_once "config/fungsi_rupiah.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan message = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk pemanggilan file halaman konten
else {
	// jika halaman konten yang dipilih beranda, panggil file view beranda
	if ($_GET['module'] == 'beranda') {
		include "modules/beranda/view.php";
	}

	// jika halaman konten yang dipilih helm, panggil file view helm
	elseif ($_GET['module'] == 'helm') {
		include "modules/helm/view.php";
	}
	
	// jika halaman konten yang dipilih tools, panggil file view tools
	elseif ($_GET['module'] == 'tools') {
		include "modules/tools/view.php";
	}
	
	// jika halaman konten yang dipilih it, panggil file view it
	elseif ($_GET['module'] == 'it') {
		include "modules/it/view.php";
	}
	// jika halaman konten yang dipilih form helm, panggil file form helm
	elseif ($_GET['module'] == 'form_helm') {
		include "modules/helm/form.php";
	}
	
	// jika halaman konten yang dipilih form tools, panggil file form tools
	elseif ($_GET['module'] == 'form_tools') {
		include "modules/tools/form.php";
	}
	
	// jika halaman konten yang dipilih form it, panggil file form it
	elseif ($_GET['module'] == 'form_it') {
		include "modules/it/form.php";
	}
	// -----------------------------------------------------------------------------

	// jika halaman konten yang dipilih helm masuk, panggil file view helm masuk
	elseif ($_GET['module'] == 'helm_masuk') {
		include "modules/helm-masuk/view.php";
	}

	// jika halaman konten yang dipilih form helm masuk, panggil file form helm masuk
	elseif ($_GET['module'] == 'form_helm_masuk') {
		include "modules/helm-masuk/form.php";
	}
	// jika halaman konten yang dipilih tools masuk, panggil file view tools masuk
	elseif ($_GET['module'] == 'tools_masuk') {
		include "modules/tools-masuk/view.php";
	}

	// jika halaman konten yang dipilih form tools masuk, panggil file form tools masuk
	elseif ($_GET['module'] == 'form_tools_masuk') {
		include "modules/tools-masuk/form.php";
	}
	// jika halaman konten yang dipilih it masuk, panggil file view it masuk
	elseif ($_GET['module'] == 'it_masuk') {
		include "modules/it-masuk/view.php";
	}

	// jika halaman konten yang dipilih form it masuk, panggil file form it masuk
	elseif ($_GET['module'] == 'form_it_masuk') {
		include "modules/it-masuk/form.php";
	}
	// -----------------------------------------------------------------------------

	// jika halaman konten yang dipilih helm keluar, panggil file view helm keluar
	elseif ($_GET['module'] == 'helm_keluar') {
		include "modules/helm-keluar/view.php";
	}

	// jika halaman konten yang dipilih form helm keluar, panggil file form helm keluar
	elseif ($_GET['module'] == 'form_helm_keluar') {
		include "modules/helm-keluar/form.php";
	}
	// jika halaman konten yang dipilih tools keluar, panggil file view tools keluar
	elseif ($_GET['module'] == 'tools_keluar') {
		include "modules/tools-keluar/view.php";
	}

	// jika halaman konten yang dipilih form tools keluar, panggil file form tools keluar
	elseif ($_GET['module'] == 'form_tools_keluar') {
		include "modules/tools-keluar/form.php";
	}
	// jika halaman konten yang dipilih it keluar, panggil file view it keluar
	elseif ($_GET['module'] == 'it_keluar') {
		include "modules/it-keluar/view.php";
	}

	// jika halaman konten yang dipilih form it keluar, panggil file form it keluar
	elseif ($_GET['module'] == 'form_it_keluar') {
		include "modules/it-keluar/form.php";
	}
	// -----------------------------------------------------------------------------

	// jika halaman konten yang dipilih laporan stok, panggil file view laporan stok
	elseif ($_GET['module'] == 'lap_stok') {
		include "modules/lap-stok/view.php";
	}
	// jika halaman konten yang dipilih laporan stok tools, panggil file view laporan stok tools
	elseif ($_GET['module'] == 'lap_tools') {
		include "modules/lap-tools/view.php";
	}
	// jika halaman konten yang dipilih laporan stok it, panggil file view laporan stok it
	elseif ($_GET['module'] == 'lap_it') {
		include "modules/lap-it/view.php";
	}
	// -----------------------------------------------------------------------------

	// jika halaman konten yang dipilih laporan helm masuk, panggil file view laporan helm masuk
	elseif ($_GET['module'] == 'lap_helm_masuk') {
		include "modules/lap-helm-masuk/view.php";
	}
	// -----------------------------------------------------------------------------

	// jika halaman konten yang dipilih laporan helm keluar, panggil file view laporan helm keluar
	elseif ($_GET['module'] == 'lap_helm_keluar') {
		include "modules/lap-helm-keluar/view.php";
	}
	// jika halaman konten yang dipilih laporan tools masuk, panggil file view laporan tools masuk
	elseif ($_GET['module'] == 'lap_tools_masuk') {
		include "modules/lap-tools-masuk/view.php";
	}
	// -----------------------------------------------------------------------------

	// jika halaman konten yang dipilih laporan tools keluar, panggil file view laporan tools keluar
	elseif ($_GET['module'] == 'lap_tools_keluar') {
		include "modules/lap-tools-keluar/view.php";
	}
	// jika halaman konten yang dipilih laporan it masuk, panggil file view laporan it masuk
	elseif ($_GET['module'] == 'lap_it_masuk') {
		include "modules/lap-it-masuk/view.php";
	}
	// -----------------------------------------------------------------------------

	// jika halaman konten yang dipilih laporan it keluar, panggil file view laporan it keluar
	elseif ($_GET['module'] == 'lap_it_keluar') {
		include "modules/lap-it-keluar/view.php";
	}
	// -----------------------------------------------------------------------------

	// jika halaman konten yang dipilih user, panggil file view user
	elseif ($_GET['module'] == 'user') {
		include "modules/user/view.php";
	}

	// jika halaman konten yang dipilih form user, panggil file form user
	elseif ($_GET['module'] == 'form_user') {
		include "modules/user/form.php";
	}
	// -----------------------------------------------------------------------------

	// jika halaman konten yang dipilih profil, panggil file view profil
	elseif ($_GET['module'] == 'profil') {
		include "modules/profil/view.php";
	}

	// jika halaman konten yang dipilih form profil, panggil file form profil
	elseif ($_GET['module'] == 'form_profil') {
		include "modules/profil/form.php";
	}
	// -----------------------------------------------------------------------------
	
	// jika halaman konten yang dipilih password, panggil file view password
	elseif ($_GET['module'] == 'password') {
		include "modules/password/view.php";
	}
}
?>