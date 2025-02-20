<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Store</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            height: 100vh;
            width: 100vw;

            display: flex;
            justify-content: center;
            align-items: center;
        }
        main{
            height: 70%;
            width: 70%;
        }
        h1{ text-align: center; }
    </style>
</head>
<body>
    <main>
        <h1>Gadget Store</h1>
        <ul>
            @foreach ($products as $product)
                <li>
                    <strong>{{ $product['name'] }}</strong> -
                    {{ $product['brand'] }} -
                    <em>{{ $product['price'] }}</em>
                </li>
            @endforeach
        </ul>
    </main>
</body>
</html>
