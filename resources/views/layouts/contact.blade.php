@extends('layouts.master')

@section('content')

    <style type="text/css">
        #map {
            width: 400px;
            height: 400px;
        }

        @media(max-width: 456px) {
            #map {
                width: 325px;
                height: 325px;
            }
        }
    </style>

    <div class="container text-center mobile-padding" style="padding-top: 100px; padding-bottom: 50px">
        <p class="lead mobile-font-size original-padding-none" style="font-size: 25px; letter-spacing: 1px">Thank you for taking an interest in Atkins Seed Service!</p>
        <p class="lead mobile-font-size original-padding-none" style="font-size: 25px; letter-spacing: 1px">We look forward to serving you!</p>
    </div>

    <div class="container" style="padding-bottom: 50px">
        <div class="row">
            <div class="col-md">
                <h5 class="text-center mobile-font-size">We're located at:</h5>
                <h6 class="text-center mobile-font-size">31074 N 3360 East Rd, Chenoa, IL 61726</h6>
                <div id="map" style="border: 1px solid #999999;"></div>
            </div>

            <div class="col-md text-center mobile-padding" style="padding-top: 58px; margin-left: 5px; margin-right: 5px;">
                <div class="row" style="border: 1px solid #999999;">
                    <h5 class="col lead mt-2" style="padding-top: 10px; padding-bottom: 10px; letter-spacing: 1px; font-weight: 500">
                        HOURS OF OPERATION
                    </h5>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px; border: 1px solid #999999">Monday</div>
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px; border: 1px solid #999999">7AM - 5PM</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px; border: 1px solid #999999">Tuesday</div>
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px; border: 1px solid #999999">7AM - 5PM</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px; border: 1px solid #999999">Wednesday</div>
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px; border: 1px solid #999999">7AM - 5PM</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px; border: 1px solid #999999">Thursday</div>
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px; border: 1px solid #999999">7AM - 5PM</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px; border: 1px solid #999999">Friday</div>
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px; border: 1px solid #999999">7AM - 5PM</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px; border: 1px solid #999999">Saturday</div>
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px; border: 1px solid #999999">CLOSED</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px; border: 1px solid #999999">Sunday</div>
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px; border: 1px solid #999999">CLOSED</div>
                </div>
            </div>

            <div class="col-md text-center margin-mobile mobile-padding" style="padding-top: 58px; margin-left: 15px; margin-right: 5px;">
                <div class="row" style="border: 1px solid #999999;">
                    <h5 class="col lead mt-2" style="padding-top: 10px; padding-bottom: 10px; letter-spacing: 1px; font-weight: 500">
                        PLEASE CALL US AT:
                    </h5>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px; border: 1px solid #999999"><strong>(815)-945-5113 </br>or</br> (815)-674-5112</strong></div>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 10px; padding-bottom: 10px; border: 1px solid #999999">or email us below!</div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="container text-center original-padding-none" style="padding-top: 50px; padding-bottom: 50px">
        <p class="lead" style="font-size: 25px; letter-spacing: 1px">Please email us any questions you might have below.</p>
    </div>

    <form class="container form-mobile-width" style="width: 600px; padding-bottom: 50px;">
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
            <textarea class="form-control" id="TextArea" rows="8" placeholder="Your Message Here"></textarea>
        </div>
        <div class="form-group text-right">
            <button type="button" class="btn btn-success header-div">Send</button>
        </div>
    </form>

    <script src="js/gmaps.js"></script>
    <script>
        var initMap = function() {
                var map = new GMaps({
                el: '#map',
                lat: 40.743197,
                lng: -88.622706,
            });

            map.addMarker({
                lat: 40.743197,
                lng: -88.622706,
                title: 'Atkins',
                infoWindow: {
                    content: '<p>Atkins Seed Service</p>'
                }
            });
        };
    </script>
    <script src="//maps.google.com/maps/api/js?key=AIzaSyBEuvV9yVgcO4IdFQleIXSPxUurvPE_UFk&callback=initMap"></script>


@endsection