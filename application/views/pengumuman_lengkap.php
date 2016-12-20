<section class="bg-light-gray">
<div class="container">
<h2>Pengumuman Lengkap </h2>
<hr>

    <div class="col-md-12">

    <?php

    foreach ($record->result() as $row) :



        ?>
        <article>


            <h6><?php echo $row->judul ?></h6>

            <p class="text-danger"><strong><em><?php echo $row->created_at ?></em></strong></p>

         </article>
         <?php echo $row->isi ?>




    <?php endforeach ?>
  
 </div>
    <?php 

    if(isset($username))
                  {
                     if($jenis_user == 1)
                     {
                        echo "<a href='". base_url() . "Siswa' class='btn btn-default' role='button'>Kembali</a>";
                     }
                     else if($jenis_user == 2)
                     {
                        echo "<a href='". base_url() . "Guru' class='btn btn-default' role='button'>Kembali</a>";
                     }
                  }
    ?> 


 
</div>
    </div>
</div>

</div> <!-- /Container-->
</section>  