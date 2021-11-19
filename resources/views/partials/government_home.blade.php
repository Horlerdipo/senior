@php
    $response = Http::get("https://api.paystack.co/bank");
    $banks = [];

    if ($response->ok()) {

        if ($response->json()["status"]) {
            collect($response->json()["data"])
            ->each(function ($item) use (&$banks) {
                $banks[(string)$item['code']] = collect($item)->only(["name", "code", "active"])->toArray();
            });
        }

    }
@endphp

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">A Web Based Profiling System For Senior Citizen</h3>
                            <div class="nk-block-des text-soft">
                                <p>Welcome {{Auth::user()->name}}
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em
                                        class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <div class="drodown">
                                                <a href="#"
                                                   class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                                   data-toggle="dropdown"><em
                                                        class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span
                                                            class="d-none d-md-inline">Last</span> 30 Days</span><em
                                                        class="dd-indc icon ni ni-chevron-right"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Last 30 Days</span></a></li>
                                                        <li><a href="#"><span>Last 6 Months</span></a></li>
                                                        <li><a href="#"><span>Last 1 Years</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-xxl-6">
                            <div class="row g-gs">
                                <div class="col-lg-6 col-xxl-12">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="card-title-group align-start mb-2">
                                                <div class="card-title">
                                                    <h6 class="title">Total Users</h6>
                                                    <p>Total User on Senior Citizen Web Based Profiling System</p>
                                                </div>
                                                <div class="card-tools">
                                                    <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip"
                                                        data-placement="left" title="Revenue from subscription"></em>
                                                </div>
                                            </div>
                                            <div
                                                class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                                <div class="nk-sale-data-group flex-md-nowrap g-4">
                                                    <div class="nk-sale-data">
                                                        <span class="amount">{{$userCount}}</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="card-title-group align-start mb-2">
                                                <div class="card-title">
                                                    <h6 class="title">Total System Adminitrators</h6>
                                                    <p>The Super Admin </p>
                                                </div>
                                                <div class="card-tools">
                                                    <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip"
                                                        data-placement="left" title="Revenue from subscription"></em>
                                                </div>
                                            </div>
                                            <div
                                                class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                                <div class="nk-sale-data-group flex-md-nowrap g-4">
                                                    <div class="nk-sale-data">
                                                        <span class="amount">{{$superadminCount}}</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->


                                <div class="col-lg-6 col-xxl-12">
                                    <div class="row g-gs">
                                        <div class="col-sm-6 col-lg-12 col-xxl-6">
                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-2">
                                                        <div class="card-title">
                                                            <h6 class="title">Total Senior Citizen</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill"
                                                                data-toggle="tooltip" data-placement="left"
                                                                title="Total active subscription"></em>
                                                        </div>
                                                    </div>
                                                    <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                        <div class="nk-sale-data">
                                                            <span class="amount">{{$seniorcitizenCount}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->

                                        <div class="col-sm-6 col-lg-12 col-xxl-6">
                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-2">
                                                        <div class="card-title">
                                                            <h6 class="title">Total Hospitals</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill"
                                                                data-toggle="tooltip" data-placement="left"
                                                                title="Daily Avg. subscription"></em>
                                                        </div>
                                                    </div>
                                                    <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                        <div class="nk-sale-data">
                                                            <span class="amount">{{$hospitalCount}}</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->


                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .col -->

                        <div class="col-xxl-8">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title"><span class="mr-2">All Senior Citizen</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner p-0 border-top">
                                    <div class="nk-tb-list nk-tb-orders">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>S/N</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Name</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>Email</span></div>
                                            <div class="nk-tb-col"><span class="d-none d-sm-inline">Role</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Bank Account Number</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Bank Name</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Bank Account Name</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span>Created At</span></div>

                                        </div>
                                        @foreach($seniorcitizen as $count=>$seniorcitizens)
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <span class="tb-lead"><a href="#">{{$count+1}}</a></span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <div class="user-card">
                                                        <div class="user-avatar user-avatar-sm bg-purple">
                                                            <span>User</span>
                                                        </div>
                                                        <div class="user-name">
                                                            <span class="tb-lead">{{$seniorcitizens->name}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-sub">{{$seniorcitizens->email}}</span>
                                                </div>
                                                <?php
                                                $role = $seniorcitizens->roles->pluck('name')->first();

                                                ?>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-sub text-primary">{{$role}}</span>
                                                </div>

                                                <div class="nk-tb-col tb-col-sm">
                                                    <span
                                                        class="tb-sub">{{$seniorcitizens->profile->account_number ?? 'Not Updated'}}</span>
                                                </div>

                                                <div class="nk-tb-col tb-col-sm">
                                                    <span
                                                        class="tb-sub">{{$banks[$seniorcitizens->profile->account_info['bank_code']]['name'] ?? 'Not Updated'}}</span>
                                                </div>

                                                <div class="nk-tb-col tb-col-sm">
                                                        <span
                                                            class="tb-sub">{{$seniorcitizens->profile->account_info['first_name'] ?? 'Not Updated'}} {{$seniorcitizens->profile->account_info['last_name'] ?? 'Not Updated'}}</span>
                                                </div>

                                                <div class="nk-tb-col">
                                                    <span
                                                        class="tb-sub tb-amount"><span>{{db_to_human_time($seniorcitizens->created_at)}}</span></span>
                                                </div>

                                            </div>

                                        @endforeach


                                    </div>


                                </div>
                            </div>

                        </div><!-- .card -->
                    </div><!-- .col -->

                </div><!-- .row -->
            </div><!-- .nk-block -->
        </div>
    </div>
</div>
</div>
<!-- content @e -->
