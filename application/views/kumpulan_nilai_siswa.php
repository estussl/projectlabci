<section class="bg-light-gray">
<div class='container'>
<div class ='row baris'>

<h3 align="center"><u>Kumpulan Nilai Siswa</u></h3>
<br>
<h4 align="center"><?php 
echo $nama_kolom->row_array()['nama_mapel'];?>
</h4>
<table class="table table-hover table-inverse" width:100%>

	<tr >
	<th align="center">No</th>
	<th>Nip</th>
	<th>Mata Pelajaran </th>
	<th>Operasi</th>

	</tr>


	<?php
	$no=1;

	if (isset($kolomx))
		echo $kolomx;

	$kolom = $nama_kolom->row_array()['nm_kolom'];
	foreach ($daftar_nilai->result() as $row)
	{
		echo "<tr>
				<td>$no</td>
				<td>$row->nama</td>";

	 	echo "<td>" . $row->$kolom . "</td>

	 	<td><a href=" . base_url() . "Guru/perbaharui_nilai/" . $row->nis . "/" . $kolom . "/" . $row->$kolom .  " class='btn btn-default' role='button'>Edit</a></td></tr>";

	 	$no++;
	 }
/*. $row->nis . "/" . $kolom .*/
	?>

	</table>
	</div>
