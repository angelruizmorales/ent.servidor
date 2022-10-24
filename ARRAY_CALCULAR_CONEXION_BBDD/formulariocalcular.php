<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="calculodelformulario.php">
    Primer numero:
    <input type="number" name="P">
    <br>
    Segundo numero:
    <input type="number" name="S">
    <br>
        <select name="operador">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
            <option value="%">%</option>
        </select>
    <input type="submit" value="calcular">
</form>    
</body>
</html>
