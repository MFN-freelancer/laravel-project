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
                                            <h2 class="text-info m-0">{{$total_uploads}}</h2>
                                            <h5 class="text-muted f-s-14">Total Video Uploads</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md single-video-widget">
                                    <div class="media align-items-center widget-vdo-stat">
                                        <span class="icon text-dpink"><i class="fa fa-cloud-download"></i></span>
                                        <div class="media-body">
                                            <h2 class="text-dpink m-0">{{$total_downloads}}</h2>
                                            <h5 class="text-muted f-s-14">Total Video Downloads</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md single-video-widget">
                                    <div class="media align-items-center widget-vdo-stat">
                                        <span class="icon text-warning"><i class="fa fa-users"></i></span>
                                        <div class="media-body">
                                            <h2 class="text-warning m-0">{{$total_users}}</h2>
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
                                    @foreach($video_lists as $video_list)
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <img src="{{asset('/cover_images/'.$video_list->video_cover)}}" class="mr-3" width="60"
                                                     height="60" alt="">
                                                <div class="media-body">
                                                    <h5 class="m-0">{{$video_list->video_title}}</h5>
                                                    <span class="text-muted"></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="review-stars" style="color: #ffc107;">
                                                @for($i=0;$i<5;++$i)
                                                    <i class="fa fa-star{{ $video_list->ratings<=$i?'-o':'' }}" aria-hidden="true"></i>
                                                @endfor
                                            </span>
                                        </td>
                                        <td><span class="text-success">{{$video_list->downloaded_number}}</span>
                                        </td>
                                        <td>{{$video_list->created_at}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            {{$video_lists->links()}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- #/ container -->
    </div>
@endsection