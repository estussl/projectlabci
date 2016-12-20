<h3 align="center"><u>Daftar Siswa</u></h3>
<br>
<table class="table table-hover table-inverse" width:100%>

	<tr bgcolor="#f5f5f0">
	<th align="center">No</th>
	<th>Nama</th>
	<th>NIS</th>
   <th>Status</th>
	<!-- <th>Operasi</th> -->

	</tr>


	<?php
	$no=1;
	if($nilai->row_array()['nis'] == '')
		echo "<td colspan='4'><center>Tidak ada data</center></td>";
	foreach ($siswa->result() as $row)
	{




      // foreach($nilai->result() as $pembanding)
      // {
      //    if($pembanding->nis == $row->nis)
      //       $terdaftar = true;
      // }
      // if(!$terdaftar)
      // {
      //    echo	"<td width='90'>".anchor('Admin/Nilai/verifikasi_siswa/'.$row->nis,'Verifikasi Pendaftaran')."</td>";
      // }
      // else {
      //    echo	"<td width='90'>Terdaftar</td>";
      // }

		foreach($nilai->result() as $terdaftar)
		{
		   if($terdaftar->nis == $row->nis)
			{
				echo "<tr>
						<td>$no</td>
						<td>$row->nama</td>
						<td>$row->nis</td>";
		      echo	"<td width='90'>".anchor('Admin/Nilai/get_one/'.$row->nis,'Lihat Nilai')."</td>";
			}
		}


		$no++;
	}

	?>
	</table>

	<a href="<?php echo base_url();?>Admin/Admin" class="btn btn-default" role="button">Kembali</a>
