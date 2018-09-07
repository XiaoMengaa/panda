@include('default.home_top')
<!-- Start of Page Container -->
<div class="page-container">
<div class="container">
<div class="row">

<!-- start of page content -->
<div class="span8 page-content">

<ul class="breadcrumb">
<li><a href="#">Knowledge Base Theme</a><span class="divider">/</span></li>
<li><a href="#" title="View all posts in Server &amp; Database">Server &amp; Database</a> <span class="divider">/</span></li>
<li class="active">{{$problem->title}}</li>
</ul>

<article class=" type-post format-standard hentry clearfix">

<h1 class="post-title"><a href="#">{{$problem->title}}</a></h1>

<div class="post-meta clearfix">
    <span class="date">{{substr($problem->created_at,0,10)}}</span>
    <span class="category"><a href="#" title="View all posts in Server &amp; Database">Server &amp; Database</a></span>
    <span class="comments"><a href="#" title="Comment on Integrating WordPress with Your Website">3 Comments</a></span>
    <span class="like-count">{{$problem->browse}}</span>

</div><!-- end of post meta -->

<p>{{$problem->content}}</p>

</article>

<div class="like-btn">

<form id="like-it-form" action="#" method="post">
    <span class="like-it ">66</span>
    <input type="hidden" name="post_id" value="99">
    <input type="hidden" name="action" value="like_it">
</form>

<span class="tags">
    <strong>Tags:&nbsp;&nbsp;</strong><a href="#" rel="tag">basic</a>, <a href="#" rel="tag">setting</a>, <a href="http://knowledgebase.inspirythemes.com/tag/website/" rel="tag">website</a>
</span>

</div>

<section id="comments">

<h3 id="comments-title">(3) 回答</h3>

@foreach($reply as $v)
<ol class="commentlist">

<li class="comment even thread-even depth-1" id="li-comment-2">
<article id="comment-2">

<a href="#">
<img alt="" src="http://1.gravatar.com/avatar/50a7625001317a58444a20ece817aeca?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G" class="avatar avatar-60 photo" height="60" width="60">
</a>

<div class="comment-meta">

<h5 class="author">
    <cite class="fn">
            <a href="#" rel="external nofollow" class="url">回答问题的用户</a>
    </cite>
    - <a class="comment-reply-link" href="/home/append/create/{{$v->id}}?id={{$id}}">回复</a>
</h5>

<p class="date">
    <a href="#">

            <time datetime="(‘y-m-d h:i:s’,time())">{{$v->created_at}}</time>



    </a>
</p>

</div><!-- end .comment-meta -->

<div class="comment-body">
<p>{{$v->content}}</p>
</div><!-- end of comment-body -->

</article><!-- end of comment -->
@foreach($append as $val)
@if($v->id == $val->reply_id)
<ul class="children">

<li class="comment byuser comment-author-saqib-sarwar bypostauthor odd alt depth-2" id="li-comment-3">
<article id="comment-3">

    <a href="#">
            <img alt="" src="http://0.gravatar.com/avatar/2df5eab0988aa5ff219476b1d27df755?s=60&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G" class="avatar avatar-60 photo" height="60" width="60">
    </a>

    <div class="comment-meta">

            <h5 class="author">
                    <cite class="fn">回复的用户名称</cite>
                    - <a class="comment-reply-link" href="/home/append/create/{{$v->id}}?id={{$id}}">回复</a>
            </h5>

            <p class="date">
<a href="#">
<time datetime="2013-02-26T13:20:14+00:00">{{$v->created_at}}</time>
                    </a>
            </p>

    </div><!-- end .comment-meta -->
    <div class="comment-body">
            <p>{{$val->content}}</p>
    </div><!-- end of comment-body -->
</article><!-- end of comment -->

</li>
</ul>
</li>
</ol>
@endif
@endforeach
@endforeach
<div id="respond">

<h3>立即回答</h3>

<div class="cancel-comment-reply">
<a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Click here to cancel reply.</a>
</div>


