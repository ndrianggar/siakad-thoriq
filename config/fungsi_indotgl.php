<?php
	function tgl_indo($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;		 
	}	

	function tgl_grafik($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulanraport(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.'_'.$bulan;		 
	}

	function tgl_raport($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulanraport(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $bulan.' '.$tanggal.', '.$tahun;		 
	}	

	function tgl_simpan($tgl){
			$tanggal = substr($tgl,0,2);
			$bulan = substr($tgl,3,2);
			$tahun = substr($tgl,6,4);
			return $tahun.'-'.$bulan.'-'.$tanggal;		 
	}

	function tgl_view($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = substr($tgl,5,2);
			$tahun = substr($tgl,0,4);
			return $tanggal.'-'.$bulan.'-'.$tahun;		 
	}

	function hari_ini($tanggal){
		$day = date('D', strtotime($tanggal));
		$dayList = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu'
		);
		return $dayList[$day];
	}

	function getBulan($bln){
				switch ($bln){
					case 1: 
						return "Jan";
						break;
					case 2:
						return "Feb";
						break;
					case 3:
						return "Mar";
						break;
					case 4:
						return "Apr";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "Jun";
						break;
					case 7:
						return "Jul";
						break;
					case 8:
						return "Agu";
						break;
					case 9:
						return "Sep";
						break;
					case 10:
						return "Okt";
						break;
					case 11:
						return "Nov";
						break;
					case 12:
						return "Des";
						break;
				}
			} 

	function getBulanraport($bln){
				switch ($bln){
					case 1: 
						return "January";
						break;
					case 2:
						return "February";
						break;
					case 3:
						return "March";
						break;
					case 4:
						return "April";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "June";
						break;
					case 7:
						return "July";
						break;
					case 8:
						return "Agustus";
						break;
					case 9:
						return "September";
						break;
					case 10:
						return "October";
						break;
					case 11:
						return "November";
						break;
					case 12:
						return "December";
						break;
				}
			}
?>

<style type="text/css">
    .watermark{
        width: 100%;
        height: auto;
        position: absolute;
        /*margin-top : 50px;*/
        /*top: 50%;
        left: 50%;
        margin-left: -1240px;
        margin-top: -1754px;*/
        z-index: -999;
        opacity: 0.2;
        filter: alpha(opacity=30);
    }
</style>
