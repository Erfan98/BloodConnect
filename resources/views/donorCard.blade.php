<!doctype html>
<html lang="en">

<head>
  <title>Blood Connect</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
          <div class="container">
            <img src="{{asset('logo.png')}}" class="img-fluid rounded-top" alt="" width="50">
            <a class="navbar-brand" href="#">Blood Connect</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="p23">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="p23">Donor Card Verification <span class="visually-hidden">(current)</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">

                    @auth
                    <li class="nav-item">
                        <a class="nav-link active" href="#" target="_blank" rel="noopener noreferrer">{{Auth::user()->name}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/logout" target="_blank" rel="noopener noreferrer">Logout</a>
                    </li>
                    @endauth
                    @guest
                        <li class="nav-item">
                        <a class="nav-link active" href="/login" aria-current="p23">Login <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/register" aria-current="p23">Register <span class="visually-hidden">(current)</span></a>
                    </li>
                    @endguest

                </ul>

            </div>
      </div>
    </nav>

  </header>
<main>
    <picture class="text-center">
        {{-- <source srcset="sourceset" type="image/svg+xml"> --}}
        <img src="{{asset('donor.png')}}" class="img-fluid mx-auto" alt="image desc">
      </picture>
</main>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  {{-- Jquery File --}}
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


  {{-- Data Table Integration --}}
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js" integrity="sha512-42PE0rd+wZ2hNXftlM78BSehIGzezNeQuzihiBCvUEB3CVxHvsShF86wBWwQORNxNINlBPuq7rG4WWhNiTVHFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src={{asset('app.js')}} ></script>
</body>


</html>
