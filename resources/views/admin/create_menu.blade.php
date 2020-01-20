@extends('layouts.admin')

@section('sidebar')
    @include("partials/admin.admin_sidebar")
@endsection

@section('header')
    @include("partials/admin.admin_header")
@endsection

@section('body')

<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url(../assets/img/illustrations/corner-4.png);"></div>
    <!--/.bg-holder-->
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="mb-0">Add a Menu</h3>
                <p class="mt-2">Add Your Menu items here</p><a class="btn btn-link pl-0 btn-sm"
                    href="/" target="_blank"> Back to home<span
                        class="fas fa-chevron-right ml-1 fs--2"></span></a>
            </div>
        </div>
    </div>
    @include('partials.alert')
</div>
<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">Create Menu</h5>
    </div>
    <div class="card-body bg-light">
        <div class="row">
            <div class="col-12">
                <form method='POST' >
                    @csrf
                    <div class="form-group">
                        <label for="name">Menu Name</label>
                        <input class="form-control" id="name" type="text" placeholder="Menu Name" name='menu_name'>
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Menu Description(optional)</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='menu_description'></textarea>
                    </div>

                
                    <button class="btn btn-primary mb-3" type="submit">Save</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
    @include("partials/admin.admin_footer")
@endsection