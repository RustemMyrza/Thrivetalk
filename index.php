<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/larsseit-font-family" rel="stylesheet">
    <title>TZ</title>
</head>

<body>
    <div id="container">
        <div id="first_frame">
            <div id="background_rec3">
                <header>
                    <h2 id="header_logo">Thrivetalk</h2>
                    <div id="navbar">
                        <nav>
                            <a href="">Home</a>
                            <a href="">About</a>
                            <a href="">Services</a>
                            <a href="">Blog</a>
                        </nav>
                    </div>
                </header>
                <div id="content">
                    <div id="main_content">
                        <div id="main_content_logo_div">
                            <h2 id="main_content_logo">Thrivetalk</h2>
                        </div>
                        <div id="main_content_h1">
                            <h1>HELPING YOU THRIVE IN ALL AREAS OF LIFE</h1>
                        </div>
                        <div id="main_content_text_div">
                            <p id="main_content_text">Our highly talented therapists can help you with a range of issues
                                including relationships, sex,
                                PTSD,
                                depression, social anxiety, or even just caring for yourself more.</p>
                        </div>
                        <div id="who_am_i_div">

                        </div>
                        <a href="" id="who_am_i">WHO AM I</a>
                        <a href="" id="what_do_i_do">WHAT DO I DO</a>
                    </div>
                </div>
            </div>
            <div id="contact_us_button">
                <a href="" id="contact_us">CONTACT US</a>
            </div>
            <div id="right_background">
                <div id="background_rec3_1"></div>
                <div id="background_img">
                    <img src="linkedin-sales-navigator-406825.png" alt="main_img" id="image_1">
                </div>
            </div>
        </div>





        <div id="second_frame">
            <div id="background_second">
                <div id="why_thrive">
                    <div id="second_frame_h2">
                        <h2>Why Thrive</h2>
                    </div>
                    <div id="second_text">
                        <p id="second_upper_text">Want to improve your well-being from the comfort of your own couch?
                            Are you having trouble finding the right therapist?</p>
                        <p id="second_lower_text">Here at ThriveTalk, our licensed therapists provide the same quality
                            care you would get in office from anywhere you can access your laptop or mobile phone.
                            Become your best self with ThriveTalk. Start therapy now with a licensed therapist!</p>
                    </div>
                </div>
                <div id="second_frame_img">
                    <img src="christopher-campbell-40367.png" alt="" srcset="" id="img_2">
                </div>
            </div>
        </div>



        <div id="third_frame">
            <div id="third_frame_text">
                <div id="about_us_div">
                    <p id="about_us">ABOUT US</p>
                </div>
                <div id="about_us_text">
                    <p>We want to help you thrive! Whether you are just looking for someone to talk to, or are
                        struggling with a mental wellness issue we’re here to help. Our highly talented therapists can
                        help you with a range of issues including relationships, sex, PTSD, depression, social anxiety,
                        or even just caring for yourself more.</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#contact_us").click(function (e) {
                e.preventDefault();
                $.ajax({
                    url: "DB.php", // Путь к файлу DB.php
                    method: "GET",
                    success: function (response) {
                        // Обновление содержимого h1 с полученным значением
                        $("h1").text(response);
                    },
                    error: function (xhr, status, error) {
                        console.error(error); // Вывод ошибки в консоль
                    }
                });
            });
        });

    </script>
</body>

</html>
