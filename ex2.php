<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creación de Menú Horizontal o Vertical - Ex2</title>
</head>
<body>
    <?php 

    // Creación de la clase Menu
    class Menu{
        public $links = array();        // Los links del menú irán almacenados en este array
        public $titles = array();       // Los títulos de cada link del menú irán almacenados en este array

        // Método constructor
        public function loadData($links, $titles)
        {
            $this->links[] = $links;
            $this->titles[] = $titles; 
        }

        // Método que carga el menú de forma horizontal
        public function showHorizontalMenu()
        {
            for($i = 0; $i<count($this->links); $i++){
                echo '<a href="'.$this->links[$i].'">'.$this->titles[$i].'</a>';
                echo '     -     ';
            }
        }

        // Método que carga el menú de forma vertical
        public function showVerticalMenu()
        {
            for($i = 0; $i<count($this->links); $i++){
                echo '<a href="'.$this->links[$i].'">'.$this->titles[$i].'</a>';
                echo '<br /><br />';
            }
        }
    }
    
    $blog_menu = new Menu();
    $blog_menu->loadData("https://www.google.com", 'Google');
    $blog_menu->loadData("www.ayrtonhernandez.com", 'MiPaginaWeb');
    $blog_menu->loadData("www.facebook.com", 'AboutUs');
    $blog_menu->showHorizontalMenu();       // Mostrará el menu horizontal
    echo "<br /><br /><br />";
    $blog_menu->showVerticalMenu();    
    ?>
</body>
</html>