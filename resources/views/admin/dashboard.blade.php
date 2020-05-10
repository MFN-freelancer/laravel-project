@extends("layouts.backend_layout")
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col p-md-0">
                    <h4>Video</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-xxl-12">
                    <div class="card widget-video-stats">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-6 col-md single-video-widget">
                                    <div class="media align-items-center widget-vdo-stat">
                                        <span class="icon text-info"><i class="fa fa-cloud-upload"></i></span>
                                        <div class="media-body">
                                            <h2 class="text-info m-0">385</h2>
                                            <h5 class="text-muted f-s-14">Total Video Uploads</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md single-video-widget">
                                    <div class="media align-items-center widget-vdo-stat">
                                        <span class="icon text-dpink"><i class="fa fa-cloud-download"></i></span>
                                        <div class="media-body">
                                            <h2 class="text-dpink m-0">215</h2>
                                            <h5 class="text-muted f-s-14">Total Video Downloads</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md single-video-widget">
                                    <div class="media align-items-center widget-vdo-stat">
                                        <span class="icon text-warning"><i class="fa fa-users"></i></span>
                                        <div class="media-body">
                                            <h2 class="text-warning m-0">548</h2>
                                            <h5 class="text-muted f-s-14">Total Registered Users</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card transparent-card video-session-table">
                        <div class="card-body p-0">
                            <div class="section-header d-block align-items-center justify-content-between mb-3">
                                <h4 class="card-title mb-4">Newly added videos</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-padded table-responsive-fix-big">
                                    <thead>
                                    <tr>
                                        <th>Video Title</th>
                                        <th>ratings</th>
                                        <th>downloaded numbers</th>
                                        <th>Created Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <img src="../../assets/images/avatar/1.png" class="mr-3" width="60"
                                                     height="60" alt="">
                                                <div class="media-body">
                                                    <h5 class="m-0">Nylon-Spandex Leggings</h5>
                                                    <span class="text-muted">Yoga Training</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="review-stars" style="color: #ffc107;">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </span>
                                        </td>
                                        <td><span class="text-success">54</span>
                                        </td>
                                        <td>10/06/2018</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <nav>
                                <ul class="pagination pagination-rounded pagination-md justify-content-end">
                                    <li class="page-item"><a class="page-link" href="javascript:void()"><i
                                                    class="fa fa-angle-double-left"></i></a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void()">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void()">2</a></li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void()">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
                                    <!-- <li class="page-item"><a class="page-link" href="javascript:void()">5</a></li> -->
                                    <li class="page-item"><a class="page-link" href="javascript:void()"><i
                                                    class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- #/ container -->
    </div>
@endsection