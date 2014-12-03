<?php namespace Phrest\Service\RequestFilter\Implementation\Offset\Obtainer;

use Phrest\Service\RequestFilter\Contract\ObtainStrategy;
use Symfony\Component\HttpFoundation\Request;

class OffsetInHeaderOrQuery implements ObtainStrategy
{
    /**
     * @param Request $request
     *
     * @return string|null
     */
    public function get(Request $request)
    {
        return $request->headers->get('X-Offset') ? : $request->query->get('offset');
    }
}
