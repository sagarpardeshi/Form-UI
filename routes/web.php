<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'livewire.dashboard.home')
    ->name('dashboard');

Route::view('/forms', 'livewire.forms.form-list')
    ->name('forms.index');

Route::view('/forms/create', 'livewire.forms.form-editor')
    ->name('forms.create');

Route::view('/forms/view', 'livewire.forms.form-view')
    ->name('forms.view');

Route::view('/forms/edit', 'livewire.forms.form-editor')
    ->name('forms.edit');

Route::view('/submissions', 'livewire.submissions.submission-list')
    ->name('submissions.index');

Route::view('/submissions/view', 'livewire.submissions.submission-view')
    ->name('submissions.view');

Route::view('/billing', 'livewire.billing.billing')
    ->name('billing');

Route::view('/config', 'livewire.config.config')
    ->name('config');

Route::view('/profile', 'livewire.profile.profile')
    ->name('profile');

Route::view('/preferences', 'livewire.preferences.preferences')
    ->name('preferences');