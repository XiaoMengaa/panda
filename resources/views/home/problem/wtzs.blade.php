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

    <span class="btn btn-mini"style="background:yellow">熊猫知识币</span>
</div><!-- end of post meta -->

<p>{{$problem->content}}</p>

</article>
<section id="comments">

<h3 id="comments-title">() 回答</h3>

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
            <a href="#" rel="external nofollow" class="url"></a>
    </cite>

    - <a class="comment-reply-link" href="/home/append/create/{{$v->id}}?id={{$id}}">回复</a>
</h5>


<p class="date">
    <a href="#">

            <time datetime="(‘y-m-d h:i:s’,time())">{{$v->created_at}}</time>
           <div class="like-btn">
            <span class="like-it"   dianzan="0">{{$v->fabulous}}</span>
            <div  class="chai"style="background:#fafafa;width: 35.24px;height: 30px;color: #8cd24e;padding-left: 10px;"><img src="/image/chai.jpg" width="30%">&nbsp;{{$v->tread}}</div>
           </div>
           <script>
            
              
            $(".like-it").one("click",function(){
              
               var js = $(this)
                       $.ajax({ //一个Ajax过程你看看你你可能酷酷酷酷酷酷酷酷酷酷酷酷
                       url : "/home/dianzan",
                       data:{id:{{$v->id}}},//与此php页面h
                       success: function(json){//如果调用php成功
                               js.html(json);
                               alert('赞赞加1哦！')
                            }
                       });
                       return false;
                  });

             $(".chai").one("click",function(){
                var js =$(this)
                $.ajax({

                    url:"/home/chai",

                    data:{id:{{$v->id}}},
                    success:function(json){
                      js.html(json);
                      confirm("你真的要踩人家吗");
                    }
                });
                return false;
             });
           </script>
          

    </a>
</p>
 
</div><!-- end .comment-meta -->

<div class="comment-body">
<p>{{$v->content}}</p>
</div><!-- end of comment-body -->
@if(session::get('id')==$problem->user_id)
@if($v->state==0)
<button type="button"  class="btn btn-mini 1" id="w" status="{{$v->state}}" shuxing="1">采纳</button>
@else
<button type="button" class="btn btn-mini  2"  id="w" status="{{$v->state}}" style="background:#2bff66;" shuxing="0">已采纳</button>
@endif
@endif
<script>
$("#w").click(function(){
    
    var a = $(this).attr('shuxing');
    $.ajax({
        url:'/home/server',
        type:'get',
        data:{panduan:a,rid:{{$v->id}}},
        success:function(dui){
            console.log(dui);
             window.location.reload();
        }
    });
});
</script>
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
                    <cite class="fn">{{$v -> username}}</cite>
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

<p class="comment-notes">Your email address will not be published. Required fields are marked <span class="required">*</span></p>

<div>
<label for="comment">回答框</label>
<textarea class="span8" name="content" id="comment" cols="58" rows="10"></textarea>
</div>

<p class="allowed-tags"></p>
<input type="hidden" name="id"  value="{{$id}}">

<div>
<input class="btn" type="submit" id="submit"  value="立即回答">
</div>
{{csrf_field()}}
</form>
 <script type="text/javascript">
            var hh=document.getElementById("submit");
            hh.onclick = function(){
               
               var text=document.getElementById("comment").value;//通过id获取需要验证的表单元素的值
                   if(text==""){//当上面获取的值为空时
                     alert("请填写您宝贵的回答！");//弹出提示
                     return false;//返回false（不提交表单）
                   }else{
                    return true;//提交表单
                   }
            }
               
            </script>

</div>

</section><!-- end of comments -->

</div>
<!-- end of page content -->


<!-- start of sidebar -->
<aside class="span4 page-sidebar">

<section class="widget">
<div class="support-widget" style="height: 75px">
    <a href="/home/center">
        <h3 class="title" style="float: left;">个人中心</h3>
        <div style="width: 80px;overflow: hidden;border-radius: 50px;margin-left: 250px; height:80px;">
            <img src="{{Session::get('pic')}}" alt="" width="80">
        </div>
        
    </a>
        
</div>
</section>


<section class="widget">
                        <h3 class="title">广告展示</h3><hr>
                                <div>
                                       @foreach($gggl as $v)
                                            <tr>
                                                
                                                <a href="{{$v['glink']}}">
                                                <td><img src="{{$v['gpic']}}"></td></a>
                                            </tr><hr>
                                       @endforeach

                                </div>
                        </section>


                        <section class="widget">
                            <h3 class="title">问题标签</h3>
                            <div class="tagcloud">
                                @foreach($tags as $v)
                                <a href="/home/problemlist?tid={{$v->id}}" class="btn btn-mini">{{$v->title}}</a>
                                @endforeach
                            </div>
                        </section>

</aside>
<!-- end of sidebar -->
</div>
</div>
</div>
<!-- End of Page Container -->

@include('default.home_button')