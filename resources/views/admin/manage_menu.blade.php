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
                <h3 class="mb-0">Manage Menu</h3>
                <p class="mt-2">Your Complete Menu Items</p><a class="btn btn-link pl-0 btn-sm"
                    href="/" target="_blank"> Back to home<span
                        class="fas fa-chevron-right ml-1 fs--2"></span></a>
            </div>
        </div>
    </div>
    @include('partials.alert')
</div>

<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">Menu </h5>
    </div>
    <div class="card-body bg-light">
        <div class="card-body p-0">
            <div class="falcon-data-table" style="overflow:auto">
                <table
                    class="table  mb-3  table-striped table-dashboard fs--1 data-table border-bottom border-200"
                    id="example">
                    <thead class="bg-200 text-900">
                        <tr>
                            <th class="align-middle sort">Menu Name</th>
                            <th class="align-middle sort" style="min-width: 10.5rem;">Description</th>
                            <th class="align-middle sort pr-7">Date Created</th>
                            <th class="no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody id="orders">
                      @foreach($menus as $menu)
                        <tr class="btn-reveal-trigger">

                            <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html">
                                    <strong>{{$menu->name}}</strong>
                            </td>

                            <td class="py-2 align-middle">
                              {{$menu->description}}
                            </td>
                            <td class="py-2 align-middle"> {{$menu->created_at}}</td>

                            <td class="py-2 align-middle white-space-nowrap">
                                <div class="dropdown text-sans-serif"><button
                                        class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3"
                                        type="button" id="order-dropdown-0" data-toggle="dropdown"
                                        data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                            class="fas fa-ellipsis-h fs--1"></span></button>
                                    <div class="dropdown-menu dropdown-menu-right border py-0"
                                        aria-labelledby="order-dropdown-0">
                                        <div class="bg-white py-2">
                                            <a class="dropdown-item" href="#!">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                      @endforeach

                    </tbody>
                    <tfooter class="bg-200 text-900 ">
                        <tr>
                            <th class="align-middle sort">Menu Name</th>
                            <th class="align-middle sort" style="min-width: 10.5rem;">Description</th>
                            <th class="align-middle sort pr-7">Date Created</th>
                            <th class="no-sort">Action</th>
                        </tr>
                    </tfooter>

                </table>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
// $(document).ready(function() {
//     $('#example').DataTable();
// } );

$('#example').DataTable({
    buttons: [
        'copy', 'excel', 'pdf'
    ]
});
</script>
@endsection

@section('footer')
@include("partials/admin.admin_footer")
@endsection