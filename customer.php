<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Users </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="transfer.css" type="text/css">

</head>

<body>
    <?php
    include 'dbsconnect.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>

    <nav id="navbar">
        <div class="logo">
            <a href="#"><img src="tt.png" alt=""></a>
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="createuser.php">Create a User</a></li>
            <li><a href="#">View Customers</a></li>
            <li><a href="transfermoney.php">Transfer Money</a></li>
            <li><a href="transactionhistory.php">Transaction History</a></li>
        </ul>
    </nav>

    <div class="container">

        <h2 class="text-center pt-4  ff" style="color : #05386B  ;">View All Users</h2>
        <br>
        <div class="row shadow text-center" style="background-color: #ffffff;">
            <div class="col">
                <div class="table-responsive-sm pt-3">
                    <table class="table table-hover table-sm  table-condensed table-bordered"
                        style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                                <th scope="col" class="text-center py-2">Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr style="color : black;">
                                <td class="py-2 text-center">
                                    <?php echo $rows['id'] ?>
                                </td>
                                <td class="py-2 text-center">
                                    <?php echo $rows['name'] ?>
                                </td>
                                <td class="py-2 text-center">
                                    <?php echo $rows['email'] ?>
                                </td>
                                <td class="py-2 text-center">
                                    <?php echo $rows['balance'] ?>
                                </td>

                            </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="text-center mt-5 py-2">
        <p style="font-family: poppins; font-size: 16px;">&copy 2021. Created by <b>Smriti Kumari </b> <br> The Sparks
            Foundation</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>