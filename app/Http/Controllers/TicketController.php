<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TicketController extends Controller
{
    public function index(Request $request)
    {
        $query = Ticket::query();

        if ($request->status) {
            $query->where('status', $request->status);
        }

        if ($request->priority) {
            $query->where('priority', $request->priority);
        }

        if ($request->search) {
            $query->orWhere('title', 'like', '%' . $request->search . '%')
                ->orWhere('ticket_number', 'like', '%' . $request->search . '%');
        }

        $tickets = $query->latest()->paginate(10);

        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'category' => 'required',
            'priority' => 'required|in:low,medium,high',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('attachment')) {
            $path = $request->file('attachment')->store('tickets');
        }

        Ticket::create([
            'ticket_number' => 'TIK-' . now()->format('Y') . '-' . strtoupper(Str::random(4)),
            'user_id' => auth()->id(),
            'unit' => $request->unit,
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'priority' => $request->priority,
            'status' => 'open',
            'reported_at' => now(),
            'attachment' => $path,
        ]);

        return redirect()->route('tickets.index')->with('success', 'Tiket berhasil dibuat.');
    }

    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'status' => 'required|in:open,in_progress,solved',
        ]);

        $ticket->update([
            'status' => $request->status,
        ]);

        return redirect()->route('tickets.show', $ticket)->with('success', 'Status diperbarui.');
    }
}
