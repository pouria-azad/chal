
@extends('layout.app')
@section('title', 'ایجاد چالش جدید - چالش‌های روزانه')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="{{ asset('css/c.css') }}" rel="stylesheet">
@endsection('css')

@section('content')
<div class="container">
    <div class="form-container">
        <h1 class="text-center text-primary mb-4">
            <i class="bi bi-plus-circle-fill me-2"></i>ایجاد چالش جدید
        </h1>
        <p class="text-center text-muted mb-4">چالش‌های خلاقانه خود را به اشتراک بگذارید!</p>

        <form id="challengeForm" method="POST" action="{{ route('challenges.store') }}">
            @csrf
            <!-- Challenge Title -->
            <div class="mb-3">
                <label for="title" class="form-label @error('title') is-invalid @enderror">
                    <i class="bi bi-tag-fill me-2 text-primary"></i>عنوان چالش
                </label>
                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                       placeholder="مثال: پیاده‌روی 20 دقیقه‌ای" required value="{{ old('title') }}">

                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">
                    <i class="bi bi-list-task me-2 text-primary"></i>دسته‌بندی
                </label>
                <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id" required>
                    <option value="" disabled selected>یک دسته‌بندی انتخاب کنید</option>
                    @foreach($cats as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->category }}
                        </option>
                    @endforeach
                </select>

                @error('category_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <!-- Challenge Description -->
            <div class="mb-3">
                <label for="description" class="form-label">
                    <i class="bi bi-text-paragraph me-2 text-primary"></i>توضیحات
                </label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="4"
                          placeholder="جزئیات دقیق چالش را توضیح دهید..." value="{{ old('description') }}" required></textarea>

                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Challenge Duration -->
            <div class="mb-3">
                <label for="duration" class="form-label">
                    <i class="bi bi-clock-fill me-2 text-primary"></i>مدت زمان (دقیقه)
                </label>
                <input name="duration" type="number" class="form-control @error('duration') is-invalid @enderror" id="duration"
                       placeholder="مثال: 20" min="1" value="{{ old('duration') }}" required>

                @error('duration')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-custom btn-lg">
                    <i class="bi bi-plus-lg me-2"></i>ثبت چالش
                </button>
            </div>
        </form>
    </div>
</div>
@endsection('content')
