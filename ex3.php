<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creación de una Cabecera - Ex3</title>
</head>
<body>
    <?php 
    
    class Cabecera{
        public $title;
        public $alignment;
        public $background_color;
        public $font_color;

        public function __construct($title, $alignment, $background_color, $font_color)
        {
            $this->title = $title;
            $this->alignment = $alignment;
            $this->background_color = $background_color;
            $this->font_color = $font_color;
        }

        public function showHeader()
        {
            // Mostramos título principal
            echo '<h1 style="text-align:'.$this->alignment.'; color:'.$this->font_color.'; background-color:'.$this->background_color.'">'.$this->title .'</h1>';
        }
    }
    
    $header = new Cabecera("Hola Mundo", "right", "black", "white");
    $header->showHeader();
    ?>
</body>
</html>