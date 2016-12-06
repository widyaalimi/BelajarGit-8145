<?php
require_once ('lib/DBClass.php');
require_once ('lib/m_siswa.php');

if (isset($_GET["id"])){$id = $_GET["id"];}else{ $id= "";}

$siswa = new Siswa();
$data = $siswa-> readSiswa($id);
$value = $data[0];
?>
<table border="1">
<tr> <th> ID Siswa </th>
<th>FullName</th>
<th>Nationality</th>
<th>age</th>

</tr>


<tr>
<td><?php echo $value["id_siswa"]; ?></td>
<td><?php echo $value["full_name"]; ?></td>
<td><?php echo $value["nationality"]; ?></td>
<td><?php echo $value["age"]; ?></td>

</tr>


</table>
<div> <a href="siswa.php"><back</a>
</div>