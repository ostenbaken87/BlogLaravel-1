<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::query()->get();
        return view('admin.categories.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => ['required','unique:categories', 'max:255']
        ]);
        Category::create($request->all());
        return redirect()
            ->route('categories.index')
            ->with('success','Category created');
    }


    public function show(Category $category): View
    {
        return view('admin.categories.show', compact('category'));
    }


    public function edit($id): View
    {
        $category = Category::query()->find($id);
        return view('admin.categories.edit',compact('category'));
    }


    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'title' => ['required','unique:categories'],
        ]);

        $category = Category::query()->find($id);
        $category->update($request->all());
        return redirect()
            ->route('categories.index')
            ->with('success', 'Update saved');
    }


    public function destroy($id)
    {
        $category = Category::query()->find($id);
        if ($category->posts->count()) {
            return redirect()
                ->route('categories.index')
                ->with('error', 'Error! Category have posts');
        }
        $category->delete();
        return redirect()
            ->route('categories.index')
            ->with('success', 'Category deleted');
    }
}
