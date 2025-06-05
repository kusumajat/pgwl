@extends('layouts/template')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.bootstrap5.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .table th {
            font-weight: 700;
            color: #495057;
            background-color: #e9ecef;
            border-bottom: 2px solid #dee2e6;
        }
        .card {
            border: none;
            border-radius: 0.75rem;
            overflow: hidden;
        }
        .card-header {
            border-bottom: none;
            padding: 1.25rem 1.5rem;
            font-size: 1.35rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .card-header h2 {
            margin-bottom: 0;
            font-size: 1.5rem;
            color: inherit;
        }
        .card-header.bg-primary {
            background-color: #007bff !important;
        }
        .card-header.bg-success {
            background-color: #28a745 !important;
        }
        .card-header.bg-info {
            background-color: #17a2b8 !important;
        }
        .table-responsive {
            padding: 1rem;
        }
        .table {
            --bs-table-striped-bg: #f2f2f2;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 0.5rem;
            overflow: hidden;
        }
        .table td, .table th {
            padding: 0.75rem 1.25rem;
            vertical-align: middle;
            border-top: 1px solid #e0e0e0;
        }
        .table tbody tr:first-child td {
            border-top: none;
        }
        .img-thumbnail-table {
            max-width: 80px;
            max-height: 50px;
            object-fit: cover;
            border-radius: 0.25rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .text-muted {
            color: #6c757d !important;
        }
        .table-hover tbody tr:hover {
            background-color: #e2f0ff;
            cursor: pointer;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current,
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background-color: #e9ecef;
            border-color: #dee2e6;
        }
        .dataTables_wrapper .dataTables_filter input,
        .dataTables_wrapper .dataTables_length select {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.375rem 0.75rem;
        }
    </style>
@endsection

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-5 display-4 fw-bold text-dark">Data Features Overview</h1>

        {{-- Table Point --}}
        <div class="card shadow-lg mb-5">
            <div class="card-header bg-primary text-white">
                <h2 class="h5 mb-0">Points Data</h2>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle" id="pointstable">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($points as $index => $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ Str::limit($p->description, 100) }}</td>
                                    <td>
                                        @if ($p->image)
                                            <img src="{{ asset('storage/images/'.$p->image) }}" alt="{{ $p->name }}" class="img-thumbnail-table" title="{{ $p->image }}">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $p->created_at->format('d M Y, H:i') }}</td>
                                    <td>{{ $p->updated_at->format('d M Y, H:i') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-4">No point data available. Please add some points.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        {{-- Table Polyline --}}
        <div class="card shadow-lg mb-5">
            <div class="card-header bg-success text-white">
                <h2 class="h5 mb-0">Polylines Data</h2>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle" id="polylinestable">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($polylines as $index => $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ Str::limit($p->description, 100) }}</td>
                                    <td>
                                        @if ($p->image)
                                            <img src="{{ asset('storage/images/'.$p->image) }}" alt="{{ $p->name }}" class="img-thumbnail-table" title="{{ $p->image }}">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $p->created_at->format('d M Y, H:i') }}</td>
                                    <td>{{ $p->updated_at->format('d M Y, H:i') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-4">No polyline data available. Please add some polylines.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        {{-- Table Polygon --}}
        <div class="card shadow-lg mb-4">
            <div class="card-header bg-info text-white">
                <h2 class="h5 mb-0">Polygons Data</h2>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle" id="polygonstable">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($polygons as $index => $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ Str::limit($p->description, 100) }}</td>
                                    <td>
                                        @if ($p->image)
                                            <img src="{{ asset('storage/images/'.$p->image) }}" alt="{{ $p->name }}" class="img-thumbnail-table" title="{{ $p->image }}">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $p->created_at->format('d M Y, H:i') }}</td>
                                    <td>{{ $p->updated_at->format('d M Y, H:i') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-4">No polygon data available. Please add some polygons.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.3.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#pointstable').DataTable();
        $('#polylinestable').DataTable();
        $('#polygonstable').DataTable();
    });
</script>

@endsection
