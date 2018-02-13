@extends('layouts.master')

@section('content')

  <body>

    <main role="main">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-pause="false" style="padding-bottom: 50px">
        <div class="carousel-inner">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
            <div class="carousel-item active">
            <img class="d-block w-100" src="assets/AtkinsFamily.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left small-margins" style="margin-bottom: 50px">
                <h2 class="small-caption">Family Owned and Operated.</h2>
                <p class="d-none d-sm-block">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="assets/Tractor960x480.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption text-left small-margins" style="margin-bottom: 50px">
                <h2 class="small-caption">Precision Planting</h2>
                <p class="d-none d-sm-block">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                {{-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Do Something</a></p> --}}
              </div>
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="assets/Field960x480.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-left small-margins" style="margin-bottom: 50px">
                <h2 class="small-caption">The Best Equipment For The Job</h2>
                <p class="d-none d-sm-block">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                {{-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Do Something</a></p> --}}
              </div>
            </div>
            </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    

        <div class="container">
                
                {{-- <hr class="featurette-divider"> --}}
        
                <div class="row featurette right original-padding-none mobile-padding" style="padding-top: 50px; padding-bottom: 50px;">
                  <div class="col-md-7">
                      <h2 class="featurette-heading">Precision Planting <br><span class="text-muted" style="font-size: 20px">The Right Tools For The Job</span></h2>
                      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                      {{-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Do Something</a></p> --}}
                  </div>

                  <div class="col-md-5">
                      <img class="featurette-image img-fluid mx-auto" style="border-radius: 25px;" src="assets/2020SeedSenseProducts.jpg" alt="Generic placeholder image">
                  </div>
                </div>

                {{-- <hr class="featurette-divider"> --}}

                <div class="row featurette left original-padding-none mobile-padding" style="padding-top: 50px; padding-bottom: 50px">
                  <div class="col-md-7 order-md-2">
                      <h2 class="featurette-heading">Pioneer Seeds <br><span class="text-muted" style="font-size: 20px">The Best Seeds Avaliable</span></h2>
                      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                      {{-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Do Something</a></p> --}}
                  </div>

                  <div class="col-md-5 order-md-1">
                      <img class="featurette-image img-fluid mx-auto" style="border-radius: 25px;" src="assets/Pioneer-Seeds.jpg" alt="Pioneer Seeds">
                  </div>
                </div>

                {{-- <hr class="featurette-divider"> --}}

                <div class="row featurette right original-padding-none mobile-padding" style="padding-top: 50px">
                  <div class="col-md-7">
                      <h2 class="featurette-heading">Custom Farming <br><span class="text-muted" style="font-size: 20px">Something Something Farming</span></h2>
                      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                      {{-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Do Something</a></p> --}}
                  </div>

                  <div class="col-md-5">
                      <img class="featurette-image img-fluid mx-auto" style="border-radius: 25px;" src="assets/Crops500x500.jpg" alt="Crops">
                  </div>
                </div>

                {{-- <hr class="featurette-divider"> --}}
        </div>

      </div><!-- /.container -->

    </main>
  </body>

@endsection