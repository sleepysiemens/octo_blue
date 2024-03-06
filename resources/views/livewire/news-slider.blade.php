<div class="row position-relative" id="news">
    <div class="row m-auto" style="width: 95%;">
        @foreach($blog_posts as $post)
            <a href="{{route('blog.show',$post->url)}}" class="col-lg-3 col-12 mb-3 text-black text-decoration-none " style="height: 250px">
                <div class="card border-0 shadow h-100">
                    <div class="card-body">
                        <h6 class="ff-kanit" style="height: 40px">{{$post->title}}</h6>
                        <p class="description">{{$post->description}}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    {{$blog_posts->links()}}
</div>
