<?php
if ($_POST['passcode']) {
    $passcode = hash('tiger192,4', $_POST['passcode']);
    if ($passcode == '0275093b0e5340e3b78b3cc3faed8c112c61b4d73850eb34') {
        $_SESSION['logged'] = true;
    } else {
        $_SESSION['wrong_passcode'] = true;
    }
}
?>