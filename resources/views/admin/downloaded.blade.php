@extends("layouts.backend_layout")
@section("content")
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="card">
                        <div class="card-body widget-school-stat bg-1">
                            <div class="text">
                                <h2>2584</h2>
                                <p>Total downloaded video</p>
                            </div>
                            <div class="icon">
                                <span><i class="fa fa-video-camera"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">downloaded video lists</h4>
                            <div class="table-responsive">
                                <table class="table info-table-bg">
                                    <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Video title</th>
                                        <th scope="col">rating</th>
                                        <th scope="col">downloaded date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>forever remember</td>
                                        <td>
                                            <span class="review-stars" style="color: #ffc107;">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </span>
                                        </td>
                                        <td>2020/5/09</td>
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