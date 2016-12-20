

<section class="bg-light-gray">

<div class="container">
<h2>Pengumuman </h2>
<hr>

    <div class="col-md-12">

    <?php

    foreach ($record->result() as $row) :



        ?>
        <article>


            <h6><?php echo $row->judul ?></h6>

            <p class="text-danger"><strong><em><?php echo $row->created_at ?></em></strong></p>

         </article>


         <?php echo word_limiter($row->isi, 100) ?>



         <?php echo anchor(site_url('Guru/lengkap/'. $row->id), 'Baca Selengkapnya');?>
     <br><br><br><br>
    <?php endforeach ?>
    </div>
     <div class="col-xs-12 col-md-6">

</div>




    </div>
</div>

</div> <!-- /Container-->


</section>