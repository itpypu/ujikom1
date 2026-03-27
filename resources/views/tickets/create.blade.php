@extends('layouts.app')

@section('content')
    <h1>Create Ticket</h1>

    <form action="{{ route('tickets.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label>Unit</label><br>
            <input type="text" name="unit" value="{{ old('unit') }}">
        </div>

        <div>
            <label>Category</label><br>
            <select name="ticket_category">
                <option value="">Select category</option>
                <option value="network">Network</option>
                <option value="printer">Printer</option>
                <option value="account">Account</option>
                <option value="hardware">Hardware</option>
            </select>
            @error('category') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div>
            <label>Title</label><br>
            <input type="text" name="ticket_title" value="{{ old('ticket_title') }}">
            @error('title') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div>
            <label>Description</label><br>
            <textarea name="problem_description">{{ old('problem_description') }}</textarea>
            @error('description') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div>
            <label>Priority</label><br>
            <select name="priority">
                <option value="">Select priority</option>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
            @error('priority') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div>
            <label>Attachment</label><br>
            <input type="file" name="attachment">
            @error('attachment') <div class="error">{{ $message }}</div> @enderror
        </div>

        <button type="submit">Submit Ticket</button>
    </form>
@endsection
