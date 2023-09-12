@extends('layouts.induk')

@push('js-custom')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('themes/sbadmin') }}/assets/demo/chart-area-demo.js"></script>
<script src="{{ asset('themes/sbadmin') }}/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('themes/sbadmin') }}/js/datatables-simple-demo.js"></script>
@endpush

@section('css-tambahan')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
@endsection

@section('main-content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ $pageTitle }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Primary Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Warning Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Success Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Danger Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Area Chart Example
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Bar Chart Example
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Peralatan</th>
                            <th>Submission ID</th>
                            <th>Nama Pembekal</th>
                            <th>Nama Jenama</th>
                            <th>Tarikh Pendaftaran</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Peralatan</th>
                            <th>Submission ID</th>
                            <th>Nama Pembekal</th>
                            <th>Nama Jenama</th>
                            <th>Tarikh Pendaftaran</th>
                            <th>Tindakan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($senaraiPeralatan as $peralatan)
                        <tr>
                            <td>{{ $peralatan['nama_peralatan'] }}</td>
                            <td>{{ $peralatan['submission_id'] }}</td>
                            <td>{{ $peralatan['nama_pembekal'] }}</td>
                            <td>{{ $peralatan['nama_jenama'] }}</td>
                            <td>{{ $peralatan['tarikh_pendaftaran'] }}</td>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection

