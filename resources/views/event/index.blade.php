@extends('event.layout')
@section('content')

<style>
    .custom-table-bordered th, 
    .custom-table-bordered td {
        border-width: 2px !important;
    }
    .custom-table-bordered td:nth-child(1) { border-color: #0d6efd !important; } 
    .custom-table-bordered td:nth-child(2) { border-color: #6610f2 !important; }
    .custom-table-bordered td:nth-child(3) { border-color: #20c997 !important; } 
    .custom-table-bordered td:nth-child(4) { border-color: #ffc107 !important; } 
    .custom-table-bordered td:nth-child(5) { border-color: #dc3545 !important; } 
</style>

<div class="card mt-5 shadow-sm rounded border-0">
    <div class="d-flex justify-content-between align-items-center p-3 bg-primary text-white rounded-top">
        <h2 class="mb-0">Events</h2>
        <a href="{{ url('event/create') }}" class="btn btn-light text-primary fw-semibold">Create New Event</a>
    </div>

    <div class="card-body p-4">
        <table class="table table-hover table-striped custom-table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Event Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <!-- <th>User ID</th> -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($events as $event)
                <tr>
                    <td>{{ $event->event_title }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->date }}</td>
                    <!-- <td>{{ $event->userid }}</td> -->
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ url('event/' . $event->id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ url('event/delete/' . $event->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">There are no events available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection