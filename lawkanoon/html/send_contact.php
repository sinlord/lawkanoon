<?php require('config.php'); ?>
<html>
<head>
    <title>law kanoon</title>
    <meta name="keywords" content="law, kanoon, kanun, kanon, indian, justice, order, court, lawyer">
    <meta name="description" content="Information on indian law and order">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <meta http-equiv="refresh" content="5; url=http://lawkanoon.com/">
</head>
<body>
<div id="container">
    <div id="header"><h1>Law Kanoon - your one stop solution to Legal needs</h1></div>
    <div id="content">
        <div id="message">
            <?php if (isset($_POST['customer_mail'])) {
                $mail_from = $_POST['customer_mail'];
            } else {
                $mail_from = 'unknown';
            }
            $subject = "lawkanoon.com: visting reasons";
            if (!isset($_POST['detail'])) {
                echo "Oops!! you forgot to write your message.";
                header('Location: index.html');
            }
            $message = $_POST['detail'] . ' Name: ' . $_POST['name'] . ' email: ' . $mail_from;
            $header = "from: " . $_POST['name'] . "<" . $mail_from . ">";
            $to = 'admin@lawkanoon.com';
            ?>
            <h3><br><br>

                <?php
                if (($_POST['detail'] == "")) {
                    echo "Oops!! you forgot to write your message.";
                      /* header('Refresh: 1; URL=index.html'); -- really bad! what was intented with this??*/
                } else {
                    try {
                        $stmt = $db->prepare('INSERT INTO visitreason (description,name,email,date) VALUES (:desc, :name, :email, :date)');
                        $stmt->execute(array(':desc' => $_POST['detail'], ':name' => $_POST['name'], ':email' => $mail_from, ':date' => date('Y-m-d H:i:s')));
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }

                    $send_contact = mail($to, $subject, $message, $header);

                    if ($send_contact) {
                        echo "Thanks!! your input is really helpful!!!!";
                        exit();
                    } else {
                        echo "Oops!! There was some error in sending. Please try again.";
                       /* header('Refresh: 1; URL=index.html');*/
                    }
                }
                ?>

            </h3></div>
    </div>
    <div id="footer"><h6>@Abhinav Verma | February 2014</h6></div>
</div>
</body>
</html>