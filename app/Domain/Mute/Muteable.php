<?php

namespace App\Domain\Mute;

interface Muteable
{
    public function getUuid(): string;

    public function getMuteableType(): string;

    public function getName(): string;

    public function getUnmuteUrl(): string;
}
