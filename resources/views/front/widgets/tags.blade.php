<div id=tag_cloud-2 class="widget widget_tag_cloud akea-widget">
    <h3 class="akea-widget-title">
        <span class=akea-widget-head-text>Tags</span>
        <span class=akea-widget-head-divider></span>
    </h3>
    <span class=clear></span>
    <div class=tagcloud>
        @foreach($tags as $tag)
        <a href=# class="tag-cloud-link tag-link-117 tag-link-position-1" id="a_2207_16" aria-label="Beach (2 items)">{{$tag->name}}</a>
        @endforeach
    </div>
</div>
