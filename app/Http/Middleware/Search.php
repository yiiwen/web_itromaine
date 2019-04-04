<?php

namespace App\Http\Middleware;

use Closure;

class Search
{

    private $config = [
        'admin/news/index' => \App\Library\Search\NewsSearch::class,
        'admin/news/draftsList' => \App\Library\Search\NewsSearch::class,
        'admin/news/trash' => \App\Library\Search\NewsSearch::class,
        'admin/cases/index' => \App\Library\Search\CasesSearch::class,
        'admin/cases/trash' => \App\Library\Search\CasesSearch::class,
        'admin/cases/draftsList' => \App\Library\Search\CasesSearch::class,
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $path = $request->path();
        $search = new $this->config[$path];
        $search->handle($request);
        return $next($request);
    }
}
