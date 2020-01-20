@extends('layouts.admin')

@section('sidebar')
@include("partials/admin.admin_sidebar")
@endsection

@section('header')
@include("partials/admin.admin_header")
@endsection

@section('body')
<div class="card mb-3">
    <div class="card-body">
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-auto mb-2 mb-sm-0">
                <h6 class="mb-0">Showing 1-24 of 205 Archieves</h6>
            </div>
            <div class="col-sm-auto">
                <form class="d-inline-block mr-3">
                    <div class="input-group input-group-sm d-flex align-items-center"><small class="mr-1">Sort by:
                        </small><select class="custom-select" aria-label="Bulk actions">
                            <option selected="">Best Match</option>
                            <option value="Refund">Newest</option>
                            <option value="Delete">Price</option>
                        </select></div>
                </form><a class="text-600" href="product-grid.html" data-toggle="tooltip" data-placement="top"
                    title="Product Grid"><span class="fas fa-th"></span></a>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-body p-0 overflow-hidden">
        <div class="row no-gutters">
            <div class="col-12 p-3">
                <div class="p-1">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="position-relative h-sm-100"><a class="d-block h-100"
                                    href="product-details.html"><img
                                        class="img-fluid fit-cover w-sm-100 h-sm-100 rounded absolute-sm-centered"
                                        src="../assets/img/products/2.jpg" alt="" /></a>

                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h5 class="mt-3 mt-sm-0"><a class="text-dark fs-0 fs-lg-1"
                                            href="product-details.html">Cry of Omailnze</a></h5>
                                    <p class="fs--1 mb-2 mb-md-3"><a class="text-500" href="#!">Archieve Description</a>
                                    </p>
                                    <p>Over the years, Apple has built a reputation for releasing its. Rather, Apple’s
                                        latest pro laptop experienced a subdued launch, in spite of it off. And, as with
                                        previous generations the 15-inch MacBook Pro arrives alongside a 13-inch model.
                                    </p>
                                   
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between flex-column">
                                    <div>
                                        <h5 class="fs--1 text-500 mb-0 mt-1">Menu: <strong>Ogbonna</strong></h5>
                                        <div class="d-none d-lg-block">
                                            <p class="fs--1 mb-1">Uploaded by: <strong>50</strong></p>
                                            <p class="fs--1 mb-1">Visibilty: <strong class="text-success">Yes</strong>
                                            </p>
                                            
                                        </div>
                                    </div>
                                    <div>
                                       
                                        <a class="btn btn-sm btn-success d-lg-block mt-2 " href="#!">
                                            <span class="fas fa-eye"></span><span
                                                class="ml-2 d-none d-md-inline-block">View</span>
                                        </a>
                                        <a class="btn btn-sm btn-primary d-lg-block mt-2" href="#!">
                                            <span class="fas fa-edit"> </span><span
                                                class="ml-2 d-none d-md-inline-block">Edit</span>
                                        </a>
                                        <a class="btn btn-sm btn-secondary d-lg-block mt-2" href="#!">
                                            <span class="fas fa-edit"> </span><span
                                                class="ml-2 d-none d-md-inline-block">Hide</span>
                                        </a>
                                        <a class="btn btn-sm btn-outline-secondary border-300 d-lg-block mt-2 mt-md-3 mr-2 mr-lg-0"
                                            href="#!">
                                            <span class="fas fa-trash"></span><span
                                                class="ml-2 d-none d-md-inline-block">Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="card-footer border-top d-flex justify-content-center">
        <div><button class="btn btn-falcon-default btn-sm mr-1 mr-sm-2" type="button" disabled data-toggle="tooltip"
                data-placement="top" title="Prev"><span class="fas fa-chevron-left"></span></button><a
                class="btn btn-sm btn-falcon-default text-primary mr-2" href="#!">1</a><a
                class="btn btn-sm btn-falcon-default mr-2" href="#!">2</a><a class="btn btn-sm btn-falcon-default mr-2"
                href="#!"><span class="fas fa-ellipsis-h"></span></a><a class="btn btn-sm btn-falcon-default mr-2"
                href="#!">35</a><button class="btn btn-falcon-default btn-sm" type="button" data-toggle="tooltip"
                data-placement="top" title="Next"><span class="fas fa-chevron-right"></span></button></div>
    </div>
</div>
@endsection 

@section('footer')
    @include("partials/admin.admin_footer")
@endsection