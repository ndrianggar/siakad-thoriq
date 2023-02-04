
<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'function.php';
 
// // menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['name']=''; 
// menyeleksi data admin dengan username dan password yang sesuai
$data = $pdo->prepare("select * from user where user_name='$username' and password='$password'");
 
// // menghitung jumlah data yang ditemukan
// $data->execute();
 
// $query = "SELECT * FROM user WHERE username = :username AND password = :password";  
// $statement = $pdo->prepare($query);  
// $statement->execute(  
// 	 array(  
// 		  'username'     =>     $_POST["username"],  
// 		  'password'     =>     $_POST["password"]  
// 	 )  
// );  
// $count = $statement->rowCount();  
// if($count == true)  
// {  
// 	 $_SESSION["username"] = $_POST["username"];  
// 	 header("location:../admin-template/apps/index.php?page=home");
// 	}  
// else  
// {  
// 	header("location:../login.php?pesan=gagal");
// }  
// $data->setFetchMode(PDO::FETCH_ASSOC);

// while($row = $data->fetch()){
// 	echo $row['name'] = $_SESSION['name'];
// 	echo $row['username'];

// }

// $id = $_SESSION['admin']['user_id'];


if($data == true){
	$_SESSION['user_name'] = ['username'];
    // $_SESSION['name'] = $id;
	$_SESSION['level'] = ['level'];
	$_SESSION['status'] = "login";
	header("location:../admin-template/apps/index.php?page=home");
}else{
	 	header("location:../login.php?pesan=gagal");

}
?>