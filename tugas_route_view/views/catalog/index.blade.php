@extends('layouts.admin')
@section('header','Catalog')
    
    
@section('content')
 ini adalah halaman catalog
<div class="card-body col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">No</th>
                <th>Jenis Buku</th>
                <th>Kuantitas</th>
                <th style="width: 40px">Label</th>
            </tr>
        </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>Buku Anak</td>
            <td>
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                </div>
            </td>
            <td><span class="badge bg-danger">55%</span></td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Buku Dewasa</td>
            <td>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-warning" style="width: 70%"></div>
                </div>
            </td>
            <td><span class="badge bg-warning">70%</span></td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Buku Pemrograman</td>
            <td>
                <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-primary" style="width: 30%"></div>
                </div>
            </td>
            <td><span class="badge bg-primary">30%</span></td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Buku Kesehatan</td>
            <td>
                <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-success" style="width: 90%"></div>
                </div>
            </td>
            <td><span class="badge bg-success">90%</span></td>
        </tr>
    </tbody>
    </table>
</div>



@endsection