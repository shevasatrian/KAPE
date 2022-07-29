@extends('dashboard.layouts.main')

@section('container')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Your Report Daily </h1>
        {{--<h1> {{ auth()->user()->name }}</h1>--}}

    </div>
    <h2>Section title</h2>
    <a href="dashboard/report/create " class="btn btn-success"><span data-feather="plus-square"></span>Tambah Data PO</a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
        <thead>
            {{-- noPO,tglPO,segmen,namaPkj,statusPkj,ppn --}}
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nomor PO</th>
            <th scope="col">Tanggal PO</th>
            <th scope="col">Segmen</th>
            <th scope="col">Nama Pekerjaan</th>
            <th scope="col">Status Pekerjaan</th>
            <th scope="col">Nilai Sebelum PPN </th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($report as $po)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
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
