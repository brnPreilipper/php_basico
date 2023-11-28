<?php session_start();
print_r($_SESSION)
?>
<table>
    <tr>
        <th>NOME</th>
        <th>SOBRENOME</th>
    </tr>
    <?php foreach($_SESSION['CADASTROS'] as $cad){?>
    <tr>
        <td><?php echo $cad['nome']?></td>
        <td><?php echo $cad['sobrenome']?></td>
    </tr>

    <?php }?>
</table>



