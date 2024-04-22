<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
        }
        table {
            border: 2px solid black;
            margin-left: auto;
            margin-right: auto; 
            border-radius: 10px;
            box-shadow: 10px 15px 10px rgba(0, 0, 0, 0.2);
            background-color:skyblue;
        }
        input[type="submit"]{
            width: 100%;
            padding: 20px 40px;
            background-color: chartreuse;
            color:white;
            margin-bottom: 10px;
            border: none;
            border-radius: 20px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
            
        }
        input[type="reset"]{
            width: 100%;
            padding: 20px 40px;
            background-color: chartreuse;
            color:white;
            margin-bottom: 10px;
            border: none;
            border-radius: 10px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
        }
        input[type="number"]{
            border: none;
            text-align: center;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1><center>KALKULATOR</center></h1>
    <center>
        <form action=" {{ route('proses.store') }}" method="post">
            @csrf
            <table border=1 width=300>
                <tr>
                    <td cosplan="2"><input type="number" name="a" id=""></td>

                    <td cosplan="2"rowspan="2"><input type="reset" value="reset" name="op"></td>
                </tr>
                <tr>
                    <td cosplan="2"><input type="number" name="b" id=""></td>
                </tr>
                <tr>
                    <td cosplan="4">hasil : {{ $hasil }}</td>
                </tr>
                <tr>
                    <td><input type="submit" value="x" name="op"></td>
                    <td><input type="submit" value="/" name="op"></td>
                    <td><input type="submit" value="+" name="op"></td>
                    <td><input type="submit" value="-" name="op"></td>
                </tr>
                <tr>
                    <td cosplan="4">
                    Nama:Sukma Suganda
                    <br>
                    Kelas: XII PPLG 2
                </td>
                </tr>
            </table>
        </form>
    </center>
    
</body>
</html>