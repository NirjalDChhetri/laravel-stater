<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index(): View
    {
        return view('fileUpload');
    }

    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
        $fileName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads'), $fileName);
        return back()
            ->with('success', 'You have successfully upload file.')
            ->with('file', $fileName);
    }
}
