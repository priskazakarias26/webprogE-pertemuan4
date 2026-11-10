<?php
    // percabangan if pada PHP

    $nilai = 55;

    // beri keterangan lulus apabila nilai di atas 65 ke atas

    $ket = " lulus";
    if( $nilai < 65){
        $ket = " tidak lulus";
    }
    

    echo "keterangan: " . $ket;