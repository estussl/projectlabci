<div class="container">
<h2>Pengumuman Lengkap </h2>
<hr>

    <div class="col-md-12">

    <?php

    foreach ($record->result() as $row) :



        ?>
        <article>


            <h3><?php echo $row->judul ?></h3>

            <p class="text-danger"><strong><em><?php echo $row->created_at ?></em></strong></p>

         </article>
         <?php echo $row->isi ?>




    <?php endforeach ?>
    </div>
</div>
<a href="<?php echo base_url();?>Admin/Pengumuman" class="btn btn-default" role="button">Kembali</a>



    </div>
</div>

</div> <!-- /Container-->
