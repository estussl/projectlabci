<h3 align="center"><u>Guru</u></h3>
<br>
<table class="table table-hover table-inverse" width:100%>

	<tr bgcolor="#f5f5f0">
	<th align="center">No</th>
	<th>Nama</th>
	<th>NIP</th>
	<th>Pendidikan Terakhir</th>
	<th>Mata Pelajaran</th>
	<th colspan="2">Operasi</th>
	<th>Status</th>

	</tr>


	<?php
	$no=1;
	foreach ($record->result() as $row)
	{
		echo "<tr>

				<td>$no</td>
				<td>$row->nama</td>
				<td>$row->nip</td>
				<td>$row->pend_terakhir</td>";

				foreach($mata_pelajaran->result() as $deskripsi)
				{
					if($row->mata_pelajaran == $deskripsi->id)
					{
						echo "<td>$deskripsi->nama_mapel</td>";
					}
				}	

		echo 		"<td width='10'>".anchor('Admin/Guru/edit/'.$row->nip,'Edit')."</td>
           		<td width='10'>".anchor('Admin/Guru/delete/'.$row->nip,'Delete')."</td>
			  ";

		$validasi = false;
		foreach($user->result() as $terdaftar)
		{
			if($terdaftar->nip == $row->nip)
			{
				$validasi = true;
			}
		}

		if($validasi)
		{
			echo "<td width='10'>".anchor('Admin/Guru/unvalidate/'.$row->nip,'Hilangkan')."</td></tr>";
		}
		else
			echo "<td width='10'>".anchor('Admin/Guru/validasi/'.$row->nip,'Validasi')."</td></tr>";
		$no++;
	}

	?>
	</table>



    <a href="<?php echo base_url();?>Admin/Guru/post" class="btn btn-default" role="button">Tambah Data</a>
	 <a href="<?php echo base_url();?>Admin/Admin" class="btn btn-default" role="button">Kembali</a>
