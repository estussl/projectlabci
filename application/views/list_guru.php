<section class="bg-light-gray">
<h3 align="center"><u>Trainer</u></h3>
<br>
<table class="table table-hover table-inverse" width:100%>
	
	<tr bgcolor="#f5f5f0">
	<th align="center">No</th>
	<th>Nama</th>
	<th>NIP</th>
	<th>Pendidikan Terakhir</th>
	<th>Mata Pelajaran</th>
	<th>Jabatan</th>

	</tr>

	
	<?php
	$no=1;
	foreach ($record->result() as $r)
	{
		echo "<tr'>
				
				<td>$no</td>
				<td>$r->nama</td>
				<td>$r->nip</td>
				<td>$r->pend_terakhir</td>
				<td>$r->mata_pelajaran</td>
				<td>$r->jabatan</td>
			  </tr>";
		$no++;
	}

	?>
	</table>	
	


   