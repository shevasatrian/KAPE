@extends('dashboard.layouts.main')

@section('container')
    <div class="btntambahstaff">
        <a href="/dashboard/staff/tambahStaff" class="btn btn-success"><span data-feather="plus-square" style="margin-top: -3px"></span> Tambah Staff</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
        <thead>
            {{-- name, dateBirth, religion,gender,address,phone,email,startWorking,nik,division --}}
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Agama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomor Handphone</th>
                <th scope="col">Email</th>
                <th scope="col">Mulai Bekerja </th>
                <th scope="col">NIK</th>
                <th scope="col">Divisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($staff as $s)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $s->name}}</td>
                <td>{{ $s->dateBirth}}</td>
                <td>{{ $s->religion}}</td>
                <td>{{ $s->gender}}</td>
                <td>{{ $s->address}}</td>
                <td>+62 {{ $s->phone}}</td>
                <td>{{ $s->email}}</td>
                <td>{{ $s->startWorking}}</td>
                <td>{{ $s->nik}}</td>
                <td>{{ $s->division}}</td>
                <td>
                    <a href="/dashboard/report/edit" class="badge bg-info"><span data-feather="edit"></span></a>
                    <a href="" class="badge bg-danger"><span data-feather="trash-2"></span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection
