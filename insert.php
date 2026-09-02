<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Booking</title>

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{

            min-height:100vh;

            background:
            linear-gradient(rgba(0,0,0,0.7),
            rgba(0,0,0,0.8)),
            url('assets/banner.jpg');

            background-size:cover;
            background-position:center;

            display:flex;
            justify-content:center;
            align-items:center;

            padding:30px;
        }

        .form-container{

            width:100%;
            max-width:650px;

            background:rgba(7,21,47,0.9);

            backdrop-filter:blur(12px);

            border:1px solid rgba(255,255,255,0.1);

            border-radius:25px;

            padding:40px;

            box-shadow:0 10px 40px rgba(0,0,0,0.5);
        }

        .form-container h1{

            color:white;

            text-align:center;

            margin-bottom:30px;

            font-size:42px;
        }

        .form-container h1 span{
            color:#00d084;
        }

        .booking-form{
            display:flex;
            flex-direction:column;
            gap:18px;
        }

        .booking-form input,
        .booking-form select{

            width:100%;

            padding:18px;

            border:none;

            outline:none;

            border-radius:14px;

            background:#102349;

            color:white;

            font-size:16px;

            transition:0.3s;
        }

        .booking-form input::placeholder{
            color:#bbb;
        }

        .booking-form select option{
            background:#102349;
            color:white;
        }

        .booking-form input:focus,
        .booking-form select:focus{

            border:1px solid #00d084;

            box-shadow:0 0 15px rgba(0,208,132,0.3);
        }

        .add-btn{

            margin-top:10px;

            padding:18px;

            border:none;

            border-radius:50px;

            background:linear-gradient(135deg,#00d084,#00b4d8);

            color:white;

            font-size:20px;

            font-weight:600;

            cursor:pointer;

            transition:0.3s;
        }

        .add-btn:hover{

            transform:translateY(-3px);

            box-shadow:0 10px 20px rgba(0,208,132,0.3);
        }

        @media(max-width:768px){

            .form-container{
                padding:25px;
            }

            .form-container h1{
                font-size:32px;
            }
        }

    </style>
</head>

<body>

<div class="form-container">

    <h1>
        Add Travel <span>Booking</span>
    </h1>

    <form method="POST"
          enctype="multipart/form-data"
          class="booking-form">

        <!-- TRAVEL TYPE -->
        <select name="travel_type" required>

            <option value="">
                Select Travel Type
            </option>

            <option value="BUS">
                BUS
            </option>

            <option value="TRAIN">
                TRAIN
            </option>

            <option value="FLIGHT">
                FLIGHT
            </option>

        </select>


        <!-- SOURCE -->
        <input type="text"
               name="source"
               placeholder="Source"
               required>


        <!-- DESTINATION -->
        <input type="text"
               name="destination"
               placeholder="Destination"
               required>


        <!-- CLASS TYPE -->
        <select name="class_type" required>

            <option value="">
                Select Class Type
            </option>

            <option value="AC Sleeper">
                AC Sleeper
            </option>

            <option value="Non AC">
                Non AC
            </option>

            <option value="2nd AC">
                2nd AC
            </option>

            <option value="Economy">
                Economy
            </option>

            <option value="Business">
                Business
            </option>

        </select>


        <!-- DISTANCE -->
        <input type="number"
               name="distance"
               placeholder="Distance (KM)"
               required>


        <!-- PRICE -->
        <input type="number"
               name="price"
               placeholder="Price"
               required>


        <!-- IMAGE -->
        <input type="file"
               name="image"
               accept=".jpg,.jpeg"
               required>


        <!-- BUTTON -->
        <button type="submit"
                name="submit"
                class="add-btn">

            Add Booking

        </button>

    </form>

</div>


<?php

if(isset($_POST['submit'])) {

    $type = $_POST['travel_type'];
    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $class = $_POST['class_type'];
    $distance = $_POST['distance'];
    $price = $_POST['price'];

    /* IMAGE UPLOAD */

    $imageName = $_FILES['image']['name'];

    $imageTmp = $_FILES['image']['tmp_name'];

    $imageExt = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

    if($imageExt == "jpg" || $imageExt == "jpeg") {

        $imagePath = "assets/" . $imageName;

        move_uploaded_file($imageTmp, $imagePath);

    } else {

        echo "<script>alert('Only JPG images are allowed!')</script>";
        exit();
    }


    /* INSERT QUERY */

    $sql = "INSERT INTO bookings
    (travel_type, source, destination, class_type, distance, price, image)

    VALUES

    ('$type',
     '$source',
     '$destination',
     '$class',
     '$distance',
     '$price',
     '$imagePath')";


    if($conn->query($sql)) {

    echo "<script>
            alert('Booking Added Successfully!');
            window.location.href='index.php';
          </script>";

} else {

        echo "Error inserting booking!";
    }
}

?>

</body>
</html>