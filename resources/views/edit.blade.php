@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Event</h2>
    
    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Event Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $event->title) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Event Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $event->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="datetime-local" name="start_date" id="start_date" class="form-control" value="{{ old('start_date', $event->start_date->format('Y-m-d\TH:i')) }}" required>
        </div>

        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="datetime-local" name="end_date" id="end_date" class="form-control" value="{{ old('end_date', $event->end_date->format('Y-m-d\TH:i')) }}" required>
        </div>

        <div class="form-group">
            <label for="location">Event Location</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $event->location) }}">
        </div>

        <div class="form-group">
            <label for="color">Event Color (Optional)</label>
            <input type="color" name="color" id="color" class="form-control" value="{{ old('color', $event->color) }}">
        </div>

        <button type="submit"
