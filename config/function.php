<?php
// $koneksi = mysqli_connect("localhost","root","","data-siswa");

$host = 'localhost'; // Nama hostnya
$username = 'root'; // Username
$password = ''; // Password (Isi jika menggunakan password)
$database = 'data-siswa'; // Nama databasenya


function testdb_connect ($host, $username, $password, $database){
    $pdo = new PDO('mysql:host='.$host.'; dbname='.$database, $username, $password);
    return $pdo;
}

try {
    $pdo = testdb_connect ($host, $username, $password, $database);
    // echo 'Connected to database';
} catch(PDOException $e) {
    echo $e->getMessage();
}

function neangandata($pdo){

        global $pdo;


        $result = mysqli_query($pdo, $pdo);




        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;

}


// function cek_session_admin(){
//     $cek = mysqli_num_rows(mysqli_query("Select * from user user_id= '$_SESSION[id]'"));

//     $level = $_SESSION[level];

//     if($level !='admin' AND $cek <=0){
//         echo "<script>document.location=''index.php'</script>";
//     }

// }
?>