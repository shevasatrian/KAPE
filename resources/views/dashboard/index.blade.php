@extends('dashboard.layouts.main')

@section('container')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, </h1>
        {{--<h1> {{ auth()->user()->name }}</h1>--}}

    </div>

    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

    {{-- <h2>Section title</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nomor PO</th>
            <th scope="col">Tanggal PO</th>
            <th scope="col">Segmen</th>
            <th scope="col">Nama Pekerjaan</th>
            <th scope="col">Status Pekerjaan</th>
            <th scope="col">Nilai Sebelum PPN </th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
        </tbody>
        </table>
    </div> --}}
@endsection
