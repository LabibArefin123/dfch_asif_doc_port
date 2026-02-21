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
            <table id="dataTables" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Image</th>
                        <th>Title</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($galleries as $key => $gal)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">
                                @if ($gal->image)
                                    <img src="{{ asset('uploads/images/gallery/' . $gal->image) }}" alt="Gallery Image"
                                        width="150" height="75">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{ $gal->title }}</td>

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

    <script>
        $(document).ready(function() {
            // Initialize DataTable
            $('#galleryTable').DataTable({
                responsive: true,
                autoWidth: false,
                pageLength: 10,
                ordering: true
            });

        });
    </script>
@stop
