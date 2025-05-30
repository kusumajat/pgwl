@extends('layouts/template')

@section('styles')
    <style>
        .table th {
            font-weight: 600;
        }
        .card-header h2 {
            margin-bottom: 0;
            font-size: 1.25rem;
        }
        .img-thumbnail-table {
            max-width: 100px;
            max-height: 60px;
            object-fit: cover;
            border-radius: 0.25rem;
        }
    </style>
@endsection

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-5">Data Features Overview</h1>

        {{-- Table Point --}}
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">
                <h2 class="h5 mb-0">Table Point</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
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
                                    <td colspan="6" class="text-center text-muted">No point data available.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Table Polyline --}}
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-success text-white">
                <h2 class="h5 mb-0">Table Polyline</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
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
                                    <td colspan="6" class="text-center text-muted">No polyline data available.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Table Polygon --}}
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-info text-white">
                <h2 class="h5 mb-0">Table Polygon</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
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
                                    <td colspan="6" class="text-center text-muted">No polygon data available.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
