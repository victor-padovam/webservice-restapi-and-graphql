<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('rest/lista_todos_alunos', [AlunoController::class, 'index']);

// List single alunos
Route::get('rest/lista_um_aluno/{id}', [AlunoController::class, 'showUnique']);

// Create new aluno
Route::post('rest/create_alunos', [AlunoController::class, 'create']);

// Update aluno
Route::put('rest/aluno/{id}', [AlunoController::class, 'update']);

// Delete aluno
Route::delete('rest/delete_aluno/{id}', [AlunoController::class,'destroy']);
