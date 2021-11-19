<?php

declare(strict_types=1);

namespace SpaceTraders\Actions;

use SpaceTraders\Traits\MakesHttpRequests;

trait ManagesLoans
{
    use MakesHttpRequests;

    /**
     * @return array<string,mixed>
     */
    public function myLoans(): array
    {
        return $this->get('my/loans');
    }

    /**
     * @return array<string,mixed>
     */
    public function availableLoans(): array
    {
        return $this->get('types/loans');
    }

    /**
     * @param string $type
     * 
     * @return array<string,mixed>
     */
    public function takeOutLoan(string $type): array
    {
        return $this->post('my/loans', ['type' => $type]);    }
}
