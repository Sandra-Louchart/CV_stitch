<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cv de Stitch</title>
</head>
<body>
<section class="contact">
    <h2 id="contact">Contact Us</h2>
    <form action= "mailto:stitch@example.com" method="post">
        <div>
            <label for="name">Name :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="email">E-mail :</label>
            <input type="email" id="email" name="user_email">
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message" rows="4" cols="50"></textarea>
        </div>
        <div class="button">
            <button type="submit" id="btn">Send </button>
        </div>
    </form>
</section>
</body>
</html>