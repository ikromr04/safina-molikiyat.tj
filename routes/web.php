<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::prefix(parseLocale())->group(function () {
  Route::get('/', [AppController::class, 'index']);
  Route::get('/about', [AppController::class, 'index']);
});

function parseLocale(){
  $locale = request()->segment(1);
  $locales = config('app.available_locales');
  $default = config('app.fallback_locale');

  if ($locale !== $default && in_array($locale, $locales)) {
      app()->setLocale($locale);
      return $locale;
  }

  app()->setLocale($default);
  return '';
}
