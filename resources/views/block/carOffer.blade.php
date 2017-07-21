<!-- Car offer -->
<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Санал болгож буй бараа</h4>
                    </div>
                </div>
            </div>
            @foreach($item->offers->chunk(4) as $group)
                <div class="row">
                    <div class="animatable fadeInDown">
                        <div class="col-lg-12 col-md-12 col-sm-12 marginB15">
                            @foreach($group as $car)
                            <div class="col-lg-3 paddingR6">
                                <div>
                                    <img src="{{ asset($car->path) }}" width="100%">
                                </div>
                                <div class="divImgText">
                                    <h4>{{ $car->name }}</h4>
                                    <label class="help-block">{{ $car->attribute  }}</label>
                                    <label>${{ $car->price }}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>