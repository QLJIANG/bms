<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Exception;

/**
 * HttpException.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
class HttpException extends \RuntimeException implements HttpExceptionInterface
{
    private $headers;

    public function __construct($code, $message = null, \Exception $previous = null, array $headers = array())
    {
        $this->code = $code;
        $this->headers = $headers;

        parent::__construct($message, $code, $previous);
    }

    public function getStatusCode()
    {
        return $this->code;
    }

    public function getHeaders()
    {
        return $this->headers;
    }
}
