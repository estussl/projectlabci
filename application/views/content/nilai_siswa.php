<section class="bg-light-gray">
<div class="container">
   <div class="row baris">
      <center>
         <h1>Nilai</h1>
      </center>
      <?php
         $query = $record->row();
         echo "<h3>Nama : $query->nama</h3>";
         echo "<h3>NIS : $query->nis</h3>";
       ?>
       <br><br>
      <table border = "1" class="table table-hover table-inverse" style="width:100%"  >
      	<!-- <tr><th>No</th><th>Nama</th><th>NIS</th><th>Java_beg</th><th>php_beg</th></tr> -->
         <tr>
            <th style="width:5%">No</th>
            <th>Mata Kuliah</th>
            <th>Nilai</th>
          </tr>

          <?php
            $no = 1;
            $nilai = $record->row();

             foreach($judul_kolom as $kolom)
             {
                if($kolom == 'nis')
                   continue;
                else
                {
                   foreach($mata_pelajaran->result() as $nama_mata_pelajaran)
                   {
                      if($kolom == $nama_mata_pelajaran->nm_kolom)
                      {
                        if($nilai->$kolom)
                        {
                           echo "<tr>";
                           echo "<td>" . $no . "</td>";
                           echo "<td>" . $nama_mata_pelajaran->nama_mapel . "</td>";
                           echo "<td>" . $nilai->$kolom . "</td>";
                        }
                      }
                   }
                }
                $no++;
             }

           ?>

         <!-- <?php
      	$no=1;
      	foreach ($record->result() as $kolom)
      	{
      		echo "<tr>
      				<td>$no</td>
      				<td>$kolom->nis</td>
      				<td>$kolom->nama</td>
      				<td>$kolom->java_beg</td>
      				<td>$kolom->php_beg</td>
      			  </tr>";
      		$no++;
      	}
      	?> -->
      	</table>

   </div>
</div></section>