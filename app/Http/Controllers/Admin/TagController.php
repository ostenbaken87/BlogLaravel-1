<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TagController extends Controller
{

    public function index(): View
    {
        $tags = Tag::query()->get();
        return view('admin.tags.index', compact('tags'));
    }


    public function create(): View
    {
        return view('admin.tags.create');
    }


    public function store(Request $request):RedirectResponse|View
    {
        $request->validate([
            'title' => ['required', 'unique:tags'],
        ]);

        Tag::create($request->all());
        return redirect()
            ->route('tags.index')
            ->with('success','Tag created');
    }


    public function show(Tag $tag): View
    {
        return view('admin.tags.show',compact('tag'));
    }


    public function edit(Tag $tag): View
    {
        return view('admin.tags.edit',compact('tag'));
    }


    public function update(Request $request, $id): RedirectResponse|View
    {
        $request->validate([
            'title' => ['required','unique:tags']
        ]);

        $tag = Tag::query()->find($id);
        $tag->update($request->all());
        return redirect()
            ->route('tags.index')
            ->with('success','Update saved');
    }


    public function destroy($id)
    {
        $tag = Tag::query()->find($id);
        if ($tag->posts->count()) {
            return redirect()
                ->route('tags.index')
                ->with('error', 'Error! Tag have posts');
        }
        $tag->delete();
        return redirect()
            ->route('tags.index')
            ->with('success', 'Tag deleted');
    }
}
