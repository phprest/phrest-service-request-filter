<?php namespace Phrest\Service\RequestFilter\Implementation\Sort\Obtainer;

use Phrest\Service\RequestFilter\Contract\ObtainStrategy;
use Symfony\Component\HttpFoundation\Request;

class SortInHeader implements ObtainStrategy
{
    /**
     * @param Request $request
     *
     * @return string|null
     */
    public function get(Request $request)
    {
        return $request->headers->get('X-Sort');
    }
}
