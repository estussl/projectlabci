<h3 align="center"><u>Data User</u></h3>
<br>
<table class="table table-hover table-inverse" width:100%>

	<tr bgcolor="#f5f5f0">
	<th align="center">ID</th>
	<th>NIS</th>
	<th>NIP</th>
	<th>Username</th>
	<th>Password</th>
	<th>Jenis User</th>
	<th colspan="2">Operasi</th>

	</tr>


	<?php
	foreach ($record->result() as $row)
	{
		echo "<tr>
				<td>$row->kunci</td>
				<td>$row->nis</td>
				<td>$row->nip</td>
				<td>$row->username</td>
				<td>$row->password</td>";

				if($row->id_jenis_user == '0')
					echo '<td>Admin</td>';
				else if($row->id_jenis_user == '1')
					echo '<td>Siswa</td>';
            else
               echo '<td>Guru</td>';

		echo	"
				<td width='10'>".anchor('Admin/User/edit/'.$row->kunci,'Edit')."</td>
           		<td width='10'>".anchor('Admin/User/delete/'.$row->kunci,'Delete')."</td>
			  </tr>";
	}

	?>
	</table>

	<a href="User/post" class="btn btn-default" role="button">Tambah Data</a>
	<a href="<?php echo base_url();?>Admin/Admin" class="btn btn-default" role="button">Kembali</a>
