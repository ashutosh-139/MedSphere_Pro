@extends('Layouts.userpageLayouts.main')

@section('userSection')
    <div class="container-fluid">
        <h5 id="serchTitle" class="alert alert-primary w-100"> Welcome To, {{ $hospital->name }}</h5>
        <div class="row" id="posts-list">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container row">
                            <div class="col-lg-10 m-auto">
                                @if (session()->exists('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success')}}
                                    </div>
                                @endif
                                <div class="row col-lg-5 m-auto">
                                    <img src="{{ $hospital_staff->doc_img == null ? asset('assets/userDashboardAssets/images/profile/user-3.jpg') : $hospital_staff->doc_img }}"
                                        alt="" class="img w-100 rounded rounded-circle">
                                    <div class="text-dark text-center w-100 h5 text-bold">
                                        {{ $hospital_staff->name }}
                                    </div>
                                </div>
                                <div class="row col-lg-8 m-auto">
                                    <form action="{{ route('book.appointment.confirm') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" id="">
                                        <input type="hidden" name="hospital_id" value="{{ $hospital->id }}" id="">
                                        <input type="hidden" name="staff_id" value="{{ $hospital_staff->id }}"
                                            id="">
                                        <input type="hidden" name="payment_mode" value="online" id="">
                                        <div class="mb-3">
                                            <label for="appointmentDate" class="form-label">Appointment Date</label>
                                            <input type="date" class="form-control" name="appointment_date"
                                                id="appointmentDate" aria-describedby="dateHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="schedule_slot" class="form-label">Appointment Slot</label>
                                            <select class="form-select" aria-label="Default select example" name="slot">
                                                <option selected disabled>Select an slot</option>
                                                @foreach ($schedules as $slot)
                                                    <option value="{{ $slot->id }}">{{ $slot->slot }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="m-auto d-flex">
                                            <button type="submit" class="btn btn-success m-auto">
                                                Confirm Booking
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
