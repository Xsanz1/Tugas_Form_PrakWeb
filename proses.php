<?php
    if (isset($_POST['button'])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (empty($_POST["user_name"])) {
            echo "Nama Kosong";
        } else {
            $user_name = cek_input($_POST["user_name"]);
            if (!preg_match("/^[a-zA-Z]*$/", $user_name)){
                echo "nama harus huruf";
            } else {
                $user_name = $_POST['user_name'];
                $user_email = $_POST['user_email'];
                $user_message = $_POST['user_message'];

                echo "atas nama $user_name dengan alamat email $user_email mengirimkan pesan $user_message";
            
            }
        }
    }
}

function cek_input($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>