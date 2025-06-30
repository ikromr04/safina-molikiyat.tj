<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::prefix(parseLocale())->group(function () {
  Route::get('/', [AppController::class, 'index']);
  Route::post('/contact', [AppController::class, 'contact'])->name('contact');
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
