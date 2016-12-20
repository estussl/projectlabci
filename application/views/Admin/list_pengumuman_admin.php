<div class="container">
<h2>Pengumuman </h2>
<hr>

<?php
    echo anchor('Admin/Pengumuman/post/', 'Tambah', 'class="btn btn-primary" id="btn-tambah-pengumuman"');

        ?>
    <div class="col-md-12">

    <?php

    foreach ($record->result() as $row) :



        ?>
        <article>


            <h3><?php echo $row->judul ?></h3>

            <p class="text-danger"><strong><em><?php echo $row->created_at ?></em></strong></p>

         </article>


         <?php echo word_limiter($row->isi, 100) ?>



         <?php echo anchor(site_url('Admin/pengumuman/lengkap/'. $row->id), 'Baca Selengkapnya');?>
      <!--  <a href="<?php base_url();?>pengumuman/tampilkanPengumumanDetail">baca selengkapnya</a> -->
    <?php endforeach ?>
    </div>
     <div class="col-xs-12 col-md-6">

</div>




    </div>
</div>

</div> <!-- /Container-->
