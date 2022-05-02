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
    <h2>Fale Conosco</h2>
    <p>Área de Contato da Comunidade com a Equipe Escolar da <strong>Dias e Dias Parados</strong>
    </p>
    <form action="">
        <table border=1>
            <tr>
                <td>
                    <label for="nomeContato">
                        Nome do Contato
                    </label>
                </td>
                <td>
                    <input type="text" name="nomeContato" id="nomeContato" required />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="emailContato">
                        E-mail
                    </label>
                </td>
                <td>
                    <input type="email" name="emailContato" id="emailContato" required />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="assuntoContato">Assunto</label>
                </td>
                <td>
                    <input type="text" name="assuntoContato" id="assuntoContato" required />
                 </td>
            </tr>
            <tr>
                <td>
                    <label for="mensagemContato">
                        Mensagem</label>
                </td>
                <td>
                    <textarea name="mensagemContato" id="mensagemContato" rows="7" cols="30" >
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="enviar" value="Enviar" />
                </td>
                <td>
                    <input type="reset"
                    name="limpar" value="Limpar" />
                </td>
            </tr>
        </table>

    </form>
    <p>&copy; 2022. Arnaldo Martins Hidalgo Junior</p>
</body>
</html>