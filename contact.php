<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Final Station Pet Funeral Service</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <?php
    include ('includes/navheader.php');
    ?>
    <section class="container">
        <div class="container-header">
            <h2>Send us a message</h2>
            <p>Thank you for considering Pet Heaven for your pet funeral needs. We understand this is a difficult time, and we're here to support you in any way we can.</p>
        </div>
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Address</div>
                    <div class="firstRow">66, Jalan Sg. Long 7/1</div>
                    <div class="secondRow">Taman SL 7, Bdr. Sg. Long</div>
                    <div class="thirdRow">43000 Kajang, Selangor</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Phone</div>
                    <div class="firstRow">+6012-345 6789</div>
                    <div class="secondRow">+6016-234 5678</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="firstRow">petheaven@gmail.com</div>
                </div>
            </div>
            <div class="right-side">
                <div id="form" class="form-content">
                    <div class="grid">
                        <div class="text-input-field">
                            <input type="text" id="name" name="name" placeholder="Name" class="input" required>
                            <label for="name">Name</label>
                        </div>
                        <div class="text-input-field">
                            <input type="text" id="pNum" name="pNum" placeholder="Contact number" class="input" required>
                            <label for="pNum">Mobile number</label>
                        </div>
                        <div class="text-input-field">
                            <input type="text" id="email" name="email" placeholder="Email address" class="input" required>
                            <label for="email">Email address</label>
                        </div>
                        <div class="text-input-field">
                            <textarea id="message" name="message" placeholder="Message" class="input"></textarea>
                            <label for="message">Your inquiry</label>
                        </div>
                        <div class="grid-col2">
                            <div class="text-input-field">
                                <select id="contact-method" name="contact-method" class="input" required>
                                    <option disabled selected value>Choose</option>
                                    <option value="phone call">Phone Call</option>
                                    <option value="video call">Video Call</option>
                                    <option value="whatsapp">Whatsapp</option>
                                </select>
                                <label for="contact-method">Preferred contact method</label>
                            </div>
                            <div class="text-input-field">
                                <select id="language" name="language" class="input" required>
                                    <option disabled selected value>Choose</option>
                                    <option value="English">English</option>
                                    <option value="Chinese">Chinese</option>
                                    <option value="Malay">Malay</option>
                                </select>
                                <label for="language">Preferred language</label>
                            </div>
                        </div>
                    </div>
                    <div class="btn-container">
                        <div class="button">
                            <button class="btn submit-btn btn-lg submit-button" type="submit" onclick="popup()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script>
    function popup(){
        window.alert("Thank you for the contact.")
    }
</script>
</body>
</html>