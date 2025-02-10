<?php

test('console command', function () {
    $this->artisan('inspire')->assertExitCode(0);
});

test('the_application_returns_a_successful_response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});