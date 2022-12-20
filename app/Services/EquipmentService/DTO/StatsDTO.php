<?php

namespace App\Services\EquipmentService\DTO;

class StatsDTO
{
    public function __construct(private int $total,
                                private int $destroyed,
                                private int $damaged,
                                private int $captured,
                                private int $abandoned)
    {
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function getDestroyed(): int
    {
        return $this->destroyed;
    }

    public function getDamaged(): int
    {
        return $this->damaged;
    }

    public function getCaptured(): int
    {
        return $this->captured;
    }

    public function getAbandoned(): int
    {
        return $this->abandoned;
    }
}
