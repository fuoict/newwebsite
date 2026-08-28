<?php

namespace App\Http\Middleware;

use App\Models\Page;
use Closure;
use Illuminate\Http\Request;

class CmsPageMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if ($this->shouldSkip($request)) {
            return $next($request);
        }

        $slug = $this->resolveSlug($request);

        if (!$slug) {
            return $next($request);
        }

        $page = Page::where('slug', $slug)
            ->where('status', 'published')
            ->first();

        if (!$page) {
            $page = Page::firstOrCreate(
                ['slug' => $slug],
                [
                    'title' => ucwords(str_replace('-', ' ', $slug)),
                    'slug' => $slug,
                    'status' => 'published',
                    'content' => '',
                    'meta_title' => null,
                    'meta_description' => null,
                    'published_at' => now(),
                ]
            );
        }

        if (trim((string) $page->content) !== '') {
            return response()->view('pages.show', ['page' => $page]);
        }

        return $next($request);
    }

    protected function shouldSkip(Request $request): bool
    {
        $path = trim($request->path(), '/');
        $routeName = (string) $request->route()?->getName();

        if ($path === '' || $path === 'health') {
            return true;
        }

        if (str_starts_with($path, 'admin') || str_starts_with($path, 'auth') || str_starts_with($path, 'login')) {
            return true;
        }

        if (str_starts_with($path, 'profile') || str_starts_with($path, 'dashboard')) {
            return true;
        }

        if (str_starts_with($path, 'news') || str_starts_with($path, 'pages') || str_starts_with($path, 'api')) {
            return true;
        }

        return in_array($routeName, ['pages.all-json', 'pages.show'], true);
    }

    protected function resolveSlug(Request $request): ?string
    {
        $path = trim($request->path(), '/');

        if ($path === '') {
            return null;
        }

        $segments = explode('/', $path);
        if (count($segments) > 1) {
            return null;
        }

        return $segments[0];
    }
}
