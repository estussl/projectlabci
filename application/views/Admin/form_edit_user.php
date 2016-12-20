<h3><?php echo $judul_form;?></h3>
<?php
echo form_open($buka_form);
?>
<input type="hidden" value="<?php echo $record['kunci'];?>"
      name="kunci">


<table class="table table-borderless">

<?php

   foreach ($element as $form_element)
   {
         echo "<tr><td width='130'>" . $form_element['placeholder'] . "</td>";

         echo "<td><div class='col-sm-5'><input type='text'
                                           name='" . $form_element['name'] . "'
                                           \nclass='form-control'
                                           placeholder='" . $form_element['placeholder'] . "'
                                           \nvalue='" . $record[$form_element['name']] . "'>
                                           </div></tr>";
   }


?>


       </td></tr>
       <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
        <?php
        echo anchor('Admin/User','Kembali',array('class'=>'btn btn-primary btn-sm'))
        ?>
        </td></tr>
</table>
</form>
