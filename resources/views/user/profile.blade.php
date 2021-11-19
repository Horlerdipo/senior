


@extends("layouts.dashboard")
@section("content")


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

    <!-- content @s -->
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-aside-wrap">
                                <div class="card-inner card-inner-lg">
                                    <div class="nk-block-head nk-block-head-lg">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">Personal Information</h4>
                                                <div class="nk-block-des">
                                                    <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                                                </div>
                                            </div>
                                            <div class="nk-block-head-content align-self-start d-lg-none">
                                                <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                        <div class="nk-data data-list">
                                            <div class="data-head">
                                                <h6 class="overline-title">Basics</h6>
                                            </div>
                                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                <div class="data-col">
                                                    <span class="data-label">Full Name</span>
                                                    <span class="data-value">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                                                </div>
                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                            </div><!-- data-item -->
                                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                <div class="data-col">
                                                    <span class="data-label">Display Name</span>
                                                    <span class="data-value">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                                                </div>
                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                            </div><!-- data-item -->
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <span class="data-label">Email</span>
                                                    <span class="data-value">{{\Illuminate\Support\Facades\Auth::user()->email}}</span>
                                                </div>
                                                <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                            </div><!-- data-item -->
                                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                <div class="data-col">
                                                    <span class="data-label">Phone Number</span>
                                                    <span class="data-value text-soft">Not add yet</span>
                                                </div>
                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                            </div><!-- data-item -->
                                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                <div class="data-col">
                                                    <span class="data-label">Date of Birth</span>
                                                    <span class="data-value">29 Feb, 1986</span>
                                                </div>
                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                            </div><!-- data-item -->
                                            <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                                <div class="data-col">
                                                    <span class="data-label">Address</span>
                                                    <span class="data-value">2337 Kildeer Drive,<br>Kentucky, Canada</span>
                                                </div>
                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                            </div><!-- data-item -->
                                        </div><!-- data-list -->
                                        <div class="nk-data data-list">
                                            <div class="data-head">
                                                <h6 class="overline-title">Preferences</h6>
                                            </div>
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <span class="data-label">Language</span>
                                                    <span class="data-value">English (United State)</span>
                                                </div>
                                                <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change Language</a></div>
                                            </div><!-- data-item -->
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <span class="data-label">Date Format</span>
                                                    <span class="data-value">M d, YYYY</span>
                                                </div>
                                                <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
                                            </div><!-- data-item -->
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <span class="data-label">Timezone</span>
                                                    <span class="data-value">Bangladesh (GMT +6)</span>
                                                </div>
                                                <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
                                            </div><!-- data-item -->
                                        </div><!-- data-list -->
                                    </div><!-- .nk-block -->
                                </div>
                                <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                    <div class="card-inner-group" data-simplebar>
                                        <div class="card-inner">
                                            <div class="user-card">
                                                <div class="user-avatar bg-primary">
                                                    <span>AB</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                                                    <span class="sub-text">{{\Illuminate\Support\Facades\Auth::user()->email}}</span>
                                                </div>
                                                <div class="user-action">
                                                    <div class="dropdown">
                                                        <a class="btn btn-icon btn-trigger mr-n2" data-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .user-card -->
                                        </div><!-- .card-inner -->
                                        <div class="card-inner">
                                            <div class="user-account-info py-0">
                                                <h6 class="overline-title-alt">Wallet Account</h6>
                                                <div class="user-balance">NGN 0.00 <small class="currency currency-btc">Naira</small></div>
{{--                                                <div class="user-balance-sub">Locked <span>0.344939 <span class="currency currency-btc">BTC</span></span></div>--}}
                                            </div>
                                        </div><!-- .card-inner -->
                                        <div class="card-inner p-0">
                                            <ul class="link-list-menu">
                                                <li><a class="active" href="html/user-profile-regular.html"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a></li>
                                                <li><a  data-toggle="modal" data-target="#addElderly"><em class="icon ni ni-bell-fill"></em><span>Dx of the Elderly </span></a></li>
                                                <li><a data-toggle="modal" data-target="#addBankDetails" ><em class="icon ni ni-activity-round-fill"></em><span>Bank Account Verification</span></a></li>
                                                <li><a href="html/user-profile-setting.html"><em class="icon ni ni-lock-alt-fill"></em><span>Security Settings</span></a></li>
                                                <li><a  data-toggle="modal" data-target="#addChangePassword"><em class="icon ni ni-shield-star-fill"></em><span>Password Change</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-grid-add-fill-c"></em><span>Connected with Social</span></a></li>
                                            </ul>
                                        </div><!-- .card-inner -->
                                    </div><!-- .card-inner-group -->
                                </div><!-- card-aside -->
                            </div><!-- .card-aside-wrap -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->

    </div>
    <!-- wrap @e -->
    </div>
    <!-- app-root @e -->
    <!-- @@ Profile Edit Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Update Profile</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#address">Address</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input type="text" class="form-control form-control-lg" id="full-name" value="Abu Bin Ishtiyak" placeholder="Enter Full name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Display Name</label>
                                        <input type="text" class="form-control form-control-lg" id="display-name" value="Ishtiyak" placeholder="Enter display name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Phone Number</label>
                                        <input type="text" class="form-control form-control-lg" id="phone-no" value="+880" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">Date of Birth</label>
                                        <input type="text" class="form-control form-control-lg date-picker" id="birth-day" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="latest-sale">
                                        <label class="custom-control-label" for="latest-sale">Use full name to display </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-lg btn-primary">Update Profile</a>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="address">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Address Line 1</label>
                                        <input type="text" class="form-control form-control-lg" id="address-l1" value="2337 Kildeer Drive">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l2">Address Line 2</label>
                                        <input type="text" class="form-control form-control-lg" id="address-l2" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-st">State</label>
                                        <input type="text" class="form-control form-control-lg" id="address-st" value="Kentucky">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-county">Country</label>
                                        <select class="form-select" id="address-county" data-ui="lg">
                                            <option>Canada</option>
                                            <option>United State</option>
                                            <option>United Kindom</option>
                                            <option>Australia</option>
                                            <option>India</option>
                                            <option>Bangladesh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-lg btn-primary">Update Address</a>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->





    <!-- Modal Form -->
    <div class="modal fade" tabindex="-1" id="addChangePassword">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Password</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{route('change_password')}}" method="POST" class="form-validate form is-alter" id="form">
                        <div class="form-group">
                            <label class="form-label" for="name">Old Password: </label>
                            <div class="form-control-wrap">
                                <input type="password" class="form-control"  id="password" name="current_password"
                                       autocomplete="current-password" required placeholder="Name">
                            </div>


                        </div>
                        <div class="form-group">
                            <label class="form-label" for="name">New Password: </label>
                            <div class="form-control-wrap">
                                <input id="new_password" type="password" name="new_password"
                                       autocomplete="current-password" required  class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="name">Confirm Password: </label>
                            <input id="new_confirm_password" type="password" class="form-control"
                                   name="new_confirm_password" autocomplete="current-password">

                        </div>

                        @csrf
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary btn-submit">Change Password</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tabs -->



    <!-- Modal Form -->
    <div class="modal fade" tabindex="-1" id="addBankDetails">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bank Verification For Senior Citizen Withdrawal Information</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{route('update_account_details')}}" method="POST" class="form-validate form is-alter" id="form">

                        @csrf

                        <div class="form-group">
                            <label class="form-label" for="name">Account Number:</label>
                            <div class="form-control-wrap">
                                <input type="number" class="form-control  @error('account_number') is-invalid @enderror "
                                       required placeholder="Account Number" name="account_number"
                                       value=""
                                       >
                            </div>


                        </div>
                        <div class="form-group">
                            <label class="form-label" for="name">Account's First Name: </label>
                            <div class="form-control-wrap">
                                <input  type="text" name="first_name"
                                         value="{{user()->profile->account_info['first_name'] ?? ''}}" class="form-control @error('first_name') is-invalid @enderror" placeholder="Your account First Name">

                                @error('first_name')
                                <span class="text-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="name">Account's Last Name: </label>
                            <div class="form-control-wrap">
                                <input  type="text" name="last_name"
                                         value="{{user()->profile->account_info['last_name'] ?? ''}}" class="form-control @error('last_name') is-invalid @enderror" placeholder="Your Account Last Name">

                                @error('last_name')
                                <span class="text-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="name">Bank Name: </label>
                            <select class="form-control form-control-lg" name="bank_code">
                                @foreach($banks as $bank)
                                    @if($bank["active"])
                                        <option value="{{$bank['code']}}" {{(user()->profile->account_info['bank_code'] ?? "")==$bank["code"] ? "selected" : ''}}>{{$bank['name']}}</option>
                                    @endif
                                @endforeach
                            </select>

                        </div>

                        @csrf
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary btn-submit">Update Withdrawal Details</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tabs -->






    <!-- Modal Form -->
    <div class="modal fade" tabindex="-1" id="addElderly">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dx of Elderly Once Profile Update</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>

                <div class="modal-body">
                    <p><span style="color:red;">Diabetes and hypertension are the most conditions in elderly citizens</span></p>
                    <form action="{{route('create_profile')}}" method="POST" class="form-validate form is-alter" id="form">

                        <div class="form-group">
                            <label class="form-label" for="name">Senior Citizen Phone Number:</label>
                            <div class="form-control-wrap">
                                <input id="occupation" type="number" name="phone" required  class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="name">Gender:</label>


                            <div class="form-control-wrap">
                                <select class="form-select" name="gender">
                                    <option value="male">Male</option>
                                    <option value="famale">Female</option>

                                </select>

                            </div>


                        </div>



                        <div class="form-group">
                            <label class="form-label" for="name">Age:</label>


                                <div class="form-control-wrap">
                                    <select class="form-select" name="age">
                                        <option value="65 Years to 75 Years">65 Years to 75 Years</option>
                                        <option value="76 Years to 86 Years">76 Years to 86 Years</option>
                                        <option value="86 Years and Above">86 Years and Above</option>
                                    </select>

                            </div>


                        </div>
                        <div class="form-group">
                            <label class="form-label" for="name">Occupation:</label>
                            <div class="form-control-wrap">
                                <input id="occupation" type="text" name="occupation" required  class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="name">Alcohol In Take:</label>


                            <div class="form-control-wrap">
                                <select class="form-select" name="alcohol_in_take">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>

                                </select>

                            </div>


                        </div>

                        <div class="form-group">
                            <label class="form-label" for="name">Allergy:</label>
                            <div class="form-control-wrap">
                                <input id="occupation" type="text" name="allergy" required  class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="name">Do you have family history of diabetes? </label>
                            <div class="form-control-wrap">
                                <select class="form-select" name="do_you_have_family_history_of_diabetes">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="name">Do you have family history of hypertension: </label>
                            <div class="form-control-wrap">
                                <select class="form-select" name="do_you_have_family_history_of_hypertension">
                                    <option name="Yes">Yes</option>
                                    <option name="no">No</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="form-label" for="name">Previous Surgical History:  </label>
                            <div class="form-control-wrap">
                                <select class="form-select" name="previous_surgical_history">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>


                        </div>

                        <div class="form-group">
                            <label class="form-label" for="name">Past Medical History: </label>
                            <input id="new_confirm_password" type="text" class="form-control"
                                   name="past_medical_history" >
                            <span style="color:red;">Any other disease in the past</span>

                        </div>
                        <div class="form-group">
                            <label class="form-label" for="name">Last Blood Sugar Value: </label>
                            <input id="new_confirm_password" type="text" class="form-control"
                                   name="last_blood_sugar_value" autocomplete="current-password">

                        </div>
                        <div class="form-group">
                            <label class="form-label" for="name">Last Blood Pressure Value Checked:</label>
                            <input id="new_confirm_password" type="text" class="form-control"
                                   name="last_blood_pressure_value_checked" autocomplete="current-password">

                        </div>


                        @csrf
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary btn-submit">Update Information</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tabs -->



@endsection


