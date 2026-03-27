@extends('layouts.app')

@section('content')
    <h1>Edit Ticket Status</h1>

    <form action="{{ route('tickets.update', $ticket) }}" method="POST">
        @csrf
        @method('PUT')

        <p><strong>{{ $ticket->ticket_number }}</strong> - {{ $ticket->title }}</p>

        <div>
            <label>Status</label><br>
            <select name="status">
                <option value="open" @selected($ticket->status === 'open')>Open</option>
                <option value="in_progress" @selected($ticket->status === 'in_progress')>In Progress</option>
                <option value="solved" @selected($ticket->status === 'solved')>Solved</option>
            </select>
            @error('status') <div class="error">{{ $message }}</div> @enderror
        </div>

        <button type="submit">Update</button>
    </form>
@endsection
