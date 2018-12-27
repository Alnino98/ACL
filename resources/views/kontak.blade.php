@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Anak IT -  Table Kontak</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Masjid</th>
                    <th>No Statistik</th>
                    <th>Alamat Masjid</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Nama Amil</th>
                    <th>NIK Amil</th>
                    <th>No Hp</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->namamasjid }}</td>
                        <td>{{ $datas->nostat }}</td>
                        <td>{{ $datas->alamatmasjid }}</td>
                        <td>{{ $datas->email }}</td>
                        <td>{{ $datas->password }}</td>
                        <td>{{ $datas->namaamil }}</td>
                        <td>{{ $datas->nikamil }}</td>
                        <td>{{ $datas->nohp }}</td>
                        
                        <td>
                            <form action="{{ route('kontak.destroy', $datas->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('kontak.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection