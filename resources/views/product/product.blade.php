@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
            
                <div class="panel-body">
                    <a href="{{route('addProduct')}}"><button class="btn btn-primary">Tambah</button></a>
                    <br><br>
                    <?php $no=1;
                    ?>
                    <table class="table table-striped">
                        <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Stok</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Aksi</th>
                        </tr>
                        @foreach($barang as $barangs)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$barangs->nama_barang}} </td>
                            <td>{{$barangs->jenis_barang}}</td>
                            <td>{{$barangs->stok}} </td>
                            <td>{{$barangs->harga_beli}}</td>
                            <td>{{$barangs->harga_jual}}</td>
                            <td><a href="edit-product/{{$barangs->id}}" class="btn btn-warning">Edit</a> | <a href="delete-product/{{$barangs->id}}" class="btn btn-danger">Hapus</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
