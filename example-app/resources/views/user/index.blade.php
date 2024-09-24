<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">username</th>
                <th scope="col">first_name</th>
                <th scope="col">last_name</th>
                <th scope="col">gender</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // array loop แสดงผลข้อมูลในตารางจากตัวแปร users
                foreach ($users as $key => $user) {
            ?>
                <tr>
                    <th scope="row"><?php echo $key+1;?></th>
                    <td><?php echo $user->username;?></td>
                    <td><?php echo $user->first_name;?></td>
                    <td><?php echo $user->last_name;?></td>
                    <td><?php echo $user->gender;?></td>
                </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>

    <?php
    // ตรวจสอบค่าที่ถูกส่งมาในตัวแปร users
    //print_r($users);
    ?>
    
</body>
</html>