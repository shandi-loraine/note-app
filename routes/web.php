<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', [NoteController::class, 'showAll'])->name('showAll');

Route::get('/notes/create', [NoteController::class, 'createNote'])->name('createNote');
Route::post('/notes/store', [NoteController::class, 'storeNote'])->name('storeNote');

Route::get('/notes/{id}', [NoteController::class, 'showNote'])->name('showNote');

Route::get('/notes/{id}/edit', [NoteController::class, 'editNote'])->name('editNote');
Route::put('/notes/{id}/update', [NoteController::class, 'updateNote'])->name('updateNote');
 
Route::delete('/notes/{id}/delete', [NoteController::class, 'deleteNote'])->name('deleteNote');

Route::get('/notes/search',[NoteController::class, 'searchNote'])->name('searchNote');

Route::post('/notes/{id}/toggle-bookmark', [NoteController::class, 'toggleBookmark'])->name('toggleBookmark');
Route::get('/notes-bookmarked', [NoteController::class, 'showBookmarkedNotes'])->name('showBookmarkedNotes');

Route::get('/notes-trash', [NoteController::class, 'showTrash'])->name('showTrash');
Route::delete('/notes-trash/delete', [NoteController::class, 'deleteSelectedNotes'])->name('deleteSelectedNotes');
Route::delete('/notes-trash/empty', [NoteController::class, 'emptyTrash'])->name('emptyTrash');

Route::post('/notes-trash/restore', [NoteController::class, 'restoreSelectedNotes'])->name('restoreSelectedNotes');

Route::delete('/notes/delete/bookmarknote', [NoteController::class, 'deleteBookmarkedNote'])->name('deleteBookmarkedNote');

Route::get('/notes/show/bookmarknote', [NoteController::class, 'showBookmarkedNote'])->name('showBookmarkedNote');


//Requirements
//Note Resource, User Resource

//Note Model
//Title
//Description
//Content


//methods
//showAll = Read
//createNote = Create
//storeNote = Create
//showNote = Read
//editNote = Update
//updateNote = Update
//deleteNote = Delete

//User Model
// name
// email
// birthday

//home button
/*            <form action="{{ route('showAll') }}" method="GET" class="home-button">
<button type="submit" class="btn"><i class="fa-solid fa-house"></i></button>
</form> */