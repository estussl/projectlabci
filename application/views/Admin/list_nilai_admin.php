<h3 align="center"><u>Daftar Nilai Siswa</u></h3>
<br>
<table class="table table-hover table-inverse" width:100%>

	<tr bgcolor="#f5f5f0">
	<th align="center">No</th>
	<th>Mata Pelajaran</th>
	<th>Nilai</th>

	</tr>


	<?php
	$no=1;
	foreach ($nama_mapel as $col)
	{
      if($col == 'nis')
         continue;
      else
      {
      	echo "<tr>
      			<td>$no</td>";

			foreach($mata_pelajaran->result() as $nama_mata_pelajaran)
			{
				if($col == $nama_mata_pelajaran->nm_kolom)
				{
					echo	"<td>" . $nama_mata_pelajaran->nama_mapel . "</td>";
				}
			}

			echo "<td>" . $record->row_array()[$col] . "</td>";

      	$no++;
      }
	}

	?>
	</table>

	<a href="<?php echo base_url();?>Admin/Nilai/edit/<?php echo $nis_edit;?>" class="btn btn-default" role="button">Edit</a>
	<a href="<?php echo base_url();?>Admin/Nilai/" class="btn btn-default" role="button">Kembali</a>
