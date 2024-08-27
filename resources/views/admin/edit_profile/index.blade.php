@extends('admin.layout.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Profile</li>
                        </ol>
                    </div>
                    <div class="col-sm-12">
                        <div class="card text-dark bg-primary mt-3">

                            <div class="card-body">
                                <h1 class="card-title fw-bold">Edit Profile Admin</h1>

                            </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">


                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.edit_profile.update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control"
                                    value="{{ old('username', $user->username) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="nama_depan">Nama Depan</label>
                                <input type="text" name="nama_depan" id="nama_depan" class="form-control"
                                    value="{{ old('nama_depan', $user->nama_depan) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="nama_belakang">Nama Belakang</label>
                                <input type="text" name="nama_belakang" id="nama_belakang" class="form-control"
                                    value="{{ old('nama_belakang', $user->nama_belakang) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="nomor">Nomor</label>
                                <input type="text" name="nomor" id="nomor" class="form-control"
                                    value="{{ old('nomor', $user->nomor) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ old('email', $user->email) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                                <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password.</small>
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="foto">Foto Profil</label>
                                <input type="file" name="foto" id="foto" class="form-control">
                                @if ($user->foto)
                                    <img src="{{ asset('uploads/' . $user->foto) }}" alt="Foto Profil"
                                        class="img-thumbnail mt-2" width="100">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        <br>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
