@extends("layouts.backend_layout")
@section("content")
    <div class="content-body">
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Upload video</h4>
                        <div class="basic-form">
                            <form method="post" action="{{route('add-video')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label">Video Title</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="video_name"
                                                   placeholder="video title">
                                        </div>
                                    </div>
                                </div>
                               <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label">Input Category</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="video_category" placeholder="category name" >
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label">Cover Image</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="video_cover">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label">Upload File</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="video_file" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-label">Upload Button</label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-rounded btn-success">
                                            <span class="btn-icon-left text-success"><i class="fa fa-upload color-success"></i> </span>
                                            Upload
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection