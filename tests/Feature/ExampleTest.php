<?php

it('visit home page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
