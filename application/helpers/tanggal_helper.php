<?php

   function formatTanggalDB($tanggal)
   {
      $formatted = substr($tanggal, 6, 4) . "-" .
                     substr($tanggal, 3, 2) . "-" .
                     substr($tanggal, 0, 2);

      return $formatted;
   }

?>
