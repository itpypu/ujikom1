@extends('layouts.app')

@section('content')
    <h1>Tickets</h1>

    <form method="GET" action="{{ route('tickets.index') }}">
        <input type="text" name="search" placeholder="Search ticket" value="{{ request('search') }}">

        <select name="status">
            <option value="">All Status</option>
            <option value="open" @selected(request('status') === 'open')>Open</option>
            <option value="in_progress" @selected(request('status') === 'in_progress')>In Progress</option>
            <option value="solved" @selected(request('status') === 'solved')>Solved</option>
        </select>

        <select name="priority">
            <option value="">All Priority</option>
            <option value="low" @selected(request('priority') === 'low')>Low</option>
            <option value="medium" @selected(request('priority') === 'medium')>Medium</option>
            <option value="high" @selected(request('priority') === 'high')>High</option>
        </select>

        <button type="submit">Filter</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>No Ticket</th>
                <th>Title</th>
                <th>Category</th>
                <th>Priority</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->ticket_number }}</td>
                    <td>{{ $ticket->title }}</td>
                    <td>{{ $ticket->category }}</td>
                    <td>{{ $ticket->priority }}</td>
                    <td>{{ $ticket->status }}</td>
                    <td class="actions">
                        <a href="{{ route('tickets.show', $ticket) }}">View</a>
                        <a href="{{ route('tickets.edit', $ticket) }}">Edit</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No tickets found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $tickets->links() }}
@endsection
