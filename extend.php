<?php

/*
 * This file is part of club-1/flarum-ext-content-permissions.
 *
 * Copyright (c) 2025 Nicolas Peugnet.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Club1\ContentPermissions;

use Flarum\Extend;

return [
    
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js'),
        
    new Extend\Locales(__DIR__.'/locale'),
];
