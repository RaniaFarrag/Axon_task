<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <style>
        .inline {
            float: left;
            margin-right: 5px;
        }

        table, th, td {
            border: 1px solid black;
        }
    </style>
    <body>

       <h1>Phone Numbers</h1>
       <div class="container">
           <div class="row">
               <div class="inline">
                   <div>
                       <select id="country_id">
                           <option value="">Select Country</option>
                           @foreach($countries as $country)
                               <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                           @endforeach
                       </select>
                   </div>
               </div>
               <div class="inline">
                   <div>
                       <select id="valid">
                           <option value="">Valid Phone Number</option>
                           <option value="1">Valid</option>
                           <option value="2">Not valid</option>
                       </select>
                   </div>
               </div>
           </div>

           <div class="renderTable">
               @include('customers.table_partial')
           </div>

       </div>
    </body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    function filter(btn) {
        $.ajax({
            url: "{{url('/list-phone')}}",
            type: "get",
            "data": {
                "page": btn.is("a") ? btn.attr('href').split('page=')[1] : "",
                "country_id": $("#country_id").val(),
                "valid": $("#valid").val(),
            },
            dataType: 'json',
            success: function (result) {
                $('.renderTable').html((result).viewBlade);

            },
            error: function() {
                console.log( "Ajax Not Working" );
            }
        });
    }
</script>

<script>
    $('#country_id').on('change', function () {
        filter($(this));
    });

    $('#valid').on('change', function () {
        filter($(this));
    });
</script>

