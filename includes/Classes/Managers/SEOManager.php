<?php

namespace SatowerAcademy\Classes\Managers;

class SEOManager
{
    private static $pageData;

    private static function detectCurrentPage()
    {
        $currentPage = $_SERVER['REQUEST_URI'];

        switch ($currentPage) {
            case '/':
                return [
                    'title' => 'Bienvenido a nuestra página de inicio',
                    'description' => 'Esta es la página de inicio de nuestro sitio web. Aquí encontrarás los últimos productos y servicios.'
                ];
            case '/about':
                return [
                    'title' => 'Acerca de Nosotros',
                    'description' => 'Conoce más sobre nuestra misión, visión y valores como empresa.'
                ];
            case '/courses/':
                return [
                    'title' => 'Nuestros Cursos',
                    'description' => 'Explora nuestros cursos, diseñados para ayudarte a aprender nuevas habilidades.'
                ];
            default:
                return [
                    'title' => 'Página No Encontrada',
                    'description' => 'La página que buscas no está disponible.'
                ];
        }
    }

    public static function applySEO()
    {
        self::$pageData = self::detectCurrentPage();

        if (self::$pageData) {
            echo '<title>' . htmlspecialchars(self::$pageData['title']) . '</title>' . PHP_EOL;
            echo '<meta name="description" content="' . htmlspecialchars(self::$pageData['description']) . '" />' . PHP_EOL;
        }
    }
}
