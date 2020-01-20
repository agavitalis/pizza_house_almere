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
                <h3 class="mb-0">Add Pizza</h3>
                <p class="mt-2">Add Pizzas to your Menu items here</p><a class="btn btn-link pl-0 btn-sm"
                    href="/" target="_blank"> Back to home<span
                        class="fas fa-chevron-right ml-1 fs--2"></span></a>
            </div>
        </div>
    </div>
    @include('partials.alert')
</div>
<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">Add a Pizza</h5>
    </div>
    <div class="card-body bg-light">
        <div class="row">
            <div class="col-12">
                <form method='POST' >
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Pizza Name</label>
                                <input class="form-control" type="text" placeholder="Pizza Name" name='pizza_name'>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Pizza FLavor</label>
                                <input class="form-control" type="text" placeholder="Pizza Flavour" name='pizza_flavour'>
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="name">Price</label>
                        <input class="form-control" type="text" placeholder="Pizza Price" name='pizza_price'>
                    </div>
                    <div class="form-group">
                        <label for="name">Add this pizza to Menu(Select Menu)</label>
                        <select class="form-control" name='menu'>
                            <option>Select Menu</option>
                            @foreach($menus as $menu)
                                <option>{{$menu->name}}</option>
                            @endforeach
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Pizza Description(optional)</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='menu_description'></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Pizza Image</label>
                        <input class="form-control" type="file"  name='menu_name'>
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