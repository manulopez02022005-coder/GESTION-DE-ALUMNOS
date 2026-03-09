<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Alumno;
use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
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
        $alumnos = Alumno::all();
        View::share('alumnos', $alumnos);
    }
}
