<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My own calculator</title>
</head>
<body>
    <form action="includes/calc.inc.php" method="post">
        <p>My own calculator</p>
        <input type="number" name="num1" placeholder="First Number">
        <select name="oper" id="">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number">
        <button type="submit" name="submit">Calculate</button>
    </form>
</body>
</html>