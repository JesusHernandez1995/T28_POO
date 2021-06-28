<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla Confeccionarlo - Ejercicio 7</title>
</head>
<body>
    <?php 
    
    Class Celda{
        public $texto;
        public $colorFuente;
        public $colorFondo;
    
        public function __construct($texto, $colorFuente, $colorFondo)
        {
            $this->texto = $texto;
            $this->colorFuente = $colorFuente;
            $this->colorFondo = $colorFondo;
        }

        public function __graficar()
        {
            echo '<td style="color:'.$this->colorFuente.';background-color:'.$this->colorFondo.'">'.$this->texto.'</td>';
        }
    }

    class Tabla{
        public $num_rows;
        public $num_cols;
        public $campo = array();

        public function __construct($filas, $columnas)
        {
            $this->num_rows = $filas;
            $this->num_cols = $columnas;
        }

        public function loadData($dato, $fila, $columna)
        {
            $this->campo[$fila][$columna] = $dato;
        }

        public function inicio_tabla()
        {
            echo '<table border="1">';
        }

        public function inicio_fila()
        {
            echo '<tr>';
        }

        public function mostrar_tabla($f, $c)
        {
            $this->campo[$f][$c]->graficar();
        }

        public function fin_fila()
        {
            echo '</tr>';
        }

        public function fin_tabla()
        {
            echo '</table>';
        }

        public function graficar(){
            $this->inicio_tabla();
            for($i = 1; $i <=$this->num_rows; $i++){
                $this->inicio_fila();
                for($j = 1; $j <=$this->num_cols; $j++){
                    $this->mostrar_tabla($i, $j);
                }
                $this->fin_fila();
            }
            $this->fin_tabla();
        }
    }

    
    $numeritos = new Tabla(2,2);
    $celda = new Celda('Noticias', '#ccc', '#a2a2a2');
    $numeritos->loadData('1', 1,1);
    $celda = new Celda('Sucesos', '#a64bf4', '#4bf46c');
    $numeritos->loadData('8', 1,2);
    $celda = new Celda('Clases', '#346f40', '#8590b0');
    $numeritos->loadData('5', 2,1);
    $numeritos->loadData('7', 2,2);
    $numeritos->graficar();

    ?>
</body>
</html>