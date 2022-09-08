<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
    public function index()
    {
        $authors = Author::all()->sortDesc();
        return view('index', ['authors' => $authors, 'lists' => Author::all()]);
    }

    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $auth = new Author();
        $auth->name = $request->name;
        $auth->title = $request->title;
        $auth->des = $request->des;
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $auth->image = $imageName;
        $auth->save();
        return redirect()->route('index')->with('success', 'Author Data has been created successfully.');
    }
    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }
    public function edit($id)
    {
        $author = Author::find($id);
      
        return view('edit', compact('author'));

    }
    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        $author->name = $request->name;
        $author->title = $request->title;
        $author->des = $request->des;
        if($request->image !=''){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $author->image = $imageName;}
        else{
        $author->image = $author->image;}
        $author->save();
        return redirect()->route('index')->with('success', 'Author Data Has Been updated successfully');
    }
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('index')->with('success', 'Author Data has been deleted successfully');
    }
    public function changeStatus(Request $request)
    {
        $author = Author::find($request->id);
        $author->status = $request->status;
        $author->save();
        return response()->json(['success'=>'Status change successfully.']);
    }
    public function location()
    {
        return view('location');
    }
}
