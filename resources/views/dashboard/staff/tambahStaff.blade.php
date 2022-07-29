@extends('dashboard.layouts.main')

@section('container')
<div class="row justify-content-center">

    <div class="col-lg-5">
        <div class="card" >
            <main class="form-karyawan w-100 m-auto ; ">
                <h1 class="h3 mb-3 fw-normal ">Add Employee</h1>
                <form action="/dashboard/staff/tambahStaff" method="POST" >
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="name" value="{{ old('name') }} " required>
                                <label for="floatingInput">Name</label>
                                @error('name')
                                <div  class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="date" name="dateBirth" class="form-control  @error('dateBirth') is-invalid @enderror" id="dateBirth" value="{{ old('dateBirth') }}"required>
                                <label for="floatingInput">Date Of Birth</label>
                                @error('dateBirth')
                                <div  class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="religion">
                                <select class="form-select form-select-sm  @error('religion') is-invalid @enderror" name="religion" aria-label=".form-select-sm religion" required>
                                <option selected>Choose Religion</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Khatolik">Khatolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                                @error('religion')
                                <div  class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="col gender  @error('gender') is-invalid @enderror">
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female" >
                                <label class="form-check-label" for="exampleRadios1">Female</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                <label class="form-check-label" for="exampleRadios2">Male</label>
                            </div>
                            @error('gender')
                                <div  class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" name="address" class="form-control  @error('address') is-invalid @enderror" id="address" value="{{ old('address') }}" required>
                                <label for="floatingInput">Address</label>
                                @error('address')
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
                                <input type="tel" name="phone" class="form-control  @error('phone') is-invalid @enderror" id="phone" placeholder="" value="{{ old('phone') }}" required>
                                <label for="floatingInput">Phone Number</label>
                                @error('phone')
                                <div  class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}"required>
                                <label for="floatingInput">Email</label>
                                @error('email')
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
                                <input type="date" name="startWorking" class="form-control  @error('startWorking') is-invalid @enderror" id="startWorking" value="{{ old('startWorking') }}" required>
                                <label for="floatingInput">Start Working</label>
                                @error('startWorking')
                                <div  class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="number" name="nik" class="form-control  @error('nik') is-invalid @enderror" id="nik" placeholder="" value="{{ old('nik') }}" required>
                                <label for="floatingInput">NIK</label>
                                @error('nik')
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
                                <input type="text" name="division" class="form-control  @error('division') is-invalid @enderror" id="division" value="{{ old('division') }}" required>
                                <label for="floatingInput">Division</label>
                                @error('division')
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
                                <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" value="{{ old('email') }}" required>
                                <label for="floatingInput">Password</label>
                                @error('password')
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
