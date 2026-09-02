<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Travel Booking Options</title>

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- HERO SECTION -->
<div class="hero">

    <div class="hero-overlay"></div>

    <div class="hero-content">

        <p class="tag">✈ PREMIUM TRAVEL EXPERIENCE</p>

        <h1>
            Travel Booking
            <span>Options</span>
        </h1>

        <p class="subtitle">
            Book buses and trains across India with comfortable travel,
            smart booking options, and premium travel experience.
        </p>

        <!-- TOP CONTROLS -->
        <div class="top-controls">

            <!-- ADD BUTTON -->
            <a href="insert.php">
                <button class="add-btn">
                    + Add New Booking
                </button>
            </a>

            <!-- SEARCH -->
            <div class="search-box">
                <input type="text"
                       id="search"
                       placeholder="Search by destination...">
            </div>

        </div>

    </div>
</div>


<!-- CARD SECTION -->
<div class="card-container" id="bookingContainer">

<?php
$result = $conn->query("SELECT * FROM bookings");

while($row = $result->fetch_assoc()) {
?>

<!-- CARD -->
<div class="travel-card">

    <!-- IMAGE -->
    <div class="image-box">

        <img src="<?php echo $row['image']; ?>" alt="Bus Image">

        <!-- BADGES -->
        <div class="badge-row">

            <span class="type">
                <?php echo $row['travel_type']; ?>
            </span>

            <span class="id">
                #<?php echo $row['id']; ?>
            </span>

        </div>

        <!-- ROUTE -->
        <div class="route">
            <?php echo $row['source']; ?>
            <span>→</span>
            <?php echo $row['destination']; ?>
        </div>

    </div>


    <!-- CARD CONTENT -->
    <div class="card-content">

        <div class="info-row">

            <!-- CLASS -->
            <div>
                <p class="label">CLASS</p>

                <h3>
                    <?php echo $row['class_type']; ?>
                </h3>
            </div>

            <!-- DISTANCE -->
            <div>
                <p class="label">DISTANCE</p>

                <h3>
                    <?php echo $row['distance']; ?> KM
                </h3>
            </div>

        </div>

        <hr>

        <!-- BOTTOM -->
        <div class="bottom-row">

            <!-- PRICE -->
            <div>
                <p class="label">PRICE</p>

                <h2>
                    ₹<?php echo $row['price']; ?>
                </h2>
            </div>

            <!-- DELETE -->
            <a href="delete.php?id=<?php echo $row['id']; ?>"
               onclick="return confirm('Delete this booking?')">

                <button class="delete-btn">
                    Delete
                </button>

            </a>

        </div>

    </div>

</div>

<?php } ?>

</div>


<!-- JS -->
<script src="script.js"></script>

</body>
</html>