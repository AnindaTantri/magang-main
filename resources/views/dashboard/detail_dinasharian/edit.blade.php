@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Edit Data Penugasan Dalam Kota</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary"> <span data-feather="printer"></span> Cetak
                    Form</button>
            </div>
        </div>
    </div>
    
    <h2>Edit Data</h1>
        <form action="/dashboard/dinas_harian/{{$data->id}}" method="post">
            @csrf
            @method('PUT')
            
           
            <div class="mb-3">
                <label for="name" class="form-label">Nama Acara</label>
                <input type="name" value="{{$data->nama}}" name="nama" class="form-control" placeholder="Masukkan Judul Acara" id="name">
            </div>
            <div class="mb-3">
                            <label for="text" class="form-label">Tanggal</label>
                            <input type="text" name="tanggal" class="form-control" placeholder="Masukkan Tanggal Acara" id="tanggal">
                    </div>
            <div class="mb-3">
                
                    <label for="text" class="form-label">Masukkan Jumlah Dinas</label>
                    <input type="text" value="{{$data->jml_dinas}}" name="jml_dinas" class="form-control" placeholder="Jumlah Dinas"
                        aria-label="Masukkan Jumlah Dinas">
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Masukkan Jumlah Yang Dinas</label>
                    <input type="text" value="{{$data->jml_yangdinas}}" name="jml_yangdinas" class="form-control" placeholder="Jumlah Yang Dinas"
                        aria-label="Masukkan Jumlah Yang Dinas">
                </div>
            
            <div class="mb-3">
               
                    <label for="text" class="form-label">Nilai Dinas</label>
                    <input type="text" value="{{$data->nilai}}" name="nilai" class="form-control" placeholder="Nilai Dinas"
                        aria-label="Nilai Dinas">
                </div>
                
            
            
            <button class="btn btn-outline-primary" type="submit" role="button">Simpan</button>
            <a class="btn btn-outline-danger" href="/dashboard/dalam_kota" role="button">Batal</a>
            </div>
            
        </form>
        </div>

        </body>

    @endsection
