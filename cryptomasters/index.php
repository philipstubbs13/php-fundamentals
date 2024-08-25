<!DOCTYPE html>
<title>Crypto Masters</title>

<h1>Crypto Masters</h1>

<p>Enter the amount of crypto</p>
<form action="convert.php" method="post">
    <label for="amount">Amount</label>
    <input id="amount" name="amount">
    <label for="crypto">Cryptocurrency</label>
    <select id="crypto" name="crypto">
        <option>BTC</option>
        <option>ETH</option>
    </select>
    <button type="submit">Convert</button>
</form>