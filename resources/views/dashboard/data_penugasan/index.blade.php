@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Penugasan</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            
            
          </div>
         
        </div>
        
      </div>
      <div class="row row-cols-1 row-cols-md-2 g-2">
  <div class="col">
    <div class="card">
      
      <div class="card-body">
        <h5 class="card-title">Dalam Kota</h5>
        <p class="card-text">Anda bisa menambahkan data penugasan dalam kota dengan kategori acara resmi dan tidak resmi.</p>
        <a href="/dashboard/dalam_kota" class="btn btn-primary">Klik Disini</a>
      </div>
      
    </div>
    
  </div>
  <div class="col">
    <div class="card">
      
      <div class="card-body">
        <h5 class="card-title">Luar Kota</h5>
        <p class="card-text">Anda bisa menambahkan data penugasan luar kota dengan kategori tim pendahulu dan tim utama.</p>
        <a href="/dashboard/luar_kota" class="btn btn-primary">Klik Disini</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      
      <div class="card-body">
        <h5 class="card-title">Luar Negeri</h5>
        <p class="card-text">Anda bisa menambahkan data penugasan luar negeri dengan kategori tim pendahulu dan tim utama.</p>
        <a href="/dashboard/luar_negeri" class="btn btn-primary">Klik Disini</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
     
      <div class="card-body">
        <h5 class="card-title">Dinas Harian</h5>
        <p class="card-text">Anda bisa menambahkan data penugasan dinas harian.</p>
        <a href="/dashboard/dinas_harian" class="btn btn-primary">Klik Disini</a>
      </div>
    </div>
  </div>
</div>
      @endsection