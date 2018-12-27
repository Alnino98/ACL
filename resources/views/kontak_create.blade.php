@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Anak IT -  Tambah Kontak</h1>
            <hr>
            <form action="{{ route('kontak.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="namamasjid">Nama Masjid:</label>
                    <input type="text" class="form-control" id="namamasjid" name="namamasjid">
                </div>
                <div class="form-group">
                    <label for="nostat">No Statistik:</label>
                    <input type="text" class="form-control" id="nostat" name="nostat">
                </div>
                <div class="form-group">
                    <label for="alamatmasjid">Alamat Masjid:</label>
                    <textarea class="form-control" id="alamatmasjid" name="alamatmasjid"></textarea>
                </div>
                <div class="form-group">
                    <label for="namaamil">Nama Amil:</label>
                    <input type="text" class="form-control" id="namaamil" name="namaamil">
                </div>
                <div class="form-group">
                    <label for="nikamil">NIK Amil:</label>
                    <input type="text" class="form-control" id="nikamil" name="nikamil">
                </div>
                <div class="form-group">
                    <label for="nohp">No Hp:</label>
                    <input type="text" class="form-control" id="nohp" name="nohp">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection