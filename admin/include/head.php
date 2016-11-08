<head>
    <?php  
        session_start();
        echo isset ($_SESSION['usuario']);
        if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
        {
        	unset($_SESSION['usuario']);
        	unset($_SESSION['senha']);
        	header('Location: http://'.$_SERVER["HTTP_HOST"]);
        	}
        $logado = $_SESSION['nome'];
        ?>
    <meta author="Guilherme H Pedreira">
    <meta author="Lucas Vargas">
    <meta charset="utf-8">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet/css" href="/css/stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>