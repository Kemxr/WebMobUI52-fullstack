<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

//Test des routes de l'API

Artisan::command('test:story-routes', function () {
    $this->info('Testing StoryController routes...');

    // Test création
    $this->info('Creating a new story...');
    $createResponse = Http::withHeaders([
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
        'X-Requested-With' => 'XMLHttpRequest',
        'X-CSRF-TOKEN' => csrf_token(),
    ])->post('http://localhost:8000/api/v1/stories', [
        'title' => 'New Story',
        'description' => 'This is a test story.',
    ]);

    if ($createResponse->successful()) {
        $this->info('Story created successfully:');
        $this->line($createResponse->body());
        $storyId = $createResponse->json('id');
    } else {
        $this->error('Failed to create story:');
        $this->line($createResponse->body());
        return;
    }

    // Test mise à jour
    // $this->info('Updating the story...');
    // $updateResponse = Http::put(route('updateStory', ['id' => 2]), [
    //     'title' => 'Updated Story Title',
    //     'description' => 'This is an updated test story.',
    // ]);

    // if ($updateResponse->successful()) {
    //     $this->info('Story updated successfully:');
    //     $this->line($updateResponse->body());
    // } else {
    //     $this->error('Failed to update story:');
    //     $this->line($updateResponse->body());
    //     return;
    // }

    // // Test suppression
    // $this->info('Deleting the story...');
    // $deleteResponse = Http::delete(route('api.v1.stories.destroy', ['id' => $storyId]));

    // if ($deleteResponse->successful()) {
    //     $this->info('Story deleted successfully.');
    // } else {
    //     $this->error('Failed to delete story:');
    //     $this->line($deleteResponse->body());
    //     return;
    // }

    $this->info('All tests completed successfully.');
})->purpose('Test the StoryController routes for create, update, and delete');