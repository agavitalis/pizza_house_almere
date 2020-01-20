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
                <h3 class="mb-0">Manage Orders</h3>
                <p class="mt-2">Your Complete Order Items</p><a class="btn btn-link pl-0 btn-sm" href="/"
                    target="_blank"> Back to home<span class="fas fa-chevron-right ml-1 fs--2"></span></a>
            </div>
        </div>
    </div>
    @include('partials.alert')
</div>

<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">Orders Made </h5>
    </div>
    <div class="card-body bg-light">
        <div class="card-body p-0">
            <div class="falcon-data-table" style="overflow:auto">
                <table
                    class="table table-sm mb-0 table-striped table-dashboard fs--1 data-table border-bottom border-200" id="example">
                    <thead class="bg-200 text-900">
                        <tr>
                            
                            <th class="align-middle sort">Order</th>
                            <th class="align-middle sort pr-7">Date</th>
                            <th class="align-middle sort" style="min-width: 12.5rem;">Ship To</th>
                            <th class="align-middle sort text-center">Status</th>
                            <th class="align-middle sort text-right">Amount</th>
                            <th class="no-sort"></th>
                        </tr>
                    </thead>
                    <tbody id="orders">
                        <tr class="btn-reveal-trigger">
                            
                            <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html">
                                    <strong>#181</strong></a> by <strong>Ricky Antony</strong><br /><a
                                    href="mailto:ricky@example.com">ricky@example.com</a></td>
                            <td class="py-2 align-middle">20/04/2019</td>
                            <td class="py-2 align-middle">Ricky Antony, 2392 Main Avenue, Penasauka, New Jersey 02149<p
                                    class="mb-0 text-500">Via Flat Rate</p>
                            </td>
                            <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span
                                    class="badge badge rounded-capsule d-block badge-soft-success">Completed<span
                                        class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                            <td class="py-2 align-middle text-right fs-0 font-weight-medium">$99</td>
                            <td class="py-2 align-middle white-space-nowrap">
                                <div class="dropdown text-sans-serif"><button
                                        class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3"
                                        type="button" id="order-dropdown-0" data-toggle="dropdown"
                                        data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                            class="fas fa-ellipsis-h fs--1"></span></button>
                                    <div class="dropdown-menu dropdown-menu-right border py-0"
                                        aria-labelledby="order-dropdown-0">
                                        <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a
                                                class="dropdown-item" href="#!">Processing</a><a class="dropdown-item"
                                                href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                                href="#!">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                            
                            <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html">
                                    <strong>#182</strong></a> by <strong>Kin Rossow</strong><br /><a
                                    href="mailto:kin@example.com">kin@example.com</a></td>
                            <td class="py-2 align-middle">20/04/2019</td>
                            <td class="py-2 align-middle">Kin Rossow, 1 Hollywood Blvd,Beverly Hills, California 90210<p
                                    class="mb-0 text-500">Via Free Shipping</p>
                            </td>
                            <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span
                                    class="badge badge rounded-capsule d-block badge-soft-primary">Processing<span
                                        class="ml-1 fas fa-redo" data-fa-transform="shrink-2"></span></span></td>
                            <td class="py-2 align-middle text-right fs-0 font-weight-medium">$120</td>
                            <td class="py-2 align-middle white-space-nowrap">
                                <div class="dropdown text-sans-serif"><button
                                        class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3"
                                        type="button" id="order-dropdown-1" data-toggle="dropdown"
                                        data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                            class="fas fa-ellipsis-h fs--1"></span></button>
                                    <div class="dropdown-menu dropdown-menu-right border py-0"
                                        aria-labelledby="order-dropdown-1">
                                        <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a
                                                class="dropdown-item" href="#!">Processing</a><a class="dropdown-item"
                                                href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                                href="#!">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                            
                            <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html">
                                    <strong>#183</strong></a> by <strong>Merry Diana</strong><br /><a
                                    href="mailto:merry@example.com">merry@example.com</a></td>
                            <td class="py-2 align-middle">30/04/2019</td>
                            <td class="py-2 align-middle">Merry Diana, 1 Infinite Loop, Cupertino, California 90210<p
                                    class="mb-0 text-500">Via Link Road</p>
                            </td>
                            <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span
                                    class="badge badge rounded-capsule d-block badge-soft-secondary">On Hold<span
                                        class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                            <td class="py-2 align-middle text-right fs-0 font-weight-medium">$70</td>
                            <td class="py-2 align-middle white-space-nowrap">
                                <div class="dropdown text-sans-serif"><button
                                        class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3"
                                        type="button" id="order-dropdown-2" data-toggle="dropdown"
                                        data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                            class="fas fa-ellipsis-h fs--1"></span></button>
                                    <div class="dropdown-menu dropdown-menu-right border py-0"
                                        aria-labelledby="order-dropdown-2">
                                        <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a
                                                class="dropdown-item" href="#!">Processing</a><a class="dropdown-item"
                                                href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                                href="#!">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
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