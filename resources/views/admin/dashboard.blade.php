@extends('layouts.admin')

@section('sidebar')
    @include("partials/admin.admin_sidebar")
@endsection

@section('header')
    @include("partials/admin.admin_header")
@endsection

@section('body')
<div class="card bg-light mb-3">
    <div class="card-body p-3">
        <p class="fs--1 mb-0"><a href="#!"><span class="fas fa-exchange-alt mr-2" data-fa-transform="rotate-90"></span>A
                payout for <strong>$921.42 </strong>was deposited 13 days ago</a>. Your next deposit is expected on
            <strong>Tuesday, March 13.</strong></p>
    </div>
</div>
<div class="card-deck">
    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
        <div class="bg-holder bg-card"
            style="background-image:url({{ asset('assets/img/illustrations/corner-1.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <h6>Stories<span class="badge badge-soft-warning rounded-capsule ml-2">-0.23%</span></h6>
            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning"
                data-countupp='{"count":58386,"format":"alphanumeric"}'>{{8484}}</div><a
                class="font-weight-semi-bold fs--1 text-nowrap" href="#!">Stories<span class="fas fa-angle-right ml-1"
                    data-fa-transform="down-1"></span></a>
        </div>
    </div>
    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
        <div class="bg-holder bg-card"
            style="background-image:url({{ asset('assets/img/illustrations/corner-2.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <h6>Gallery<span class="badge badge-soft-info rounded-capsule ml-2">0.0%</span></h6>
            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info"
                data-countupp='{"count":23434,"format":"alphanumeric"}'>{{883}}</div><a
                class="font-weight-semi-bold fs--1 text-nowrap" href="#!">Gallery<span
                    class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
        </div>
    </div>
    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
        <div class="bg-holder bg-card"
            style="background-image:url({{ asset('assets/img/illustrations/corner-3.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <h6>Users<span class="badge badge-soft-success rounded-capsule ml-2">9.54%</span></h6>
            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif"
                data-countup='{"count":43594,"format":"comma","prefix":"$"}'>{{37838}}</div><a
                class="font-weight-semi-bold fs--1 text-nowrap" href="#!">Users<span
                    class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
        </div>
    </div>
</div>

<div class="row no-gutters">
    <div class="col-lg-12 pr-lg-2 pl-lg-2 text-center">
        <div class="card p-2" style="background-image:url({{ asset('assets/img/illustrations/corner-1.png') }}">
            <div class="card-header bg-transparent">
                <div class="jumbotron">
                    <h1 class="display-4">Hello, Vitalsdj!</h1>
                    <p class="lead">Trust you are having a good day?</p>
                    
                </div>
            </div>

        </div>
    </div>

</div>
@endsection


@section('footer')
    @include("partials/admin.admin_footer")
@endsection