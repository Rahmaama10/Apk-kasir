<?php 

session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);


$login = mysqli_query($koneksi,"SELECT * FROM petugas WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="petugas"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "petugas";
		$pesan = "Login berhasil, selamat datang $username";
		// alihkan ke halaman dashboard admin

	// cek jika user login sebagai pegawai
	}else if($data['level']=="admin"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		$pesan2 = "Login berhasil, selamat datang $username";
		// alihkan ke halaman dashboard pegawai
	
		
	}else if($data['level']=="pembeli"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pembeli";
		$pesan3 = "Login berhasil, selamat datang $username";
		// alihkan ke halaman dashboard pegawai
	
		
	}else{
		$pesan4 = "Login gagal, username atau password anda salah!";

	}	
}

?>
<script>
 alert('<?php echo $pesan;?>');
 location='administrator/index.php';
</script>
<script>
 alert('<?php echo $pesan2;?>');
 location='petugas/index.php';
</script>
<script>
 alert('<?php echo $pesan3;?>');
 location='pelanggan/index.php';
</script>
<script>
 alert('<?php echo $pesan4;?>');
 location='index.php';
</script>



