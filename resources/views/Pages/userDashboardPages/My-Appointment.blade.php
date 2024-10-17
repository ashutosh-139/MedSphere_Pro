@extends('Layouts.userpageLayouts.main')

@section('userSection')
    <div class="container-fluid">
        <h5 id="serchTitle" class="alert alert-primary w-100 text-center"> My Appointments </h5>
        <div class="row" id="posts-list">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container row">
                            <div class="col-lg-12 m-auto">
                                <div class="table-responsive">
                                    <table class="table" id="myTable">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="text-center">Sr. no.</th>
                                                <th class="text-center">Hospital Name</th>
                                                <th class="text-center">Doctor Name</th>
                                                <th class="text-center">Appointment Date</th>
                                                <th class="text-center">Slot Period</th>
                                                <th class="text-center">Appointment Fee</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $srno = 1;
                                            @endphp
                                            @foreach ($appointments as $appointment)
                                                <tr class="text-center">
                                                    <td class="text-center">{{ $srno++ }}</td>
                                                    <td class="text-center"> {{ $appointment->hospital->name }}</td>
                                                    <td class="text-center">{{ $appointment->doctor->name }}</td>
                                                    <td class="text-center">{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d M Y') }}
                                                    </td>
                                                    {{-- \Carbon\Carbon::parse($appointment->appointment_date)->format('d M Y')  --}}
                                                    <td class="text-center">{{ $appointment->slot->slot }}
                                                    </td>
                                                    <td class="text-center">200 Rs.
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
