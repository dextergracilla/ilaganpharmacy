<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<h2>Feedback</h2>
<form action="mail.php" method="post">  
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br><br>

  <label for="subject">Subject:</label>
  <input type="text" id="subject" name="subject" required><br><br>

  <label for="message">Message:</label>
  <input type="text" id="message" name="message" required><br><br>

  <input type="submit" value="send" name="send">
</form>
</body>
</html>