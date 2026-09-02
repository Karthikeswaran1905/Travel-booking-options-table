# ✈️ Travel Booking Options Table

## 📌 Project Description

The **Travel Booking Options Table** is a web-based application developed using **PHP, MySQL, HTML, CSS, and JavaScript**.

The application allows users to view and manage different travel booking options. Travel options can include **Bus, Train, and Flight** services.

Users can add new travel booking options by entering details such as the travel type, source, destination, class type, distance, price, and travel image.

All booking information is stored in a MySQL database and displayed as attractive travel cards.

---

# 🚀 Features

* ✈️ Add Flight booking options.
* 🚆 Add Train booking options.
* 🚌 Add Bus booking options.
* 📍 Add source location.
* 🎯 Add destination location.
* 🎫 Select travel class type.
* 📏 Add travel distance.
* 💰 Add travel price.
* 🖼️ Upload travel images.
* 📋 View all travel booking options.
* 🔍 Search bookings by destination.
* ❌ Delete travel booking options.
* 🗄️ MySQL database integration.
* 📱 Responsive user interface.

---

# 🛠️ Technologies Used

## Frontend

* HTML
* CSS
* JavaScript

## Backend

* PHP

## Database

* MySQL

## Server

* Apache / XAMPP

---

# 📂 Project Structure

```text
Travel Booking Options Table/
│
└── exp2/
    │
    ├── index.php
    ├── insert.php
    ├── delete.php
    ├── db.php
    ├── style.css
    ├── script.js
    │
    └── assets/
        ├── banner.jpg
        ├── bus-hero.jpg
        ├── bus1.jpg
        ├── bus2.jpg
        ├── bus3.jpg
        └── bus4.jpg
```

---

# 📄 File Description

## 1. index.php

The `index.php` file is the main page of the application.

It displays all travel booking options stored in the MySQL database.

Each travel booking is displayed as a card containing:

* Travel Type
* Booking ID
* Source
* Destination
* Class Type
* Distance
* Price
* Travel Image

The data is retrieved using:

```sql
SELECT * FROM bookings;
```

The page also contains:

* Add New Booking button.
* Search box.
* Delete button.

---

# 2. insert.php

The `insert.php` file allows users to add new travel booking options.

The user enters:

* Travel Type
* Source
* Destination
* Class Type
* Distance
* Price
* Image

The available travel types are:

```text
BUS
TRAIN
FLIGHT
```

The available class types include:

```text
AC Sleeper
Non AC
2nd AC
Economy
Business
```

After entering the details, the booking information is stored in the MySQL database.

---

# 🖼️ Image Upload

The application supports image uploads.

Only the following image formats are allowed:

```text
.jpg
.jpeg
```

Uploaded images are stored inside:

```text
assets/
```

The image path is saved in the database.

---

# 3. delete.php

The `delete.php` file is responsible for deleting travel booking records.

The booking ID is received through the URL.

Example:

```text
delete.php?id=1
```

The application deletes the selected booking using:

```sql
DELETE FROM bookings WHERE id = 1;
```

A confirmation message is displayed before deletion.

---

# 4. db.php

The `db.php` file is responsible for connecting the application to the MySQL database.

The project uses the MySQLi connection.

The database name used is:

```text
exp2
```

Example connection:

```php
$conn = new mysqli(
    "localhost",
    "root",
    "",
    "exp2"
);
```

---

# 5. style.css

The `style.css` file provides the design and styling for the application.

It controls:

* Hero section.
* Background images.
* Travel cards.
* Buttons.
* Search box.
* Route information.
* Price display.
* Responsive layout.

---

# 6. script.js

The `script.js` file provides client-side functionality.

It is mainly used for the search feature.

Users can search travel options using the destination name.

Example:

```text
Search by destination...
```

The matching travel cards are displayed dynamically.

---

# 🗄️ Database Setup

Create a database named:

```text
exp2
```

Use the following SQL code:

```sql
CREATE DATABASE exp2;

USE exp2;

CREATE TABLE bookings (

    id INT AUTO_INCREMENT PRIMARY KEY,

    travel_type VARCHAR(50) NOT NULL,

    source VARCHAR(100) NOT NULL,

    destination VARCHAR(100) NOT NULL,

    class_type VARCHAR(100) NOT NULL,

    distance INT NOT NULL,

    price DECIMAL(10,2) NOT NULL,

    image VARCHAR(255) NOT NULL

);
```

---

# 📊 Database Table

The project uses a table named:

```text
bookings
```

The table contains the following fields:

| Field       | Description           |
| ----------- | --------------------- |
| id          | Unique Booking ID     |
| travel_type | Bus, Train, or Flight |
| source      | Starting Location     |
| destination | Destination Location  |
| class_type  | Selected Travel Class |
| distance    | Travel Distance in KM |
| price       | Travel Price          |
| image       | Travel Image Path     |

---

# ➕ Add Booking Process

The user can add a new travel option by entering the required information.

## Travel Type

The user selects:

* Bus
* Train
* Flight

## Source

The starting location of the journey.

Example:

```text
Chennai
```

## Destination

The destination of the journey.

Example:

```text
Bangalore
```

## Class Type

The travel class can be:

* AC Sleeper
* Non AC
* 2nd AC
* Economy
* Business

## Distance

The distance between the source and destination.

Example:

```text
350 KM
```

## Price

The travel ticket price.

Example:

```text
₹1200
```

---

