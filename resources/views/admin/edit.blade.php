@extends("layouts.backend_layout")
@section("content")
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card transparent-card video-session-table">
                        <div class="card-body p-0">
                            <div class="section-header d-block align-items-center justify-content-between mb-3">
                                <h4 class="card-title mb-4">video edit/delete</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-padded table-responsive-fix-big">
                                    <thead>
                                    <tr>
                                        <th>Video Title</th>
                                        <th>ratings</th>
                                        <th>Download numbers</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
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
                                        <td><span class="text-success">12</span>
                                        </td>
                                        <td>10/06/2018</td>
                                        <td>
                                            <span>
                                                <a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                  data-placement="top" title="" data-original-title="Edit">
                                                    <i class="fa fa-pencil color-muted"></i> </a>
                                                <a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close">
                                                    <i class="fa fa-close color-danger"></i></a>
                                            </span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection