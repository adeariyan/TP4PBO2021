<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask()
	{
		// Query mysql select data ke data_mahasiswa
		$query = "SELECT * FROM data_mahasiswa";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTasknim()
	{

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTasknama_mahasiswa()
	{
		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTaskgender()
	{
		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTaskprodi()
	{
		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTaskukt()
	{
		// Mengeksekusi query
		return $this->execute($query);
	}

	function insertTask($data) // fungsi untuk input data
	{
		$nim = $data['nim'];
		$nama_mahasiswa = $data['nama_mahasiswa'];
		$gender = $data['gender'];
		$prodi = $data['prodi'];
		$ukt = $data['ukt'];
		$status = "Belum Lunas";
		
		$query = "INSERT INTO data_mahasiswa (nim, nama_mahasiswa, gender, prodi, ukt, status_bayar) VALUES ('$nim', '$nama_mahasiswa', '$gender', '$prodi', '$ukt', '$status' )";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function deleteTask($id_task) // fungsiuntuk delete data
	{
		$query = "DELETE FROM data_mahasiswa WHERE id=$id_task";

		return $this->execute($query);
	}

	function updateTask($id) // fungsi untuk selesai data
	{
		$query = "UPDATE data_mahasiswa SET status_bayar = 'Sudah Lunas' WHERE id = $id";

		return $this->execute($query);
	}
	
}



?>
