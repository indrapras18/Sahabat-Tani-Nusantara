@extends('layouts.app')

@section('sidebar')
    <x-sidebar />
@endsection

@section('header')
    <x-header />
@endsection

@section('content')
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Total Page Views</h6>
                    <h4 class="mb-3">4,42,236 <span class="badge bg-light-primary border border-primary"><i
                                class="ti ti-trending-up"></i> 59.3%</span></h4>
                    <p class="mb-0 text-muted text-sm">You made an extra <span class="text-primary">35,000</span> this year
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
                    <h4 class="mb-3">78,250 <span class="badge bg-light-success border border-success"><i
                                class="ti ti-trending-up"></i> 70.5%</span></h4>
                    <p class="mb-0 text-muted text-sm">You made an extra <span class="text-success">8,900</span>
                        this year</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Total Order</h6>
                    <h4 class="mb-3">18,800 <span class="badge bg-light-warning border border-warning"><i
                                class="ti ti-trending-down"></i> 27.4%</span></h4>
                    <p class="mb-0 text-muted text-sm">You made an extra <span class="text-warning">1,943</span>
                        this year</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Total Sales</h6>
                    <h4 class="mb-3">$35,078 <span class="badge bg-light-danger border border-danger"><i
                                class="ti ti-trending-down"></i> 27.4%</span></h4>
                    <p class="mb-0 text-muted text-sm">You made an extra <span class="text-danger">$20,395</span> this year
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-xl-8">
            <h5 class="mb-3">Sales Report</h5>
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
                    <h3 class="mb-0">$7,650</h3>
                    <div id="sales-report-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-4">
            <h5 class="mb-3">Transaction History</h5>
            <div class="card">
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-s rounded-circle text-success bg-light-success">
                                    <i class="ti ti-gift f-18"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Order #002434</h6>
                                <p class="mb-0 text-muted">Today, 2:00 AM</P>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <h6 class="mb-1">+ $1,430</h6>
                                <p class="mb-0 text-muted">78%</P>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-s rounded-circle text-primary bg-light-primary">
                                    <i class="ti ti-message-circle f-18"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Order #984947</h6>
                                <p class="mb-0 text-muted">5 August, 1:45 PM</P>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <h6 class="mb-1">- $302</h6>
                                <p class="mb-0 text-muted">8%</P>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-s rounded-circle text-danger bg-light-danger">
                                    <i class="ti ti-settings f-18"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Order #988784</h6>
                                <p class="mb-0 text-muted">7 hours ago</P>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <h6 class="mb-1">- $682</h6>
                                <p class="mb-0 text-muted">16%</P>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
