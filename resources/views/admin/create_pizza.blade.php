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
                <p class="mt-2">Add Pizzas to your Menu items here</p><a class="btn btn-link pl-0 btn-sm" href="/"
                    target="_blank"> Back to home<span class="fas fa-chevron-right ml-1 fs--2"></span></a>
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
                <form method='POST' enctype="multipart/form-data">
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
                                <label for="name">Pizza Flavour</label>
                                <input class="form-control" type="text" placeholder="Pizza Flavour"
                                    name='pizza_flavour'>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Price</label>
                        <input class="form-control" type="number" placeholder="Pizza Price" name='pizza_price'>
                    </div>
                    <div class="form-group">
                        <label for="name">Add this pizza to Menu(Select Menu)</label>
                        <select class="form-control" name='menu'>
                            <option>Select Menu</option>
                            @foreach($menus as $menu)
                            <option value="{{$menu->id}}">{{$menu->menu_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Pizza Description(optional)</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            name='pizza_description'></textarea>
                    </div>
                    <div class="row imgs">
                        <div class="col-10">
                            <div class="form-group">
                                <label for="name">Sample Pizza Pictures</label>
                                <input type="file" required="" name="pizza_pictures[]" class="form-control">

                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="name">&nbsp</label>
                                <button id="add-imgs" class="btn btn-success btn-block"><span
                                        class="fa fa-plus-circle"></span> Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="hide  clone-imgs ">
                        <div class="row other-imgs">
                            <div class="col-10">
                                <div class="form-group">

                                    <input type="file" name="pizza_pictures[]" class="form-control">

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <button class="btn btn-danger btn-block delete-imgs"><i class="fa fa-trash"></i>
                                        Delete</button>
                                </div>
                            </div>
                        </div>
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

@section('scripts')
<script type="text/javascript">

    $(document).ready(function() {

        $("#add-imgs").click(function(e) {
            e.preventDefault();
            var html = $(".clone-imgs").html();
            $(".imgs").after(html);
        });

        $("body").on("click", ".delete-imgs", function(e) {
            e.preventDefault();
            $(this).parents(".other-imgs").remove();
        });

    });

</script>

@endsection