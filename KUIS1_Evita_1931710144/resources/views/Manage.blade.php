@extends('layouts.Master')
@section('title', 'Manage')

@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header text-center">
            <h3> Daftar Artikel </h3>
        </div>
        
        </br>
        </br>  
        <div class="card body">    
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Negara</th>
                    <th>Benua</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($article as $a)
                    <tr>
                        <td>{{$a->id}}</td>
                        <td>{{$a->title}}</td>
                        <td>{{$a->continent}}</td>
                        <td>{{$a->created_at}}</td>
                        <td>
                            <a href="article/edit/{{ $a->id }}" class="btn btn-primary btn-radiuszan" style="background-color:#87CEEB">Edit</a> &nbsp &nbsp
                            <a href="article/delete/{{ $a->id }}" class="btn btn-primary btn-radiuszan" style="background-color:#FF7F50">Hapus</a>
                        <td>
                    </tr>
                    @endforeach
                 </tbody>
            </table>
        </div>
        <br>
        <a href="manage/add" class="btn btn-primary">Tambah Data</a>
        <br>
    </div>
</div>    
@endsection