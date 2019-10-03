<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h3>bKash Payment Steps :</h3>
<p>You can make payments from your bKash Account to our Merchant .</p>
<ul>
<li> Go to your bKash Mobile Menu by dialing *247#</li>
<li> Choose Payment option by pressing 3</li>
<li> Enter the Merchant bKash Account Number 01797245860</li>
<li> Enter the TICKET PRICE taka you want to pay</li>.
<li> Write the word tickets against your payment</li>
<li> Enter the Counter Number 0</li>
<li> Now enter your bKash Mobile Menu PIN to confirm</li>
</ul>
<p>Done! You will receive a confirmation message from bKash.</p>
<p>*If Reference or Counter No. or both are not applicable, you can skip them by entering 0.</p>
<p>*** Please wait 2 minutes..... Then try with your bKash Trx ID, otherwise you will see the "Access denied . Transation ID is not related to username" messsage.</p>

<form action="confirm.php" method="POST" >
         <label>Date</label>
          <input type="Date" name="day"/>
		  <label>Bus No:</label>
          <input type="text" name="busno"/>
		  <label>Seat No:</label>
          <input type="text" name="seat"/>
		  <label>Txid Code</label>
          <input type="text" name="txid1"/>
<input type="submit"  value="confirm"/>
</form>
</body>
</html>
