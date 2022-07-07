<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- CSS Navbar dan Layouts -->
    <link rel="stylesheet" href="{{ asset('user/user.css') }}" />

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />

    <!-- chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

     <!-- logo for tab -->
    <link rel="icon" href="{{ asset('images/tab.png') }}" type="">

    <title>{{ $title }}</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="icon">
                <img src="{{ asset('user/img/logo.png') }}" alt="" width="120px" class="animate__animated animate__bounce" />
            </i>
            <i class="las la-bars" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li class="{{ $title == 'Dashboard' ? 'active' : '' }}">
                <a href="{{ route('dashboard.index') }}">
                    <i class="las la-home"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li class="{{ $title == 'Todolist' ? 'active' : '' }}">
                <a href="{{ route('todolist.index') }}">
                    <i class="las la-list-ul"></i>
                    <span class="links_name">Todo List</span>
                </a>
                <span class="tooltip">Todo List</span>
            </li>
            <li class="{{ $title == 'Link' ? 'active' : '' }}">
                <a href="{{ route('link.index') }}">
                    <i class="las la-link"></i>
                    <span class="links_name">E-Link</span>
                </a>
                <span class="tooltip">Link</span>
            </li>
            <li class="{{ $title == 'Kritik & Saran' ? 'active' : '' }}">
                <a href="{{ route('kritik.index') }}">
                    <i class="las la-envelope-open"></i>
                    <span class="links_name">Kritik Saran</span>
                </a>
                <span class="tooltip">Kritik Saran</span>
            </li>
            <li class="{{ $title == 'Bantuan' ? 'active' : '' }}">
                <a href="{{ route('bantuan.index') }}">
                    <i class="las la-question-circle"></i>
                    <span class="links_name">Bantuan</span>
                </a>
                <span class="tooltip">Bantuan</span>
            </li>


            <li class="profile">
                <div class="profile-details"  data-bs-toggle="modal" data-bs-target="#editprofil">
                    <img src="{{ asset('images/profile.png') }}" alt="pp">

                    <div class="name_job">
                        <div class="name">Ahmad Rafif</div>
                        <div class="job"></div>
                    </div>
                </div>
                <i class="las la-sign-out-alt" id="log_out"></i>
            </li>
        </ul>
    </div>

    <!-- EDIT HERE -->
    <section class="home-section p-4">
        {{-- @php
        dd(auth()->user());
        @endphp --}}
        @yield('content')
    </section>

    {{-- modal edit profile --}}
    <form action="" method="POST" enctype="multipart/form">
        @csrf
        @method('PUT')
        <div class="modal fade" id="editprofil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Edit Profile</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('images/profile.png') }}" class="rounded mx-auto d-block img-fluid mt-4 mb-2" alt="..." style="max-width: 200px;">
                    <div class=" mb-3">
                        <input type="file" class="form-control" id="floatingInput" name="photo">
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="name" value="" required>
                        <label for="floatingInput">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="telp" value="" required>
                        <label for="floatingInput">Nomor Handphone</label>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">SIMPAN</button>
                </div>
              </div>
            </div>
        </div>
    </form>
    {{-- end modal --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


    <!-- Custom js for DASHBOARD USER -->
    <script src="{{ asset('user/user.js') }}"></script>
</body>

</html>