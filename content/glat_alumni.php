<?php
include 'glat_header.php';
?>
<section>
    <div class="chairman">
        <div class="chairman-text">
            <h1>Alumni Registration</h1>
            <hr class="lines">
            <hr class="orange-line">
            <div class="alumni-registration">
                <form action="">
                    <div class="left-form">
                        <h1>Personal Details</h1>
                        <select name="title" id="title">
                            <option disabled selected>Select the Title</option>
                            <option value="mr">Mr.</option>
                            <option value="mrs">Mrs.</option>
                            <option value="dr">Dr.</option>
                    </select><br>
                    <input type="text" name="name" placeholder="Name"><br>
                    <input type="text" name="lastname" placeholder="Last Name"><br>
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female <br>
                    <input type="date" name="dob" placeholder="Date of Birth"><br>
                    <input type="tel" name="mobile" id="mobile"><br>
                    <input type="email" name="email" id="email"><br>
                    <input type="text" name="address" placeholder="Address"><br>
                    <input type="text" name="city" placeholder="City"><br>
                    <input type="text" name="state" placeholder="State"><br>
                    <input type="text" name="address" placeholder="Permanent Address"><br>
                    <input type="text" name="city" placeholder="Permanent City"><br>
                    <input type="text" name="state" placeholder="Permanent State"><br>
                    <label for="image">Add your Photo</label><br>
                    <input type="file" name="image" id="image"><br>
                </div>
                <div class="right-form">
                    <h1>Geeta Law Details</h1>
                    <input type="number" name="enroll" placeholder="Enroll No"><br>
                    <select name="admission_session" id="">
                        <option disabled selected>Select Admission Session</option>
                        <option value="2001-2002">2001-2002</option>
                        <option value="2002-2003">2002-2003</option>
                        <option value="2003-2004">2003-2004</option>
                        <option value="2004-2005">2004-2005</option>
                        <option value="2005-2006">2005-2006</option>
                        <option value="2006-2007">2006-2007</option>
                        <option value="2007-2008">2007-2008</option>
                        <option value="2008-2009">2008-2009</option>
                        <option value="2009-2010">2009-2010</option>
                        <option value="2010-2011">2010-2011</option>
                        <option value="2011-2012">2011-2012</option>
                        <option value="2012-2013">2012-2013</option>
                    </select><br>
                    <select name="passout_session" id="">
                        <option disabled selected>Select Passout Session</option>
                        <option value="2001-2002">2001-2002</option>
                        <option value="2002-2003">2002-2003</option>
                        <option value="2003-2004">2003-2004</option>
                        <option value="2004-2005">2004-2005</option>
                        <option value="2005-2006">2005-2006</option>
                        <option value="2006-2007">2006-2007</option>
                        <option value="2007-2008">2007-2008</option>
                        <option value="2008-2009">2008-2009</option>
                        <option value="2009-2010">2009-2010</option>
                        <option value="2010-2011">2010-2011</option>
                        <option value="2011-2012">2011-2012</option>
                        <option value="2012-2013">2012-2013</option>
                    </select><br>
                    <input type="text" name="class_batch" placeholder="Join Class/Batch">
                    <textarea name="remarks" id="" cols="30" rows="10"></textarea><br>
                    <input type="text" name="occupation" placeholder="Occupation"><br>
                    <input type="text" name="organization" placeholder="Organization"><br>
                    <input type="text" name="post" id="" placeholder="Post"><br>
                    <h1>Alumni Section Details</h1>
                    <input type="text" name="login_id"><br>
                    <select name="group" id="">
                        <option disabled selected>Group to Join</option>
                        <option value="general">General</option>
                        <option value="music">Music</option>
                        <option value="sports">Sports</option>
                    </select><br>
                    <input type="submit">
                </div>
            </form>
        </div>
    </div>
</div>
</section>
<?php

include 'footer.php';
?>