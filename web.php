<?php

$get(
    '/@View@index',
    '/register@View@register',
    '/login@View@login',
    '/logout@User@logout',
    '/test/:id@View@test',
);

$post(
    '/register@User@register',
    '/login@User@login',
);

