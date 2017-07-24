<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="row" style="margin-top: 50px; padding-left: 0px; margin-bottom: 20px">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <ul class="top-list" style="color: #0e0e0e; font-weight: normal">
                                <table style="border-collapse:separate; border-spacing:10px 15px; margin-top: -10px;">
                                    <tr width="100%">
                                        <td width="10%"><img src="/images/location-b.png" style="float:left; height: 20px;"></td>
                                        <td>Монгол улс, Улаанбаатар хот, Сүхбаатар дүүрэг, 1-р хороо, Жамъяан гүний гудамж 18, “The Down Town” барилга 302, 303 тоот</td>
                                    </tr>
                                    <tr width="100%">
                                        <td width="10%"><img src="/images/phone-b.png" style="float:left; height: 20px;"></td>
                                        <td>(+976) <b>77177777</b></td>
                                    </tr>
                                    <tr width="100%">
                                        <td width="10%"><img src="/images/mail-b.png" style="float:left; height: 20px;"></td>
                                        <td>info@capitalinvestment.mn</td>
                                    </tr>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row" style="margin-top: 50px; padding-left: 0px; margin-bottom: 20px">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="sr-only control-label" for="name">name</label><span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control input-md" id="name" aria-required="true" aria-invalid="false" placeholder="Name"></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="sr-only control-label" for="email">Email</label><span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control input-md" id="email" aria-required="true" aria-invalid="false" placeholder="Email"></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="sr-only control-label" for="phone">Phone</label><span class="wpcf7-form-control-wrap phone"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control input-md" id="phone" aria-required="true" aria-invalid="false" placeholder="Phone"></span>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label" for="message"> </label><br>
                                <span class="wpcf7-form-control-wrap message"><textarea name="message" cols="40" rows="7" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" id="message" aria-required="true" aria-invalid="false" placeholder="Message"></textarea></span>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit btn btn-default"><span class="ajax-loader"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="map"></div>
    </div>
</div>

@section('js')
    <script>
        function initMap() {
            var uluru = {lat: 47.9158752, lng: 106.9183457};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNSdS7vUtCxFJGJe53NFpSuxKJ1YMuY8U&callback=initMap">
    </script>

@endsection