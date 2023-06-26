@extends('layouts.base')

@section('content')
    <h1 class="h3 mb-4" style="text-align: center; font-weight: bold;">Beranda Admin Bagian Akademik (BAAK) Politeknik
        Negeri
        Cilacap</h1>

    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-color: white">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <button type="button" class="btn btn-primary btn-rounded btn-icon">
                        <i class="align-middle" data-feather="bar-chart"></i>
                    </button>
                </div>
                <div class="ms-3">
                    <p class="mb-2" style="font-weight: bold;">Jumlah Data Barang</p>
                    <h6 class="mb-0">$1234</h6>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-color: white">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <button type="button" class="btn btn-primary btn-rounded btn-icon">
                        <i class="align-middle" data-feather="check-square"></i>
                    </button>
                </div>
                <div class="ms-3">
                    <p class="mb-2" style="font-weight: bold;">Barang Tersedia</p>
                    <h6 class="mb-0">$1234</h6>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-color: white">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <button type="button" class="btn btn-primary btn-rounded btn-icon">
                        <i class="align-middle" data-feather="external-link"></i>
                    </button>
                </div>
                <div class="ms-3">
                    <p class="mb-2" style="font-weight: bold;">Barang Dipinjam</p>
                    <h6 class="mb-0">$1234</h6>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-color: white">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <button type="button" class="btn btn-primary btn-rounded btn-icon">
                        <i class="align-middle" data-feather="repeat"></i>
                    </button>
                </div>
                <div class="ms-3">
                    <p class="mb-2" style="font-weight: bold;">Jumlah Peminjam</p>
                    <h6 class="mb-0">$1234</h6>
                </div>
            </div>
        </div>

        {{-- Table dan Charts Bawaan Template --}}
        <div class="col-12 col-lg-8 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-header">

                    <h5 class="card-title mb-0">Latest Projects</h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="d-none d-xl-table-cell">Start Date</th>
                            <th class="d-none d-xl-table-cell">End Date</th>
                            <th>Status</th>
                            <th class="d-none d-md-table-cell">Assignee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Project Apollo</td>
                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                            <td class="d-none d-xl-table-cell">31/06/2021</td>
                            <td><span class="badge bg-success">Done</span></td>
                            <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                        </tr>
                        <tr>
                            <td>Project Fireball</td>
                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                            <td class="d-none d-xl-table-cell">31/06/2021</td>
                            <td><span class="badge bg-danger">Cancelled</span></td>
                            <td class="d-none d-md-table-cell">William Harris</td>
                        </tr>
                        <tr>
                            <td>Project Hades</td>
                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                            <td class="d-none d-xl-table-cell">31/06/2021</td>
                            <td><span class="badge bg-success">Done</span></td>
                            <td class="d-none d-md-table-cell">Sharon Lessman</td>
                        </tr>
                        <tr>
                            <td>Project Nitro</td>
                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                            <td class="d-none d-xl-table-cell">31/06/2021</td>
                            <td><span class="badge bg-warning">In progress</span></td>
                            <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                        </tr>
                        <tr>
                            <td>Project Phoenix</td>
                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                            <td class="d-none d-xl-table-cell">31/06/2021</td>
                            <td><span class="badge bg-success">Done</span></td>
                            <td class="d-none d-md-table-cell">William Harris</td>
                        </tr>
                        <tr>
                            <td>Project X</td>
                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                            <td class="d-none d-xl-table-cell">31/06/2021</td>
                            <td><span class="badge bg-success">Done</span></td>
                            <td class="d-none d-md-table-cell">Sharon Lessman</td>
                        </tr>
                        <tr>
                            <td>Project Romeo</td>
                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                            <td class="d-none d-xl-table-cell">31/06/2021</td>
                            <td><span class="badge bg-success">Done</span></td>
                            <td class="d-none d-md-table-cell">Christina Mason</td>
                        </tr>
                        <tr>
                            <td>Project Wombat</td>
                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                            <td class="d-none d-xl-table-cell">31/06/2021</td>
                            <td><span class="badge bg-warning">In progress</span></td>
                            <td class="d-none d-md-table-cell">William Harris</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-xxl-3 d-flex">
            <div class="card flex-fill w-100">
                <div class="card-header">

                    <h5 class="card-title mb-0">Monthly Sales</h5>
                </div>
                <div class="card-body d-flex w-100">
                    <div class="align-self-center chart chart-lg">
                        <canvas id="chartjs-dashboard-bar"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
