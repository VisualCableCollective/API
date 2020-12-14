# Website
Main Website and API of the VisualCableCollective

# Setting Up the project
1. Remove the following lines to prevent errors in /vendor/laravel/jetstream/routes/livewire.php
```php
// User & Profile...
Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile.show');
```