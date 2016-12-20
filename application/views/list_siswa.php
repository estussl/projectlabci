<section class="bg-light-gray">
<h3>Daftar Siswa<h3>
<table border = "1"
	<tr><th>No</th><th>Nama</th><th>NIS</th><th>Jurusan</th><th>Tahun Masuk</th></tr>
	<?php
	$no=1;
	foreach ($record->result() as $r)
	{
		echo "<tr>
				<td>$no</td>
				<td>$r->nis</td>
				<td>$r->nama</td>
				<td>$r->tahun_masuk</td>
				<td>$r->jenis_kelamin</td>
			  </tr>";
		$no++;
	}
	?>
	</table>
