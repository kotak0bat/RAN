<?php
// Konversi waktu ke : Senin, 4 Januari 2014
function format_hari_tanggal($waktu)
{
    // Senin, Selasa dst.
    $hari_array = array(
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    );
    $hr = date('w', strtotime($waktu));
    $hari = $hari_array[$hr];

    // Tanggal: 1-31 dst, tanpa leading zero.
    $tanggal = date('j', strtotime($waktu));

    // Bulan: Januari, Maret dst.
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );
    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];

    // Tahun, 4 digit.
    $tahun = date('Y', strtotime($waktu));

    // Hasil akhir: Senin, 1 Oktober 2014
    return "$hari, $tanggal $bulan $tahun";
}

// Format tangal ke 1 Januari 1990
function format_tanggal($waktu)
{
    // Tanggal, 1-31 dst, tanpa leading zero.
    $tanggal = date('j', strtotime($waktu));

    // Bulan, Januari, Maret dst
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );
    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];

    // Tahun
    $tahun = date('Y', strtotime($waktu));

    // Senin, 12 Oktober 2014
    return "$tanggal $bulan $tahun";
}

// Format tangal ke yyyy-mm-dd
function date_to_en($tanggal)
{
    $tgl = date('Y-m-d', strtotime($tanggal));
    if ($tgl == '1970-01-01') {
        return '';
    } else {
        return $tgl;
    }
}

// Format tangal ke dd-mm-yyyy
function date_to_id($tanggal)
{
    $tgl = date('d-m-Y', strtotime($tanggal));
    if ($tgl == '01-01-1970') {        
        return '';
    } else {
        return $tgl;
    }
}




// Buat setiap awal kata huruf besar
function format_title_case($string)
{
    return ucwords($string);
}





function format_jenis_kelamin($kelamin)
{
    if ($kelamin == 'L') {
        return 'Laki-laki';
    } else {
        return 'Perempuan';
    }
}



function format_status_verifikasi($status)
{
    if ($status == '0') {
        return 'Belum';
    } else {
        return 'Sudah';
    }
}





function format_is_blokir($UserBlock)
{
    if ($UserBlock == '0') {
        // return 'BLOKIR';
		echo "<span class='label label-success'>ON</span>";
    } else {
        // return 'AKTIF';
		echo "<span class='label label-danger'>OFF</span>";
    }
}

function obfuscate_email($email)
{
    $em   = explode("@",$email);
    $name = implode(array_slice($em, 0, count($em)-1), '@');
    $len  = floor(strlen($name)/2);

    return substr($name,0, $len) . str_repeat('*', $len) . "@" . end($em);

}

