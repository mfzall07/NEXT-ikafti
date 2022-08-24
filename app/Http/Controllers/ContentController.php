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
    public function editContent($id) {
        $content = Content::findOrFail($id);
        return view('auth.editContent', compact('content'));
    }
    public function karirDetails($id) {
        // return $id;
        $job = Job::findOrFail($id);
        return view('auth.karir-details', compact('job'));
    }
    public function informationDetails($id) {
        $content = Content::findOrFail($id);
        return view('auth.information-datails', compact('content'));
    }
    public function uploadImage(Request $request)
    {
        // $mainImage = $request->file('file');
        // $filename = time().'.'.$mainImage->extension();
        // // Image::make($mainImage)->save(public_path('public/image/'.$filename));
        // return json_encode(['location' => asset('public/image/'.$filename)]);
        $img = Storage::disk('public')->put("content", $request->file);
            echo json_encode(array('location' => url('storage/'.$img)));
    }
    public function store(Request $request)
    {
        Content::create([
            'title' => $request->title,
            'author' => $request->author,
            'body' => $request->body
        ]);
        if (auth()->user()->role_id == 1) {
            return redirect()->route('DashboardSA');
        }elseif(auth()->user()->role_id == 2){
            return redirect()->route('DashboardAdmin');
        }else{
            abort(404);
        }
    }
    public function updateContent(Request $request, $id)
    {
        $content = Content::find($id);
        $content->update([
            'title' => $request->title,
            'author' => $request->author,
            'body' => $request->body
        ]);
        if (auth()->user()->role_id == 1) {
            return redirect()->route('DashboardSA');
        }elseif(auth()->user()->role_id == 2){
            return redirect()->route('DashboardAdmin');
        }else{
            abort(404);
        }
    }
}
