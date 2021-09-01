<?php
$name = $_Post['name1'];
$howyouknowpolandball = $_Post['howyouknowpolandball'];

$email_from = 'taiwanballyt@protonmail.com';
$email_subject = "波蘭球問卷新回覆";
$email_body = "名字(暱稱):$name.\n".
                 "為什麼會知道波蘭球:$howyouknowpolandball.\n";
$to = "diegogamingtw@gmail.com";

$headers = "From $email_from \r\n";

$headers .= "Reply to: $name1 \r\n"
  
mail($to,$email_subject,$email_body,$headers);

header("Location: polandball.html")

?>
