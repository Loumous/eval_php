<?php
namespace Lou;

class View
{
    private static $template = null;
    private static $variables = [];

    public static function setTemplate($nom)
    {
        self::$template = "view/" . $nom . ".html.php";
    }

    public static function bindVariable($name, $value)
    {
        self::$variables[$nom] = $value;
    }

    public static function display()
    {
        
        foreach (self::$variables as $nom => $value)
        {
            $nom = $value;
        }

        require self::$template;
    }
}