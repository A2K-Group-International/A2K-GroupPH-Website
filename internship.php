<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--TITLE OF WEBSITE-->
    <title>Internship</title>
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
    <main class="internshipMain">
        <div class="container">
            <div class="breadCumb">
                <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="internship.php" class="text-warning">Internship</a></li>
                      <li class="breadcrumb-item"><a href="careers.php" class="text-secondary">Careers</a></li>
                    </ol>
                  </nav>
            </div>
            <div class="internshipHeader">
                <h1 class="fw-bolder">INTERNSHIP PROGRAM</h1>
            </div>
            <div class="row my-3 my-lg-4">
                <div class="internshipDetails col-12 col-lg-6 text-justify">
                    <p>Interested to join our international team of experts in solving national and global issues/challenges?
                        Are you keen to learn new skills and open to new challenges in the field of digital transformation
                        services? We recruit on rolling basis - apply to us now!</p>
                    <p>Our internship program provides students with unique training opportunities on a full-time/part-time basis.
                        The internships focus on training students in digital tools needed to provide digital transformation
                        services through real-world learning experiences and industry collaborations in partnership with A2K.
                        Students will learn about digital transformation services implemented in various industries and be
                        trained in digital tools needed to provide digital transformation services. Through hands-on experiences
                        with industry partners, students will learn how to use these digital tools to provide digital
                        transformation services.</p>
                </div>
                <div class="col-12 col-lg-6">
                    <video class="border" width="400" controls autoplay style="width: 100%; height: auto;">
                        <source src="images/ojtvideo.mp4" type="video/mp4">
                      </video>
                </div>
            <div class="internshipBenefits">
                <h2>Benefits include:</h2>
                <ul>
                    <li><i class="fa-solid fa-house-laptop me-2" style="color: #000000;"></i>Hybrid Working</li>
                    <li><i class="fa-solid fa-bowl-food me-2" style="color: #000000;"></i>Free lunches and snacks on site</li>
                    <li><i class="fa-solid fa-notes-medical me-2" style="color: #000000;"></i>Medical insurance coverage</li>
                    <li><i class="fa-solid fa-coins me-2" style="color: #000000;"></i>Monthly allowance</li>
                    <li><i class="fa-solid fa-money-bill-trend-up me-2" style="color: #000000;"></i>Additional monetary incentives for performance</li>
                </ul>
            </div>
            <div>
                <h5>Apply to us now by clicking the button below </h5>
                <a href="https://forms.office.com/pages/responsepage.aspx?id=DXR2qw5GlEKT4tcLIjfimbrnszaf5cRPkPYNB2_MO7VUOTA3QVJQTFhQVlhUTEg5RURBV0IyNzFaNCQlQCN0PWcu&origin=lprLink" target="_blank" class="btn btn-dark me-3 mb-2">Full-time Internship</a>
                <a href="https://forms.office.com/e/22xZBCQYLB?origin=lprLink" target="_blank" class="btn btn-dark mb-2">Part-time Internship</a>
            </div>
            <!--<a href="https://forms.office.com/e/22xZBCQYLB?origin=lprLink" target="_blank">link</a>-->
            <!----
            <div class="text-center text-md-start my-3">
                <img src="/images/internship-qr-code.png" alt="internship-form-qr-code">
            </div>
        </div> ---->
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