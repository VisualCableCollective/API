<?php

namespace App\Enums;

use ArchTech\Enums\Names;
use ArchTech\Enums\Values;

enum Service : string
{
    use Names, Values;

    case VTCManager = 'vtcmanager';
}
