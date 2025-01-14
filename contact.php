<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--TITLE OF WEBSITE-->
    <title>Contact</title>
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
    <main class="contactUspage">
        <section>
            <div class="container my-5">
                <div class="row ">
                    <div class="col-12 col-lg-7">
                        <div class="contactInformation">
                            <h2 class="fw-bold mb-3 mb-lg-5">CONTACT US</h2>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 col-md-6">
                                <h6><span class="fa-solid fa-location-dot me-2" style="color: #000000;"></span>ADDRESS:
                                </h6>
                                <p class="text-muted">Jose Abad Santos Ave. Brgy, Cabalantian Bacolor, Pampanga</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <h6><span class="fa-solid fa-clock me-2" style="color: #000000;"></span>Business hours:</h6>
                                <p class="text-muted">Mon-Fri: 8AM-5PM</p>
                            </div>
                        </div>
                        <form id="form" method="POST">
                            <!-- ACCESS KEY -->
                            <input type="hidden" name="access_key" value="ef7121b2-cdf4-4c80-87c6-2c39ea64a095">
                            <input type="checkbox" name="botcheck" class="hidden" style="display: none;">
                            <input type="hidden" name="subject" value="New Submission from A2K Group">
                            <input type="hidden" name="from_name" value="Get in Touch">

                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="First&nbsp;Name" id="firstName" aria-describedby="#" required>
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="Last&nbsp;Name" id="Last Name" aria-describedby="#" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="#">
                                <div class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="textArea" name="Message" rows="5"></textarea>
                                <label class="form-label" for="textArea">Message</label>
                            </div>
                            <!-- CAPTCHA -->
                            <div class="h-captcha" data-captcha="true"></div>
                            <button type="submit" class="btn btn-lg btn-dark">Submit</button>
                            <div id="result" class="mt-2"></div>
                        </form>
                    </div>
                    <!--MAP-->
                    <div class="map col-12 col-lg-5 pt-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3853.648771011747!2d120.65401127587916!3d15.012189966865774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f72ecc202bdd%3A0x9f2f2aa3f732ced0!2sA2K%20Group!5e0!3m2!1sen!2sph!4v1720677950753!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>




    <!--FOOTER-->
    <footer id="footer" class="w-100 py-4 flex-shrink-0 border-top"></footer>

    <script>
        $(function () {
            $("#navbar").load("navbar.php");
            $("#footer").load("footer.php");
        });

    </script>

    <!--GOOGLE MAP API-->
    <script src="https://maps.googleapis.com/maps/api/js" async></script>
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
    <script src="https://web3forms.com/client/script.js" async defer></script>
    <script src="contact.js" defer></script>
</body>

</html>