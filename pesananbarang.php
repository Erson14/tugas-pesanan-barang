<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="wrap">
        <div class="container">
            <h1>Form pesanan barang</h1>
            <form action="formregistrasiproses.php" method="post">
                <table>
                    <tr>
                        <td>Title Here</td>
                        <td>:</td>
                        <td><input type="text" name="titlehere"></td>
                    </tr>
                    <tr>
                        <td><label>Description</td>
                        <td>:</td>
                        <td><textarea name="decription"></textarea></td>
                    </tr>
                    <tr>
                    <td><label>Account Number</label></td>
                        <td>:</td>
                        <td><input type="number" name="accountnumber"></td>
                    </tr>
                    <tr>
                        <td>Bank</td>
                        <td>:</td>
                        <td>
                            <select name="bank">
                            <option value="">-== Pilih Disini ==-</option>
                            <option value="bank syariah">Bank SYARIAH</option>
                            <option value="bank bni">Bank BNI</option>
                            <option value="bank bca">Bank BCA</option>
                            <option value="bank mandiri">Bank Mandiri</option>
                            <option value="bank bri">Bank BRI</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Account Holder</td>
                        <td>:</td>
                        <td><input type="text" name="Accountholder"></td>
                    </tr>
                    <tr>
                        <td>Transaction</td>
                        <td>:</td>
                        <td>
                            <select name="transaction" size="1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>*if the transaction is for 3 person, choose 3 from the drop-dwon list</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <font color="green"><input type="checkbox" name="toppings[]" value="red sauce" checked=""> send to mobile phone
                                <br>
                                <input type="checkbox" name="toppings[]" value="white sauce"> send to email
                        </td>
                    </tr>
                    <tr>
                        <td>Send To Mobile Phone</td>
                        <td>:</td>
                        <td><input type="text" name="sendtomobilephone"></td>
                    </tr>
                    <tr>
                        <td>Send To Email</td>
                        <td>:</td>
                        <td><input type="text" name="sentoemail"></td>
                    </tr>
                    <img src="Upload Your Pictu in Here.png" alt="Trulli" width="100" height="100">
                    <br>
                    <input type="submit" value="Upload Picture">
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" name="submit">Gnerate Nobr Link</button>
                    </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>