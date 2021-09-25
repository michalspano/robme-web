<!DOCTYPE html>

<html lang="en">

<head>
    <style>
        /* Edit style */
        .center { text-align: center; }
        select { width: 200px }
        body { background-color: lightblue; }  
    </style>
    <title>Dynamically change size of a text</title>
</head>

<body>
    <h1 class="center"> Change size of this text</h1>
    <!-- Lorem Ipsum Sample text-->
    <?php include "raw.html"?>

    <!-- Create a dropdown menu-->
    <p class="center"><select>
            <option value="x-large">x-large</option>
            <option value="large">large</option>
            <option selected value="initial">start</option>
            <option value="small">small</option>
            <option value="x-small">x-small</option>
        </select></p>
    <!-- Include JS src -->
    <script src="script.js"></script>
</body>

</html>