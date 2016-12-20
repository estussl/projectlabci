<?php

   function generateNIS($angkatan, $urutanTerakhirSiswa)
   {
      $urutan = (string) ($urutanTerakhirSiswa + 1);// Urutan Siswa di database


      while(strlen($urutan) < 3)
      {
         $urutan = substr_replace($urutan, "0", 0, 0);
      }

      $nis = substr($angkatan, 2, 2) . $urutan;

      return $nis;
   }
 ?>
