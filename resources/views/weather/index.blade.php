<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>weather</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    

    <section id="weather">
        <div class="controller">
            <div class="row">
                <div class="col-8 mx-auto mt-5">
                    <div class="card">
                        <div class="card-header">
                            <h4>Search city weather</h4>
                        </div>


                        <div class="card-body">
                            <form action="{{ route('weaather.search') }}" method="get">
                                @csrf

                                <input type="text" name="search" placeholder="city name" class="form-control my-2">
                                <button class="btn btn-primary">Search</button>


                            </form>


                            <p>{{ isset($data['response']) ? $data['response'] : 'i can not conver it...now' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>