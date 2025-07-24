<?php
if (isset($_POST['url'])) {
    $url = trim($_POST['url']);

    // Veiligheidscheck (optioneel, kun je uitbreiden)
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        file_put_contents("url.txt", $url);
        echo "URL opgeslagen! <a href='doorsturen.html'>Bekijk doorsturen</a>";
    } else {
        echo "Ongeldige URL.";
    }
} else {
    echo "Geen URL ontvangen.";
}
?>
