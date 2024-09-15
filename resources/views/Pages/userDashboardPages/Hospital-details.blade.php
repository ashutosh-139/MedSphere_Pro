@extends('Layouts.userpageLayouts.main')

@section('userSection')
    <div class="container-fluid">
        <h5 id="serchTitle" class="alert alert-primary w-100"> Welcome To, {{ $hospital->name }}</h5>
        <div class="row" id="posts-list">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container row">
                            <div class="col-lg-4">
                                <img src="{{ $hospital->hospital_img == null ? asset('assets/userDashboardAssets/images/products/hp1.jpg') : $hospital->hospital_img }}"
                                    alt="" class="img w-100 rounded">
                                <div class="text-dark text-center w-100 h4 text-bold">
                                    {{ $hospital->name }}
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <span class="About-section">
                                    <h5 class=""> About Hosptal :</h5>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        {{ $hospital->description }} </p>
                                </span>
                                <span class="Address-section">
                                    <h5 class=""> Contact Us :</h5>
                                    <div class="container row">
                                        <div class="col-lg-4">
                                            <h6 class=""> Address :</h6>
                                            <p>
                                                <span><i class="ti ti-home-link text-dark"></i></span>
                                                {{ $hospital->address }}
                                            </p>
                                        </div>
                                        <div class="col-lg-4">
                                            <h6 class=""> Contact No. :</h6>
                                            <p>
                                                <span><i class="ti ti-phone text-dark"></i></span>
                                                {{ $hospital->contact_no }}
                                            </p>
                                        </div>
                                        <div class="col-lg-4">
                                            <h6 class=""> Contact Mail :</h6>
                                            <p>
                                                <span><i class="ti ti-mail text-dark"></i></span>
                                                {{ $hospital->contact_mail }}
                                            </p>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 m-auto">
                <div class="card">
                    {{-- <div class="alert alert-primary">
                    {{  }}
                    </div> --}}
                    @if ($hospital_staff == 'no_staff')
                        <div class="alert alert-warning">
                            The Staff Details are not available!
                        </div>
                    @else
                        <div class="card-title text-center mt-2 mb-0 p-3 bg-success rounded w-50 m-auto">
                            Our Pristegious Doctors
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="myTable">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-center">Sr. no.</th>
                                            <th class="text-center">Doctor img</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">specialization</th>
                                            <th class="text-center">Book Appointment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $srno = 1;
                                        @endphp
                                        @foreach ($hospital_staff as $staff)
                                            <tr class="text-center">
                                                <td class="text-center">{{ $srno++ }}</td>
                                                <td class="text-center"> <img
                                                        src="{{ $staff->doc_img == null ? asset('assets/userDashboardAssets/images/profile/user-3.jpg') : $staff->doc_img }}"
                                                        class="w-50 rounded " alt=""></td>
                                                <td class="text-center">{{ $staff->name }}</td>
                                                <td class="text-center">{{ $staff->specialization }}</td>
                                                <td class="text-center"><a
                                                        href="{{ url('Hospitals/' . $hospital->_id . '/Book-Appointment/' . $staff->id . '') }}"
                                                        class="btn btn-outline-success"> Book
                                                        Appointment</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- {{ $hospital_staff->links('pagination::bootstrap-5') }} --}}
                    @endif
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
