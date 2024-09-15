@extends('Layouts.userpageLayouts.main')

@section('userSection')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 id="serchTitle" class="alert alert-primary w-75">Top Hospitals Near You...</h5>
                        <div class="container row">
                            {{-- <input type="text" id="search-input" placeholder="Search hospitals..." class="form-control mb-3" /> --}}
                            <div id="posts-list" class="row">
                                @include('Pages.userDashboardPages.partials.hospital', [
                                    'hospitals' => $hospitals,
                                ])
                            </div>
                            {{-- <div id="pagination-links">
                                    {{ $hospitals->appends(['search' => request()->input('search')])->links('pagination::bootstrap-5') }}
                                </div> --}}
                            {{-- </div> --}}

                            {{-- {{ $hospitals->withQueryString()->links('pagination::bootstrap-5') }} --}}
                        </div>
                        {{ $hospitals->appends(['search' => request()->input('search')])->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
