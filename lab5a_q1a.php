<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "Nur Husnina Aina Binti Mohd Iskandar";
        $matric_number = "CI230076";
        $course = "Bachelor in Computer Science (Information Security) with Honors";
        $year_of_study = "3 Year and Half"; 
        $address = "Lot 3755, Jalan Murai, Batu 9, Kebun Baharu, 42500 Telok Panglima Garang, Selangor.";  
    ?>

    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <td><strong>Name</strong></td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td><strong>Matric Number</strong></td>
            <td><?php echo $matric_number; ?></td>
        </tr>
        <tr>
            <td><strong>Course</strong></td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td><strong>Year of Study</strong></td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td><strong>Address</strong></td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
    
</body>
</html>
