<form method="post" action="/addhighvaluesform" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="type" placeholder="type">
    <br>
    <input type="text" name="name" placeholder="name">
    <br>
    <input type="text" name="price" placeholder="price">
    <input type="hidden" name="ownerID" value="{{Session::get('id')}}">
    <br>
    new product : <input type="radio" name="new" value="new product">
    <br>
    used product :<input type="radio" name="new" value="used product">
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
