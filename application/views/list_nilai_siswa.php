<section class="bg-light-gray">

<h3 align="center"><u>Nilai Siswa</u></h3>
<br>
<table class="table table-hover table-inverse" width:100%>

	<tr>
	<th>No</th>
	<th>NIS</th>
	<th>Nama</th>
	<th>Java Beginner</th>
	<th>PHP Beginner</th>
	<th>Phyton Beginner</th>
	<th>Tahun Masuk</th>
	</tr>

	<?php
	$no=1;
	foreach ($record as $r)
	{
		echo "<tr>
				<td>$no</td>
				<td>$r->nis</td>
				<td>$r->nama</td>
				<td>$r->java_beg</td>
				<td>$r->php_beg</td>
				<td>$r->phyton_beg</td>
				<td>$r->thn_masuk</td>
			  </tr>";
		$no++;
	}
	?>
	</table>
	</section>	