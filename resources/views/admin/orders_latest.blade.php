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
              <div class="falcon-data-table">
                <table class="table table-sm mb-0 table-striped table-dashboard fs--1 data-table border-bottom border-200" data-options='{"searching":false,"responsive":false,"info":false,"lengthChange":false,"sWrapper":"falcon-data-table-wrapper","dom":"<&#39;row mx-1&#39;<&#39;col-sm-12 col-md-6&#39;l><&#39;col-sm-12 col-md-6&#39;f>><&#39;table-responsive&#39;tr><&#39;row no-gutters px-1 py-3 align-items-center justify-content-center&#39;<&#39;col-auto&#39;p>>","language":{"paginate":{"next":"<span class=\"fas fa-chevron-right\"></span>","previous":"<span class=\"fas fa-chevron-left\"></span>"}}}'>
                  <thead class="bg-200 text-900">
                    <tr>
                      <th class="align-middle no-sort">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select" id="checkbox-bulk-purchases-select" type="checkbox" data-checkbox-body="#orders" data-checkbox-actions="#orders-actions" data-checkbox-replaced-element="#dashboard-actions"><label class="custom-control-label" for="checkbox-bulk-purchases-select"></label></div>
                      </th>
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
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-0" /><label class="custom-control-label" for="checkbox-0"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#181</strong></a> by <strong>Ricky Antony</strong><br /><a href="mailto:ricky@example.com">ricky@example.com</a></td>
                      <td class="py-2 align-middle">20/04/2019</td>
                      <td class="py-2 align-middle">Ricky Antony, 2392 Main Avenue, Penasauka, New Jersey 02149<p class="mb-0 text-500">Via Flat Rate</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-success">Completed<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$99</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-1" /><label class="custom-control-label" for="checkbox-1"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#182</strong></a> by <strong>Kin Rossow</strong><br /><a href="mailto:kin@example.com">kin@example.com</a></td>
                      <td class="py-2 align-middle">20/04/2019</td>
                      <td class="py-2 align-middle">Kin Rossow, 1 Hollywood Blvd,Beverly Hills, California 90210<p class="mb-0 text-500">Via Free Shipping</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-primary">Processing<span class="ml-1 fas fa-redo" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$120</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-1" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-1">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-2" /><label class="custom-control-label" for="checkbox-2"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#183</strong></a> by <strong>Merry Diana</strong><br /><a href="mailto:merry@example.com">merry@example.com</a></td>
                      <td class="py-2 align-middle">30/04/2019</td>
                      <td class="py-2 align-middle">Merry Diana, 1 Infinite Loop, Cupertino, California 90210<p class="mb-0 text-500">Via Link Road</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-secondary">On Hold<span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$70</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-2" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-2">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-3" /><label class="custom-control-label" for="checkbox-3"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#184</strong></a> by <strong>Bucky Robert</strong><br /><a href="mailto:bucky@example.com">bucky@example.com</a></td>
                      <td class="py-2 align-middle">30/04/2019</td>
                      <td class="py-2 align-middle">Bucky Robert, 1 Infinite Loop, Cupertino, California 90210<p class="mb-0 text-500">Via Free Shipping</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-warning">Pending<span class="ml-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$92</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-3" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-3">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-4" /><label class="custom-control-label" for="checkbox-4"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#185</strong></a> by <strong>Rocky Zampa</strong><br /><a href="mailto:rocky@example.com">rocky@example.com</a></td>
                      <td class="py-2 align-middle">30/04/2019</td>
                      <td class="py-2 align-middle">Rocky Zampa, 1 Infinite Loop, Cupertino, California 90210<p class="mb-0 text-500">Via Free Road</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-secondary">On Hold<span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$120</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-4" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-4">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-5" /><label class="custom-control-label" for="checkbox-5"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#186</strong></a> by <strong>Ricky John</strong><br /><a href="mailto:ricky@example.com">ricky@example.com</a></td>
                      <td class="py-2 align-middle">30/04/2019</td>
                      <td class="py-2 align-middle">Ricky John, 1 Infinite Loop, Cupertino, California 90210<p class="mb-0 text-500">Via Free Shipping</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-primary">Processing<span class="ml-1 fas fa-redo" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$145</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-5" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-5">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-6" /><label class="custom-control-label" for="checkbox-6"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#187</strong></a> by <strong>Cristofer Henric</strong><br /><a href="mailto:cristofer@example.com">cristofer@example.com</a></td>
                      <td class="py-2 align-middle">30/04/2019</td>
                      <td class="py-2 align-middle">Cristofer Henric, 1 Infinite Loop, Cupertino, California 90210<p class="mb-0 text-500">Via Flat Rate</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-success">Completed<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$55</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-6" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-6">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-7" /><label class="custom-control-label" for="checkbox-7"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#188</strong></a> by <strong>Brate Lee</strong><br /><a href="mailto:lee@example.com">lee@example.com</a></td>
                      <td class="py-2 align-middle">29/04/2019</td>
                      <td class="py-2 align-middle">Brate Lee, 1 Infinite Loop, Cupertino, California 90210<p class="mb-0 text-500">Via Link Road</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-secondary">On Hold<span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$90</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-7" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-7">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-8" /><label class="custom-control-label" for="checkbox-8"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#189</strong></a> by <strong>Thomas Stephenson</strong><br /><a href="mailto:Stephenson@example.com">Stephenson@example.com</a></td>
                      <td class="py-2 align-middle">29/04/2019</td>
                      <td class="py-2 align-middle">Thomas Stephenson, 116 Ballifeary Road, Bamff<p class="mb-0 text-500">Via Flat Rate</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-primary">Processing<span class="ml-1 fas fa-redo" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$52</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-8" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-8">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-9" /><label class="custom-control-label" for="checkbox-9"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#190</strong></a> by <strong>Evie Singh</strong><br /><a href="mailto:eviewsing@example.com">eviewsing@example.com</a></td>
                      <td class="py-2 align-middle">29/04/2019</td>
                      <td class="py-2 align-middle">Evie Singh, 54 Castledore Road, Tunstead<p class="mb-0 text-500">Via Flat Rate</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-success">Completed<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$90</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-9" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-9">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-10" /><label class="custom-control-label" for="checkbox-10"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#191</strong></a> by <strong>David Peters</strong><br /><a href="mailto:peter@example.com">peter@example.com</a></td>
                      <td class="py-2 align-middle">29/04/2019</td>
                      <td class="py-2 align-middle">David Peters, Rhyd Y Groes, Rhosgoch, LL66 0AT<p class="mb-0 text-500">Via Link Road</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-success">Completed<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$69</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-10" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-10">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-11" /><label class="custom-control-label" for="checkbox-11"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#192</strong></a> by <strong>Jennifer Johnson</strong><br /><a href="mailto:jennifer@example.com">jennifer@example.com</a></td>
                      <td class="py-2 align-middle">28/04/2019</td>
                      <td class="py-2 align-middle">Jennifer Johnson, Rhyd Y Groes, Rhosgoch, LL66 0AT<p class="mb-0 text-500">Via Flat Rate</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-primary">Processing<span class="ml-1 fas fa-redo" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$112</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-11" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-11">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-12" /><label class="custom-control-label" for="checkbox-12"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#193</strong></a> by <strong> Demarcus Okuneva</strong><br /><a href="mailto:okuneva@example.com">okuneva@example.com</a></td>
                      <td class="py-2 align-middle">28/04/2019</td>
                      <td class="py-2 align-middle"> Demarcus Okuneva, 90555 Upton Drive Jeffreyview, UT 08771<p class="mb-0 text-500">Via Flat Rate</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-success">Completed<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$99</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-12" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-12">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-13" /><label class="custom-control-label" for="checkbox-13"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#194</strong></a> by <strong>Simeon Harber</strong><br /><a href="mailto:simeon@example.com">simeon@example.com</a></td>
                      <td class="py-2 align-middle">27/04/2019</td>
                      <td class="py-2 align-middle">Simeon Harber, 702 Kunde Plain Apt. 634 East Bridgetview, HI 13134-1862<p class="mb-0 text-500">Via Free Shipping</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-secondary">On Hold<span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$129</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-13" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-13">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-14" /><label class="custom-control-label" for="checkbox-14"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#195</strong></a> by <strong>Lavon Haley</strong><br /><a href="mailto:lavon@example.com">lavon@example.com</a></td>
                      <td class="py-2 align-middle">27/04/2019</td>
                      <td class="py-2 align-middle">Lavon Haley, 30998 Adonis Locks McGlynnside, ID 27241<p class="mb-0 text-500">Via Free Shipping</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-warning">Pending<span class="ml-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$70</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-14" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-14">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-15" /><label class="custom-control-label" for="checkbox-15"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#196</strong></a> by <strong>Ashley Kirlin</strong><br /><a href="mailto:ashley@example.com">ashley@example.com</a></td>
                      <td class="py-2 align-middle">26/04/2019</td>
                      <td class="py-2 align-middle">Ashley Kirlin, 43304 Prosacco Shore South Dejuanfurt, MO 18623-0505<p class="mb-0 text-500">Via Link Road</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-primary">Processing<span class="ml-1 fas fa-redo" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$39</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-15" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-15">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-16" /><label class="custom-control-label" for="checkbox-16"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#197</strong></a> by <strong>Johnnie Considine</strong><br /><a href="mailto:johnnie@example.com">johnnie@example.com</a></td>
                      <td class="py-2 align-middle">26/04/2019</td>
                      <td class="py-2 align-middle">Johnnie Considine, 6008 Hermann Points Suite 294 Hansenville, TN 14210<p class="mb-0 text-500">Via Flat Rate</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-warning">Pending<span class="ml-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$70</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-16" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-16">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-17" /><label class="custom-control-label" for="checkbox-17"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#198</strong></a> by <strong>Trace Farrell</strong><br /><a href="mailto:trace@example.com">trace@example.com</a></td>
                      <td class="py-2 align-middle">26/04/2019</td>
                      <td class="py-2 align-middle">Trace Farrell, 431 Steuber Mews Apt. 252 Germanland, AK 25882<p class="mb-0 text-500">Via Free Shipping</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-success">Completed<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$70</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-17" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-17">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-18" /><label class="custom-control-label" for="checkbox-18"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#199</strong></a> by <strong>Estell Nienow</strong><br /><a href="mailto:nienow@example.com">nienow@example.com</a></td>
                      <td class="py-2 align-middle">26/04/2019</td>
                      <td class="py-2 align-middle">Estell Nienow, 4167 Laverna Manor Marysemouth, NV 74590<p class="mb-0 text-500">Via Free Shipping</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-success">Completed<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$59</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-18" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-18">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-19" /><label class="custom-control-label" for="checkbox-19"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#200</strong></a> by <strong>Daisha Howe</strong><br /><a href="mailto:howe@example.com">howe@example.com</a></td>
                      <td class="py-2 align-middle">25/04/2019</td>
                      <td class="py-2 align-middle">Daisha Howe, 829 Lavonne Valley Apt. 074 Stehrfort, RI 77914-0379<p class="mb-0 text-500">Via Free Shipping</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-success">Completed<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$39</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-19" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-19">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-20" /><label class="custom-control-label" for="checkbox-20"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#201</strong></a> by <strong>Miles Haley</strong><br /><a href="mailto:haley@example.com">haley@example.com</a></td>
                      <td class="py-2 align-middle">24/04/2019</td>
                      <td class="py-2 align-middle">Miles Haley, 53150 Thad Squares Apt. 263 Archibaldfort, MO 00837<p class="mb-0 text-500">Via Flat Rate</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-success">Completed<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$55</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-20" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-20">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-21" /><label class="custom-control-label" for="checkbox-21"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#202</strong></a> by <strong>Brenda Watsica</strong><br /><a href="mailto:watsica@example.com">watsica@example.com</a></td>
                      <td class="py-2 align-middle">24/04/2019</td>
                      <td class="py-2 align-middle">Brenda Watsica, 9198 O'Kon Harbors Morarborough, IA 75409-7383<p class="mb-0 text-500">Via Free Shipping</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-success">Completed<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$89</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-21" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-21">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-22" /><label class="custom-control-label" for="checkbox-22"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#203</strong></a> by <strong>Ellie O'Reilly</strong><br /><a href="mailto:ellie@example.com">ellie@example.com</a></td>
                      <td class="py-2 align-middle">24/04/2019</td>
                      <td class="py-2 align-middle">Ellie O'Reilly, 1478 Kaitlin Haven Apt. 061 Lake Muhammadmouth, SC 35848<p class="mb-0 text-500">Via Free Shipping</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-success">Completed<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$47</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-22" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-22">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-23" /><label class="custom-control-label" for="checkbox-23"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#204</strong></a> by <strong>Garry Brainstrow</strong><br /><a href="mailto:garry@example.com">garry@example.com</a></td>
                      <td class="py-2 align-middle">23/04/2019</td>
                      <td class="py-2 align-middle">Garry Brainstrow, 13572 Kurt Mews South Merritt, IA 52491<p class="mb-0 text-500">Via Free Shipping</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-success">Completed<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$139</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-23" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-23">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-24" /><label class="custom-control-label" for="checkbox-24"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#205</strong></a> by <strong>Estell Pollich</strong><br /><a href="mailto:estell@example.com">estell@example.com</a></td>
                      <td class="py-2 align-middle">23/04/2019</td>
                      <td class="py-2 align-middle">Estell Pollich, 13572 Kurt Mews South Merritt, IA 52491<p class="mb-0 text-500">Via Free Shipping</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-secondary">On Hold<span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$49</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-24" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-24">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-25" /><label class="custom-control-label" for="checkbox-25"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#206</strong></a> by <strong>Ara Mueller</strong><br /><a href="mailto:ara@example.com">ara@example.com</a></td>
                      <td class="py-2 align-middle">23/04/2019</td>
                      <td class="py-2 align-middle">Ara Mueller, 91979 Kohler Place Waelchiborough, CT 41291<p class="mb-0 text-500">Via Flat Rate</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-secondary">On Hold<span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$19</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-25" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-25">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-26" /><label class="custom-control-label" for="checkbox-26"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#207</strong></a> by <strong>Lucienne Blick</strong><br /><a href="mailto:blick@example.com">blick@example.com</a></td>
                      <td class="py-2 align-middle">23/04/2019</td>
                      <td class="py-2 align-middle">Lucienne Blick, 6757 Giuseppe Meadows Geraldinemouth, MO 48819-4970<p class="mb-0 text-500">Via Flat Rate</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-secondary">On Hold<span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$59</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-26" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-26">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-27" /><label class="custom-control-label" for="checkbox-27"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#208</strong></a> by <strong>Laverne Haag</strong><br /><a href="mailto:haag@example.com">haag@example.com</a></td>
                      <td class="py-2 align-middle">22/04/2019</td>
                      <td class="py-2 align-middle">Laverne Haag, 2327 Kaylee Mill East Citlalli, AZ 89582-3143<p class="mb-0 text-500">Via Flat Rate</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-secondary">On Hold<span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$49</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-27" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-27">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-28" /><label class="custom-control-label" for="checkbox-28"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#209</strong></a> by <strong>Brandon Bednar</strong><br /><a href="mailto:bednar@example.com">bednar@example.com</a></td>
                      <td class="py-2 align-middle">22/04/2019</td>
                      <td class="py-2 align-middle">Brandon Bednar, 25156 Isaac Crossing Apt. 810 Lonborough, CO 83774-5999<p class="mb-0 text-500">Via Flat Rate</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-secondary">On Hold<span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$39</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-28" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-28">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-29" /><label class="custom-control-label" for="checkbox-29"></label></div>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html"> <strong>#210</strong></a> by <strong>Dimitri Boehm</strong><br /><a href="mailto:dimitri@example.com">dimitri@example.com</a></td>
                      <td class="py-2 align-middle">23/04/2019</td>
                      <td class="py-2 align-middle">Dimitri Boehm, 71603 Wolff Plains Apt. 885 Johnstonton, MI 01581<p class="mb-0 text-500">Via Flat Rate</p>
                      </td>
                      <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-secondary">On Hold<span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                      <td class="py-2 align-middle text-right fs-0 font-weight-medium">$111</td>
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="order-dropdown-29" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-29">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
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