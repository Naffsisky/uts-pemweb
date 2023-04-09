<?php
    echo date("l, d-M-Y");
    echo (" >> Time from old >> ");

    // UNIX timestamp from 1 January 1970
    echo time();
    echo (" >> Prediksi waktu 100 hari lagi >> ");
    echo date("l, d-M-Y", time()+60*60*24*100);
    echo (" >> Hari lahir kita >> ");
    // mktime (0,0,0,0,0,0) (jam, menit, detik, bulan, tanggal, tahun)
    echo date ("l, d-M-Y", mktime (0, 0, 0, 7, 7, 2003));
    echo " >> strtotime >> ";
    var_dump( date("l", strtotime ("7 July 2003")));
?>