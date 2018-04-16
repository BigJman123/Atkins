<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/carousel.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Atkins Seed Service</title>

        <style>
            .modal-body > .img-responsive {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>
    <body>

        
        @include('layouts.header')
        
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true" style="display:none">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title lead">Website Made By</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img class="img-responsive" src="assets/JC.jpg" style="width: 50%; border-radius: 50% 50% 50% 50%"/>
                        <h4 class="text-center lead" style="font-size: 30px; font-weight: 10px; padding-top: 10px">Jordan Center 😉</h4>
                        <p class="text-center" style="padding-top: 5px">My Email: <strong>jordancprofessional@gmail.com</strong></p>
                        <p class="text-center">Twitter: <a href="https://goo.gl/qtSZtZ" target="_blank">@BigJMaaan</a></p>
                        <p class="text-center">Jordan Center on <a href="https://www.facebook.com/jordan.centr?ref=bookmarks" target="_blank">Facebook</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="egg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="text-center lead" style="font-size: 30px; font-weight: 10px; padding-top: 10px">Hulk Smaaaaaash!</h4>
                        <img class="img-responsive img-fluid" src="assets/hulk.gif"/>
                    </div>
                </div>
            </div>
        </div>
        
        @yield('content')

        @include('layouts.footer')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="//unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
        <script src="js/keypress-2.1.5.min.js"></script>
        
        <script>

            /* index page & planting */
            window.sr = ScrollReveal();
            if(innerWidth <= 546) {
                sr.reveal('.right', {origin:'bottom', duration: 1000, delay: 250, distance: '200px'});
                sr.reveal('.left', {origin: 'bottom', duration: 1000, delay: 250, distance: '200px'});
            }else {
                sr.reveal('.right', {origin:'right', duration: 1000, delay: 250, viewFactor: 0.5, distance: '175px'});
                sr.reveal('.left', {origin: 'left', duration: 1000, delay: 250, viewFactor: 0.5, distance: '175px'})
            }

            sr.reveal('.bottom', { origin: 'bottom', duration: 1000, delay: 250, distance: '100px'});

            /* employee page */
            sr.reveal('.picture', { origin: 'bottom', duration: 1000 }, 100);
            sr.reveal('.description', { origin: 'bottom', duration: 1000 }, 100);

            /* pioneer page */
            sr.reveal('.circleCheck1', { origin: 'right', duration: 1000, distance: '10px', viewFactor: 0.9 }, 750);
            sr.reveal('.circleCheck2', { origin: 'right', duration: 1000, distance: '10px', viewFactor: 0.9 }, 750);
            sr.reveal('.circleCheck3', { origin: 'right', duration: 1000, distance: '10px', viewFactor: 0.9 }, 750);
            
            sr.reveal('.check1', { origin: 'left', duration: 1000, distance: '10px', viewFactor: 0.9 }, 750);
            sr.reveal('.check2', { origin: 'left', duration: 1000, distance: '10px', viewFactor: 0.9 }, 750);
            sr.reveal('.check3', { origin: 'left', duration: 1000, distance: '10px', viewFactor: 0.9 }, 750);

            sr.reveal('.seed1',  {origin: 'bottom', duration: 500, distance: '10px', viewFactor: 0.9 }, 250);
            sr.reveal('.seed2',  {origin: 'bottom', duration: 500, distance: '10px', viewFactor: 0.9 }, 250);
            sr.reveal('.seed3',  {origin: 'bottom', duration: 500, distance: '10px', viewFactor: 0.9 }, 250);
            
            /* farming page */
                sr.reveal('.farming1', { origin: "bottom", duration: 1000, viewFactor: 0.7 }, 250);
                sr.reveal('.farming2', { origin: "bottom", duration: 1000, viewFactor: 0.7 }, 250);
                sr.reveal('.farming3', { origin: "bottom", duration: 1000, viewFactor: 0.7 }, 250);

            if(innerWidth <= 546) {
                sr.reveal('.text1', { origin: "bottom", duration: 1000, viewFactor: 0.7 }, 250);
                sr.reveal('.text2', { origin: "bottom", duration: 1000, viewFactor: 0.7 }, 250);
                sr.reveal('.text3', { origin: "bottom", duration: 1000, viewFactor: 0.7 }, 250);
            }else {
                sr.reveal('.text1', { origin: "left", duration: 2000, viewFactor: 0.8 }, 750);
                sr.reveal('.text2', { origin: "left", duration: 2000, viewFactor: 0.8 }, 750);
                sr.reveal('.text3', { origin: "left", duration: 2000, viewFactor: 0.8 }, 750);
            }
            
            $('#code').click(function() {
                $('#modal').modal({
                    show: true
                });
            })
            
            $('#code2').click(function() {
                $('#modal').modal({
                    show: true
                });
            })

            let listener = new window.keypress.Listener();

            listener.sequence_combo("h u l k s m a s h", function() {
                $('#egg').modal({
                    show: true
                })
            });

      </script>
    </body>
</html>