# ⚙️ Installation and Setup

## Step 1: Install XAMPP

Install XAMPP on your computer.

XAMPP provides:

* Apache Server
* PHP
* MySQL
* phpMyAdmin

---

## Step 2: Extract the Project

Extract the project ZIP file.

Copy the `exp2` folder into:

```text
C:\xampp\htdocs\
```

The project location should be:

```text
C:\xampp\htdocs\exp2
```

---

## Step 3: Start XAMPP

Open the XAMPP Control Panel.

Start:

```text
Apache

MySQL
```

---

## Step 4: Create the Database

Open phpMyAdmin.

Create the database named:

```text
exp2
```

Then run:

```sql
CREATE DATABASE exp2;

USE exp2;

CREATE TABLE bookings (

    id INT AUTO_INCREMENT PRIMARY KEY,

    travel_type VARCHAR(50) NOT NULL,

    source VARCHAR(100) NOT NULL,

    destination VARCHAR(100) NOT NULL,

    class_type VARCHAR(100) NOT NULL,

    distance INT NOT NULL,

    price DECIMAL(10,2) NOT NULL,

    image VARCHAR(255) NOT NULL

);
```

---

## Step 5: Configure Database Connection

Open:

```text
db.php
```

Check the database connection settings.

```php
$conn = new mysqli(
    "localhost",
    "root",
    "",
    "exp2"
);
```

---

# ▶️ Running the Application

Open your web browser and enter:

```text
http://localhost/exp2/
```

The Travel Booking Options application will open.

---

# 🔄 Working Flow

```text
User
 │
 ▼
Open Website
 │
 ▼
View Travel Booking Options
 │
 ├─────────────────────┐
 │                     │
 ▼                     ▼
Add New Booking     Search Booking
 │                     │
 ▼                     ▼
Enter Details       Enter Destination
 │                     │
 ▼                     ▼
Upload Image        Display Matching Results
 │
 ▼
insert.php
 │
 ▼
Store Data in MySQL
 │
 ▼
Display Booking Card
```

---

# ➕ Insert Booking Flow

```text
User
 │
 ▼
Click Add New Booking
 │
 ▼
Select Travel Type
 │
 ▼
Enter Source
 │
 ▼
Enter Destination
 │
 ▼
Select Class Type
 │
 ▼
Enter Distance
 │
 ▼
Enter Price
 │
 ▼
Upload Image
 │
 ▼
Click Add Booking
 │
 ▼
Store Data in MySQL
 │
 ▼
Booking Added Successfully
```

---

# 🔍 Search Working Flow

```text
User
 │
 ▼
Enter Destination Name
 │
 ▼
JavaScript Receives Input
 │
 ▼
Search Travel Cards
 │
 ▼
Find Matching Destination
 │
 ▼
Display Matching Booking
```

---

# ❌ Delete Booking Flow

```text
User
 │
 ▼
Click Delete Button
 │
 ▼
Confirmation Message
 │
 ├───────────────┐
 │               │
Yes             No
 │               │
 ▼               ▼
Delete Record   Cancel
 │
 ▼
delete.php
 │
 ▼
Delete from MySQL
 │
 ▼
Redirect to Home Page
 │
 ▼
Updated Booking List
```

---

# 🎯 Project Objective

The main objective of this project is to create a simple travel booking management system.

The project demonstrates:

* PHP programming.
* MySQL database connectivity.
* MySQLi.
* Form handling.
* File uploading.
* Image management.
* Data insertion.
* Data retrieval.
* Data deletion.
* JavaScript searching.
* HTML and CSS design.

---

# 📋 CRUD Operations

The application performs basic database operations.

## Create

Add a new travel booking.

```text
INSERT
```

## Read

Display travel booking options.

```text
SELECT
```

## Delete

Remove a travel booking.

```text
DELETE
```

---

# 💡 Example Travel Booking

### Input

```text
Travel Type: BUS

Source: Chennai

Destination: Bangalore

Class Type: AC Sleeper

Distance: 350 KM

Price: ₹1200
```

### Output

```text
BUS

Chennai → Bangalore

Class: AC Sleeper

Distance: 350 KM

Price: ₹1200
```

---

# 📋 Requirements

The following software is required:

* XAMPP
* PHP
* MySQL
* Apache Server
* phpMyAdmin
* Web Browser

Recommended browsers:

* Google Chrome
* Microsoft Edge
* Mozilla Firefox

---

# 🔮 Future Enhancements

The following features can be added in future versions:

* ✏️ Edit travel bookings.
* 🔍 Advanced search.
* 🎫 Online ticket booking.
* 👤 User registration and login.
* 💳 Payment integration.
* 📅 Travel date selection.
* 🚌 Real-time bus schedules.
* 🚆 Real-time train schedules.
* ✈️ Real-time flight schedules.
* ⭐ Favorite travel options.
* 📱 Improved mobile responsiveness.
* 📧 Booking confirmation emails.
* 🎟️ Ticket generation.

---

# 👨‍💻 Conclusion

The **Travel Booking Options Table** is a web-based application developed using **PHP, MySQL, HTML, CSS, and JavaScript**.

The application allows users to manage different travel options for **Bus, Train, and Flight**. Users can add travel information, upload travel images, search for destinations, view travel details, and delete booking records.

This project demonstrates important web development concepts such as **PHP-MySQL integration, form handling, file uploads, database operations, dynamic data display, and JavaScript-based searching**.
