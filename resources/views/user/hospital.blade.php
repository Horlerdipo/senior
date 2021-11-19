<!-- content @s -->
@extends("layouts.dashboard")
@section("content")
    <!-- content @s -->
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Hospital Account Creation Dashboard</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Welcome  {{\Illuminate\Support\Facades\Auth::user()->name }}</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                            <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                            <li class="nk-block-tools-opt">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="modal" data-target="#addAdmin"><em class="icon ni ni-plus"></em></a>

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

                            <div class="col-lg-12">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner p-0 border-top">
                                        <div class="nk-tb-list nk-tb-orders">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col nk-tb-orders-type"><span>S/N</span></div>
                                                <div class="nk-tb-col"><span>Name</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Email</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Opening Time</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Closing Time</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Hospital Info</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>File</span></div>
                                                <div class="nk-tb-col tb-col-xl"><span>Created At</span></div>
                                                <div class="nk-tb-col tb-col-xl"><span>Delete</span></div>

                                            </div><!-- .nk-tb-item -->
                                            @foreach($hospital as $count=>$hospitals)
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <span class="tb-lead">{{$count+1}}</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-lead">{{$hospitals->name}}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-sub">{{$hospitals->email}}</span>
                                                    </div>

                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-sub">{{$hospitals->hospital->opening_time ?? 'Not Uploaded'}}</span>
                                                    </div>

                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-sub">{{$hospitals->hospital->closing_time ?? 'Not Uploaded'}}</span>
                                                    </div>

                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-sub">{{$hospitals->hospital->information ?? 'Not Uploaded'}}</span>
                                                    </div>

                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-sub"><a href="{{\Illuminate\Support\Facades\Storage::url($hospitals->hospital->file) ?? '#'}}">View File</a></span>
                                                    </div>

                                                    <div class="nk-tb-col tb-col-xl">
                                                        <span class="tb-sub">{{db_to_human_time($hospitals->created_at)}}</span>
                                                    </div>

                                                    <div class="nk-tb-col tb-col-xl">
                                                        <a href="{{route("hospital.delete",$hospitals->id)}}"><span class="tb-sub">Delete</span></a>
                                                    </div>

                                                </div><!-- .nk-tb-item -->
                                            @endforeach

                                        </div>
                                    </div><!-- .card-inner -->
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
                    <h5 class="modal-title">Add Hospital</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{route('create.hospital')}}" method="POST" class="form-validate form is-alter" id="form">
                        <div class="form-group">
                            <label class="form-label" for="name">Hospital Name</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control"  required name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Hospital Email</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control form-validate"  required name="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="password">Hospital Password</label>
                            <div class="form-control-wrap">
                                <input type="password" class="form-control"  required name="password" placeholder="Password">
                            </div>
                        </div>
                        @csrf
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary btn-submit">Add Hospitals</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tabs -->




@endsection
