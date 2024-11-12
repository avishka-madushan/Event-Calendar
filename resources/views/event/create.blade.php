@extends('event.layout')
@section('content')

<div class="card mt-5 shadow-sm rounded border-0">
  <h2 class="card-header bg-primary text-white">Add New Event</h2>
  <div class="card-body p-4">
    <form action="{{ url('event/store') }}" method="POST">
      @csrf
      <div class="form-group mb-3">
        <label for="event_title" class="form-label fw-semibold">Event Title</label>
        <input type="text" name="event_title" class="form-control" id="event_title" placeholder="Enter the event title" required>
      </div>

      <div class="form-group mb-3">
        <label for="description" class="form-label fw-semibold">Description</label>
        <textarea name="description" class="form-control" id="description" placeholder="Enter a brief description" rows="3" required></textarea>
      </div>

      <div class="form-group mb-3">
        <label for="date" class="form-label fw-semibold">Event Date</label>
        <input type="date"  class="form-control" id="date" name="date" required>
      </div>
      
      <button type="submit" class="btn btn-success w-100 py-2 fw-semibold">Save Event</button>
    </form>
  </div>
</div>

<script>
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('date').value = today;
</script>
@endsection
