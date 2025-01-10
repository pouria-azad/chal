<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Chal;
use Illuminate\Http\Request;

class ChalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chals = \App\Models\Chal::all();
        return view('challenges.index', compact('chals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats = Cat::all();
        return view('challenges.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // اعتبارسنجی ورودی‌های فرم
        $validatedData = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'duration'    => 'required|integer|min:1',
            'category_id' => 'required|exists:categories,id',
        ]);

        // ذخیره اطلاعات در جدول چالش‌ها
        Chal::create([
            'name'    => $validatedData['title'],
            'desc'    => $validatedData['description'],
            'duration' => $validatedData['duration'],
            'cat_id'  => $validatedData['category_id'],
        ]);

        // هدایت کاربر به صفحه مناسب
        return redirect()->route('challenges.index')
            ->with('success', 'چالش با موفقیت ثبت شد!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
