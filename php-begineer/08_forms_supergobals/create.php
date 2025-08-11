<?php
$upload_dir = 'uploads/';
$contact_file = 'contacts.json';

if($_SERVER['REQUEST_METHOD']=="POST"){
    $name =filter_input(INPUT_POST, "name",FILTER_SANITIZE_SPECIAL_CHARS);
    $email =filter_input(INPUT_POST, "email",FILTER_SANITIZE_EMAIL);
    $phone =filter_input(INPUT_POST, "phone",FILTER_SANITIZE_NUMBER_INT);

    var_dump($name, $email, $phone);

    if($name && $email && $phone && isset($_FILES['image'])){
        if(!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        $imageName= time() ."_" . basename($_FILES['image']['name']);
        $imagePath = $upload_dir . $imageName;

        if(move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)){
            $contacts= file_exists($contact_file)?
            json_decode(file_get_contents($contact_file), true) : [];
            $contacts[] = [
                'id' =>rand(100000,20000),
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'image' => $imagePath
            ];
            file_put_contents($contact_file, json_encode($contacts, JSON_PRETTY_PRINT));
            echo "Contact added : $name ($email, $phone)<br>";
        } else {
            echo "Failed to upload image.<br>";
        }


        echo "Contact added : $name ($email, $phone)";


    } else {
        echo "Please fill in all fields correctly.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    <label for="">Name:</label>
    <input type="text" name="name" />

    <label for="">Email:</label>
    <input type="email" name="email" />

    <label for="">Phone</label>
    <input type="text" name="phone" />

    <label for="">Contact Image</label>
    <input type="file" name="image" accept="image/*" required />

    <button type="submit">Add to contact</button>
</form>

    
</body>
</html>

