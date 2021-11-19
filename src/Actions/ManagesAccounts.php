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
        return $this->get('my/account')['user'];
    }

    public function createAccount(string $username)
    {
        return $this->post("users/$username/claim");
    }
}
