<form method="post" action="/addvichlesform" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="type" placeholder="type">
    <br>

    <input type="text" name="year" placeholder="year">
    <br>

    <input type="text" name="model" placeholder="model">
    <br>

    <input type="text" name="vendor" placeholder="vendor">
    <input type="hidden" name="ownerID" value="{{Session::get('id')}}">
    <br>
    <input type="text" name="color" placeholder="color">
    <br>
    new product : <input type="radio" name="new" value="new product">
    <br>
    used product :<input type="radio" name="new" value="used product">
    <br>
    <select name="status">
        <option value="used_closest_new">مستعملة أقرب للجديدة</option>
        <option value="used_can_fix">مستعملة متضررة قابلة لإلصالح</option>
        <option value="not_fix">متضرر غيرقابلة لإلصالح</option>
    </select>
    <br>
    <input type="text" name="price" placeholder="price">
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
