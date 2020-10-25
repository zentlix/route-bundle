<?php

/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Zentlix to newer
 * versions in the future. If you wish to customize Zentlix for your
 * needs please refer to https://docs.zentlix.io for more information.
 */

declare(strict_types=1);

namespace Zentlix\RouteBundle\Application\Command\Route;

use Symfony\Component\Validator\Constraints;
use Zentlix\MainBundle\Infrastructure\Share\Bus\CreateCommandInterface;
use Zentlix\RouteBundle\UI\Http\Web\Controller\TemplateController;

class CreateCommand extends Command implements CreateCommandInterface
{
    /** @Constraints\NotBlank() */
    public ?string $name = null;

    public function __construct()
    {
        $this->controller = TemplateController::class;
        $this->action     = 'resolve';
    }
}