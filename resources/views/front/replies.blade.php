<article id=comment-114 class=comment-article>
    <div class=comment-avatar><img alt src='upload/avatar.jpeg' class='avatar avatar-90 photo' height=90 width=90></div>
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
</article>
