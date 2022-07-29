@extends('dashboard.layouts.main')

@section('container')
    <div class="row justify-content-center">

    <div class="col-lg-5">
        <div class="card" >
            <main class="form-karyawan w-100 m-auto ; ">
                <h1 class="h3 mb-3 fw-normal ">Add PO</h1>
                // {{-- noPO,tglPO,segmen,namaPkj,statusPkj,ppn --}}
                <form action="/dashboard/report/" method="POST" >
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" name="npPO" class="form-control  @error('noPO') is-invalid @enderror" id="noPO" value="{{ old('noPO') }} " required>
                                <label for="floatingInput">Nomor PO</label>
                                @error('noPO')
                                <div  class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="date" name="tglPO" class="form-control  @error('tglPO') is-invalid @enderror" id="tglPO" value="{{ old('tglPO') }}"required>
                                <label for="floatingInput">Tanggal PO</label>
                                @error('tglPO')
                                <div  class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="segmen">
                                <select class="form-select form-select-sm  @error('segmen') is-invalid @enderror" name="segmen" aria-label=".form-select-sm " required>
                                <option selected>Segmen</option>
                                    <option value="STTF">STTF</option>
                                    <option value="FTTH">FTTH</option>
                                    <option value="OSP">OSP</option>
                                    <option value="NODE B">NODE B</option>
                                </select>
                                @error('segmen')
                                <div  class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" name="namaPkj" class="form-control  @error('namaPkj') is-invalid @enderror" id="namaPkj" value="{{ old('namaPkj') }}" required>
                                <label for="floatingInput">Nama Pekerjaan</label>
                                @error('namaPkj')
                                <div  class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" name="statusPkj" class="form-control  @error('statusPkj') is-invalid @enderror" id="statusPkj" value="{{ old('statusPkj') }}" required>
                                <label for="floatingInput">Status Pekerjaan</label>
                                @error('statusPkj')
                                <div  class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-floating">
                                <input type="number" name="ppn" class="form-control  @error('ppn') is-invalid @enderror" id="ppn" placeholder="" value="{{ old('ppn') }}" required>
                                <label for="floatingInput">Nilai Sebelum PPN</label>
                                @error('ppn')
                                <div  class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col"><button class="w-100 btn btn-lg " type="submit">Login</button></div>

                    </div>
                </form>
            </main>
        </div>
    </div>
</div>

@endsection
