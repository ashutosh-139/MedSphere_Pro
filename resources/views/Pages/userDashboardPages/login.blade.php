<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> MedSphere Pro | User Login </title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/frontalPagesAssets/img/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('assets/userDashboardAssets/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="{{ url('/#') }}"
                                    class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ asset('assets/frontalPagesAssets/img/logo/MedSphere_Pro_logo.png') }}"
                                        alt="">
                                </a>
                                <p class="text-center">Your Health Care Specialist</p>
                                <form method="POST" action="{{ route('validate.user') }}">
                                    @csrf

                                    @if (session()->exists('success'))
                                        <div class="alert alert-success text-center">
                                            {{session()->get('success')}}
                                        </div>
                                    @endif
                                    @if (session()->exists('error'))
                                        <div class="alert alert-warning text-center">
                                            {{session()->get('error')}}
                                        </div>
                                    @endif
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input primary" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                                Remeber this Device
                                            </label>
                                        </div>
                                        <a class="text-primary fw-bold" href="{{ url('/User-Login/#') }}">Forgot Password ?</a>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4">Sign
                                        In</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">New to MedSphere Pro?</p>
                                        <a class="text-primary fw-bold ms-2" href="{{ url('/User-Register') }}">Create an
                                            account</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/userDashboardAssets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/userDashboardAssets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>