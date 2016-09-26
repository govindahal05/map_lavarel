<!DOCTYPE html>
        <html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laravel Map</title>
    </meta>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
@yield('content')
<script crossorigin="anonymous" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" src="https://code.jquery.com/jquery-3.1.0.min.js">
</script>
{{-- Google map api  --}}

<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4-t9LZzchrhV5CVNKRCl0ber85k14g2E&libraries=places">
</script>

<script src="{{asset('js/script.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
</body>
</html>