<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 JQuery</title>
    </head>

    <body>
        <div style="text-align: center;">
            <h1>laravel 9 use jquery</h1>
            <p>Laravel 9 using jquery with cdn</p>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $("h1").css('color', 'red');
              $("p").css({ 'color': 'blue', 'font-size': '18px' });
            });
        </script>
    </body>

</html>