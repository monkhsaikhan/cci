<div class="row" style="background: url('{{ asset($item->itemable->path) }}') no-repeat center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row wrapper-image-small">
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <h1>
                                {{ $item->itemable->title }}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>