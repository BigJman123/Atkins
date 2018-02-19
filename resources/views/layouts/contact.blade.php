@extends('layouts.master')

@section('content')
    
    <div class="container text-center farming-header-padding-mobile" style="padding-top: 100px; padding-bottom: 100px">
        <p class="lead mobile-font-size original-padding-none" style="font-size: 25px; letter-spacing: 1px">Thank you for taking an interest in Atkins Seed Service!</p>
        <p class="lead mobile-font-size original-padding-none" style="font-size: 25px; letter-spacing: 1px">We look forward to serving you!</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md">
                <h5 class="lead text-center mobile-font-size">We're located at:</h5>
                <h6 class="lead text-center mobile-font-size"><strong>31074 N 3360 East Rd, Chenoa, IL 61726</strong></h6>
                <div id="map" class="" style="height: 400px; border: 1px solid;"></div>
            </div>

            <div class="col-md farming-email-padding-mobile">

                <h3 class="lead text-center" style="font-size: 25px; letter-spacing: 1px; padding-bottom: 25px">Please email us any questions you have below.</h3>

                <form style="padding-bottom: 50px;">
                    <div class="form-group">
                        <label for="EmailImput">Your Email Address</label>
                        <input type="email" class="form-control" id="EmailImput" placeholder="address@example.com">
                    </div>
                    <div class="form-group">
                        <label for="SubjectInput">Subject</label>
                        <input type="subject" class="form-control" id="SubjectInput" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label for="TextArea">Message</label>
                        <textarea class="form-control" id="TextArea" rows="5" placeholder="Your Message Here"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-success header-div">Send</button>
                    </div>
                </form>
            </div>    
        </div>

        <div class="row farming-phone-padding-mobile" style="padding-bottom: 100px">
            <div class="col-md text-center mobile-padding" style="padding-top: 25px; margin-left: 5px; margin-right: 5px;">
                <div class="row">
                    <h5 class="col lead mt-2" style="padding-bottom: 10px; letter-spacing: 1px; font-weight: 500">
                        HOURS OF OPERATION
                    </h5>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px;">Monday</div>
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px;">7AM - 5PM</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px;">Tuesday</div>
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px;">7AM - 5PM</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px;">Wednesday</div>
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px;">7AM - 5PM</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px;">Thursday</div>
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px;">7AM - 5PM</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px;">Friday</div>
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px;">7AM - 5PM</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px;">Saturday</div>
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px;">CLOSED</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px;">Sunday</div>
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px;">CLOSED</div>
                </div>
            </div>

            <div class="col text-center farming-phone-padding-top-mobile" style="padding-top: 25px; margin-left: 15px; margin-right: 5px;">
                <div class="row d-flex flex-column" style="padding-bottom: 20px">
                    <h5 class="col lead mt-2" style="padding-top: 10px; padding-bottom: 10px; letter-spacing: 1px; font-weight: 250">
                        If you prefer to call
                    </h5>
                    <h5 class="col lead mt-2" style="padding-top: 10px; padding-bottom: 10px; letter-spacing: 1px; font-weight: 500">
                        PLEASE CALL US AT:
                    </h5>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px;"><strong>(815)-945-5113</strong></div>
                </div>
            </div>
        
        </div>

    </div>

    <script src="//maps.google.com/maps/api/js?key=AIzaSyBEuvV9yVgcO4IdFQleIXSPxUurvPE_UFk"></script>
    <script>
        function regular_map() {
        var var_location = new google.maps.LatLng(40.743197, -88.622706);

        var var_mapoptions = {
            center: var_location,
            zoom: 14
        };

        var var_map = new google.maps.Map(document.getElementById("map"),
            var_mapoptions);

        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title: "Atkins Seed Service"
        });
    }

    // Initialize maps
    google.maps.event.addDomListener(window, 'load', regular_map);

    </script>


@endsection