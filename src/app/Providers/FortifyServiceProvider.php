<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);

        Fortify::registerView(function () {
        return view('auth.register');
        });

        // カスタムバリデーション用（再呼び出し）
        Fortify::registerView('auth.register');


        Fortify::loginView(function () {
        return view('auth.login');
        });

        //loginという名前のレート制限グループを定義
        RateLimiter::for('login', function (Request $request) {
        $email = (string) $request->email;
        /*ログイン機能に対するリクエストを1分間に10回まで制限、
        同じメールアドレスとIPアドレスからのリクエストを区別して制限する*/
        return Limit::perMinute(10)->by($email . $request->ip());
        });
    }



}
