<h3 align="center"><u>Siswa</u></h3>
<br>
<table class="table table-hover table-inverse" width:100%>

	<tr bgcolor="#f5f5f0">
	<th align="center">No</th>
	<th>Nama</th>
	<th>NIS</th>
	<th>Alamat</th>
	<th>Tempat Lahir</th>
	<th>Tanggal Lahir</th>
	<th>Jenis Kelamin</th>
	<th>Email</th>
	<th>Tahun Masuk</th>
	<th colspan="2"><center>Operasi</center></th>
	<th>Status</th>

	</tr>


	<?php
	$no=1;
	foreach ($record->result() as $row)
	{
		echo "<tr>

				<td>$no</td>
				<td>$row->nama</td>
				<td>$row->nis</td>
				<td>$row->alamat</td>
				<td>$row->tmpt_lahir</td>
				<td>$row->tgl_lahir</td>";

				if($row->jenis_kelamin == 'L')
					echo '<td>Laki-Laki</td>';
				else
					echo '<td>Perempuan</td>';

		echo	"
				<td>$row->email</td>
				<td>$row->thn_masuk</td>
				<td width='10'>".anchor('Admin/Siswa/edit/'.$row->nis,'Edit')."</td>
           		<td width='10'>".anchor('Admin/Siswa/delete/'.$row->nis,'Delete')."</td>";

		$tervalidasi = false;
		foreach($user->result() as $terdaftar)
		{
			if($terdaftar->nis == $row->nis)
			{
				foreach($nilai_siswa->result() as $cek)
				{
					if($cek->nis == $row->nis)
						$tervalidasi = true;
				}
			}
		}

		if($tervalidasi == false)
			echo "<td width='10'>".anchor('Admin/Siswa/validasi/'.$row->nis,'Validasi')."</td></tr>";
		else
			echo "<td width='10'>".anchor('Admin/Siswa/unvalidate/'.$row->nis,'Hilangkan')."</td></tr>";
		$no++;
	}

	?>
	</table>

	<a href="Siswa/post" class="btn btn-default" role="button">Tambah Data</a>
	<a href="<?php echo base_url();?>Admin/Admin" class="btn btn-default" role="button">Kembali</a>
