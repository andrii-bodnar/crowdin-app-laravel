<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/manifest.json', function () {
    return [
        "identifier" => "your-application-identifier",
        "name" => "Your Application",
        "description" => "Application description",
        "logo" => "/app-logo.png",
        "baseUrl" => "https://e882-5-58-4-29.ngrok.io/",
        "authentication" => [
            "type" => "authorization_code",
            "clientId" => "uCwU2qIx166aExum2164"
        ],
        "events" => [
            "installed" => "/install"
        ],
        "scopes" => [
            "project"
        ],
        "modules" => [
            "integrations" => [
               [
                   "key" => "your-module-key",
                   "name" => "Demo App",
                   "description" => "Demo app description",
                   "logo" => "/app-logo.png",
                   "url" => "/",
                   "environments" => [
                       "crowdin"
                   ]
               ]
            ]
        ]
    ];
});

Route::post('/install', function () {
    return ['success' => true];
});

Route::post('/uninstall', function () {
    return ['success' => true];
});
