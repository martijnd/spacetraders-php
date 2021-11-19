<?php

declare(strict_types=1);

namespace SpaceTraders\Actions;

trait ManagesAccounts
{
    /**
     * @return array<string,mixed>
     */
    public function account(): array
    {
        return (array) $this->get('my/account')['user'];
    }

    /**
     * @return array<string,mixed>
     */
    public function createAccount(string $username)
    {
        return $this->post("users/$username/claim");
    }
}
