@extends('templates.login')

@section('page-name','Login')
    
@section('page-body')
<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center mt-5">
            <div class="card card-primary shadow-lg rounded col-5 mt-4">
                <div class="d-flex justify-content-center card-header">
                    <h4>Login | PT.Makro Borneo Plush</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('login') }}" class="needs-validation" novalidate="">
                        @csrf
                        <div class="form-group">
                            <label for="email">Id</label>
                            <input id="email" type="text" class="form-control" name="id_pegawai" tabindex="1" placeholder="Id" autofocus required>
                            <div class="invalid-feedback">
                                Silahkan masukkan id
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">Kata Sandi</label>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" tabindex="2" placeholder="Kata Sandi" required>
                            <div class="invalid-feedback">
                            Silahkan Masukkan kata sandi
                            </div>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                            Masuk
                        </button>
                        </div>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</div>
@endsection