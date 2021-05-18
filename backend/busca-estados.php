<select name="estado" id="estado">
    <option value=""></option>
    <?php 
        require_once './backend/conecta.php';
        $query = "SELECT id_estado, nome FROM estados";
        $executa = mysqli_query($conexao,$query);
        while($estados = mysqli_fetch_array($executa)){
            echo "<option value='$estados[nome]'>$estados[nome]</option>";
        } 
    ?>
</select>

<select name="estado" id="estado">
    <option name="estado" value="<?php echo $_SESSION['estado'];?>"></option>
        <?php
            require_once './backend/conecta.php';
            $query = "SELECT id_estado, nome FROM estados";
            $executa = mysqli_query($conexao,$query);
            while($estados = mysqli_fetch_array($executa)){
                echo "<option value='$estados[nome]'>$estados[nome]</option>";
            }
        ?>
</select>