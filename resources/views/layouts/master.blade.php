<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/carousel.css">

        <title>Atkins Seed Service</title>
    </head>
    <body>
        
        @include('layouts.header')
        
        @yield('content')

        @include('layouts.footer')

        <script src="//code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="//unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
        
        <script>

            /* index page */
            window.sr = ScrollReveal();
            if(innerWidth <= 546) {
                sr.reveal('.right', {origin:'bottom', duration: 1000, delay: 250, distance: '200px'});
                sr.reveal('.left', {origin: 'bottom', duration: 1000, delay: 250, distance: '200px'});
            }else {
                sr.reveal('.right', {origin:'right', duration: 1000, delay: 250, viewFactor: 0.5, distance: '175px'});
                sr.reveal('.left', {origin: 'left', duration: 1000, delay: 250, viewFactor: 0.5, distance: '175px'})
            }

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
            sr.reveal('.farming1', { origin: "bottom", duration: 1000, viewFactor: 0.7 }, 500);
            sr.reveal('.farming2', { origin: "bottom", duration: 1000, viewFactor: 0.7 }, 500);
            sr.reveal('.farming3', { origin: "bottom", duration: 1000, viewFactor: 0.7 }, 500);

      </script>
    </body>
</html>