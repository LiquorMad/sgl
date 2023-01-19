<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use App\Http\Controllers\LogoutController as Auth;

class AuthCheck
{
    protected $timeout = 1200;

    public function __construct(Store $session){
        $this->session = $session;
    }
    public function handle(Request $request, Closure $next)
    {

        

        $isLoggedIn = $request->path() != 'login';
        if(! session('lastActivityTime'))
            $this->session->put('lastActivityTime', time());
        elseif(time() - $this->session->get('lastActivityTime') > $this->timeout){
            $this->session->forget('lastActivityTime');
            $cookie = cookie('intend', $isLoggedIn ? url()->current() : 'links');
            Auth::index();
        }

        $isLoggedIn ? $this->session->put('lastActivityTime', time()) :
        $this->session->forget('lastActivityTime');
        //se não esta logado não pode ter aceeso ao sistema
        if(!session()->has('email') 
            && $request->path() !='login'){
            return redirect('login')->with('info',['Inicie a sessão ']);
        //se esta logado não pode voltar a tela login
        }if(session()->has('email') && request()->is('login') || request()->is('/')  ){
            return back();
        }if(session('idTipoUtilizador')!='1' &&request()->is('users*')){
            return back()->with('error',['Você não tem permissão de acesso']);
        //se esta logado não pode voltar a tela login
        }
        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0,must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
    }
}
