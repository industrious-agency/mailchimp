<?php

namespace Industrious\MailChimp\Contracts;

interface Interactor
{
    /**
     * Set the crentials to used.
     *
     * @param \Industrious\MailChimp\Credentials $credentials
     */
    public function setCredentials(Credentials $credentials);
}
