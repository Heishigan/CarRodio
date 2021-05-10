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
        <section class="users">

            <header>
                <div class="content">
                    <img src="#" alt="">
                    <div class="details">
                        <span>Sajid</span>
                        <p>Active now</p>
                    </div>
                </div>
            </header>


            <div class="search">
                <span class="text">Select a user to start a chat</span>
                <input type="text" placeholder="Enter name to search.....">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="#" alt="">
                        <div class="details">
                            <span>Sajid</span>
                            <p>Test messahe</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="#" alt="">
                        <div class="details">
                            <span>Sajid</span>
                            <p>Test messahe</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a>
            </div>

        </section>
    </div>

    <script src="../src/frontend/assets/js/userchat.js"> </script>
</body>

</html>