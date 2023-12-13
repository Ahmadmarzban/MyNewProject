<?php



if (isset($_POST['encode'])) {
    $user_information = array(
        'name' => $_POST['user_name'],
        'password' => $_POST['password'],
        'gmail' => $_POST['gmail']
    );

    $jsonEncode = json_encode($user_information);
    echo $jsonEncode;
}

if (isset($_POST['decode'])) {
    $jsonInformation = $_POST['json_decode'];

    $jsonDecode = json_decode($jsonInformation, true);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form method="post">
        <input type="text" name="user_name" placeholder="User name..." value="<?php echo isset($jsonDecode['name']) ? htmlspecialchars($jsonDecode['name']) : ''; ?>">
        <br>
        <input type="text" name="password" placeholder="Password..." value="<?php echo isset($jsonDecode['password']) ? htmlspecialchars($jsonDecode['password']) : ''; ?>">
        <br>
        <input type="text" name="gmail" placeholder="Gmail/Email..." value="<?php echo isset($jsonDecode['gmail']) ? htmlspecialchars($jsonDecode['gmail']) : ''; ?>">
        <br>

        <input type="submit" name="encode" value="Encode">
        <input type="submit" name="decode" value="Decode">
        <input type="hidden" name="json_decode" value="<?php echo htmlspecialchars($jsonEncode); ?>">
    </form>
</body>
</html>

