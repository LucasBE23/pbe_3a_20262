<form method="get" action="recebe.php">
    <label for="login">Login: </label>
    <input type="text" id="login" name="login"><br>
    <label for="senha">Senha: </label>
    <input type="password" id="senha" name="senha"><br>
    <label for="data">Data: </label>
    <input type="date" name="data" id="data">

    <hr>
    <!-- Nota: checked serve para marcar o campo previamente marcado-->

    <h2>Checkbox</h2>
    <h3>Linguagens Back-End</h3>
    <input type="checkbox" id="checkbox" name="html" value="HTML">HTML<br>
    <input type="checkbox" id="checkbox" name="sql" value="SQL">SQL<br>
    <input type="checkbox" id="checkbox" name="php" value="PHP" checked>PHP<br>

    <h2>Radio</h2>
    <h3>Você entendeu a aula?</h3>
    <input type="radio" name="aula" value="sim"> Sim <br>
    <input type="radio" name="aula" value="não"> Não <br>
    <input type="radio" name="aula" value="estou boiando"> Estou boiando <br>

    <hr>
    
    <h2>Select</h2>
    <h3>Escolha seu estado<h3>

    <select name="uf">
        <option value="">Selecione</value> 
        <!--OBS: o primeiro _option_ serve para indicar que deve selecionar-->
        <option>RJ<option> <!--Simples-->
        <option>ES</option> <!--Simples-->
        <option value="SP">SP</option> <!--Complexo-->
        <option value="MG">MG</option> <!--Complexo-->
        
    </select>

    <br> <input type="submit" value="Encaminhar">
</form>