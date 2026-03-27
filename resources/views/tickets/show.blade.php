@extends('layouts.app')

@section('content')
    <h1>Ticket Detail</h1>

    <p><strong>Ticket Number:</strong> {{ $ticket->ticket_number }}</p>
    <p><strong>Title:</strong> {{ $ticket->title }}</p>
    <p><strong>Category:</strong> {{ $ticket->category }}</p>
    <p><strong>Description:</strong> {{ $ticket->description }}</p>
    <p><strong>Priority:</strong> {{ $ticket->priority }}</p>
    <p><strong>Status:</strong> {{ $ticket->status }}</p>

    @if($ticket->attachment)
        <p><a href="{{ asset('storage/' . $ticket->attachment) }}" target="_blank">View Attachment</a></p>
    @endif

    <a href="{{ route('tickets.edit', $ticket) }}">Edit Status</a>
@endsection
