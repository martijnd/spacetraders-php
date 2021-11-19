<?php

declare(strict_types=1);

namespace SpaceTraders\Actions;

trait ManagesLoans
{
    /**
     * @return array<string,mixed>
     */
    public function loans(): array
    {
        return $this->get('types/loans');
    }
}
