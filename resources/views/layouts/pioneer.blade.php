@extends('layouts.master')

@section('content')

    <div class="container text-center logo-container-padding-mobile" style="padding-top: 75px">
        <img src="assets/PioneerLogo.png" class="pioneer-planting-logo-mobile-size">

        <p class="lead mobile-font-size pioneer-description-padding-mobile" style="padding-top: 75px; font-size: 25px">
            We are an authorized Pioneer HiBred dealer representing Pioneer for over 40 years.
            As the world's leading developer and supplier of advanced plant genetics worldwide,
            Pioneer's goal is to increase customer productivity, profitability, and develop
            sustainable agricultural systems for people everywhere.
        </p>

        <p class="lead mobile-font-size pioneer-description-padding-mobile" style="padding-top: 25px; font-size: 25px">
            Pioneer's research efforts lead the way to better insect and disease resistance,
            geonomics, quality traits, agronomic traits, and precision farming technologies
            to help manage crop production.
        </p>

        <div class="row justify-content-center pioneer-info-padding-mobile" style="padding-top: 100px;">
            <div class="col-md-4">
                <div class="card mb-4" style="box-shadow: 3px 3px 3px #7c7c7c">
                    <div class="card-header" style="font-size: 1.5em; font-weight: 250; letter-spacing: 1px">
                        Seeds We Provide:
                    </div>
                    <div class="card-body">
                        {{-- "Corn Seed" by Patrick Snyder from The Noun Project. Modified. https://thenounproject.com/term/corn-seed/395777/ --}}
                        <p class="card-text" style="font-size: 25px; letter-spacing: 1px"><img src="assets/corn-seed.svg" class="seed" style="margin-right: 10px; padding-bottom: 5px;"><strong>Corn</strong><img src="assets/green-checkmark-circle.svg" class="rightSeed" style="margin-left: 10px"></p>
                        {{-- "Wheat" by Blaise Sewell from The Noun Project. Modified. https://thenounproject.com/term/wheat/76330/ --}}
                        <p class="card-text" style="font-size: 25px; letter-spacing: 1px"><img src="assets/wheat.svg" class="seed" style="padding-bottom: 5px;"><strong>Wheat</strong><img src="assets/green-checkmark-circle.svg" class="rightSeed" style="margin-left: 10px"></p>
                    </div>
                    <div class="card-header" style="font-size: 1.5em; font-weight: 250; letter-spacing: 1px">
                        Beans We Provide:
                    </div>
                    <div class="card-body">
                        {{-- "Soy Bean" by Jamie Yeo from The Noun Project. Modified. https://thenounproject.com/term/soy/1067299/ --}}
                        <p class="card-text" style="font-size: 25px; letter-spacing: 1px"><img src="assets/soy.svg" class="seed" style="margin-right: 10px; padding-bottom: 5px;"><strong>Soy</strong><img src="assets/green-checkmark-circle.svg" class="rightSeed" style="margin-left: 10px"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card mb-4" style="box-shadow: 3px 3px 3px #7c7c7c">
                    <div class="card-header" style="font-size: 1.5em; font-weight: 250; letter-spacing: 1px">
                        Other Services We Provide:
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <p style="font-size: 25px; padding-top: 25px; padding-bottom: 25px;"><img src="assets/green-checkmark.svg" class="leftSeed" style="margin-right: 10px"><strong>Seed Treatment</strong></p>
                        </div>
                        <div class="card-text">
                            <p style="font-size: 25px; padding-bottom: 25px;"><img src="assets/green-checkmark.svg" class="leftSeed" style="margin-right: 10px"><strong>Agronomy & Nutrition</strong></p>
                        </div>
                        <div class="card-text">
                            <p style="font-size: 25px; padding-bottom: 10px;"><img src="assets/green-checkmark.svg" class="leftSeed" style="margin-right: 10px"><strong>Production Consultation</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection