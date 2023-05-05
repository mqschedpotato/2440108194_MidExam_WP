<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Star</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @php
        use Carbon\Carbon;
        $current_time = Carbon::now()->setTimeZone('Asia/Jakarta');

        if ($current_time->hour < 12) {
            $greeting = 'Good Morning';
        } elseif ($current_time->hour > 18) {
            $greeting = 'Good Evening';
        } else {
            $greeting = 'Good Afternoon';
        }
    @endphp
    <header id="header" class="bg-light">
        <div class="container p-sm-3">
            <div class="d-flex justify-content-between py-1">
                <h4 class="text-dark">{{$greeting}},
                    {{ $request->user_id == 1 ? 'Mr. Vico Lomar ' : ($request->user_id == 2 ? 'Ms. Fei Fei Li ' : 'People') }}
                </h4>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-{{ $color }} p-0" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $request->user_id == 1 ? 'Gold ' : ($request->user_id == 2 ? 'Green ' : 'Neutral') }}
                            Level
                        </a>
                        <ul class="dropdown-menu">
                            @if ($request->user_id == 1)
                                <li><a class="dropdown-item" href="{{ route('homepage', ['user_id' => 2]) }}">Change
                                        User
                                        To Green</a></li>
                                <li><a class="dropdown-item" href="{{ route('homepage') }}">Change
                                        Back
                                        To Neutral</a></li>
                            @elseif($request->user_id == 2)
                                <li><a class="dropdown-item" href="{{ route('homepage', ['user_id' => 1]) }}">Change
                                        User
                                        To Gold</a></li>
                                <li><a class="dropdown-item" href="{{ route('homepage') }}">Change
                                        Back
                                        To Neutral</a></li>
                            @else
                                <li><a class="dropdown-item" href="{{ route('homepage', ['user_id' => 2]) }}">Change
                                        User
                                        To Green</a></li>
                                <li><a class="dropdown-item" href="{{ route('homepage', ['user_id' => 1]) }}">Change
                                        User
                                        To Gold</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>

            </div>
        </div>



    </header>
    <nav class="navbar navbar-expand-lg bg-light shadow">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                <ul class="navbar-nav mb-2 ms-auto me-auto mb-lg-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="#"> <i class="fa-regular fa-user"
                                aria-hidden="true"></i> Profile</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#"> <i class="fa fa-envelope" aria-hidden="true"></i>
                            Transaction </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container my-4" id="product">
        <h3>151 <i class="fa fa-star text-{{ $color }}" aria-hidden="true"></i> </h3>
        <h6>Star Balance</h6>


        <button class="btn btn-dark rounded-pill shadow"> Redeem <i class="fa fa-star text-{{ $color }}"
                aria-hidden="true"></i>
        </button>
        <div id="promo" class="my-5">
            <div class="d-flex justify-content-center border-0">
                <img src="{{ asset($request->user_id == 1 ? 'images/1.png ' : ($request->user_id == 2 ? 'images/2.png ' : 'images/')) }}"
                    class="promo-card">
            </div>

            <br>

            <h3>Promo Information</h3>
            <div class="row my-3">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center">
                        <img class="img-thumbnail"
                            src="https://asset.kompas.com/crops/Zx-i1LfsyTUseXT0eYqhKEo3ykk=/0x108:1000x608/750x500/data/photo/2017/08/08/3437766344.jpg"
                            alt="">
                        <div class="promo-box px-3">
                            <div class="promo-title">
                                <h5>Buy 1 Get 1 Coffee </h3>
                            </div>
                            <div class="promo-description">
                                Looking for a delicious and affordable way to start your day? Look no further than our
                                "buy 1 get 1" Coffee Promotion!
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center">
                        <img class="img-thumbnail"
                            src="https://asset.kompas.com/crops/Zx-i1LfsyTUseXT0eYqhKEo3ykk=/0x108:1000x608/750x500/data/photo/2017/08/08/3437766344.jpg"
                            alt="">
                        <div class="promo-box px-3">
                            <div class="promo-title">
                                <h5>Buy 1 Get 1 Coffee </h3>
                            </div>
                            <div class="promo-description">
                                Looking for a delicious and affordable way to start your day? Look no further than our
                                "buy 1 get 1" Coffee Promotion!
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center">
                        <img class="img-thumbnail"
                            src="https://asset.kompas.com/crops/Zx-i1LfsyTUseXT0eYqhKEo3ykk=/0x108:1000x608/750x500/data/photo/2017/08/08/3437766344.jpg"
                            alt="">
                        <div class="promo-box px-3">
                            <div class="promo-title">
                                <h5>Buy 1 Get 1 Coffee </h3>
                            </div>
                            <div class="promo-description">
                                Looking for a delicious and affordable way to start your day? Look no further than our
                                "buy 1 get 1" Coffee Promotion!
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center">
                        <img class="img-thumbnail"
                            src="https://asset.kompas.com/crops/Zx-i1LfsyTUseXT0eYqhKEo3ykk=/0x108:1000x608/750x500/data/photo/2017/08/08/3437766344.jpg"
                            alt="">
                        <div class="promo-box px-3">
                            <div class="promo-title">
                                <h5>Buy 1 Get 1 Coffee </h3>
                            </div>
                            <div class="promo-description">
                                Looking for a delicious and affordable way to start your day? Look no further than our
                                "buy 1 get 1" Coffee Promotion!
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>

            </div>
            <button class="btn bg-{{ $color }}"> Coffee </button>
        </div>
    </div>
    <footer>
        <div class="text-center bg-{{ $color }} py-4">
            &copy; 2023 Jco Coffee Company , All Rights Reserved.
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>


</body>

</html>
