<?php
require_once('lib/DBclass.php');
require_once('lib/m_siswa.php');

$id = $_GET['a'];

if(!is_numeric($id))
	exit('acces forbidden');

//$id = $_GET["id"];
$siswa = new siswa();
$data = $siswa->readSiswa($id);
$dt = $data[0];
?>

<h1>Tambah Data Siswa</h1>
<form action="editsiswa.php" method="post" enctype="multipart/form data">
	NIS:<br/>
	<input type="text" value="<?php echo $dt['id_siswa']?>"
	name="in_nis" readonly="true"> <br/>
	Nama Lengkap:<br/>
	<input type="text" name="in_name" value="<?php echo $dt['full_name']?>"><br/>
	Email:<br/>
	<input type="text" name="in_email"value="<?php echo $dt['email']?>"><br/>
	Kewarganegaraan:<br/>
	<select name="in_nation">
		<option value="">--pilih negara--</option>
		<?php foreach($data_nation as $n):?>
		<option value="<?php echo  $n['id_nationality']?>">
			<?php echo $n['nationality']?> <?php echo $o?>
		</option>
		<?php endforeach?>
	</select><br/>
	foto : <input type="file" name="in_foto"/> <br/>
	<input type="submit" name="kirim" value="simpan">
</form>