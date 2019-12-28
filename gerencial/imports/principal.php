<?php
require "./_security/init.php";

function sidebar()
{
    print '<!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Loja<br>Franklin</h3>
        </div>

        <ul class="list-unstyled components">
            <p>Página Gerencial</p>
            <li>
                <a href="./">HOME</a>
            </li>
            <li>
                <a href="./product.php">Produtos</a>
            </li>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <li>
                <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
            </li>
            <li>
                <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
            </li>
        </ul>
    </nav>';
}

function daysActive($days = '01')
{
    if (!isset($_GET['days'])) {
        $_GET['days'] = '01';
    }
    if ($_GET['days'] == $days) {
        print ' active';
    }
}


function lista()
{
    $conexao = Abre_Conexao();
    $query = "SELECT id, produto, categoria, descricao, vcompra, vvenda 
            FROM product 
            ORDER BY produto ASC";
    $i = 1;
    if ($select = mysqli_query($conexao, $query)) {
        if (mysqli_num_rows($select) > 0) {
            while ($row = mysqli_fetch_assoc($select)) {
                echo "
                <tr>
                    <td> <input class=\"form-check-input\" type=\"radio\" name=\"opcao\" id=\"opcao" . $i . "\" value=\"" . $row['id'] . "\">  </td>
                    <td id=\"nome" . $i . "\"> <label class=\"form-check-label\" for=\"opcao" . $i . "\">" . $row['produto'] . "</label></td>
                    <td id=\"mail" . $i . "\"> <label class=\"form-check-label\" for=\"opcao" . $i . "\">" . $row['descricao'] . "</label></td>
                    <td id=\"ende" . $i . "\"> <label class=\"form-check-label\" for=\"opcao" . $i . "\">" . $row['categoria'] . "</label></td>
                    <td id=\"ende" . $i . "\"> <label class=\"form-check-label\" for=\"opcao" . $i . "\">" . $row['vcompra'] . "</label></td>
                    <td id=\"ende" . $i . "\"> <label class=\"form-check-label\" for=\"opcao" . $i . "\">" . $row['vvenda'] . "</label></td>
                </tr>";
                $i++;
            }
        }
    } else {
        echo "Comando errado";
    }

    echo "</tbody>
    </table>";

    mysqli_close($conexao);
    unset($conexao);
}
