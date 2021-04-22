<?php

include("config.php");
include("includes/Template.class.php");
include("includes/DB.class.php");
include("includes/Task.class.php");

// Membuat objek dari kelas task
$otask = new Task($db_host, $db_user, $db_password, $db_name);
$otask->open();

// Memanggil metho pada di kelas Task
if(isset($_POST['nim']))
{
	$otask->getTasknim();// untuk get nim
}
else if(isset($_POST['nama_mahasiswa']))
{
	$otask->getTasknama_mahasiswa();// untuk get nama dosen
}
else if(isset($_POST['gender']))
{
	$otask->getTaskgender();// untuk get gender
}
else if(isset($_POST['prodi']))
{
	$otask->getTaskprodi();// untuk get prodi
}
else if(isset($_POST['ukt']))
{
	$otask->getTaskukt();// untuk get ukt
}
else
{
	$otask->getTask();
}

// Proses mengisi tabel dengan data
$data = null;
$no = 1;

if(isset($_POST['add']))// untuk nambahin data
{
	$otask->insertTask($_POST);// memanggil fungsi

	header("Location:index.php");
}

while (list($id, $nim, $nama_mahasiswa, $gender, $prodi, $ukt, $status) = $otask->getResult()) {
	// Tampilan jika status data nya sudah diacc
	if($status == "Sudah Lunas")
	{
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $nim . "</td>
		<td>" . $nama_mahasiswa . "</td>
		<td>" . $gender . "</td>
		<td>" . $prodi . "</td>
		<td>" . $ukt . "</td>
		<td>" . $status . "</td>
		<td>
		<button class='btn btn-success'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Selesai</a></button>
		</td>
		</tr>";
		$no++;
	}
	// Tampilan jika status pembayaran belum di bayar
	else
	{
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $nim . "</td>
		<td>" . $nama_mahasiswa . "</td>
		<td>" . $gender . "</td>
		<td>" . $prodi . "</td>
		<td>" . $ukt . "</td>
		<td>" . $status . "</td>
		<td>
		<button class='btn btn-danger btn-sm'><a href='index.php?id_hapus=" . $id . "' style='color: white; text-decoration: none; '>Hapus</a></button>
		<button class='btn btn-success btn-sm' ><a href='index.php?id_status=" . $id .  "' style='color: white; text-decoration: none;'>Bayar</a></button>
		</td>
		</tr>";
		$no++;
	}

	
}

if(isset($_GET['id_hapus']))// untuk hapus data
{
	$id_task = $_GET['id_hapus'];

	$otask->deleteTask($id_task);// panggil fungsi hapus

	unset($_GET['id_hapus']);

	header("Location: index.php");
}

if(isset($_GET['id_status']))// untuk update
{
	$id_status = $_GET['id_status'];

	$otask->updateTask($id_status);

	unset($_GET['id_status']);
	
	header("Location: index.php");
}

// Menutup koneksi database
$otask->close();

// Membaca template skin.html
$tpl = new Template("templates/skin.html");

// Mengganti kode Data_Tabel dengan data yang sudah diproses
$tpl->replace("DATA_TABEL", $data);

// Menampilkan ke layar
$tpl->write();