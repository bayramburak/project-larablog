<div class="blog" id="blog">
    <div class="container">
        <div class="default-heading">
            <!-- heading -->
            <h2>Latest Blogs</h2>
        </div>
        <div class="row">

            @foreach($blogs as $post)
            <div class="col-md-6 col-sm-6">
                <!-- blog entry -->
                <div class="entry">
                    <!-- blog entry image -->
                    <img class="img-responsive" src="http://via.placeholder.com/700x300?text=Blog Post" alt="Blog" />
                    <!-- heading / blog post title -->
                    <h3><a href="#">{{$post->post_title}}</a></h3>
                    <!-- blog information -->
                    <span class="meta">
									{{$post->created_at}} | Tag: Technology | By: David John
								</span>
                    <!-- paragraph -->
                    <p>{{$post->content}}</p>
                </div>
            </div>
            @endforeach
            {{--<div class="col-md-6 col-sm-6">
                <!-- blog entry -->
                <div class="entry">
                    <!-- blog entry image -->
                    <img class="img-responsive" src="img/blog/2.jpg" alt="Blog" />
                    <!-- heading / blog post title -->
                    <h3><a href="#">Communicating with you every step of the way</a></h3>
                    <!-- blog information -->
                    <span class="meta">
									July 02, 2014 | Tag: Technology | By: David John
								</span>
                    <!-- paragraph -->
                    <p>We combine continuing education and constant monitoring us with your project details if you are interested to ge of industry trends and innovations to provide the right IT solution at the right time. Contact us with your project details if you are interested to get our Web Solution or Software Development Services.</p>
                </div>
            </div>--}}
        </div>
        <div class="text-center">
            <a href="#" class="btn btn-default">See More</a>
        </div>
    </div>
</div>
