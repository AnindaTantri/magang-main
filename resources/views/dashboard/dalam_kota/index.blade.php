@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Data Penugasan Dalam Kota</h1>

      </div>


      <a class="nav-link {{ Request::is('data_penugasan') ? 'active' : ''}}" aria-current="page" 
            href="/dashboard/detail_dalamkota">
      <button type="submit" class="btn btn-sm btn-outline-secondary" > <span data-feather="plus"></span> </button>

      <table class="table table-hover text-nowrap" id="datatable">
                            <thead>
                            <tr>
                                <th> No. </th>
                                <th> Nama </th>
                                <th> Kategori Acara</th>
                                <th> Aksi </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                               
                                @foreach ($tampil as $tampilkan)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $tampilkan->nama }}</td>
                                    <td>{{ $tampilkan->kategori_acara}}</td>
                                    
                                    <td>
                                    <a href="/dashboard/dalam_kota/{{$tampilkan->id}}/edit" class="btn btn-outline-warning" ><span data-feather="edit"></span></a>
                                    <form action="/dashboard/dalam_kota/{{$tampilkan->id}}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus ?');"><span data-feather="trash"></span></button>
                                    </form>
                                </td>
                                <td style="width:5px;">
                                <?php
                                    $id=0;
                                ?>
                                <a href = "/download-pdf/{{$id++}}" class="btn btn-sm btn-outline-secondary"><span data-feather="printer"></span>Download PDF</a>
                                </td>
   
            @endforeach
</table>

@endsection