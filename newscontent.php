<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--TITLE OF WEBSITE-->
    <title>A2K Group | Transforming Services</title>
    <!--WEBSITE LOGO-->
    <link rel="icon" type="image/png" href="/images/a2k-group-icon.png">
    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/66273fc2f0.js" crossorigin="anonymous"></script>
    <!--OWL CAROUSEL-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <!--FONT AWESOME-->
    <!--CSS FILE-->
    <link rel="stylesheet" href="style.css">
    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TDE1RYV1SK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TDE1RYV1SK');
</script>
<body>

    <!--HEADER-->
    <header id="navbar" class="navbar navbar-expand-lg navbar-light"></header>

    <!--MAIN-->
    <main>
        <!--SECTION-->
        <?php
    require 'connection.php';
            $id = $_GET['id'];
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Retrieve the data using a join query
            $result = mysqli_query($conn, "SELECT * FROM news WHERE id = '$id' ORDER BY date_posted DESC");
            
              // Display the data in a table
            while($row = mysqli_fetch_assoc($result)) {
                
                // dateArray = (month-date-year)
                $dateArray = date_parse_from_format('Y-m-d', $row['date_posted']);

                require 'datePosted.php';

                echo '
                <section class="container newsSection text-center pt-5">
                <h1 class="fw-bold">'.$row['news_title'].'</h1>
                    </section>
                    <section class="container w-75">
                        <p class="text-muted"><i> Posted on '.$dateArray['month'].' '.$dateArray['day'].', '.$dateArray['year'].'</i></p>
                        <img src="'.$row['news_image'].'" class="ratio ratio-16x9" alt="image-news">
                        <p class="fw-medium mt-2" style="text-indent:50px; text-align:justify;">'.$row['news_content'].'</p>
                    </section>
                    
                ';
            }
            mysqli_close($conn);
        ?>
    </main>




    <!--FOOTER-->
    <footer id="footer" class="w-100 py-4 flex-shrink-0 border-top"></footer>

    <script>
        $(function () {
            $("#navbar").load("navbar.php");
            $("#footer").load("footer.php");
        });
    </script>


    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!--OWL CAROUSEL JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--BOOTSTRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!--JS-->
    <script src="script.js"></script>
</body>

</html>