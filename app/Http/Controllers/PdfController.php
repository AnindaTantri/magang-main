<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\DetailDalamKota;

class PdfController extends Controller
{
    public function downloadPDF($id){
        $tampil = DetailDalamKota::get()->toArray();
        $data = [
           "kategori_acara"=> $tampil[$id]["kategori_acara"],
           "nama"=> $tampil[$id]["nama"],
           "tanggal"=>$tampil[$id]["tanggal"],
           "jml_dinas"=>$tampil[$id]["jml_dinas"],
           "jml_yangdinas"=>$tampil[$id]["jml_yangdinas"],
           "nilai"=>$tampil[$id]["nilai"],
           "admin"=>$tampil[$id]["admin"],
           "titik_acara"=>$tampil[$id]["titik_acara"],
           "kesulitan"=>$tampil[$id]["kesulitan"],
        ];
        $pdf = PDF::loadView('/dashboard/dalam_kota/pdf_dalamkota',$data);
        return $pdf->download('teknowize.pdf');
    }
}