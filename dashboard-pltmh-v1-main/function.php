<?php 

// function switch_koneksi($lokasi)
// {
//     if($lokasi == "Kemuning")
//     {
//         $koneksi = mysqli_connect("localhost", "root", "", "pltmh_kemuning");
//     }

//     elseif($lokasi == "Bandung")
//     {
//         $koneksi2 = mysqli_connect("localhost", "root", "", "pltmh_bandung");
//     }
// }
$koneksi = mysqli_connect("128.199.118.14", "komatsu", "komatsu123456789", "pltmh_kemuning");
function query($query) 
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) 
    {
      $rows[] = $row;  
    }
      return $rows;
}


//function lokasi
function cari_lokasi($lokasi) 
{
    $query = "SELECT * FROM tb_lokasi WHERE lokasi LIKE '%$lokasi%'";
    return query($query);
}

function cari_sensor($sensor) 
{
    $query = "SELECT * FROM tb_sensor WHERE lokasi LIKE '%$sensor%'";
    return query($query);
}

function registrasi($data)
{
    global $koneksi;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);
    
    //cek username sudah ada apa belum
    $cekUser = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");
    
    if( mysqli_fetch_assoc($cekUser))
    {
        echo "<script>alert('username sudah terdaftar')</script>";
        return false;
    }

    //cek konfirmasi password
    if($password !== $password2)
    {
        echo "<script>alert('Password tidak sesuai')</script>";
        return false;   
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    // tambahkan userbaru ke database
    mysqli_query($koneksi, "INSERT INTO user (username, password) VALUES('$username', '$password')");

    return mysqli_affected_rows($koneksi);
    
}


//function ambil data
function cari_data($tempat) 
{
    $query1 = "SELECT * FROM data_sensor WHERE location LIKE '%$tempat%' ORDER BY timestamp DESC LIMIT 5";
    return query($query1);
}

function data_row($tempat) 
{
    $query4 = "SELECT * FROM data_sensor WHERE location LIKE '%$tempat%' ORDER BY timestamp DESC LIMIT 1";
    return query($query4);
}

function cari_data2($tempat2)
{
    $query3 = "SELECT * FROM data_sensor WHERE location LIKE '%$tempat2%' ORDER BY timestamp ASC";
    return query($query3);
}

//data default
function data_default() 
{
    $query2 = "SELECT * FROM data_default ORDER BY timestamp DESC LIMIT 1";
    return query($query2);
}

function alldata_default()
{
    $query6 = "SELECT * FROM data_sensor ORDER BY timestamp DESC";
    return query($query6);
}

function all_data() 
{
    $query5 = "SELECT * FROM data_sensor ORDER BY timestamp DESC";
    return query($query5);
}

function tombol_reset($tempat)
{
    $sql= "insert into data_sensor values('','$tempat','1','1','1','1','1','1','1','1','','1')";
    
}
?>

