<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        
        <div class="container text-center">
            <div class="row">
                <div class="lead">From:</div>
                <div class="lead" style="padding-left: 15px;">{{ $contact['email'] }}</div>
            </div>
            
            </br>

            <div class="row">
                <div class="lead">Subject:</div>
                <div class="lead" style="padding-left: 15px;">{{ $contact['subject'] }}</div>
            </div>
            
            </br>

            <div class="row">
                <div class="lead">Message:</div>
                <div class="lead" style="padding-left: 15px;">{{ $contact['message'] }}</div>
            </div>
        </div>

    </body>
</html>
