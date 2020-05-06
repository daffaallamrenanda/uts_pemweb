<?php 

	class Iklan {
		public $nama_iklan,
			   $durasi,
			   $biaya;


		public function __construct( $nama_iklan, $durasi, $biaya ) {
			$this->nama_iklan = $nama_iklan;
			$this->durasi = $durasi;
			$this->biaya = $biaya;
		}

		public function __toString() {
			return $this->nama_iklan . " , " . $this->durasi . " , " . $this->biaya;
		}


	}

	// isinya informasi tentang iklan
	$iklan1 = new Iklan("Coffe Shop Seduhlur", "7 Hari", 100000);
	$iklan2 = new Iklan("Ayam Bakar Siap", "3 Hari", 50000);

	echo "Iklan 1 : " . $iklan1;
	echo "<br>";
	echo "Iklan 2 : " . $iklan2;

	echo "<hr>";

	class DataTransaksi {
		public $nama_user,
			   $jenis,
			   $nominal;


		public function __construct( $nama_user, $jenis, $nominal ) {
			$this->nama_user = $nama_user;
			$this->jenis = $jenis;
			$this->nominal = $nominal;
		}

		// mencetak data transaksi
		public function __toString() {
			return $this->nama_user . " , " . $this->jenis . " , " . $this->nominal;
		}


	}

	// isinya informasi tentang iklan
	$transaksi1 = new DataTransaksi("Indah Dwi", "Tanam Saham", 1000000);
	$transaksi2 = new DataTransaksi("Rakha Firmansyah", "Ambil Modal", 500000000);

	echo "Transaksi 1 : " . $transaksi1;
	echo "<br>";
	echo "Transaksi 2 : " . $transaksi2;
	

?>