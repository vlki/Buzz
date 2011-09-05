<?php

namespace Buzz\Client;

use Buzz\Message;

interface ClientInterface
{
    /**
     * Populates the supplied response with the response for the supplied request.
     *
     * Since the pass-by-reference cannot be used always (i.e. call_user_func), the
     * populated response must be also returned. If it cannot be returned right away
     * (for example when using batch client), then null must be returned.
     *
     * @param Message\Request  $request  A request object
     * @param Message\Response $response A response object
     * @return Message\Response|null
     */
    function send(Message\Request $request, Message\Response $response);
}
