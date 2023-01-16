<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="container h-100 d-flex align-items-center justify-content-center">

    <div class="card text-center" style="width: 30rem; border-radius:10px">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
        <div class="card-body bg-danger text-white" style="border-radius:10px">

            <h3 class="card-title ">Blood Connect ID Card</h3>
            <h4 class="card-title ">{{Auth::user()->name}}</h4>
          {{-- <p class="card-text">Donor ID:13123213</p> --}}
          <p class="text-center">@php
            echo DNS1D::getBarcodeSVG("ID" .Auth::user()->id ." Age". Auth::user()->age,"C39",2,80,'white', true);
            @endphp
            </p>

            <small>This ID Card generated by Blood Conenct Official</small>
        </div>

      </div>
      <br>
      <br>
      {{-- @php
            echo DNS1D::getBarcodeHTML('234234',"PDF417",2,80,'black', true);
        @endphp --}}


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
