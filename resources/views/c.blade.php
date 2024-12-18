 
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

        <form id="challengeForm">  
            <!-- Challenge Title -->  
            <div class="mb-3">  
                <label for="title" class="form-label">  
                    <i class="bi bi-tag-fill me-2 text-primary"></i>عنوان چالش  
                </label>  
                <input type="text" class="form-control" id="title"   
                       placeholder="مثال: پیاده‌روی 20 دقیقه‌ای" required>  
            </div>  

            <!-- Challenge Description -->  
            <div class="mb-3">  
                <label for="description" class="form-label">  
                    <i class="bi bi-text-paragraph me-2 text-primary"></i>توضیحات  
                </label>  
                <textarea class="form-control" id="description" rows="4"   
                          placeholder="جزئیات دقیق چالش را توضیح دهید..." required></textarea>  
            </div>  

            <!-- Challenge Duration -->  
            <div class="mb-3">  
                <label for="duration" class="form-label">  
                    <i class="bi bi-clock-fill me-2 text-primary"></i>مدت زمان (دقیقه)  
                </label>  
                <input type="number" class="form-control" id="duration"   
                       placeholder="مثال: 20" min="1" required>  
            </div>  

            <!-- Challenge Date -->  
            <div class="mb-3">  
                <label for="date" class="form-label">  
                    <i class="bi bi-calendar-event-fill me-2 text-primary"></i>تاریخ  
                </label>  
                <input type="date" class="form-control" id="date" required>  
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

@section('js')
<!-- Bootstrap JS -->  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>  
<script>  
    // Simple form validation  
    document.getElementById('challengeForm').addEventListener('submit', function(e) {  
        e.preventDefault();  
        // Add your form submission logic here  
        alert('چالش شما با موفقیت ثبت شد!');  
    });  
</script>  
@endsection('js')