<h3><?php echo $judul_form;?></h3>
<?php
echo form_open($buka_form);
?>
<table class="table table-borderless">
    <!-- <tr><td width="130">NIP</td>
        <td><div class="col-sm-4""><input type="text" name="nip_guru" class="form-control" placeholder="Nomor Induk Pegawai"></div>

        <tr><td width="130">Nama</td>
        <td><div class="col-sm-4""><input type="text" name="nama_guru" class="form-control" placeholder="Nama"></div>

        <tr><td width="130">Pendidikan Terakhir</td>
        <td><div class="col-sm-4""><input type="text" name="pend_guru" class="form-control" placeholder="Pendidikan Terakhir "></div>

        <tr><td width="130">Mata Pelajaran</td>
        <td><div class="col-sm-4""><input type="text" name="pel_guru" class="form-control" placeholder="Mata Pelajaran Guru "></div>

        <tr><td width="130">Jabatan Guru</td>
        <td><div class="col-sm-4""><input type="text" name="jab_guru" class="form-control" placeholder="Jabatan Guru "></div>

       </td></tr> -->


<?php
   foreach($element as $form_element)
   {
      if($form_element['name'] == 'mata_pelajaran')
      {
         echo "<tr><td width='130'>" . $form_element['placeholder'] . "</td>";

         echo "<td><div class='col-sm-4'>
               <select class='form-control'   name='" . $form_element['name'] . "' onchange='this.form.submit()'</td>
               <option value='' selected disabled>Pilih Mata Pelajaran</option>";

         foreach($mata_pelajaran->result() as $select_element)
         {
            echo "<option value='$select_element->id'>" . $select_element->nama_mapel . "</option>";
         }
         echo "</div></tr>";
         
      }
      else
      {
         echo "<tr><td width='130'>" . $form_element['placeholder'] . " </td>";
         echo "<td><div class='col-sm-4'>
             <input type='text'
                      name='" . $form_element['name'] . "'
                      class='form-control'
                      placeholder='" . $form_element['placeholder'] . "'>
             </div></tr>";
      }
   }
?>
   </td></tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
        <?php if($element['ni']['name'] == 'nip')
        {
           echo anchor('Admin/Guru','Kembali',array('class'=>'btn btn-primary btn-sm'));
        }
        else
        {
           echo anchor('Admin/Siswa','Kembali',array('class'=>'btn btn-primary btn-sm'));
        }?>
        </td></tr>
</table>
</form>
