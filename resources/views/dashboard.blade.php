@extends('layouts.template')
@section('judulh1','Admin - Dashboard')

@section('konten')
@extends('layouts.template')

@section('judulh1', 'Admin - Dashboard')

@section('konten')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <i class="fas fa-chart-line fa-3x"></i>
                    <h4 class="mt-3">Penjualan</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <i class="fas fa-users fa-3x"></i>
                    <h4 class="mt-3">Customer</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <i class="fas fa-box-open fa-3x"></i>
                    <h4 class="mt-3">Produk</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <i class="fas fa-money-bill-wave fa-3x"></i>
                    <h4 class="mt-3">Keuangan</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-12">
    <div class="card">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
                <h3 class="card-title"></h3>
            </div>
        </div>
        <div class="card-body">
            <center><h3>Halaman Dashboard</h3></center>
        </div>
    </div>

</div>

@endsection
