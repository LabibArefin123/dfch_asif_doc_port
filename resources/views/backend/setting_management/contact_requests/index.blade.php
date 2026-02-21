@extends('adminlte::page')

@section('title', 'Contact & Appointment Requests')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <h1 class="mb-0">Contact & Appointment Requests</h1>
    </div>
@stop

@section('content')
    <div class="card shadow-sm">
        <div class="card-body table-responsive">
            <table class="table table-striped table-hover text-nowrap w-100" id="contactRequestTable">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Total Today</th>
                        <th>Last Submitted At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($totalContactRequests as $request)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $request->name }}</td>
                            <td>{{ $request->phone }}</td>
                            <td>{{ $request->email }}</td>
                            <td>{{ ucfirst($request->type) }}</td>
                            <td>{{ $request->created_at->isToday() ? 1 : 0 }}</td>
                            <td>{{ $request->created_at->format('Y-m-d H:i') }}</td>
                            <td>
                                <a href="{{ route('contact_requests.show', $request->id) }}"
                                    class="btn btn-sm btn-primary">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Toast for friendly errors --}}
    <div id="dtErrorToast" class="toast position-fixed top-0 end-0 m-3 p-2 bg-danger text-white"
        style="display:none; z-index: 1055;">
        <span id="dtErrorMessage"></span>
        <button type="button" class="btn-close btn-close-white float-end" onclick="closeDtToast()"></button>
    </div>

    <div class="mb-4"></div>
@stop

@section('js')
    <script>
        function showDtToast(message) {
            $('#dtErrorMessage').text(message);
            $('#dtErrorToast').fadeIn().addClass('show');
            setTimeout(() => $('#dtErrorToast').fadeOut().removeClass('show'), 5000);
        }

        function closeDtToast() {
            $('#dtErrorToast').fadeOut().removeClass('show');
        }

        $(function() {
            $.fn.dataTable.ext.errMode = 'none'; // Disable default alert

            $('#contactRequestTable').DataTable({
                responsive: true,
                paging: true,
                searching: true,
                ordering: true,
            }).on('error.dt', function(e, settings, techNote, message) {
                console.error('DataTable Tech Error:', message);
                showDtToast('A technical issue occurred. Please contact the dev team.');
            });
        });
    </script>
@endsection
