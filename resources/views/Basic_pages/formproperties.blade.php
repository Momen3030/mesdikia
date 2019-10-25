<form method="post" action="/addpropertiesform" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="type" placeholder="type">
    <br>

    <input type="text" name="area" placeholder="area">
    <br>

    <input type="text" name="street" placeholder="street">
    <br>

    <input type="text" name="city" placeholder="city">
    <input type="hidden" name="ownerID" value="{{Session::get('id')}}">
    <br>
    <input type="text" name="rent" placeholder="rent">
    <br>
    new product : <input type="radio" name="new" value="new product">
    <br>
    used product :<input type="radio" name="new" value="used product">
    <br>
    <input type="text" name="floor" placeholder="floor">
    <br>

    <input type="text" name="furnished" placeholder="furnished">
    <br>

    <input type="text" name="price" placeholder="price">
    <br>

    <input type="text" name="rooms" placeholder="rooms">
    <br>

    <input type="text" name="SizeInMeter" placeholder="SizeInMeter">
    <br>



    <select name="Auction_type">
        <option value="مزاد فورى">مزاد فورى</option>
        <option value="مزاد مسعر">مزاد مسعر</option>
        <option value="مزاد مفتوح">مزاد مفتوح</option>
    </select>
    <br>
    <input type="text" name="location" placeholder="location">
    <br>
    <select name="Guarant">
        <option value="1">true</option>
        <option value="0">false</option>
    </select>
    <br>
    <input type="file" name="image" placeholder="image">
    <br>
    <input type="submit" value="Add" placeholder="type">
</form>
