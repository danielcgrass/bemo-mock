<?php

    if(isset($_POST['button-send'])){
        $contactNameInfo = $_POST['contactName'];
        $contactEmailInfo = $_POST['contactEmail'];
        $textField = $_POST['contactField'];

        $to = "dannygrass@gmail.com";

        $mailHeaders = "From: " . $contactNameInfo . "<" . $contactEmailInfo . ">\r\n";
        if(mail($to, $mailHeaders)) {
            echo "Message Successfully Sent!";
        }






        // 'X-Mailer: PHP/' . phpversion();
        // @mail($to, $userName, $email, $textField);
        // header("Location: contact-us.php?success");
        // echo "Message Successfully Sent!";
        

        // if(isset($_GET['success']))
        // {
        //     echo "Your message has been sent.";
        // }
    }


    



?>
