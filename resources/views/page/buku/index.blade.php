@extends('layout.app')

@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List book</h1>
        <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah buku</a>
    </div>
    <hr/>
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        
                
            
            <tr>
                <td class="align-middle">1</td>
                <td class="align-middle">Buku Laravel</td>
                <td class="align-middle">Mahyan</td>
                <td class="align-middle">2007</td>
                <td class="align-middle">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-secondary">Detail</button>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                      </div>
                </td>
            </tr>
        </tbody>
    </table>
    
@endsection