<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxe Watches Admin</title>
</head>
<body>
    <header>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        #sidebar {
            width: 250px;
            height: 100%;
            background-color: rgb(9,75,67);
            color: rgb(240, 222, 180);
            padding-top: 20px;
            position: fixed;
        }

        #sidebar a {
            padding: 10px;
            text-decoration: none;
            color: #fff;
            display: block;
            transition: 0.3s;
        }

        #sidebar a:hover {
            background-color: rgb(240, 222, 180);
        }

        #content {
            margin-left: 250px;
            padding: 16px;
        }

        h2 {
            color: rgb(9,75,67);
            text-align: center;
        }
        table {
             width: 100%;
             border-collapse: collapse;
             margin-top: 20px;
            } 

        th, td {
             border: 1px solid #dddddd;
             text-align: left;
             padding: 12px;
            }

        th {
            background-color: rgba(9, 75, 67, 0.142);
            }

        tbody tr:hover {
             background-color: #f5f5f5;
            }
            p{
            color: whitesmoke;
            text-align: center;
            display: flex;
            position: absolute;
            bottom: 0;
            left: 0;
            margin-bottom: 90px;
            padding: 10px;
        }   
        .back{
            position: absolute;
            bottom: 0;
            left: 0;
            margin-bottom: 40px; 
            margin-left: 70px; 
        } 
        a{
            text-decoration: none;
            color: black;
        }
        button{
           justify-content: flex-start;
           cursor:grab;
           font-size: 15px;
           padding:10px 30px;
           border-radius: 10px;
           text-decoration: none;
           background-color:rgba(9, 75, 67, 0.142);
           align-items: center;
}
        button:hover{
         background: rgb(228,199,129); 
        }   
    </style>
</header>
<body>

<div id="sidebar">
        <a href="dashboard.php">Dashboard</a>
        <a href="contacts.php">Contacts</a>
        <a href="products.php">Products</a>
        <a href="aboutus.php">About Us</a>
        <a href="findus.php">Find us</a>
        <a href="createproduct.php">Create Product</a>
        <p>Return to your web adventure from the dashboard!</p>
         <a href="../index.php" class="back">Back to Web</a>
    </div>

    <div id="content">
    <h2>Contacts</h2>

    <table class="table">
    <thead>
        <tr>
            <th name="id">ID</th>
            <th name="username">Email</th>
            <th name="email">Message</th>
        </tr>
    </thead>
    <tbody>
    <tbody>
        <?php 
        require_once $_SERVER['DOCUMENT_ROOT'] . '/luxewatches/backend/controllers/ContactController.php';

        $contactController = new ContactController();
        $contacts = $contactController->get();
        ?>           
        <?php
            foreach($contacts as $contact){

        ?>
        <tr>
            <td><?php echo $contact['id']?></td>
            <td><?php echo $contact['email']?></td>
            <td><?php echo $contact['message']?></td>
        </tr>
            <?php }?>
    </tbody>
    </tbody>
</table>
    </div>

</body>
</html>