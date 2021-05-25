<?php
include('assets/SecondHeader.php');

?>


<div class="top">
    Donate and Save Lives...
</div>
<div class="form_area" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="400">
    <div class="title">
        DONATE IF YOU CAN
    </div>

    <div class="form">
        <label for="fname">Name:</label>
        <input type="text" class="input" placeholder="Your Name Here">
    </div>
    <div class="form">
        <label for="fname">Email:</label>
        <input type="email" class="input" placeholder="Your E-Mail Id ">
    </div>

    <div class="form">
        <label for="fname">Mobile No.:</label>
        <input type="number" class="input" max="10" placeholder="Contact Number">

    </div>

    <div class="form">
        <label for="fname">Address:</label>
        <textarea class="textarea" placeholder="Your Address Here"></textarea>

    </div>

    <div class="form">
        <label for="fname">City:</label>
        <input type="text" class="input" placeholder="City">
    </div>

    <div class="form">
        <label for="fname">State:</label>
        <input type="text" class="input" placeholder="State">
    </div>

    <div class="form">
        <label for="fname">Zip code:</label>
        <input type="number" max="6" class="input" placeholder="postal code">
    </div>
    <div class="form">
        <label for="fname">Donation Type:</label>
        <div class="select">
            <select>
                <option value="">Select donation type</option>
                <option value="food">Food</option>
                <option value="Oxygen">Oxygen Cylinder</option>
                <option value="Clothes">Clothes</option>
                <option value="other">Other Covid Essential</option>
            </select>
        </div>
    </div>

    <div class="form">
        <label for="fname">Name of Object:</label>
        <input type="text" class="input" placeholder="Name of the object or food you are donating">
    </div>

    <div class="form">
        <div class="file-input">
            <label for="file">Picture of item to be Donated</label>
            <input type="file" id="file" class="file">
        </div>
    </div>
    <div class="form">
        <label for="fname">Quantity:</label>
        <input type="number" min="1" class="input" placeholder="Quantity of item">
    </div>
    <div class="form">
        <label for="fname">Short Description:</label>
        <textarea class="textarea" maxlength="500" placeholder="Short Description(not more than 100words)"></textarea>
    </div>
    <div class="form">
        <label for="fname">Complete Description:</label>
        <textarea class="textarea" maxlength="2000"
            placeholder="Complete Description(not more than 400 words)"></textarea>
    </div>
    <div class="submit">
        <input type="submit" class="button" value="DONATE">
    </div>

</div>





<?php
include('assets/footer.php');

?>