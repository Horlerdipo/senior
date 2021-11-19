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
                                <h3 class="nk-block-title page-title">Senior Citizen Profiling Information</h3>
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



                    <div class="nk-block">
                        <div class="row g-gs">

                            <div class="col-lg-12">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner p-0 border-top">
                                        <div class="nk-tb-list nk-tb-orders">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col nk-tb-orders-type"><span>S/N</span></div>
                                                <div class="nk-tb-col"><span>Name</span></div>
                                                <div class="nk-tb-col"><span>Email</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Phone Number</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Gender</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Age</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Occupation</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Alcohol In Take</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Allergy</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Do you have family history of diabetes</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Do you have family history of hypertension</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Previous Surgical History</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Past Medical History</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Last Blood Sugar Value</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Last Blood Pressure Value Checked:</span></div>

                                                <div class="nk-tb-col tb-col-xl"><span>Created At</span></div>
                                            </div><!-- .nk-tb-item -->
                                            @foreach($seniorProfile as $count=>$seniorProfiles)
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <span class="tb-lead">{{$count+1}}</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-lead">{{App\Models\User::find($seniorProfiles->user_id)->name ?? ""}}</span>
                                                    </div>

                                                    <div class="nk-tb-col">
                                                        <span class="tb-lead">{{App\Models\User::find($seniorProfiles->user_id)->email ?? ""}}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-sub">{{$seniorProfiles->phone ?? ''}}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-sub">{{$seniorProfiles->gender ?? ''}}</span>
                                                    </div>

                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-sub">{{$seniorProfiles->age ?? ''}}</span>
                                                    </div>

                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-sub">{{$seniorProfiles->occupation ?? ''}}</span>
                                                    </div>

                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-sub">{{$seniorProfiles->alcohol_in_take ?? ''}}</span>
                                                    </div>

                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-sub">{{$seniorProfiles->allergy ?? ''}}</span>
                                                    </div>

                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-sub">{{$seniorProfiles->do_you_have_family_history_of_diabetes ?? ''}}</span>
                                                    </div>

                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-sub">{{$seniorProfiles->do_you_have_family_history_of_hypertension ?? ''}}</span>
                                                    </div>

                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-sub">{{$seniorProfiles->previous_surgical_history ?? ''}}</span>
                                                    </div>

                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-sub">{{$seniorProfiles->past_medical_history ?? ''}}</span>
                                                    </div>

                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-sub">{{$seniorProfiles->last_blood_sugar_value ?? ''}}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-sub">{{$seniorProfiles->last_blood_pressure_value_checked ?? ''}}</span>
                                                    </div>

                                                    <div class="nk-tb-col tb-col-xl">
                                                        <span class="tb-sub">{{db_to_human_time($seniorProfiles->created_at)}}</span>
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




@endsection
