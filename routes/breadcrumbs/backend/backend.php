<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.plugins', function ($trail) {
    $trail->push(__('strings.backend.plugins.title'), route('admin.plugins'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
