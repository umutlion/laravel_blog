@extends('front.layouts.master')
@section('title', 'Anasayfa')
@section('content')
    <link rel=stylesheet href='{{asset('front/')}}/plugins/goodlayers-core/plugins/combine/style.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/plugins/goodlayers-core/include/css/page-builder.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/plugins/revslider/public/assets/css/settings.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/plugins/zilla-likes/styles/zilla-likes.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/css/style-core.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/css/single.min.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/css/akea-style-custom.css' type=text/css media=all>

    <div class=akea-page-wrapper id=akea-page-wrapper>
        <div class=akea-header-transparent-substitute></div>
        <div class="akea-content-container akea-container ">
            <div class=" akea-sidebar-wrap clearfix akea-line-height-0 akea-sidebar-style-none">
                <div class=" akea-sidebar-center gdlr-core-column-60 akea-line-height">
                    <div class="akea-content-wrap akea-item-pdlr clearfix">
                        <div class=akea-content-area>
                            <article id=post-7008 class="post-7008 post type-post status-publish format-standard has-post-thumbnail hentry category-food tag-food">
                                <div class="akea-single-article clearfix">
                                    <div class="akea-single-article-title-wrap akea-align-center">
                                        <header class="akea-single-article-head clearfix">
                                            <div class=akea-single-article-head-right>
                                                <h1 class="akea-single-article-title">{{$article->title}}</h1>
                                                <div class=akea-blog-info-wrapper>
                                                    <div class="akea-blog-info akea-blog-info-font akea-blog-info-category "><a href=# rel=tag>{{$article->getCategory->name}}</a></div>
                                                    <div class="akea-blog-info akea-blog-info-font akea-blog-info-tag "><a href=# rel=tag>{{$article->title}}</a></div>
                                                    <div class="akea-blog-info akea-blog-info-font akea-blog-info-comment-number "><span class=akea-head><i class=icon_comment_alt ></i></span>0</div>
                                                </div>
                                            </div>
                                        </header>
                                    </div>
                                    <div class="akea-single-article-thumbnail akea-media-image"><img src="{{asset($article->image)}}" alt width=1300 height=530 title=chinh-le-duc-264152-unsplash><a href=# class=zilla-likes id=zilla-likes-7008 title="Like this"><span class=zilla-likes-count>11</span> <span class=zilla-likes-postfix></span></a></div>
                                    <div class=akea-single-article-content>
                                        <div class=akea-breadcrumbs>
                                            <div class=akea-breadcrumbs-container>
                                                <div class=akea-breadcrumbs-item> <span property=itemListElement typeof=ListItem><a property=item typeof=WebPage title="Go to Akea." href="{{asset('/')}}" class=home><span property=name>Anasayfa</span></a>
                                                        <meta property=position content=1>
                                                        </span>&#183;<span property=itemListElement typeof=ListItem><a property=item typeof=WebPage title="Go to the Food category archives." href="#" class="taxonomy category"><span property=name>{{$article->getCategory->name}}</span></a>
                                                        <meta property=position content=2>
                                                        </span>&#183;<span class="post post-post current-item">{{$article->title}}</span>
                                                        <span>{{$article->getAuthor->name}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h4>{{$article->title}}</h4>
                                        <p>{!! \Illuminate\Support\Str::of($article->content)->words(2000) !!}</p>
                                        <p><strong>Read This :&nbsp;&nbsp;</strong>&nbsp;<a href=../../../11/11/gutenberg-post-ex-1/index.html#>Traveling in Turkey</a></p>
                                        <ul class="wp-block-gallery aligncenter columns-5 is-cropped">
                                            @foreach($images as $image)
                                                <li class=blocks-gallery-item>
                                                    <figure>
                                                        <a href="{{asset($image->image)}}"><img src="{{asset($image->image)}}" alt data-id=6400 data-link=https://demo.goodlayers.com/akea/2018/05/04/top-5-beach-you-will-need-to-visit-once-in-your-life/rachel-park-366508-unsplash/ class=wp-image-6400 ></a>
                                                    </figure>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <p>{!! \Illuminate\Support\Str::of($article->content)->substr(3000, 10000) !!}</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=gdlr-core-page-builder-body></div>
        <div class="akea-bottom-page-builder-container akea-container">
            <div class="akea-bottom-page-builder-sidebar-wrap akea-sidebar-style-none">
                <div class=akea-bottom-page-builder-sidebar-class>
                    <div class="akea-bottom-page-builder-content akea-item-pdlr">
                        <div class="akea-single-nav-area clearfix">
                            <span class="akea-single-nav akea-single-nav-left">
                                <span class="akea-text akea-title-font" >Önceki Gönderi</span><br>
                                @if(isset($previous))
                                <a href="{{route('single', [$previous->getCategory->slug,$previous->slug])}}" rel=prev>
                                    <span class="akea-single-nav-title akea-title-font" >{{$previous->title}}</span>
                                </a>
                                @else
                                    <p class="btn-outline-success">Sitemizin ilk gönderisindesiniz.</p>
                                 @endif
                            </span>
                            <span class="akea-single-nav akea-single-nav-right">
                                <span class="akea-text akea-title-font" >Sıradaki Gönderi</span>
                                <br>
                                @if(isset($next))
                                <a href="{{route('single', [$next->getCategory->slug,$next->slug])}}" rel=next>
                                    <span class="akea-single-nav-title akea-title-font" >{{$next->title}}</span>
                                </a>
                                @else
                                    <p class="btn-outline-success">Sitemizin son gönderisindesiniz.</p>
                                @endif
                            </span>
                        </div>

                        <div class="akea-single-social-share akea-item-rvpdlr clearfix">
                            <div class="gdlr-core-social-share-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-social-share-right-text gdlr-core-item-mglr gdlr-core-style-plain" style="padding-bottom: 0px ;">
                                    <span class=gdlr-core-social-share-wrap>
                                        <a class=gdlr-core-social-share-facebook href="#" target=_blank >
                                            <i class="fa fa-facebook" ></i>
                                        </a>
                                        <a class=gdlr-core-social-share-google-plus href="#" target=_blank >
                                            <i class="fa fa-google-plus" ></i>
                                        </a>
                                        <a class=gdlr-core-social-share-pinterest href="#" target=_blank >
                                            <i class="fa fa-pinterest-p" ></i>
                                        </a>
                                        <a class=gdlr-core-social-share-stumbleupon href="#" target=_blank  >
                                            <i class="fa fa-stumbleupon" ></i>
                                        </a>
                                        <a class=gdlr-core-social-share-twitter href="#" target=_blank >
                                            <i class="fa fa-twitter" ></i>
                                        </a>
                                    </span>
                                <span class=gdlr-core-social-share-count>
                                        <span class="gdlr-core-divider gdlr-core-skin-divider"  ></span>
                                        <span class=gdlr-core-count>0</span>
                                        <span class=gdlr-core-suffix>Shares</span>
                                    </span>
                            </div>
                        </div>
                        <div class="akea-single-magazine-author-tags clearfix"><a href=# rel=tag>{{$article->getCategory->name}}</a></div>
                        <div class="akea-single-related-post-wrap akea-item-rvpdlr">
                            <h3 class="akea-single-related-post-title akea-item-mglr">İlgilinizi Çekebilecek Gönderiler</h3>
                            <div class="gdlr-core-blog-item-holder clearfix">
                            @foreach($relatedPosts as $post)
                                    <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-30">
                                    <div class="gdlr-core-blog-grid ">
                                        <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                                            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                <a href={{route('single', [$post->getCategory->slug,$post->slug])}}><img src={{asset($post->image)}} alt width=900 height=537 title=brenda-godinez-228181-unsplash></a>
                                                <div class=gdlr-core-blog-thumbnail-category><a href=# rel=tag>{{$post->getCategory->name}}</a></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-blog-grid-content-wrap>
                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 17px ;"><a href={{route('single', [$post->getCategory->slug,$post->slug])}} >{{$post->title}}</a></h3>
                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img alt src='{{asset('front/')}}/upload/avatar.jpeg' height=50 width=50><a href=../../../../author/author1/index.html title="Posts by Jane Smith" rel=author>Jane Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href=>{{$post->created_at->diffForHumans()}}</a></span></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <div id=comments class=akea-comments-area>
                                <div class="akea-comments-title ">1 Yorum</div>
                                @foreach($post->comments as $comment)
                                <ol class=comment-list>
                                    <li class="comment even thread-even depth-1" id=li-comment-114>
                                        <article id=comment-114 class=comment-article>
                                            <div class=comment-avatar><img alt src='upload/avatar.jpeg' class='avatar avatar-90 photo' height=90 width=90></div>
                                            <div class=comment-body>
                                                <header class=comment-meta>
                                                    <div class="comment-author akea-title-font">{{$comment->name}}</div>
                                                    <div class="comment-time akea-info-font">
                                                        <a href=index.html#comment-114>
                                                            <time datetime=2019-01-07T17:24:05+00:00> {{$comment->created_at->diffForHumans()}}</time>
                                                        </a>
                                                    </div>
                                                    <div class=comment-reply> <a rel=nofollow class=comment-reply-link onclick="document.getElementById('comment_id').value = {{$comment->id}}" href='#' data-commentid=114 data-postid=6613 data-belowelement=comment-114 data-respondelement=respond aria-label='Reply to John'>Reply</a></div>
                                                    @foreach($comment->replies as $reply)
                                                        <div id=comment-114 class="comment-article float-md-right pull-right">
                                                            <div class=comment-avatar><img alt src="https://images.alphacoders.com/451/thumb-1920-451603.jpg" class='avatar avatar-90 photo' height=90 width=90></div>
                                                            <div class=comment-body>
                                                                <header class=comment-meta>
                                                                    <div class="comment-author akea-title-font">{{$reply->name}}</div>
                                                                    <div class="comment-time akea-info-font">
                                                                        <a href=index.html#comment-114>
                                                                            <time datetime=2019-01-07T17:24:05+00:00> {{$reply->created_at->diffForHumans()}}</time>
                                                                        </a>
                                                                    </div>
                                                                    <div class=comment-reply> <a rel=nofollow class=comment-reply-link onclick="document.getElementById('comment_id').value = {{$comment->id}}" href='#' data-commentid=114 data-postid=6613 data-belowelement=comment-114 data-respondelement=respond aria-label='Reply to John'>Reply</a></div>
                                                                </header>
                                                                <section class=comment-content>
                                                                    <p>{{$reply->comment}}</p>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </header>
                                                <section class=comment-content>
                                                    <p>{{$comment->comment}}</p>
                                                </section>
                                            </div>
                                        </article>
                                    </li>
                                </ol>
                                @endforeach
                                @if(\Illuminate\Support\Facades\Auth::check())
                                <div id=respond class=comment-respond>
                                    <h4 id="reply-title" class="comment-reply-title akea-content-font">Leave a Reply <small><a rel=nofollow id=cancel-comment-reply-link href=index.html#respond style=display:none;>Cancel Reply</a></small></h4>


                                   <form action={{route('comment.store', [$post->id])}} method="post" id=commentform class=comment-form novalidate>
                                        @csrf
                                        <input type="hidden" name="comment_id" id="comment_id">
                                        <input type="hidden" name="user_id" id="user_id">
                                        <div class=comment-form-comment>
                                            <textarea id=comment name=comment cols=45 rows=8 aria-required=true placeholder=Comment*></textarea>
                                        </div>
                                        <div class=akea-comment-form-author>
                                            <input id=author name=name type=text value={{\Illuminate\Support\Facades\Auth::user()->name}} size=30 aria-required=true readonly="readonly">
                                        </div>
                                        <div class=akea-comment-form-email>
                                            <input id=email name=email type=text value placeholder=Email* size=30 aria-required=true>
                                        </div>
                                        <div class=akea-comment-form-url>
                                            <input id=url name=url type=text value placeholder=Website size=30>
                                        </div>
                                        <div class=clear></div>
                                        <p class=comment-form-cookies-consent>
                                            <input id=wp-comment-cookies-consent name=wp-comment-cookies-consent type=checkbox value=yes>
                                            <label for=wp-comment-cookies-consent>Save my name, email, and website in this browser for the next time I comment.</label>
                                        </p>
                                        <p class=form-submit>
                                            <input name=submit type=submit id=submit class=submit value="Post Comment">
                                        </p>
                                        <p class="antispam-group antispam-group-q" id="p_afec_0">
                                            <label>Current ye@r <span class=required>*</span></label>
                                            <input type=text name=antspm-q class="antispam-control antispam-control-q" value=5.4 autocomplete=off>
                                        </p>
                                        <p class="antispam-group antispam-group-e" id="p_afec_1">
                                            <label>Leave this field empty</label>
                                            <input type=text name=antspm-e-email-url-website class="antispam-control antispam-control-e" value autocomplete=off>
                                        </p>
                                    </form>
                                </div>
                                @else
                                <p>Giriş yapınız</p>
                                    @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('js')
    <script>

    </script>
@endsection
