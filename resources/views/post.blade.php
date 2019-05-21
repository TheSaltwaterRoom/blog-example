<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <div class="card">
            <div class="card-body">
                <div class="row products-list">
                    @foreach($posts as $post)
                        <div class="col-3 product-item">
                            <div class="product-content">
                                <div class="top">
                                   文章标题 {{ $post->title }}
                                </div>
                                <div class="bottom">
                                   作者 {{ $post->author->name }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
