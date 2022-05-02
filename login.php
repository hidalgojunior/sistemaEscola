<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento Escolar</title>
    <link rel="stylesheet" 
    href="estilo.css"/>
</head>
<body>
    <h1>Sistema de Gerenciamento Escolar</h1>
    <h3>Dias e Dias Parados Ltda.</h3>
    <ul>
        <li>
            <a href="index.php">
                Principal
            </a>
        </li>
        
        <li>
            <a href="prof.php">
                Professores
            </a>
        </li>

        <li>
            <a href="login.php">
                Acesso Restrito
            </a>
        </li>
        
        <li>
            <a href="fale.php">
                Fale Conosco
            </a>
        </li>
    </ul>

    <h2>Acesso Restrito</h2>
   
    <form action="">
        <table border=1 width=50%>
            <tr>
                <td>
                    <label for="email">
                        E-mail de Acesso
                    </label>
                </td>
                <td>
                    <input type="email" 
                    name="email" id="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="senha">
                        Senha de Acesso
                    </label>
                </td>
                <td>
                    <input type="password" 
                    name="senha" id="senha">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="escolha">
                        Escolha o acesso
                    </label>
                </td>
                <td>
                    <select name=escolha>
                        <option value="P">
                            Professores
                        </option>
                        <option value="A">
                            Alunos
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Logar">
                </td>
                <td>
                    <input type="reset" value="Limpar">
                </td>
            </tr>
        </table>
    </form>
   
    <p>&copy; 2022. Arnaldo Martins Hidalgo Junior</p>
</body>
</html>