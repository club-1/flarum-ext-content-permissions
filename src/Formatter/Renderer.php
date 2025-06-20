<?php

/*
 * This file is part of club-1/flarum-ext-content-permissions.
 *
 * Copyright (c) 2025 Nicolas Peugnet <nicolas@club1.fr>.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */

namespace Club1\ContentPermissions\Formatter;

use Flarum\Post\Post;
use Psr\Http\Message\ServerRequestInterface;
use s9e\TextFormatter\Renderer as TextFormatterRenderer;
use s9e\TextFormatter\Utils;

class Renderer
{

    /**
     * Configure rendering for content permissions.
     *
     * @param TextFormatterRenderer $renderer
     * @param mixed $context
     * @param string|null $xml
     * @return string $xml to be rendered
     */
    public function __invoke(TextFormatterRenderer $renderer, $context, ?string $xml, ?ServerRequestInterface $request)
    {
        if (!($context instanceof Post)) {
            return $xml;
        }
        $user = $context->user;
        if (is_null($user)) {
            return $xml;
        }
        if ($user->can('post.club-1-content-permissions.followedLinks')) {
            $xml = Utils::replaceAttributes($xml, 'URL', function ($attributes) {
                $attributes['rel'] = '';
                return $attributes;
            });
        }
        return $xml;
    }
}

