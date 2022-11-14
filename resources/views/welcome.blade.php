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
  <main class="container">
        <div class="mx-auto">
            <div style="background-color: rgb(221, 12, 12);" class="p- mb-4 rounded-3">
                <div style="padding: 30vh;" class="elements container-fluid py-5">
                  <div class="mb-3 w-100">


                    <h2 for="" class="text-white form-label">Select District</h2>
                    <select class="w-100 form-select form-select-lg" name="" id="">
                        <option selected>Select one</option>
                        <option value="">Dhaka</option>
                        <option value="">Rajshahi</option>
                        <option value="">Chittagong</option>
                        <option value="">Bandarban</option>
                    </select>
                  </div>
                  <h3 class="text-white">Select the blood group you are looking for</h3>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" value="A+">
                    <label class="form-check-label" for="">A+</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" value="B+">
                    <label class="form-check-label" for="">B+</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" value="AB+">
                    <label class="form-check-label" for="">AB+</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" value="O+">
                    <label class="form-check-label" for="">O+</label>
                    </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="" value="A-">
                            <label class="form-check-label" for="">A-</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="" value="B-">
                            <label class="form-check-label" for="">B-</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="" value="AB-">
                            <label class="form-check-label" for="">AB-</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="" value="O-">
                            <label class="form-check-label" for="">O-</label>
                        </div>

                </div>
                  </div>
        </div>

     <div style="padding: 2rem;" class="table-responsive">
        <table id="data" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Donor ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Bloodgroup</th>
                    <th scope="col">City</th>
                    <th scope="col">District</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">email</th>
                    <th scope="col">Last Donated</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td scope="row">{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->age}}</td>
                    <td>{{$user->group}}</td>
                    <td>{{$user->city}}</td>
                    <td>{{$user->district}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
     </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
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
<script src={{asset('app.js')}} ></script>
</body>


</html>
