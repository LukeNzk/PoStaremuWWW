
<?php
    $id = $_GET['id'];
    switch($id)
    {
        case 'home':
        case 'about':
        case 'media':
        case 'projekty':
            include('src/' . $id . '.php');
            break;
        default:
            include('src/home.php');
    }

?>
