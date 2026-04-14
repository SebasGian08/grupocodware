<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogsCategory;
use App\Models\BlogTag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category', 'tags')->latest()->get();
        $categories = BlogsCategory::all();
        $tags = BlogTag::all();

        return view('admin.blog.index', compact('blogs', 'categories', 'tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'content' => 'required',
            'category_id' => 'required|exists:blogs_categories,id_blogs_categories',
        ]);

        $blog = Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'user_id' => Auth::id(),
            'status' => 1
        ]);

        if ($request->tags) {
            $blog->tags()->sync($request->tags);
        }

        return back()->with('success', 'Blog creado');
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'content' => 'required',
        ]);

        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'status' => $request->status ?? 1
        ]);

        // TAGS
        if ($request->tags) {
            $blog->tags()->sync($request->tags);
        }

        return back()->with('success', 'Blog actualizado');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return back()->with('delete', 'Blog eliminado');
    }
}