@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Data Penugasan Luar Kota</h1>



    </div>
    <h2>Tambah Data</h1>
        <form action="/dashboard/luar_kota" method="post">
            @csrf
            <div class="form-floating">
                <select name="kategori_acara" onchange="ganti_kategori()" class="form-select" id="floatingSelect"
                    aria-label="Floating label select example">
                    <option selected> </option>
                    <option value="Tim Pendahulu">Tim Pendahulu</option>
                    <option value="Tim Utama">Tim Utama</option>
                </select>
                <label for="floatingSelect">Pilih Kategori Acara</label>
            </div>
            <div class="satu">
            <div class="row">
                    <div class="col">
                            <label for="name" class="form-label">Nama Acara</label>
                            <input type="name" name="nama" class="form-control" placeholder="Masukkan Judul Acara" id="name">
                    </div>
                    <div class="col">    
                        <label for="tanggal" class="form-label">Tanggal Acara</label>
                        <input id="date" type="date" value="tanggal" name="tanggal" class="form-control" placeholder="Masukkan Tanggal Acara">
                        <span id="dateSelected"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="text" class="form-label">Masukkan Jumlah Dinas</label>
                        <input type="text" name="jml_dinas" class="form-control" placeholder="Jumlah Dinas"
                            aria-label="Masukkan Jumlah Dinas">
                    </div>
                    <div class="col">
                        <label for="text" class="form-label">Masukkan Jumlah Yang Dinas</label>
                        <input type="text" name="jml_yangdinas" class="form-control" placeholder="Jumlah Yang Dinas"
                            aria-label="Masukkan Jumlah Yang Dinas">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="text" class="form-label">Nilai Dinas</label>
                        <input type="text" name="nilai" class="form-control" placeholder="Nilai Dinas"
                            aria-label="Nilai Dinas">
                    </div>
                    <div class="col">
                        <label for="text" class="form-label">Administrasi Setelah Dinas</label>
                        <input type="text" name="admin" class="form-control" placeholder="Administrasi Setelah Dinas"
                            aria-label="Administrasi Setelah Dinas">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="text" class="form-label">Titik Acara</label>
                        <input type="text" name="titik_acara" class="form-control" placeholder="Titik Acara"
                            aria-label="Titik Acara">
                    </div>
                    <div class="col">
                        <label for="text" class="form-label">Tingkat Kesulitan Acara</label>
                        <input type="text" name="kesulitan" class="form-control" placeholder="Titik Kesulitan Acara"
                            aria-label="Titik Kesulitan Acara">
                    </div>
                </div>
                <div class="col">
                    <button class="btn btn-outline-primary" type="submit" role="button">Simpan</button>
                    <a class="btn btn-outline-danger" href="/dashboard/luar_negeri" role="button">Batal</a>
                </div>
            </div>
        </form>
        <form action="/dashboard/luar_kota" method="post">
            @csrf
            <div class="form-floating" style="display:none">
                <select name="kategori_acara" onchange="ganti_kategori()" class="form-select" id="floatingSelect"
                    aria-label="Floating label select example">
                    <!-- <option selected> </option> -->
                    <option selected value="Tim Utama">Tim Utama</option>
                </select>
                <label for="floatingSelect">Pilih Kategori Acara</label>
            </div>
            <div class="dua" style="display:none">
            <div class="row">
                <div class="col">
                    <label for="text" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Yang Akan Dinas" id="name">
                </div>
                <div class="col">    
                        <label for="tanggal" class="form-label">Tanggal Acara</label>
                        <input id="date" type="date" value="tanggal" name="tanggal" class="form-control" placeholder="Masukkan Tanggal Acara">
                        <span id="dateSelected"></span>
                    </div>
</div>
                <div class="row">
                    <div class="col">
                        <label for="text" class="form-label">Masukkan Jumlah Dinas</label>
                        <input type="text" name="jml_dinas" class="form-control" placeholder="Jumlah Dinas"
                            aria-label="Masukkan Jumlah Dinas">
                    </div>
                    <div class="col">
                        <label for="text" class="form-label">Masukkan Jumlah Yang Dinas</label>
                        <input type="text" name="jml_yangdinas" class="form-control" placeholder="Jumlah Yang Dinas"
                            aria-label="Masukkan Jumlah Yang Dinas">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="text" class="form-label">Nilai Dinas</label>
                        <input type="text" name="nilai" class="form-control" placeholder="Nilai Dinas"
                            aria-label="Nilai Dinas">
                    </div>
                    <div class="col">
                        <label for="text" class="form-label">Administrasi Setelah Dinas</label>
                        <input type="text" name="admin" class="form-control" placeholder="Administrasi Setelah Dinas"
                            aria-label="Administrasi Setelah Dinas">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="text" class="form-label">Titik Acara</label>
                        <input type="text" name="titik_acara" class="form-control" placeholder="Titik Acara"
                            aria-label="Titik Acara">
                    </div>
                    <div class="col">
                        <label for="text" class="form-label">Tingkat Kesulitan Acara</label>
                        <input type="text" name="kesulitan" class="form-control" placeholder="Titik Kesulitan Acara"
                            aria-label="Titik Kesulitan Acara">
                    </div>
                </div>
                <div class="row">
                <div class="col">
                        <label for="text" class="form-label">Personil Wanita</label>
                        <input type="text" name="personil_wanita" class="form-control" placeholder="Personil Wanita"
                            aria-label="Titik Acara">
                    </div>
                <div class="col">
                        <label for="text" class="form-label">Outsourching</label>
                        <input type="text" name="outsourching" class="form-control" placeholder="Outsourching"
                            aria-label="Outsourching">
                    </div>
                </div>
                <div class="col">
                    <button class="btn btn-outline-primary" type="submit" role="button">Simpan</button>
                    <a class="btn btn-outline-danger" href="/dashboard/luar_negeri" role="button">Batal</a>
                </div>
            </div>
        </form>
        </div>

        </body>
<script type="text/javascript">
    function ganti_kategori(){
        let kue = $('#floatingSelect').val();
        if (kue=='Tim Pendahulu') {
            $('.satu').show();
            $('.dua').hide();
        } else {
            $('.satu').hide();
            $('.dua').show();
        }
    }
    let date = document.getElementById('date')
            date.addEventListener('change', (e) => {
                let dateVal = e.target.valuedocument.getElementById('dateSelected').innerText = dateVal
            })
</script>

    @endsection
