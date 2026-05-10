<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcements;

class AdminAnnouncementsController extends Controller
{
    public function index()
    {
        $announcements = Announcements::paginate(3);

        return view('admin.announcements.index', [
            'announcements' => $announcements
        ]);
    }

    public function create()
    {
        return view('admin.announcements.create');
    }

    public function edit($id)
    {
        $announcement = Announcements::findOrFail($id);

        return view('admin.announcements.edit', [
            'announcement' => $announcement
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'active' => 'boolean'
        ]);

        $file = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('Announcements', 'public');
            Announcements::create([
                'image' => $file
            ]);
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'active' => 'required|boolean'
        ]);

        $announcement = Announcements::findOrFail($id);

        $data = [
            'active' => $request->active
        ];

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($announcement->image && \Storage::disk('public')->exists($announcement->image)) {
                \Storage::disk('public')->delete($announcement->image);
            }
            // Store new image
            $file = $request->file('image')->store('Announcements', 'public');
            $data['image'] = $file;
        }

        $announcement->update($data);

        return redirect()->route('admin.announcements.index')->with('success', 'Announcement updated successfully!');
    }
}
