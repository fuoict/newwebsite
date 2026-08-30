<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NavigationItem;
use Illuminate\Http\Request;

class AdminNavigationController extends Controller
{
    public function index()
    {
        $items = NavigationItem::with('children')->whereNull('parent_id')
            ->orderBy('sort_order')->orderBy('label')->get();
        return view('admin.navigation.index', compact('items'));
    }

    public function create()
    {
        $parents = NavigationItem::whereNull('parent_id')->orderBy('label')->get();
        return view('admin.navigation.create', compact('parents'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'label'       => 'required|string|max:255',
            'url'         => 'nullable|string|max:500',
            'route_name'  => 'nullable|string|max:255',
            'parent_id'   => 'nullable|exists:navigation_items,id',
            'sort_order'  => 'nullable|integer',
            'is_active'   => 'nullable|boolean',
            'is_external' => 'nullable|boolean',
            'target'      => 'nullable|string|in:_self,_blank',
        ]);

        $data = $validated;
        $data['is_active'] = $request->boolean('is_active', false);
        $data['is_external'] = $request->boolean('is_external', false);
        $data['sort_order'] = $data['sort_order'] ?? 0;

        NavigationItem::create($data);
        return redirect()->route('admin.navigation.index')->with('success', 'Menu item created!');
    }

    public function edit(NavigationItem $navigationItem)
    {
        $parents = NavigationItem::whereNull('parent_id')
            ->where('id', '!=', $navigationItem->id)
            ->orderBy('label')->get();
        return view('admin.navigation.edit', compact('navigationItem', 'parents'));
    }

    public function update(Request $request, NavigationItem $navigationItem)
    {
        $validated = $request->validate([
            'label'       => 'required|string|max:255',
            'url'         => 'nullable|string|max:500',
            'route_name'  => 'nullable|string|max:255',
            'parent_id'   => 'nullable|exists:navigation_items,id',
            'sort_order'  => 'nullable|integer',
            'is_active'   => 'nullable|boolean',
            'is_external' => 'nullable|boolean',
            'target'      => 'nullable|string|in:_self,_blank',
        ]);

        $data = $validated;
        $data['is_active'] = $request->boolean('is_active', false);
        $data['is_external'] = $request->boolean('is_external', false);

        // Prevent setting self as parent
        if ($data['parent_id'] == $navigationItem->id) {
            $data['parent_id'] = null;
        }

        $navigationItem->update($data);
        return redirect()->route('admin.navigation.index')->with('success', 'Menu item updated!');
    }

    public function destroy(NavigationItem $navigationItem)
    {
        $navigationItem->delete();
        return redirect()->route('admin.navigation.index')->with('success', 'Menu item deleted.');
    }
}
