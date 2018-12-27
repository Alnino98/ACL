@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Anak IT -  Edit Kontak</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('kontak.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $datas->email }}">
                </div>
                <div class="form-group">
                <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" value="{{ $datas->password }}">
                </div>
                <div class="form-group">
                    <label for="namamasjid">Nama Masjid:</label>
                    <input type="text" class="form-control" id="namamasjid" name="namamasjid" value="{{ $datas->namamasjid }}">
                </div>
                <div class="form-group">
                    <label for="nostat">No Statistik:</label>
                    <input type="text" class="form-control" id="nostat" name="nostat" value="{{ $datas->nostat }}">
                </div>
                <div class="form-group">
                    <label for="alamatmasjid">Alamat Masjid:</label>
                    <textarea class="form-control" id="alamatmasjid" name="alamatmasjid">{{ $datas->alamatmasjid }}</textarea>
                </div>
                <div class="form-group">
                    <label for="namaamil">Nama Amil:</label>
                    <input type="text" class="form-control" id="namaamil" name="namaamil" value="{{ $datas->namaamil }}">
                </div>
                <div class="form-group">
                    <label for="nikamil">NIK Amil:</label>
                    <input type="text" class="form-control" id="nikamil" name="nikamil" value="{{ $datas->nikamil }}">
                </div>
                <div class="form-group">
                    <label for="nohp">No Hp:</label>
                    <input type="text" class="form-control" id="nohp" name="nohp" value="{{ $datas->nohp }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection