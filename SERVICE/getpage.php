<?PHP

switch ($_GET['page']) {

    case 'index';
        include "index.php";
        break;
    case 'main';
        include "main.php";
        break;
    case 'opdcard';
        include "opdcard.php";
        break;
    case 'report';
        include "report.php";
        break;
    case 'showlab';
        include "showlab.php";
        break;
    case 'show';
        include "show.php";
        break;



    default;
        include ("show.php");
        break;
}
?>
