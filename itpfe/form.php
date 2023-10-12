<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Form</title>
  </head>
  <body>
    <section>
      <form action="display.php" method="post" id="form">
        <h1>Create Your Customer Profile</h1>
        <hr />

        <div class="form-input fullname">
          <span>Full Name:</span>
          <div class="inputs">
            <input type="text" name="firstName" placeholder="First Name" id="input"/>
            <input type="text" name="lasttName" placeholder="Last Name" id="input"/>
          </div>
        </div>

        <div class="form-input phoneNumber">
          <span>Phone Number:</span>
          <div class="inputs">
            <input type="text" name="areaCode" placeholder="Area Code" id="input"/>
            <input type="number" name="phone" placeholder="Phone Number" id="input"/>
          </div>
        </div>

        <div class="form-input cellNumber">
          <span>Cell Number:</span>
          <div class="inputs">
            <input type="text" name="cellAreaCode" placeholder="Area Code" id="input"/>
            <input type="number" name="cellPhone" placeholder="Phone Number" id="input"/>
          </div>
        </div>

        <div class="form-input fax">
          <span>Fax Number:</span>
          <div class="inputs">
            <input type="text" name="faxAreaCode" placeholder="Area Code" id="input"/>
            <input type="number" name="faxPhone" placeholder="Phone Number" id="input"/>
          </div>
        </div>

        <div class="form-input email">
          <span>Email Address:</span>
          <div class="inputs">
            <input
              type="email"
              name="email"
              placeholder="ex. iannn@gmail.com" id="input"
            />
            <input type="email" name="email" placeholder="Confirm Email" id="input"/>
          </div>
        </div>
        <div class="btn">
          <button type="submit" id="submit-btn">Submit</button>
        </div>
      </form>
    </section>
    <script>
        const form = document.getElementById('form');
        const inputField1 = document.getElementById('input');
        const submitButton = document.getElementById('submit-btn');

        form.addEventListener('submit', function(event) {
            if (!inputField1.value || !inputField2.value || !inputField3.value) {
                alert('Please fill in all the missing fields before submitting.');
                event.preventDefault();
            }
        });
    </script>
  </body>
</html>
