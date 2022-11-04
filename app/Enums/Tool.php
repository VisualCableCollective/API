<?php

namespace App\Enums;

use ArchTech\Enums\Names;

enum Tool
{
    use Names;

    case Horizon;
    case Telescope;
    case Internal;
}
