<?php

    function verifySelection($base, $try) {
        if ($base == $try)
            return 'selected'; 
    }
    function whatIs($tentativa){
        if($tentativa == 1){
            return "gado";
        }else if($tentativa == 2){
            return "veterinario";
        }else if($tentativa == 3){
            return "raca";
        }else if($tentativa == 4){
            return "criador";
        }
    }

    function menu() {
        echo "
        <ul>
            <li><a href='index.php'>Gado</a></li>
            <li><a href='vet.php'>Veterinário</a></li>
            <li><a href='raca.php'>Raça</a></li>
            <li><a href='criador.php'>Criador</a></li>
            <li><a href='listar.php'>Listar</a></li>
        </ul>
        ";
    }

    function tabela() {
        $values = func_get_args();

        echo "
        <table>
			<thead>
				<tr>
                    <th>nome</th>
                    <th>idade</th>
                    <th>peso</th>
                    <th>raça</th>
                    <th>criador</th>    
                </tr>
            </thead>   
			<tbody>
                <tr>
                ";
                foreach($values as $value) {
                    echo "<th>$value</th>";
                }
        echo "
				</tr>
			</tbody>
        </table>
        ";
    }


?>