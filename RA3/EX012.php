<!-- 
APUNTS

    Declarar:
        - function peu(): void{
            echo '<footer>....</footer>';
        }
    Cridar:
        peu();
        peu();
        peu();
        // s'executa 3 vegades

    Els Paràmetres:
        function targeta(string $nom, float $preu, int $estoc): void{
            echo "<h3>$nom</h3><p>$preu EUR - $estoc unitats</p>";
        }
        targeta('Teclat mecanic',79.90, 4); // l'ordre importa

    Valors per defecte:
        Parametres que es poden ometre
    
        function preuAmbIva{
            float base,
            float $iva = 0,21 //Valor per defecte
        }; float {
            return round($base *(i + $iva), 2);
        }
        
        preuAmbIva(100); //121
        preuAmbIva(100, 0.10); 110

    L'Ambit que veu una funcion:

    $botiga = 'Bit Bazar';

    function mostra(); string {
        return '$nom a ', $botiga; //No la veu
    }

    Static: la funcio que recorda

    function compta(); int{
        static $n = 0;
        $n ++;
        return $n;
    }
    // 1 2 3

    FUNCIONS QUE TREBALLEN AMB ARRAYS

    Rep un array, torna un valor !!

    function valorEstoc(array $p); float
    {
        $total = 0.0;
        foreach($p as $item){
            $total += $item['preu'];
        }
        return $total;
    }

    Rep un array, torna un array !!

    function disponibles(array $p): array
    {
        $res = [];
        foreach ($p as $item){
            if ($item['estoc] > 0){ res[] = $item;}
        }
        return $res;
    }

 -->