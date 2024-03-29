@extends('front.layouts.master')
@section('title', 'Anasayfa')
@section('content')
<div class=akea-page-wrapper id=akea-page-wrapper>
    <div class=gdlr-core-page-builder-body>
        <div class="gdlr-core-pbf-wrapper " id="div_2207_0" id=gdlr-core-wrapper-1>
            <div class=gdlr-core-pbf-background-wrap></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-post-slider-item gdlr-core-item-pdb gdlr-core-item-pdlr clearfix " id="div_2207_1">
                            <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type=slider data-effect=default data-nav=navigation data-disable-autoslide=1>
                                <ul class=slides>
                                    @foreach($articles as $article)
                                        @if($article->status == 1)
                                            <li>
                                                <div class=gdlr-core-post-slider-slide>
                                                    <div class="gdlr-core-post-slider-image gdlr-core-media-image">
                                                        <a href={{route('single', [$article->getCategory->slug,$article->slug])}}><img src="{{$article->image}}" alt width=1500 height=635 title=pexels-photo-736166><span class=gdlr-core-post-slider-overlay id="span_2207_0"></span></a>
                                                    </div>
                                                    <div class="gdlr-core-post-slider-caption gdlr-core-center-align">
                                                        <h3 class="gdlr-core-post-slider-title" id="h3_2207_0"><a href="{{route('single', [$article->getCategory->slug,$article->slug])}}" >{{$article->title}}</a></h3>
                                                        <div class=gdlr-core-post-slider-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class=gdlr-core-blog-info-sep >/</span>{{$article->created_at->diffForHumans()}}</span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class=gdlr-core-blog-info-sep >/</span><a href=# title="Posts by {{$article->getAuthor->name}}" rel=author>{{$article->getAuthor->name}}</a></span></div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-sidebar-wrapper ">
            <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" id="div_2207_2">
                    <div class=gdlr-core-pbf-sidebar-content-inner data-skin="Blog List">
                        <div class=gdlr-core-pbf-element>
                            <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full">
                                <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout=fitrows>
                                    @include('front.widgets.articlelist')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  akea-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" data-skin="Blog List" id="div_2207_9">
                            @if(\Illuminate\Support\Facades\Auth::check())
                            <div class="gdlr-core-widget-box-shortcode  gdlr-core-center-align" id="div_2207_10">
                                <div class="card-header" style="width: 18rem;">
                                    <img class="rounded-circle mx-lg-0 d-block" src="{{\Illuminate\Support\Facades\Auth::user()->image}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{\Illuminate\Support\Facades\Auth::user()->name}}</h5>
                                        <h5>{{\Illuminate\Support\Facades\Auth::user()->roles->pluck('name')}}</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <div class="akea-main-menu-left-wrap akea-main-menu-left-social clearfix akea-item-pdlr akea-navigation-top">
                                            <a href={{$setting->twitter}} target=_blank class=akea-top-bar-social-icon title=twitter>
                                                <i class="fa fa-twitter" ></i>
                                            </a>
                                            <a href="{{$setting->github}}" target=_blank class=akea-top-bar-social-icon title=github>
                                                <i class="fa fa-github" ></i>
                                            </a>
                                            <a href={{$setting->linkedin}} target=_blank class=akea-top-bar-social-icon title=linkedin>
                                                <i class="fa fa-linkedin" ></i>
                                            </a>
                                            <a href={{$setting->medium}} target=_blank class=akea-top-bar-social-icon title=medium>
                                                <i class="fa fa-medium" ></i>
                                            </a>
                                        </div>
                                        <br>
                                            <div class="button-input">
                                                <a href="{{route('myuser.myprofile.edit')}}" style="color: black" class="btn btn-outline-success">Profili Gör</a> <a href="{{route('myuser.myprofile.logout')}}" style="color: black" class="btn btn-outline-danger">Çıkış</a>
                                            </div>
                                        <hr>
                                            <div class="button-input">
                                            <a href="{{route('myuser.myprofile.posts.index')}}" style="color: black" class="btn btn-outline-dark">Makalelerim</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            @else
                                <div id=text-4 class="widget widget_text akea-widget">
                                    <h3 class="akea-widget-title"><span class=akea-widget-head-text>Hakkımızda</span><span class=akea-widget-head-divider></span></h3><span class=clear></span>



                                        @include('auth.login')

                                </div>
                            @endif
                            <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                                <div id=text-4 class="widget widget_text akea-widget">
                                    <h3 class="akea-widget-title"><span class=akea-widget-head-text>Hakkımızda</span><span class=akea-widget-head-divider></span></h3><span class=clear></span>
                                    <div class=textwidget>


                                                @foreach($pages as $page)
                                                @if($page->id==1)
                                                <p><img class="alignnone size-full wp-image-6650" src="{{$page->image}}" alt width=500>
                                                <br>{{\Illuminate\Support\Str::limit($page->hakkimda, 200)}}</p> <a class="gdlr-core-button gdlr-core-button-shortcode  gdlr-core-button-transparent gdlr-core-button-with-border" href="{{route('page', $page->slug, ['id' => '1'])}}" target=_blank id="a_2207_10" rel="noopener noreferrer"><span class=gdlr-core-content >Hakkımızda daha fazlası için </span><i class="gdlr-core-pos-right arrow_right"  ></i></a></div>
                                                 @endif
                                             @endforeach()

                                </div>
                                <div id=text-7 class="widget widget_text akea-widget">
                                    <div class=textwidget>
                                        <div class="gdlr-core-widget-box-shortcode  gdlr-core-center-align" id="div_2207_10">
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top" id="div_2207_11">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_2207_9">Bizi Takip Edin<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" id="div_2207_12"><a href={{$setting->twitter}} target=_blank class=gdlr-core-social-network-icon title=twitter id="a_2207_11" rel="noopener noreferrer"><i class="fa fa-twitter" ></i></a><a href={{$setting->github}} target=_blank class=gdlr-core-social-network-icon title=github id="a_2207_12" rel="noopener noreferrer"><i class="fa fa-github" ></i></a><a href={{$setting->linkedin}} target=_blank class=gdlr-core-social-network-icon title=linkedin id="a_2207_13" rel="noopener noreferrer"><i class="fa fa-linkedin" ></i></a><a href={{$setting->medium}} target=_blank class=gdlr-core-social-network-icon title=twitter id="a_2207_14" rel="noopener noreferrer"><i class="fa fa-medium" ></i></a>
                                            <br> <span class=gdlr-core-space-shortcode id="span_2207_3"></span>
                                            <br>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top" id="div_2207_13">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_2207_10">Günlük Posta<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>Gelişmelerden en hızlı haberdar olmak için email bültenimize abone olun.<span class=gdlr-core-space-shortcode id="span_2207_4"></span>
                                            <br>
                                            <div class="tnp tnp-subscription-minimal ">
                                                <form action="#" method=post>
                                                    <input class=tnp-email type=email required name=ne value placeholder=Email>
                                                    <input class=tnp-submit type=submit value=AboneOl>
                                                </form>
                                            </div> <span class=gdlr-core-space-shortcode id="span_2207_5"></span></div>
                                    </div>
                                </div>
                                <div id=gdlr-core-recent-post-widget-2 class="widget widget_gdlr-core-recent-post-widget akea-widget">
                                    <h3 class="akea-widget-title"><span class=akea-widget-head-text>En popüler yazılar</span><span class=akea-widget-head-divider></span></h3><span class=clear></span>
                                    <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
                                            <div class="gdlr-core-recent-post-widget clearfix">
                                            @foreach($articles as $post)
                                                @if($post->hit > 5)
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src={{asset($post->image)}} alt width=150 height=150 title=qingbao-meng-330658-unsplash></div>
                                                <div class=gdlr-core-recent-post-widget-content>
                                                    <div class=gdlr-core-recent-post-widget-title><a href={{route('single', [$article->getCategory->slug,$article->slug])}}>{{$post->title}}</a></div>
                                                    <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img alt src='upload/avatar.jpeg' class='avatar avatar-50 photo' height=50 width=50><a href=# title="Posts by Paul Newman" rel=author>{{$post->getAuthor->name}}</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href=#>{{$post->created_at->diffForHumans()}}</a></span></div>
                                                </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                    </div>
                                </div>

                               @include('front.widgets.category_widget')

                                <div id=tag_cloud-2 class="widget widget_tag_cloud akea-widget">
                                    <h3 class="akea-widget-title">
                                        <span class=akea-widget-head-text>Tags</span>
                                        <span class=akea-widget-head-divider></span>
                                    </h3>
                                    <span class=clear></span>
                                    <div class=tagcloud>
                                        <a href=# class="tag-cloud-link tag-link-117 tag-link-position-1" id="a_2207_16" aria-label="Beach (2 items)">Beach</a>
                                        <a href=# class="tag-cloud-link tag-link-130 tag-link-position-2" id="a_2207_17" aria-label="Dress (3 items)">Dress</a>
                                        <a href=# class="tag-cloud-link tag-link-10 tag-link-position-3" id="a_2207_18" aria-label="Fashion (7 items)">Fashion</a>
                                        <a href=# class="tag-cloud-link tag-link-126 tag-link-position-4" id="a_2207_19" aria-label="Food (5 items)">Food</a>
                                        <a href=# class="tag-cloud-link tag-link-140 tag-link-position-5" id="a_2207_20" aria-label="Gadget (1 item)">Gadget</a>
                                        <a href=# class="tag-cloud-link tag-link-138 tag-link-position-6" id="a_2207_21" aria-label="Holiday (1 item)">Holiday</a>
                                        <a href=# class="tag-cloud-link tag-link-14 tag-link-position-7" id="a_2207_22" aria-label="Nature (2 items)">Nature</a>
                                        <a href=# class="tag-cloud-link tag-link-142 tag-link-position-8" id="a_2207_23" aria-label="Ocean (1 item)">Ocean</a>
                                        <a href=# class="tag-cloud-link tag-link-131 tag-link-position-9" id="a_2207_24" aria-label="Photography (4 items)">Photography</a>
                                        <a href=# class="tag-cloud-link tag-link-17 tag-link-position-10" id="a_2207_25" aria-label="Post Format (7 items)">Post Format</a>
                                        <a href=# class="tag-cloud-link tag-link-139 tag-link-position-11" id="a_2207_26" aria-label="Style (1 item)">Style</a>
                                        <a href=# class="tag-cloud-link tag-link-128 tag-link-position-12" id="a_2207_27" aria-label="Tech (10 items)">Tech</a>
                                        <a href=# class="tag-cloud-link tag-link-20 tag-link-position-13" id="a_2207_28" aria-label="Tips (2 items)">Tips</a>
                                        <a href=# class="tag-cloud-link tag-link-115 tag-link-position-14" id="a_2207_29" aria-label="Travel (10 items)">Travel</a>
                                    </div>
                                </div>
                                <div id=gdlr-core-recent-post-widget-3 class="widget widget_gdlr-core-recent-post-widget akea-widget">
                                    <h3 class="akea-widget-title"><span class=akea-widget-head-text>Recent Post</span><span class=akea-widget-head-divider></span></h3><span class=clear></span>
                                    @foreach($recents as $recent)
                                    <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-full">
                                        <div class="gdlr-core-recent-post-widget clearfix">
                                            <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href={{asset('front/')}}/upload/post-vr.jpg><img src={{$recent->image}} alt width=1000 height=486 title=post-vr></a><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href=# rel=tag>{{$recent->getCategory->name}}</a></span></div>
                                            <div class=gdlr-core-recent-post-widget-content>
                                                <div class="gdlr-core-recent-post-widget-title gdlr-core-title-font"><a href={{route('single', [$article->getCategory->slug,$article->slug])}}>{{$recent->title}}</a></div>
                                                <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img alt src='{{asset('front/')}}/upload/avatar.jpeg' class='avatar avatar-50 photo' height=50 width=50><a href=# title="Posts by Jane Smith" rel=author>{{$recent->getAuthor->name}}</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href=#>{{$recent->created_at->diffForHumans()}}</a></span></div>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
