<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
// use Auth;
class CoordinatorRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dd(Auth::check());
        // dd(Auth::user()); cái ni lấy đúng ko thông lâý ok hết thử nè
        // if(Auth::check()){
        //     if(Auth::user()->account_number == 2){
        //         return $next($request);
        //         // return Redirect()->route('COORDINATOR');
        //     }elseif(Auth::user()->account_number == 1){
        //        return Redirect()->route('login');
        //     }elseif(Auth::user()->account_number == 3){
        //         return Redirect()->route('login');
        //     }else{
        //         return Redirect()->route('login');
        //     }
        // }else{
        //     return Redirect()->route('login');
        // }
        // // return $next($request);
        // if(Auth::check()){
        //     if(Auth::user()->account_number == 2){
        //         return $next($request);
        //     }else{
        //         return Redirect()->route('login');
        //     }
        // }else{
        //     return Redirect()->route('login');
        // }
        // if(Auth::check()){
        // $role = $request->input('account_number');
        // if($role == 2){
        //     return Redirect('/dashboardCoordinator');
        //     // return Redirect()->route('COORDINATOR');
        //     // echo "1";
        // }else{
        //     return Redirect()->route('login');
        // }
        // return $next($request);
        // nên dùng bảng user để cái auth nó support tốt hơn
        // các trường đặt đừng có thêm tên table vô => account_id -> id account_email -> email ...
            // true thì nó vào đc mà ? cais ni t phai sai Auth::logout no ms forget dung ko thuong. um
            // nên đổi lại bảng usẻ để lưu, còn mà dùng cách này, thì nên lưu pwd dưới dạng Hash rồi check nó // Hash::check
            // còn gì nưa x k?  cai auth ni giong session thuong he
            // auth() là hắn support cho mình -> khi login xong nó sẽ lưu session ok de t nhgien cuu lai kho' vc :v
        // return auth()->user()->account_number == 2 // ???? mdw @@
        //     ? $next($request)
        //     : redirect()->route('login');
        if(Auth()->user()->account_number == 2){
            return $next($request);
        }else{
            return redirect()->route('login');
        }
    }
}
