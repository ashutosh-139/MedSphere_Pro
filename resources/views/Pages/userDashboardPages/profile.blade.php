@extends('Layouts.userpageLayouts.main')

@section('userSection')
    <div class="container-fluid">
        <h5 id="serchTitle" class="alert alert-primary w-100"> Welcome To {{ Auth::user()->name }}</h5>
        <div class="row" id="posts-list">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container row">
                            <div class="col-lg-10 m-auto">
                                <div class="row col-lg-5 m-auto">
                                    <img src="{{ Auth::user()->user_pic == null ? asset('assets/userDashboardAssets/images/profile/user-3.jpg') : Auth::user()->user_pic }}"
                                        alt="" class="img w-100 rounded rounded-circle">
                                    <div class="text-dark text-center w-100 h5 text-bold">
                                        {{ Auth::user()->name }}
                                    </div>
                                </div>
                                <div class="row col-lg-10 m-auto">
                                    @if (session()->exists('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    @if (session()->exists('error'))
                                        <div class="alert alert-warning">
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif
                                    <form action="{{ route('update.profile') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="appointmentDate" class="form-label">Your Name</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                value="{{ Auth::user()->name }}" aria-describedby="dateHelp" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" name="email"
                                                value="{{ Auth::user()->email }}" id="email" aria-describedby="dateHelp"
                                                required>
                                            <script>
                                                console.error({{ Auth::user() }})
                                            </script>
                                            {{-- <select class="form-select" aria-label="Default select example" name="slot">
                                                <option selected disabled>Select an slot</option>
                                                @foreach ($schedules as $slot)
                                                    <option value="{{ $slot->id }}">{{ $slot->slot }}</option>
                                                @endforeach
                                            </select> --}}
                                        </div>
                                        <div class="mb-3">
                                            <label for="mobile No" class="form-label">Mobile Number</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->mobile_no }}"
                                                name="mobile_no" id="mobile_no" aria-describedby="dateHelp" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Address" class="form-label">Address</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->address }}"
                                                name="address" id="address" aria-describedby="dateHelp" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="mobile No" class="form-label">New Password</label>
                                            <input type="text" class="form-control" name="password" id="mobile_no"
                                                aria-describedby="dateHelp">
                                        </div>
                                        <div class="m-auto d-flex">
                                            <button type="submit" class="btn btn-success m-auto">
                                                Update Profile
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/2.1.5/js/dataTables.min.js"></script>

        <script>
            let table = new DataTable('#myTable');
        </script>
        <script>
            $(document).ready(function() {
                $('#search-input').on('keyup', function() {
                    var search = $(this).val();
                    $('#serchTitle').text("Search Results for " + search + "...");
                    $.ajax({
                        url: '{{ route('userDashboard') }}',
                        method: 'GET',
                        data: {
                            search: search
                        },
                        success: function(data) {
                            $('#posts-list').html(data.hospitalHtml);
                            $('#pagination-links').html(data.paginationHtml);
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
