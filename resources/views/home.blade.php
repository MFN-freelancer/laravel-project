@extends("layouts.frontend_layout")
@section("content")
    <section class="header-video">
        <div id="hero_video">
            <div id="sub_content">
                <div class="mobile_fix">
                    <h1>Free <strong>Videos</strong> download</h1>
                    <p>
                        Join us and download videos!
                    </p>
                </div>
            </div>
            <!-- End sub_content -->
        </div>
        <img src="{{asset("front_assets/img/video_fix.png")}}" alt="" class="header-video--media"
             data-video-src="video/intro"
             data-teaser-source="video/intro" data-provider="" data-video-width="1920" data-video-height="960">
        <div id="count" class="hidden-xs">
            <ul>
                <li><span class="number">653</span> Workout</li>
                <li><span class="number">1246</span> People Served</li>
            </ul>
        </div>
    </section>
    <!-- End Header video -->
    <!-- End SubHeader ============================================ -->
    <div class="container_styled_1">
        <div class="container margin_60_35">
            <h2 class="main_title"><em></em>Latest Workout Videos<span>Fall in love with Fitness</span></h2>
            <div id="filter_buttons">
                <button data-toggle="portfilter" class="active" data-target="all">All</button>
                <button data-toggle="portfilter" data-target="Love">Love</button>
                <button data-toggle="portfilter" data-target="Strength">Strength</button>
                <button data-toggle="portfilter" data-target="Cardio">Cardio</button>
                <button data-toggle="portfilter" data-target="Pilates">Pilates</button>
            </div>
            <div class="row">
                <div class="col-md-4" data-tag="Love">
                    <div class="course_container">
                        <div class="ribbon top"><span>Top Sell</span>
                        </div>
                        <figure>
                            <a href="fitness-course-1.html">
                                <img src="{{asset("front_assets/img/course_1.jpg")}}" width="800" height="533"
                                     class="img-responsive" alt="Image">
                                <div class="short_info"><i class="icon-clock-1"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class="course_title">
                            <div class="type"><span>Yoga</span>
                            </div>
                            <h3><a href="fitness-course-1.html">Yoga Fundamentals</a></h3>
                            <div class="info_2 clearfix"><span class="price">39.90<sup>$</sup></span><span
                                        class="users">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class="col-md-4" data-tag="Love">
                    <div class="course_container">
                        <div class="ribbon top"><span>Top sell</span>
                        </div>
                        <figure>
                            <a href="fitness-course-1.html">
                                <img src="{{asset("front_assets/img/course_2.jpg")}}" width="800" height="533"
                                     class="img-responsive" alt="Image">
                                <div class="short_info"><i class="icon-clock-1"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class="course_title">
                            <div class="type"><span>Yoga</span>
                            </div>
                            <h3><a href="fitness-course-1.html">Total Body Stretching </a></h3>
                            <div class="info_2 clearfix">
                                <span class="review-stars" style="color: #ffc107;">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class="col-md-4" data-tag="Love">
                    <div class="course_container">
                        <div class="ribbon"><span>Popular</span>
                        </div>
                        <figure>
                            <a href="fitness-course-1.html">
                                <img src="{{asset("front_assets/img/course_3.jpg")}}" width="800" height="533"
                                     class="img-responsive" alt="Image">
                                <div class="short_info"><i class="icon-clock-1"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class="course_title">
                            <div class="type"><span>Yoga</span>
                            </div>
                            <h3><a href="fitness-course-1.html">Flexibility and Toning</a></h3>
                            <div class="info_2 clearfix"><span class="price">39.90<sup>$</sup></span><span
                                        class="users">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class="col-md-4" data-tag="Strength">
                    <div class="course_container">
                        <div class="ribbon"><span>Popular</span>
                        </div>
                        <figure>
                            <a href="fitness-course-1.html">
                                <img src="{{asset("front_assets/img/course_4.jpg")}}" width="800" height="533"
                                     class="img-responsive" alt="Image">
                                <div class="short_info"><i class="icon-clock-1"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class="course_title">
                            <div class="type"><span>Strength</span>
                            </div>
                            <h3><a href="fitness-course-1.html">Strength Upper Body</a></h3>
                            <div class="info_2 clearfix"><span class="price">39.90<sup>$</sup></span><span
                                        class="users">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class="col-md-4" data-tag="Strength">
                    <div class="course_container">
                        <div class="ribbon"><span>Popular</span>
                        </div>
                        <figure>
                            <a href="#0">
                                <img src="{{asset("front_assets/img/course_5.jpg")}}" width="800" height="533"
                                     class="img-responsive" alt="Image">
                                <div class="short_info"><i class="icon-clock-1"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class="course_title">
                            <div class="type"><span>Strength</span>
                            </div>
                            <h3><a href="#0">Fat Burning Butt and Thigh </a></h3>
                            <div class="info_2 clearfix"><span class="price">39.90<sup>$</sup></span><span
                                        class="users">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class="col-md-4" data-tag="Cardio">
                    <div class="course_container">
                        <div class="ribbon"><span>Popular</span>
                        </div>
                        <figure>
                            <a href="fitness-course-1.html">
                                <img src="{{asset("front_assets/img/course_6.jpg")}}" width="800" height="533"
                                     class="img-responsive" alt="Image">
                                <div class="short_info"><i class="icon-clock-1"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class="course_title">
                            <div class="type"><span>Cardio</span>
                            </div>
                            <h3><a href="fitness-course-1.html">1000 Calorie Workout Video</a></h3>
                            <div class="info_2 clearfix"><span class="price">39.90<sup>$</sup></span><span
                                        class="users">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class="col-md-4" data-tag="Cardio">
                    <div class="course_container">
                        <figure>
                            <a href="fitness-course-1.html">
                                <img src="{{asset("front_assets/img/course_7.jpg")}}" width="800" height="533"
                                     class="img-responsive" alt="Image">
                                <div class="short_info"><i class="icon-clock-1"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class="course_title">
                            <div class="type"><span>Cardio</span>
                            </div>
                            <h3><a href="fitness-course-1.html">Fat Burning Cardio</a></h3>
                            <div class="info_2 clearfix"><span class="price">39.90<sup>$</sup></span><span
                                        class="users">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class="col-md-4" data-tag="Pilates">
                    <div class="course_container">
                        <figure>
                            <a href="fitness-course-1.html">
                                <img src="{{asset("front_assets/img/course_8.jpg")}}" width="800" height="533"
                                     class="img-responsive" alt="Image">
                                <div class="short_info"><i class="icon-clock-1"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class="course_title">
                            <div class="type"><span>Pilates</span>
                            </div>
                            <h3><a href="fitness-course-1.html">Lower Body Pilates</a></h3>
                            <div class="info_2 clearfix"><span class="price">39.90<sup>$</sup></span><span
                                        class="users">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class="col-md-4">
                    <a href="explore-1.html" id="view_all"><span><i class="arrow_carrot-right_alt2"></i>View all courses</span></a>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </div>
    <!-- End container_styled_1 -->
    <div id="newsletter_container">
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h3>Subscribe to our Newsletter for latest news.</h3>
                    <div id="message-newsletter"></div>
                    <form method="post" action="{{asset("front_assets/assets/newsletter.php")}}" name="newsletter"
                          id="newsletter"
                          class="form-inline">
                        <input name="email_newsletter" id="email_newsletter" type="email" value=""
                               placeholder="Your Email" class="form-control">
                        <button id="submit-newsletter" class="btn_1"> Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End newsletter_container -->
@endsection