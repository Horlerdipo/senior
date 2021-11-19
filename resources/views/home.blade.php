@extends('layouts.dashboard')

@section('content')
    @role('superadmin')
    @include("partials.superadmin_home")
    @endrole

    @role('hospital')
    @include("partials.hospital_home")
    @endrole

    @role('seniorcitizen')
    @include("partials.senior_home")
    @endrole

    @role('government')
    @include("partials.government_home")
    @endrole
@endsection
