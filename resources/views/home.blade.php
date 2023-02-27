<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lilac</title>

    <link rel="stylesheet" href="{{ asset('style/style.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>



<body>
    <div class="container">
        <div class="main mt-5">  
            <h5>Search</h5>
            <input type="text" name="search_data" placeholder="search name / designation / department" class="search_data" id="search_data">
            <div class="details">
                    @foreach ($users as $user)
                    <div class="card_section">
                        <div class="h6">{{$user->Name}}</div>
                        <div style="font-weight:500">{{$user->department->Name}}</div>
                        <div>{{ $user->designation->Name}}</div>
                    </div>
                    @endforeach 
            </div>  
        </div>
    </div>
    

    <script>
        $(document).ready(function(){
            $("#search_data").keyup(function(){
                var filter = $(this).val(), count = 0;
                $(".card_section").each(function(){
                    if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                        $(this).fadeOut();
                    } else {
                        $(this).show();
                        count++;
                    }
                });
                if(count < 1) {
                    $("#no-count").text('No result');
                } else {
                $("#no-count").text('');
                }
                
            });
        });

    </script>

</body>
</html>