<form action="/reply" method="post" id="commentform">
@if(Session::has('success'))
    <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
        <div class="dashboard-stat green">
                <div class="desc" style="text-align: center;line-height:95px;color:red">{{Session::get('success')}} </div>
        </div>
    </div>
    @endif

    @if(Session::has('error'))
    <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
        <div class="dashboard-stat red">
                <div class="desc" style="text-align: center;line-height:95px;color:white;color:red">{{Session::get('error')}} </div>
        </div>
    </div>
    @endif

<p class="comment-notes">Your email address will not be published. Required fields are marked <span class="required">*</span></p>

<div>
<label for="comment">回答框</label>
<textarea class="span8" name="content" id="comment" cols="58" rows="10"></textarea>
</div>

<p class="allowed-tags"></p>
<input type="hidden" name="id" value="{{$id}}">

<div>
<input class="btn" name="submit" type="submit" id="submit"  value="立即回答">
</div>
{{csrf_field()}}
</form>

</div>

</section><!-- end of comments -->

</div>
<!-- end of page content -->


<!-- start of sidebar -->
<aside class="span4 page-sidebar">

<section class="widget">
<div class="support-widget">

    <h3 class="title">Support</h3>
    <p class="intro">Need more support? If you did not found an answer, contact us for further help.</p>

</div>
</section>


<section class="widget">
<h3 class="title">Featured Articles</h3>
<ul class="articles">
    <li class="article-entry standard">
            <h4><a href="single.html">Integrating WordPress with Your Website</a></h4>
            <span class="article-meta">25 Feb, 2013 in <a href="#" title="View all posts in Server &amp; Database">Server &amp; Database</a></span>
            <span class="like-count">66</span>
    </li>
    <li class="article-entry standard">
            <h4><a href="single.html">WordPress Site Maintenance</a></h4>
            <span class="article-meta">24 Feb, 2013 in <a href="#" title="View all posts in Website Dev">Website Dev</a></span>
            <span class="like-count">15</span>
    </li>
    <li class="article-entry video">
            <h4><a href="single.html">Meta Tags in WordPress</a></h4>
            <span class="article-meta">23 Feb, 2013 in <a href="#" title="View all posts in Website Dev">Website Dev</a></span>
            <span class="like-count">8</span>
    </li>
    <li class="article-entry image">
            <h4><a href="single.html">WordPress in Your Language</a></h4>
            <span class="article-meta">22 Feb, 2013 in <a href="#" title="View all posts in Advanced Techniques">Advanced Techniques</a></span>
            <span class="like-count">6</span>
    </li>

</ul>
</section>



<section class="widget"><h3 class="title">Categories</h3>
<ul>
    <li><a href="#" title="Lorem ipsum dolor sit amet,">Advanced Techniques</a> </li>
    <li><a href="#" title="Lorem ipsum dolor sit amet,">Designing in WordPress</a></li>
    <li><a href="#" title="Lorem ipsum dolor sit amet,">Server &amp; Database</a></li>
    <li><a href="#" title="Lorem ipsum dolor sit amet, ">Theme Development</a></li>
    <li><a href="#" title="Lorem ipsum dolor sit amet,">Website Dev</a></li>
    <li><a href="#" title="Lorem ipsum dolor sit amet,">WordPress for Beginners</a></li>
    <li><a href="#" title="Lorem ipsum dolor sit amet, ">WordPress Plugins</a></li>
</ul>
</section>

<section class="widget">
<h3 class="title">Recent Comments</h3>
<ul id="recentcomments">

    <li class="recentcomments"><a href="#" rel="external nofollow" class="url">John Doe</a> on <a href="#">Integrating WordPress with Your Website</a></li>
    <li class="recentcomments">saqib sarwar on <a href="#">Integrating WordPress with Your Website</a></li>
    <li class="recentcomments"><a href="#" rel="external nofollow" class="url">John Doe</a> on <a href="#">Integrating WordPress with Your Website</a></li>
    <li class="recentcomments"><a href="#" rel="external nofollow" class="url">Mr WordPress</a> on <a href="#">Installing WordPress</a></li>
</ul>
</section>

</aside>
<!-- end of sidebar -->
</div>
</div>
</div>
<!-- End of Page Container -->

@include('default.home_button')