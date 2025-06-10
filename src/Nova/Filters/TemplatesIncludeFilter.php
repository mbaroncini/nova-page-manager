<?php

namespace Outl1ne\PageManager\Nova\Filters;

use Laravel\Nova\Http\Requests\NovaRequest as Request;
use Outl1ne\PageManager\NPM;

class TemplatesIncludeFilter extends TemplatesExcludeFilter
{
    public $name = 'Templates (include)';

    public function apply(Request $request, $query, $value)
    {
        if (empty($value)) return $query;
        return $query->whereIn('template', $value);
    }
}
