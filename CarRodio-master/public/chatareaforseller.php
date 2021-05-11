<?php
include("../src/backend/includes/autoloader.inc.php");
$UsersView = new Usersview();
session_start();
$_SESSION["incomingIDParam"] = $_GET['id'];
if (isset($_GET['id']) !== "") {
    $_SESSION["incomingIDParam"] = $_GET['id'];
}

?>

<?php
if (isset($_POST['Send-Message'])) { //check if form was submitted
    $Message = new MessagesContr();
    $msg = $_POST['Message'];
    $incomingID = $_SESSION["incomingIDParam"];
    $ID = $_SESSION["sellerID"];
    $Message->SendMessageforSeller($incomingID, $ID, $msg);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="../src/frontend/assets/css/chat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <div class="wrapper">
        <section class="chat-area">

            <header>
                <a href="./chatforseller.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="../src/frontend/assets/imgs/user.png" alt="">
                <?php
                $userID = $_SESSION["incomingIDParam"];
                $UsersView->displayCurrentTextingUser($userID);
                ?>
            </header>

            <div class="chat-box">

                <?php
                $Messageview = new MessagesView();
                $incomingID = $_SESSION["incomingIDParam"];
                $ID = $_SESSION["sellerID"];
                $Messageview->DisplayMessages($incomingID, $ID);
                ?>

            </div>
            <form action="" class="typing-area" method="POST">
                <!-- 

outgoing message is from session ID logged in
incomings ID si from URL param

-->
                <input type="text" name="Message" placeholder="Type a message here....">
                <button type="submit" name="Send-Message"><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>


</body>

</html>