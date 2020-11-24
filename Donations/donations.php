<h1>Donations Page</h1>
<h3>Interested in making a donation to a social club?</h3>
<h3>Fill out the form below!!</h3>


    <form method='post' action="<?php echo $_SERVER['PHP_SELF']?>">
          <label for="fname">Full Name: </label>
        <input type="text" placeholder='First Name' name='first_name' required />
        <input type='text' placeholder='Last Name' name='last_name' required />
        <br />
        <br />
          <label for="fname">Phone Number: </label>

        <input type='text' placeholder='Phone Number' name='number' required />
        <br />
        <br />
          <label for="fname">Email Address: </label>

        <input type='text' placeholder='Email Address' name='email' required />
        <br />
        <br />
        <label for="fname">Amount Entered: </label>
        <select id="filterMoney">
               <option value="0">USD</option>
               <option value="1">AED</option>
               <option value="2">AFN</option>
               <option value="3">ALL</option>
               <option value="4">AMD</option>
               <option value="5">ANG</option>
               <option value="6">AOA</option>
               <option value="7">ARS</option>
               <option value="8">AUD</option>
               <option value="9">AWG</option>
               <option value="10">AZN</option>
               <option value="11">BAM</option>
               <option value="12">BBD</option>
               <option value="13">BDT</option>
               <option value="14">BGN</option>
               <option value="15">BHD</option>
               <option value="16">BIF</option>
               <option value="17">BMD</option>
               <option value="18">BND</option>
               <option value="19">BOB</option>
               <option value="20">BRL</option>
               <option value="21">BSD</option>
               <option value="22">BTC</option>
               <option value="23">BTN</option>
               <option value="24">BWP</option>
               <option value="25">BYN</option>
               <option value="26">BYR</option>
               <option value="27">BZD</option>
            

        </select>
                <input type='text' placeholder='Amount' name='amountEntered' required />
        <label for="fname">Amount Wanted: </label>
        <select id="filterCurrency">
               <option value="0">USD</option>
               <option value="1">AED</option>
               <option value="2">AFN</option>
               <option value="3">ALL</option>
               <option value="4">AMD</option>
               <option value="5">ANG</option>
               <option value="6">AOA</option>
               <option value="7">ARS</option>
               <option value="8">AUD</option>
               <option value="9">AWG</option>
               <option value="10">AZN</option>
               <option value="11">BAM</option>
               <option value="12">BBD</option>
               <option value="13">BDT</option>
               <option value="14">BGN</option>
               <option value="15">BHD</option>
               <option value="16">BIF</option>
               <option value="17">BMD</option>
               <option value="18">BND</option>
               <option value="19">BOB</option>
               <option value="20">BRL</option>
               <option value="21">BSD</option>
               <option value="22">BTC</option>
               <option value="23">BTN</option>
               <option value="24">BWP</option>
               <option value="25">BYN</option>
               <option value="26">BYR</option>
               <option value="27">BZD</option>
        </select>
        <input type='text' placeholder='Amount' name='amountWanted' />
        <br>
        <br>
        <br>
        <input type='submit' name='submit' value='Submit' />
    </form>
