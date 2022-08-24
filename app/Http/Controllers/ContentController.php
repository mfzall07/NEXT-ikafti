<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    public function addContent() {
        return view('auth.addContent');
    }
    public function editContent() {
        return view('auth.editContent');
    }
    public function karirDetails($id) {
        // return $id;
        $job = Job::findOrFail($id);
        return view('auth.karir-details', compact('job'));
    }
    public function informationDetails() {
        return view('auth.information-datails');
    }
    public function uploadImage(Request $request)
    {
        // $mainImage = $request->file('file');
        // $filename = time().'.'.$mainImage->extension();
        // // Image::make($mainImage)->save(public_path('public/image/'.$filename));
        // return json_encode(['location' => asset('public/image/'.$filename)]);
        $img = Storage::disk('public')->put("content", $request->file);
            echo json_encode(array('location' => asset('storage/'.$img)));
    }
    public function store(Request $request)
    {
        Content::create([
            'title' => $request->title,
            'author' => $request->author,
            'body' => $request->body
        ]);
        return back();
    }
}
