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
                                    <div class="col-md-7">
                                        <label class="col-sm-12 col-form-label text-label">Video Title</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="video_name"  placeholder="video title" required>
                                            </div>
                                        </div>
                                        <label class="col-sm-12 col-form-label text-label">Description</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" name="video_description" rows="5" placeholder="description" ></textarea>
                                        </div>
                                        {{--<label class="col-sm-12 col-form-label text-label">Thumbnail</label>--}}
                                        {{--<div class="col-sm-12">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<input type="file" class="form-control" name="video_Thumbnail">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <label class="col-sm-12 col-form-label text-label">Add Tag</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="video_category" placeholder="add tag" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <label class="col-sm-12 col-form-label text-label">Video Upload File</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                {{--<input type="file" class="form-control" name="video_file" required>--}}
                                                <input class="video-preview" type="file" name="video_file" required>
                                                <video controls style="width: 100%;height: auto;"></video>
                                                <canvas width="56" height="54"></canvas>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-lg-5">
                                            <label class="col-sm-12 col-form-label text-label">Upload Button</label>
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-rounded btn-success">
                                                    <span class="btn-icon-left text-success"><i class="fa fa-upload color-success"></i> </span>
                                                    Upload
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            $(".video-preview").change(function () {
                $(this).next().attr("src", URL.createObjectURL(this.files[0]));
            });
            // $("form").submit(function(e){
            //     e.preventDefault();
            //     const form=this,
            //         vp=this.querySelector(".video-preview"),
            //         canvas=this.querySelector("canvas"),
            //         video=this.querySelector("video"),
            //         fd = new FormData(this);
            //     canvas.getContext('2d').drawImage(video,
            //         0, 0,
            //         video.videoWidth, video.videoHeight,
            //         0, 0,
            //         canvas.width,canvas.height
            //     );
            //     canvas.toBlob(function(blob){
            //         fd.append("poster",blob,vp.files[0].name.replace(/\.[^\.]*$/,"-poster.jpg"));
            //         // a little debugging
            //         for(var pair of fd.entries()) {
            //             console.log(pair[0], pair[1]);
            //         };
            //         // do ajax or fetch here!
            //
            //     }, 'image/jpeg', .4);
            // })
        })
    </script>
@endsection