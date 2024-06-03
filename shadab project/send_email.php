<?php
    $name = "Najeeb";
    $phone = "9102303124";
    $email = "najeeburrahmanmd@gmail.com";
    $deliveryAddress = "address";
    $medicine = "All Medicine Name ";

    $to = "iamnajeebjung@gmail.com"; // replace with your email address
    $subject = "Contact Form Submission";

    $message = "
        <html>
            <body>
                <h2>Contact Form Submission</h2>
                <p>Name: $name</p>
                <p>Phone: $phone</p>
                <p>Email: $email</p>
                <p>Delivery Address: $deliveryAddress</p>
                <p>Medicine Name : $medicine</p>
            </body>
        </html>
    ";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        print_r(error_get_last());
    }


