<h3><?php echo $judul_form;?></h3>
<?php
echo form_open($buka_form);
?>
<input type="hidden" value="<?php echo $record[$element['ni']['name']];?>"
      name="<?php echo $element['ni']['name'];?>">


<table class="table table-borderless">

<?php

   foreach ($element as $form_element)
   {
      if($form_element['name'] == 'nis' || $form_element['name'] == 'nip')
      {
         echo "<tr><td width='130'>" . $form_element['placeholder'] . "</td>";

         echo "<td><div class='col-sm-5'><input type='text'
                                           name='" . $form_element['name'] . "'
                                           \nclass='form-control' .
                                           placeholder=" . $form_element['placeholder'] . "
                                           \nvalue=" . $record[$form_element['name']] . "
                                           \ndisabled>
                                           </div></tr>";
      }
      else if($form_element['name'] == 'mata_pelajaran')
      {
         echo "<tr><td width='130'>" . $form_element['placeholder'] . "</td>";

         echo "<td><div class='col-sm-5'>
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
         echo "<tr><td width='130'>" . $form_element['placeholder'] . "</td>";

         echo "<td><div class='col-sm-5'><input type='text'
                                           name='" . $form_element['name'] . "'
                                           \nclass='form-control'
                                           placeholder='" . $form_element['placeholder'] . "'
                                           \nvalue='" . $record[$form_element['name']] . "'>
                                           </div></tr>";
      }

   }


?>


       </td></tr>
       <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
        <?php
      //   echo anchor('Admin/Siswa','Kembali',array('class'=>'btn btn-primary btn-sm'))
            if($element['ni']['name'] == 'nip')
            {
               echo anchor('Admin/Guru','Kembali',array('class'=>'btn btn-primary btn-sm'));
            }
            else
            {
               echo anchor('Admin/Siswa','Kembali',array('class'=>'btn btn-primary btn-sm'));
            }
        ?>
        </td></tr>
</table>
</form>
