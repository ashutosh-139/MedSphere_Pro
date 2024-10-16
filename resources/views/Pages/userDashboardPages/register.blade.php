<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> MedSphere Pro | User Register </title>
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
                                <a href="{{ url('/') }}"
                                    class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ asset('assets/frontalPagesAssets/img/logo/MedSphere_Pro_logo.png') }}"
                                        alt="">
                                </a>
                                <p class="text-center">Your Health Care Specialist</p>
                                <form method="POST" action="{{ url('/User-Register') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="Inputtext1" class="form-label">Full Name <span class="text-danger h6">*</span></label>
                                        <input type="text" class="form-control" name="name" id="Inputtext1"
                                            aria-describedby="textHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="InputEmail1" class="form-label">Email Address <span class="text-danger h6">*</span></label>
                                        <input type="email" class="form-control" name="email" id="InputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-4">
                                        <label for="InputPassword1" class="form-label">Password <span class="text-danger h6">*</span></label>
                                        <input type="password" class="form-control" name="password" id="InputPassword1">
                                    </div>
                                    <div class="mb-4">
                                        <label for="InputPassword2" class="form-label">Confirm Password <span class="text-danger h6">*</span></label>
                                        <input type="password" class="form-control" name="password_confirmation" id="InputPassword2">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4">Sign
                                        Up</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                                        <a class="text-primary fw-bold ms-2" href="{{ url('/User-Login') }}">Sign
                                            In</a>
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
