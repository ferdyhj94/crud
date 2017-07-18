@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('tambah-product') }}">
                        {{ csrf_field() }}            
                                
                        <div class="form-group{{ $errors->has('nama_barang') ? ' has-error' : '' }}">
                            <label for="nama_barang" class="col-md-4 control-label">Nama Barang</label>

                            <div class="col-md-6">
                                <input id="nama_barang" type="text" class="form-control" name="nama_barang" value="{{ old('nama_barang') }}" required autofocus>

                                @if ($errors->has('nama_barang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_barang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jenis_barang') ? ' has-error' : '' }}">
                            <label for="jenis_barang" class="col-md-4 control-label">Jenis Barang</label>

                            <div class="col-md-6">
                                <input id="jenis_barang" type="text" class="form-control" name="jenis_barang" required>

                                @if ($errors->has('jenis_barang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenis_barang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('stok') ? ' has-error' : '' }}">
                            <label for="stok" class="col-md-4 control-label">Stok</label>

                            <div class="col-md-6">
                                <input id="stok" type="text" class="form-control" name="stok" required>

                                @if ($errors->has('stok'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stok') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                   
                        <div class="form-group{{ $errors->has('harga_beli') ? ' has-error' : '' }}">
                            <label for="harga_beli" class="col-md-4 control-label">Harga Beli</label>

                            <div class="col-md-6">
                                <input id="harga_beli" type="text" class="form-control" name="harga_beli" required>

                                @if ($errors->has('jenis_barang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('harga_beli') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('harga_jual') ? ' has-error' : '' }}">
                            <label for="harga_jual" class="col-md-4 control-label">Harga Jual</label>

                            <div class="col-md-6">
                                <input id="harga_jual" type="text" class="form-control" name="harga_jual" required>

                                @if ($errors->has('harga_jual'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('harga_jual') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>           

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <!-- <a class="btn btn-link" href="{{ route('password.request') }}"> -->
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
