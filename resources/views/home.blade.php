@extends('admin.layouts.app')

@section('content')

        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Analytics</h3>
            </div>
            <div class="col-12 col-sm-4 d-flex align-items-center">
                <div class="btn-group btn-group-sm btn-group-toggle d-inline-flex mb-4 mb-sm-0 mx-auto" role="group" aria-label="Page actions">

                </div>
            </div>
            <div class="col-12 col-sm-4 d-flex align-items-center">
                <div id="analytics-overview-date-range" class="input-daterange input-group input-group-sm ml-auto">
                    <input type="text" class="input-sm form-control" name="start" placeholder="Start Date" id="analytics-overview-date-range-1">
                    <input type="text" class="input-sm form-control" name="end" placeholder="End Date" id="analytics-overview-date-range-2">
                    <span class="input-group-append">
                    <span class="input-group-text">
                      <i class="material-icons">&#xE916;</i>
                    </span>
                    </span>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Small Stats Blocks -->
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="stats-small card card-small">
                    <div class="card-body px-0 pb-0">
                        <div class="d-flex px-3">
                            <div class="stats-small__data">
                                <span class="stats-small__label mb-1 text-uppercase">Orders</span>
                                <h6 class="stats-small__value count m-0">{{ $total_order }}</h6>
                            </div>
                        </div>
                        <canvas height="60" class="analytics-overview-stats-small-1"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="stats-small card card-small">
                    <div class="card-body px-0 pb-0">
                        <div class="d-flex px-3">
                            <div class="stats-small__data">
                                <span class="stats-small__label mb-1 text-uppercase">Subscribers</span>
                                <h6 class="stats-small__value count m-0">{{ $total_subscriber }} </h6>
                            </div>
                        </div>
                        <canvas height="60" class="analytics-overview-stats-small-2"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="stats-small card card-small">
                    <div class="card-body px-0 pb-0">
                        <div class="d-flex px-3">
                            <div class="stats-small__data">
                                <span class="stats-small__label mb-1 text-uppercase">Contact Message</span>
                                <h6 class="stats-small__value count m-0">{{ $total_contact_msg }} </h6>
                            </div>
                        </div>
                        <canvas height="60" class="analytics-overview-stats-small-3"></canvas>
                    </div>
                </div>
            </div>
            <!-- <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="stats-small card card-small">
                    <div class="card-body px-0 pb-0">
                        <div class="d-flex px-3">
                            <div class="stats-small__data">
                                <span class="stats-small__label mb-1 text-uppercase">Pages / Session</span>
                                <h6 class="stats-small__value count m-0">6.43</h6>
                            </div>
                            <div class="stats-small__data text-right align-items-center">
                                <span class="stats-small__percentage stats-small__percentage--decrease">2,71%</span>
                            </div>
                        </div>
                        <canvas height="60" class="analytics-overview-stats-small-4"></canvas>
                    </div>
                </div>
            </div> -->
        </div>

    </div>
    <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
        <span class="copyright ml-auto my-auto mr-2">Copyright © 2020 IT Solution</span>
    </footer>
</main>
@endsection
