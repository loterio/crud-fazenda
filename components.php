<?php

    function verifySelection($base, $try) {
        if ($base == $try)
            return 'selected'; 
    }
    function whatIs($selected){         #  Função para definir qual filtro será 
        if($selected == 1){             #  usado na listagem de tabelas.
            return "gado";
        }else if($selected == 2){
            return "veterinario";
        }else if($selected == 3){
            return "raca";
        }else if($selected == 4){
            return "criador";
        }
    }

    function menu() {
        echo "
        <ul id='navbar'>
            <li><a href='index.php'>Gado</a></li>
            <li><a href='vet.php'>Veterinário</a></li>
            <li><a href='raca.php'>Raça</a></li>
            <li><a href='criador.php'>Criador</a></li>
            <li><a href='listar.php'>Listar</a></li>
        </ul>
        ";
    }

    function linedRow($num){
        if($num % 2 == 0){
            return "'line-yes'";
        } else {
            return "'line-no'";
        }
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