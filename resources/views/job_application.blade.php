<h1>Job Application form</h1>
<form>
    <h3>Personal Information</h3>
First Name: <input type="text" name="fname" placeholder="First Name">
    Last Name: <input type="text" name="lname" placeholder="Last 
    Name">
    Birth date: <input type="date" name="birthdate">
    <br><br>
    City: <input type="text" name="city"> 
    District: <input type="text" name="district">
    <br> <br>
    Street: <input type="text" name="street">
    Building No: <input type="number" name="building" min="0" step="1" oninput="validity.valid||(value='')">
    Apartment No: <input type="number" name="apartment" min="0" step="1" oninput="validity.valid||(value='')">
    Zip code: <input type="number" name="zip" min="0" step="1" oninput="validity.valid||(value='')">
    <br><br>
    University: <input type="text" name="university" placeholder="Your University">
    Qualification name/main subject: <input type="text" name="qualification">
    {{-- If yes then user will be able to choose the graduation year --}}
    <strong><p>Did you finish your university studies?</p></strong>
    Yes <input type="radio" name="finishuni">
    No <input type="radio" name="finishuni">

    Graduation year: <input type="number" name="year">


    <br><br>
    {{-- EXPERIENCE --}}
    <table>
        <tr>
            <td>Give us a short information about your previous experience and duties in this position</td>
        </tr>
        <tr>
            <td><textarea name="experience" cols="30" rows="10" placeholder="Your experience"></textarea></td>
        </tr>
    </table>
    Start date: <input type="date" name="exp-start">
    End date: <input type="date" name="exp-end">
    {{-- END OF EXPERIENCE --}}
    <br>
    <p><strong>Phone:</strong></p>
    Home Phone: <input type="number" name="phone number" size="30" maxlength="4" placeholder="Your phone number" min="0" step="1" oninput="validity.valid||(value='')">
    <br> <br>
    E-mail: <input type="email" name="email" placeholder="Email address">
    Upload CV: <input type="file" name="CV">
    <br><br>
    <strong>Employment desired</strong>
    <br>
    <p><strong>Position:</strong></p>

    Manager: <input type="radio" name="position">
    Secretary: <input type="radio" name="position">
    Security: <input type="radio" name="position">
    <br><br>

    
    submit: <input type="submit" name="submit">
</form>