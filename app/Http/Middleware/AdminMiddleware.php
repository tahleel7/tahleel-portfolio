<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // التحقق مما إذا كانت كلمة المرور المخزنة في الجلسة تطابق الموجودة في الـ .env
        if ($request->session()->get('admin_authenticated') !== env('ADMIN_PASSWORD')) {
            
            // الحل الأفضل: إرجاع صفحة خطأ 403 (Forbidden) مباشرة لمنع الغرباء
            abort(403, 'عذراً، لا تمتلك صلاحية الوصول لهذه الصفحة.');
            
            // أو بدلاً من abort، يمكنكِ التوجيه للرئيسية مباشرة إذا رغبتِ:
            // return redirect()->route('portfolio.home')->with('error', 'غير مسموح بالدخول.');
        }

        return $next($request);
    }
}