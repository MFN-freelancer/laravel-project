@extends("layouts.frontend_layout")
@section("content")
    <style>
        .video-js .vjs-big-play-button {
            top: 50%;
            left: 50%;
        }
    </style>
    <!-- SubHeader =============================================== -->
    <section class="parallax_window_in" data-parallax="scroll"
             data-image-src="{{asset('front_assets/img/sub_header_general.jpg')}}"
             data-natural-width="1400" data-natural-height="470">
        <div id="sub_content_in">
            <h1>Video Preview</h1>
        </div>
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-12">
                <video
                        id="my-video"
                        class="video-js"
                        controls
                        preload="auto"
                        width="640px"
                        height="264px"
                        poster="{{asset("cover_images/".$video[0]->video_cover)}}"
                        data-setup='{"aspectRatio":"640:267", "playbackRates": [0.5, 1, 1.5, 2] }'
                >
                    <source src="{{URL::to('/uploaded_video/'.$video[0]->video_url)}}" type="video/mp4"/>
                    <source src="{{URL::to('/uploaded_video/'.$video[0]->video_url)}}" type="video/webm"/>
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank"
                        >supports HTML5 video</a
                        >
                    </p>
                </video>
                <ul id="course_info">
                    <li><i class=" icon-clock"></i> {{$video[0]->created_at}}</li>
                    <li><i class="  icon-eye"></i> views</li>
                    <li><i class=" icon-sort-numeric"></i> downloads</li>
                    <li><i class=" icon-chart-bar-5"></i>
                        <span class="review-stars" style="color: #ffc107;">
                        @for($i=0;$i<5;++$i)
                                <i class="fa fa-star{{ $video[0]->ratings<=$i?'-o':'' }}" aria-hidden="true"></i>
                            @endfor
                        </span>
                    </li>
                    <li><i class="icon-user-6"></i> {{$user[0]->name}}</li>
                    <li><i class=" icon-thumbs-up"></i>23 </li>
                    <li><i class=" icon-thumbs-down"></i>23 </li>
                    <li><a href="{{URL::to('/uploaded_video/'.$video[0]->video_url)}}" download><i
                                    class=" icon-download"></i> download</a></li>
                </ul>
                <h2>Video Title</h2>
                <p><i class="icon-clock"></i>{{$video[0]->video_title}}</p>
                <h2>Description</h2>
                <p> Lorem ipsum dolor sit amet, vel illud semper definitionem et, ad <strong>cum verear corpora</strong>
                    detracto. Cu ornatus suavitate est. Eum iudico volumus et, eros modus mei in. Probatus nominati mel
                    an. At vim laudem oporteat partiendo, enim hendrerit scriptorem duo eu.</p>

                <p>Choro lobortis euripidis cu qui, ex melius labitur conceptam eos, sumo possim sea in. Te platonem
                    ullamcorper per. Te causae <strong>virtute sit</strong>, ex has tale aeterno reprimique. Vel ex
                    velit nemore, his no phaedrum interesset, in malis bonorum dissentiunt quo.</p>

                <hr class="add_bottom_30">
                <div class="workoutlist">
                    <h2>comment</h2>
                    <p>Choro lobortis euripidis cu qui, ex melius labitur conceptam eos, sumo possim sea in. Te
                        platonem
                        ullamcorper per. Te causae <strong>virtute sit</strong>, ex has tale aeterno reprimique.
                        Vel ex
                        velit nemore, his no phaedrum interesset, in malis bonorum dissentiunt quo.</p>

                </div>
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
@endsection
