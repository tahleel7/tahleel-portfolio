<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Http\Request;

// 1. الواجهة العامة للمستخدمين (Guest View)
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.home');

// 2. الرابط السري لتفعيل الجلسة (خارج مجموعة الحماية)
Route::get('/admin/login-secret', function (Request $request) {
    $password = $request->query('password');

    if ($password === env('ADMIN_PASSWORD')) {
        // تخزين التحقق في الجلسة
        $request->session()->put('admin_authenticated', $password);
        return redirect()->route('admin.projects.index')->with('success', 'تم التحقق بنجاح! مرحباً بك.');
    }

    abort(403, 'كلمة المرور غير صحيحة.');
})->name('admin.secret.login');


// 3. واجهات التحكم المحمية الخاصة بمسؤول النظام 
// تم تعديل هذا السطر وإزالة 'auth' ليعتمد فقط على حمايتنا المخصصة
Route::group(['prefix' => 'dashboard', 'as' => 'admin.', 'middleware' => ['admin']], function () {
    
    // مسار عرض جدول المشاريع بالكامل
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    
    // مسار عرض صفحة الفورم (إنشاء مشروع جديد)
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    
    // مسار استقبال البيانات وحفظها في قاعدة البيانات
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');

    // مسارات التعديل 
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    
    // مسار حذف المشروع 
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
});