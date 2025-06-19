<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::prefix(parseLocale())->group(function () {
  Route::get('/', [AppController::class, 'index']);
  Route::get('/about', [AppController::class, 'index']);
});

function parseLocale()
{
  $locale = request()->segment(1);
  $availableLocales = config('app.available_locales');
  $defaultLocale = config('app.fallback_locale');

  if ($locale !== $defaultLocale && in_array($locale, $availableLocales)) {
    app()->setLocale($locale);

    return $locale;
  }

  app()->setLocale($defaultLocale);

  return '';
}
