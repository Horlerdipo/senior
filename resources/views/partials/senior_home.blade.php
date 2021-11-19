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
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="modal" data-target="#addAdmin"data-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">WithDrawal</a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Last 30 Days</span></a></li>
                                                        <li><a href="#"><span>Last 6 Months</span></a></li>
                                                        <li><a href="#"><span>Last 1 Years</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nk-block-tools-opt"><a href="{{route('show.seniorcitizen')}}" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Update Profile</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">

                        </div><!-- .col -->

                        <div class="col-xxl-8">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title"><span class="mr-2">Available Hospitals</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner p-0 border-top">
                                    <div class="nk-tb-list nk-tb-orders">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>S/N</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Hospital Name</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>Hospital Email Address</span></div>
                                            <div class="nk-tb-col"><span class="d-none d-sm-inline">Profile</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span>Created At</span></div>

                                        </div>
                                        @foreach($hospital as $count=>$hospitals)
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <span class="tb-lead"><a href="#">{{$count+1}}</a></span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <div class="user-card">
                                                        <div class="user-avatar user-avatar-sm bg-purple">
                                                            <span>Hosp</span>
                                                        </div>
                                                        <div class="user-name">
                                                            <span class="tb-lead">{{$hospitals->name}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-sub">{{$hospitals->email}}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <a href="" ><span class="tb-sub">View Hospital Profile</span></a>
                                                </div>

                                                <div class="nk-tb-col">
                                                    <span class="tb-sub tb-amount"><span>{{db_to_human_time($hospitals->created_at)}}</span></span>
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
                <h5 class="modal-title">Widraw Your Stash to your bank account</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="form-validate form is-alter" id="form">
                    <div class="form-group">
                        <label class="form-label" for="name">Amount</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control"  required name="name" placeholder="Name">
                        </div>
                    </div>

                    @csrf
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary btn-submit">Withdraw From Your Wallet</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Tabs -->
