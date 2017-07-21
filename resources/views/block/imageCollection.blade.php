<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="margin-bottom: 20px">
                    <div class="gallery" style="margin-top: 40px;">
                        @foreach($item->itemable->items as $item)
                        <div class="col-lg-3 image-collection">
                            <a href="{{ asset($item->path) }}" class="big"><img src="{{ asset($item->path) }}" alt="" /></a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>