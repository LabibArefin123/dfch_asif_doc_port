@extends('adminlte::page')

@section('title', 'Gallery List')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mb-0">Gallery List</h1>
        <a href="{{ route('galleries.create') }}" class="btn btn-sm btn-success d-flex align-items-center gap-2">
            <i class="fas fa-plus"></i> Add New
        </a>
    </div>
@stop

@section('content')
    <div class="card shadow">
        <div class="card-body table-responsive">
            <table id="galleryTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Title</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($galleries as $key => $gal)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td>
                            <td>{{ $gal->title }}</td>
                            <td class="text-center">
                                @if ($gal->image)
                                    <img src="{{ asset('uploads/images/gallery/' . $gal->image) }}" alt="Gallery Image"
                                        width="50" height="50">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>

                            <td class="text-center">
                                <a href="{{ route('galleries.edit', $gal->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="{{ route('galleries.show', $gal->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-eye"></i> Show
                                </a>
                                <button type="button" class="btn btn-danger btn-sm delete-btn"
                                    data-id="{{ $gal->id }}">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                                <form id="delete-form-{{ $gal->id }}"
                                    action="{{ route('galleries.destroy', $gal->id) }}" method="POST"
                                    style="display:none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">No galleries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
    {{-- jQuery + DataTables + SweetAlert --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable
            $('#galleryTable').DataTable({
                responsive: true,
                autoWidth: false,
                pageLength: 10,
                ordering: true
            });

            // SweetAlert Delete Confirmation
            $('.delete-btn').on('click', function() {
                let id = $(this).data('id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "This action cannot be undone!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(`#delete-form-${id}`).submit();
                    }
                });
            });
        });
    </script>
@stop
