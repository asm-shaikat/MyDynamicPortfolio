<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/projectView.css')}}">
</head>

<body>
    @foreach($data as $data)
    <div class="project-img-parent">
        <div class="project-img-child1">
            <img src="{{ $data->image }}" alt="">
        </div>

        <div class="project-details">
            <p class="project-title">{{ $data->ptitle }}</p>
            <div class="web-end">
                <p style="font-family: monospace;">Front End</p>
                <div class="web-end-element">
                    {{ $data->fend }}
                </div>
            </div>
            <div class="web-end">
                <p style="font-family: monospace;">Back End</p>
                <div class="web-end-element">
                    {{ $data->bend }}
                </div>
            </div>
            <div class="web-end">
                <p style="font-family: monospace;">Database</p>
                <div class="web-end-element">
                    {{ $data->dbms }}
                </div>
            </div>

        </div>
    </div>

        <div class="project-img-child2">
            <p class="project-description">Description</p>
            <p>{{ $data->pdescription }}</p>
        </div>
        @endforeach

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>