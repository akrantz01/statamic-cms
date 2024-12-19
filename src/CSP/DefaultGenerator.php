<?php

namespace Statamic\CSP;

use Barryvdh\Debugbar\LaravelDebugbar;
use Illuminate\Support\Facades\Vite;
use Spatie\Csp\Nonce\RandomString;

class DefaultGenerator extends RandomString
{
    public function generate(): string
    {
        $nonce = parent::generate();

        Vite::useCspNonce($nonce);
        if (app()->bound(LaravelDebugbar::class)) {
            app(LaravelDebugbar::class)
                ->getJavascriptRenderer()
                ->setCspNonce($nonce);
        }

        return $nonce;
    }
}
