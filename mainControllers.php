<?php
$module = "";
if(isset($_REQUEST['module']))
{
    $module = $_REQUEST['module'];
}

if($module == "persona")
{
    include_once("controllers/personaController.php");
    personaController::procesar();
}
else if($module == "auto")
{
    include_once("controllers/autoController.php");
    autoController::procesar();
}
else
{
    echo "<div class='container-fluid text-center' style='margin-bottom:15px;'>
    <h3>Pagina Principal</h3>
    <img src=autos_y_personas.jpg>
    </div>";
}
?>