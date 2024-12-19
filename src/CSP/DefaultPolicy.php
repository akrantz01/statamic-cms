<?php

namespace Statamic\CSP;

use Illuminate\Http\Request;
use Spatie\Csp\Directive;
use Spatie\Csp\Keyword;
use Spatie\Csp\Policies\Basic;
use Symfony\Component\HttpFoundation\Response;

class DefaultPolicy extends Basic
{
    public function configure(): void
    {
        parent::configure();

        $this
            ->addDirective(Directive::SCRIPT, [Keyword::UNSAFE_INLINE, 'https:', Keyword::UNSAFE_EVAL, Keyword::STRICT_DYNAMIC])
            ->addDirective(Directive::STYLE_ELEM, [Keyword::SELF, Keyword::UNSAFE_INLINE]);

        if (config('app.debug') && config('debugbar.enabled')) {
            $this
                ->addDirective(Directive::SCRIPT_ATTR, Keyword::UNSAFE_INLINE)
                ->addDirective(Directive::STYLE_ATTR, Keyword::UNSAFE_INLINE)
                ->addDirective(Directive::FONT, [Keyword::SELF, 'data:'])
                ->addDirective(Directive::IMG, 'data:');
        }
    }

    public function shouldBeApplied(Request $request, Response $response): bool
    {
        if (config('app.debug') && ($response->isClientError() || $response->isServerError())) {
            return false;
        }

        return parent::shouldBeApplied($request, $response);
    }
}
