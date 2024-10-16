@php
    $i = 0;
    use Illuminate\Support\Str;
@endphp
@foreach ($hospitals as $hospital)
    @php
        $i++;
    @endphp
    <div class="col-lg-4">
        <div class="card overflow-hidden hover-img">
            <div class="position-relative">
                <a href="{{ url('/Hospital-Details/'.$hospital->id.'') }}">
                    <img src="{{ $hospital->hospital_img == null ? asset('assets/userDashboardAssets/images/products/hp1.jpg') : $hospital->hospital_img }}"
                        class="card-img-top" alt="matdash-img">
                </a>
                <span
                    class="badge text-bg-light text-dark fs-2 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">
                    Open: {{ $hospital->start_time }}AM To {{ $hospital->close_time }}PM
                </span>
                <img src="{{ asset('assets/userDashboardAssets/images/products/hl2.avif') }}" alt="matdash-img"
                    class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40"
                    height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Georgeanna Ramero">
            </div>
            <div class="card-body p-4">
                <a class="d-block my-2 fs-5 text-dark fw-semibold link-primary" href="{{ url('/Hospital-Details/'.$hospital->_id.'') }}">
                    {{ $hospital->name }}
                </a>
                <span class="text-bg-light fs-2 py-1 px-2 lh-sm mt-3">
                    {{ Str::limit($hospital->description, 80, '...') }}
                </span>
                <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-2">
                        <i class="ti ti-star text-dark fs-5"></i>4.5
                    </div>
                    <div class="d-flex align-items-center fs-2 h5 ms-auto">
                        <i class="ti ti-phone m-2 h5 text-dark"></i> {{ $hospital->contact_no }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

@if ($i == 0)
    <div class="bedge bedge-warning">No Record Found! </div>
@endif
