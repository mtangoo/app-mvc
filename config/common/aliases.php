<?php

declare(strict_types=1);

return [
    '@root' => dirname(__DIR__, 2),
    '@assets' => '@root/public/assets',
    '@assetsUrl' => '@baseUrl/assets',
    '@baseUrl' => '/',
    '@messages' => '@resources/messages',
    '@npm' => '@root/node_modules',
    '@public' => '@root/public',
    '@resources' => '@root/resources',
    '@runtime' => '@root/runtime',
    '@src' => '@root/src',
    '@vendor' => '@root/vendor',
    '@layout' => '@src/Views/layout',
    '@views' => '@src/Views',
];
