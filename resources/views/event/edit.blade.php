@extends('event.layout')
@section('content')

<div class="card mt-5 shadow-sm rounded border-0">
    <h2 class="card-header bg-primary text-white">Edit Event</h2>
    <div class="card-body p-4">
        <form action="{{ url('event/update/' . $event->id) }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="event_title" class="form-label fw-semibold">Event Title</label>
                <input type="text" name="event_title" value="{{ $event->event_title }}" class="form-control" id="event_title" placeholder="Enter the event title" required>
            </div>

            <div class="form-group mb-3">
                <label for="description" class="form-label fw-semibold">Description</label>
                <textarea name="description" class="form-control" id="description" placeholder="Enter a brief description" rows="3" required>{{ $event->description }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="date" class="form-label fw-semibold">Event Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $event->date }}" required>
            </div>
            
            <!-- <div class="form-group mb-4"> -->
                <!-- <label for="userid" class="form-label fw-semibold">User ID</label>
                <input type="text" name="userid" value="{{ $event->userid }}" class="form-control" id="userid" placeholder="Enter the User ID" required>
            </div> -->

            <button type="submit" class="btn btn-success w-100 py-2 fw-semibold">Update Event</button>
        </form>
    </div>
</div>
@endsection