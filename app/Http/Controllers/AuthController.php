<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Web as Requests;
use App\Services\AuthServiceInterface;
use App\Models as Database;
use Cookie;

class AuthController extends Controller
{
    use AuthenticatesUsers {
        logout as performLogout;
    }

    protected $authService;

    /**
     * Constructor
     */
    public function __construct(AuthServiceInterface $authService)
    {
        $this->middleware('guest')->except('logout');
        $this->authService = $authService;
    }

    /**
     * @var string Redirect url after login successfully
     */
    protected $redirectTo = '/';

    /**
     * Show login form
     *
     * GET /login
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Handle a login request to the application.
     *
     * POST /login
     *
     * @param App\Http\Requests\LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function login(Requests\LoginRequest $request)
    {
        $user_id = $request->user_id;
        $password = $request->password;
        if (Auth::attempt(['user_name' => $user_id, 'password' => $password])) {
            return redirect()->route('dashboard');
        } else {
            $request->session()->flash('status', 'Đăng nhập thất bại. ID hoặc mật khẩu trống hoặc sai!');
            return redirect()->route('login');
        }
    }

    /**
     * Handle a logout request to the application.
     *
     * POST /logout
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect(route('homepage'));
    }
}
