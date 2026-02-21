<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\SystemProblem;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Carbon\Carbon;

class WelcomePageController extends Controller
{
    public function index()
    {
        return view('frontend.welcome');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function profile_page_1()
    {
        return view('frontend.profile.page_1');
    }

    public function profile_page_2()
    {
        return view('frontend.profile.page_2');
    }

    public function profile_page_3()
    {
        return view('frontend.profile.page_3');
    }

    public function profile_page_4()
    {
        return view('frontend.profile.page_4');
    }

    public function book()
    {
        return view('frontend.book');
    }

    public function piles()
    {
        return view('frontend.conditions.piles');
    }

    public function fistula()
    {
        return view('frontend.conditions.fistula');
    }

    public function fissure()
    {
        return view('frontend.conditions.fissure');
    }

    public function colorectal_cancer()
    {
        return view('frontend.conditions.colorectal_cancer');
    }

    public function ibs()
    {
        return view('frontend.conditions.ibs');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function gallery()
    {
        $galleries = Gallery::latest()->get();
        return view('frontend.gallery', compact('galleries'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function system_problem_store(Request $request)
    {
        $request->validate([
            'problem_title'       => 'required|string|max:255',
            'problem_description' => 'required|string',
            'status'              => 'required|in:low,medium,high,critical',
            'problem_file'        => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:4096',
        ]);

        // Generate readable unique ID
        $uid = 'DFCH-PROB-' . strtoupper(Str::random(6));

        $fileName = null;

        if ($request->hasFile('problem_file')) {

            $file      = $request->file('problem_file');
            $extension = $file->getClientOriginalExtension();
            $original  = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

            // Time format: HHMMSS_DDMMYY
            $timeStamp = Carbon::now()->format('His_dmy');

            // Clean filename
            $fileName = Str::slug($original) . '_' . $timeStamp . '.' . $extension;

            // Decide folder
            $imageExt = ['jpg', 'jpeg', 'png'];
            $folder   = in_array(strtolower($extension), $imageExt)
                ? 'uploads/problem/images'
                : 'uploads/problem/files';

            // Move file
            $file->move(public_path($folder), $fileName);
        }

        SystemProblem::create([
            'problem_uid'        => $uid,
            'problem_title'      => $request->problem_title,
            'problem_description' => $request->problem_description,
            'status'             => $request->status,
            'problem_file'       => $fileName, // only filename saved
        ]);

        return back()->with('success', '✅ Your problem has been submitted successfully.');
    }
}
