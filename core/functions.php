<?php
function query($query) {
	global $connection;
	$result = mysqli_query($connection, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}
function all($table) {
  $result = query("SELECT * FROM $table ORDER BY id DESC");
	return $result;
}

function select($table, $selects) {
	$selects = join(", ", $selects);
  $result = query("SELECT $selects FROM $table ORDER BY id DESC");
	return $result;
}


function find($table, $id) {
	$result = query("SELECT * FROM $table WHERE id = $id");
	return $result[0];
}

function last($table) {
  $result = query("SELECT * FROM $table ORDER BY id DESC LIMIT 1;");
	return $result[0];
}

function store($table, $data = [], $is_return_id = false) {
	global $connection;
	$data = count($data) > 0 ? $data : $_POST;
	$fields = [];
	$values = [];
	foreach ($data as $key => $value) {
		$value = htmlspecialchars($value);
		$fields[] = $key;
		$values[] = "'$value'";
	}
	$fields = join(", ", $fields);
	$values = join(", ", $values);
	$query = "INSERT INTO $table ($fields) VALUES ($values)";
	$result = mysqli_query($connection, $query);
	return $is_return_id ? mysqli_insert_id($connection) : mysqli_affected_rows($connection) > 0;
	
}

function update($table, $data = []) {
	global $connection;
	$data = count($data) > 0 ? $data : $_POST;
	$id = $data['id'];
	$values = [];
	foreach ($data as $key => $value) {
		$value = htmlspecialchars($value);
		$values[] = "$key = '$value'";
	}
	$values = join(", ", $values);
	$query = "UPDATE $table SET $values WHERE id = $id";
	mysqli_query($connection, $query);
	return mysqli_affected_rows($connection) > 0;
}

function delete($table, $id) {
	global $connection;
	mysqli_query($connection, "DELETE FROM $table WHERE id = $id");
	return mysqli_affected_rows($connection) > 0;
}

function delete_multiple($table, $ids) {
	global $connection;
	$ids = join(", ", array_map('intval', $ids));
	mysqli_query($connection, "DELETE FROM $table WHERE id IN ($ids)");
	return mysqli_affected_rows($connection) > 0;
}

function upload($field, $path = '../../img/') {

	$namaFile = $_FILES[$field]['name'];
	$ukuranFile = $_FILES[$field]['size'];
	$error = $_FILES[$field]['error'];
	$tmpName = $_FILES[$field]['tmp_name'];
	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 1000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, $path . $namaFileBaru);

	return $namaFileBaru;
}

function flash($message, $type) {
	$_SESSION['flash'][$type] = $message;
}

// LEND
function lend_books($id) {
	$result = query("SELECT *, `lend_details`.`id` as lend_detail_id FROM `lend_details` JOIN `books` ON `lend_details`.`book_id` = `books`.`id`  WHERE `lend_details`.`lend_id` = $id ");
	return $result;
}
