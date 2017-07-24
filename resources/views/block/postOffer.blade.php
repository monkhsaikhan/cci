<div class="container-fluid" style="margin-bottom: 20px">
    <div class="row">
        <div class="container">
            <h4>Мэдээ мэдээлэл / Зөвөлгөө</h4>
            <div class="containerImg">
                @foreach($item->posts as $post)
                <div class="col-lg-4">
                    <img src="{{ $post->picture }}">
                    <h5><a href="{{ route('post', $post->getKey()) }}"> {{ $post->title }}</a> </h5>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>