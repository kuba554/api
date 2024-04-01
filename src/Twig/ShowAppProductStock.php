<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Twig;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TemplateWrapper;
use Twig\TwigFunction;
use function Symfony\Component\String\u;

/**
 * CAUTION: this is an extremely advanced Twig extension. It's used to get the
 * source code of the controller and the template used to render the current
 * page. If you are starting with Symfony, don't look at this code and consider
 * studying instead the code of the src/Twig/AppExtension.php extension.
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ShowAppProductStock extends AbstractExtension
{
    private FileLinkFormatter $fileLinkFormat;
    private string $projectDir;
    /**
     * @var callable|null
     */
    private $controller;

    public function __construct(
        FileLinkFormatter $fileLinkFormat,
        #[Autowire('%kernel.project_dir%')]
        string $projectDir,
    ) {
        $this->fileLinkFormat = $fileLinkFormat;
        $this->projectDir = str_replace('\\', '/', $projectDir).'/';
    }

    public function setController(?callable $controller): void
    {
        $this->controller = $controller;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('show_app_product_stock', $this->showProductStockNew(...), ['is_safe' => ['html'], 'needs_environment' => true]),
        ];
    }

    public function showProductStockNew(Environment $twig, string|TemplateWrapper $template): string
    {
        return $twig->render('product_stock/new.html.twig');
    }
}
