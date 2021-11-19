<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Senior Citizen Web Based Profiling System</h3>
                            <div class="nk-block-des text-soft">
                                <p>For Information and Communication Technology Department</p>
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
                                                   data-toggle="modal" data-target="#addAdmin"><em
                                                        class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span
                                                            class="d-none d-md-inline">Upload Hospital Information</span> </span><em
                                                        class="dd-indc icon ni ni-chevron-right"></em></a>

                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if (session('danger'))
                    <div class="alert alert-danger">
                        {{ session('danger') }}
                    </div>
                @endif

                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-xxl-6">
                            <div class="row g-gs">

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


<!-- Modal Form -->
<div class="modal fade" tabindex="-1" id="addAdmin">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hospitals Information</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="{{route('hospital.profile')}}" method="POST" enctype="multipart/form-data"
                      class="form-validate form is-alter" id="form">
                    <div class="form-group">
                        <label class="form-label" for="name">Opening Time</label>
                        <div class="form-control-wrap">
                            <input type="time" class="form-control" value="{{auth()->user()->hospital->opening_time}}"
                                   required name="opening_time" placeholder="Opening Time">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Closing Time</label>
                        <div class="form-control-wrap">
                            <input type="time" class="form-control form-validate"
                                   value="{{auth()->user()->hospital->closing_time}}" required name="closing_time"
                                   placeholder="Closing Time">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">Information About The Hospitals</label>
                        <div class="form-control-wrap">
                            <textarea class="form-control" name="information" id="" cols="30" rows="10">{{auth()->user()->hospital->information}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="default-06">Default File Upload</label>
                        <div class="form-control-wrap">
                            <div class="custom-file">
                                <input type="file" multiple class="custom-file-input" name="file" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>

                    @csrf
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary btn-submit">Upload</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Tabs -->

