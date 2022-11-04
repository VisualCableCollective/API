<?php

namespace App\Enums;

use ArchTech\Enums\Names;
use ArchTech\Enums\Values;

enum Tool : string
{
    use Names, Values;

    case Horizon = 'horizon';
    case Telescope = 'telescope';
    case Internal = 'internal';
}
