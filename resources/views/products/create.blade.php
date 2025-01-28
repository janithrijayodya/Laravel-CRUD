<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="" style="font-size: 2.5rem; color: #8338ec; text-align: center;">Create a Product</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
                
            @endforeach
        </ul>
            
        @endif
    </div>
    <form method="POST" action="{{route('products.store')}}">
        @csrf
        @method('POST')
        <div>
            <label>Name</label>
            <input type="text" name="name" id="Name">
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" id="Qty">
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" id="Price">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" id="Description">
        </div>
        <div>
            <input type="submit" value="Save new product">
        </div>
    </form>
</body>
</html>

<style>

    body{
        background-color: #cdb4db;
    }
    /* General form styling */
form {
    max-width: 500px;
    margin: 50px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
}

/* Form fields */
form div {
    margin-bottom: 15px;
}

form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
}

form input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
}

/* Submit button */
form input[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #8338ec;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
}

form input[type="submit"]:hover {
    background-color: #218838;
}

/* Responsive Design */
@media (max-width: 600px) {
    form {
        padding: 15px;
    }

    form label {
        font-size: 14px;
    }

    form input[type="text"] {
        font-size: 14px;
        padding: 8px;
    }

    form input[type="submit"] {
        font-size: 14px;
        padding: 8px;
    }
}

</style>