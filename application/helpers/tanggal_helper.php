<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



    function Tanggal($tgl)

    {

        $ubah = gmdate($tgl, time()+60*60*8);

        $pecah = explode("-",$ubah);

        $tanggal = $pecah[2];

        $bulan = bulan($pecah[1]);

        $tahun = $pecah[0];

     return $tanggal.' '.$bulan.' '.$tahun;

    }

