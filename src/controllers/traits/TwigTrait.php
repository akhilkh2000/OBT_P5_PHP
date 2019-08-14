<?php


namespace App\controllers\traits;


use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

trait TwigTrait
{

    public function render(string $template, array $paramsTemplate =[])
    {
        $twig = $this->getTwig();
        return $twig->render($template, $paramsTemplate);
    }

    private function getTwig()
    {
        $loader = new FilesystemLoader(__DIR__.'/../../../templates');
        $twig = new Environment(
            $loader
        );
        $twig->addExtension(new DebugExtension());
        return $twig
    }
}