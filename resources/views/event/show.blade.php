@extends('event.layout')
@section('content')

<style>
    .event-details-container {
        max-width: 600px;
        margin: auto;
    }
</style>

<div class="card mt-5 shadow-sm rounded border-0 event-details-container">
    <div class="d-flex justify-content-between align-items-center p-3 bg-primary text-white rounded-top">
        <h2 class="mb-0">{{ $event->event_title }}</h2>
        <a href="{{ url('event') }}" class="btn btn-light text-primary fw-semibold">Back to Events</a>
    </div>

    <div class="card-body p-4">
        <p><strong>Description:</strong> {{ $event->description }}</p>
        <p><strong>Date:</strong> {{ $event->date }}</p>
        <!-- Uncomment if User ID is needed -->
        <!-- <p><strong>User ID:</strong> {{ $event->userid }}</p> -->

        <div class="d-flex gap-2 mt-4">
            <a href="{{ url('event/' . $event->id . '/edit') }}" class="btn btn-primary">Edit</a>
            <form action="{{ url('event/delete/' . $event->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>

@endsection
