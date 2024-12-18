@extends('layout.app')
@section('css')
<style>
.table {
    background-color: #ffffff;
}
</style>
@endsection('css')
@section('content')
<div class="container mt-5">
<!-- Challenge History -->
<div class="mt-5">
        <h3 class="text-primary">📜 تاریخچه چالش‌ها</h3>
        <table class="table table-bordered mt-3">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>چالش</th>
                    <th>وضعیت</th>
                    <th>تاریخ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>پیاده‌روی</td>
                    <td><span class="badge bg-success">تکمیل شد</span></td>
                    <td>2024-12-12</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>مطالعه 30 دقیقه</td>
                    <td><span class="badge bg-danger">تکمیل نشد</span></td>
                    <td>2024-12-11</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>مدیتیشن</td>
                    <td><span class="badge bg-success">تکمیل شد</span></td>
                    <td>2024-12-10</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>مدیتیشن</td>
                    <td><span class="badge bg-success">تکمیل شد</span></td>
                    <td>2024-12-10</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>مدیتیشن</td>
                    <td><span class="badge bg-success">تکمیل شد</span></td>
                    <td>2024-12-10</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>مدیتیشن</td>
                    <td><span class="badge bg-success">تکمیل شد</span></td>
                    <td>2024-12-10</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection('content')