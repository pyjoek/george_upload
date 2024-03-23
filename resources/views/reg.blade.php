<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="/regist" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="compN" id="" placeholder="Computer Number">
            <input type="text" name="contP" id="" placeholder="Contact Person">
            <input type="text" name="phone" id="" placeholder="Phone">
            <input type="text" name="email" id="" placeholder="Email">
            <select name="area" id="">
                <option value="Business Company">Business Company</option>
                <option value="Area Requested">Area Requested</option>
            </select>
            <input type="text" name="special" id="" placeholder="Special Area">
            <input type="text" name="product" id="" placeholder="Product">
            <input type="text" name="country" id="" placeholder="Country">
            <input type="text" name="city" id="" placeholder="City">
            <input type="text" name="whatsap" id="" placeholder="Whatsapp">
            <input type="file" name="file" class="form-control">
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>