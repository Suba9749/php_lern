<?php
$contact_file = 'contacts.json';
$contacts=file_exists($contact_file)? json_decode(file_get_contents($contact_file), true) : []; 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<a href="create.php">create new contact</a>
<ul>
    <?php foreach($contacts as $contact): ?>
        <li>
            <img src="<?php echo $contact['image']; ?>" height="50" width="50" >
           <?php echo "{$contact['name']} <br> - {$contact['email']} -<Br>{$contact['phone']}";?>
        <br>
           <a href="delete.php?id=<?php echo $contact['id']?>">Delete</a>

            
        </li>
        <?php endforeach ?>
</ul>
</body>
</html>