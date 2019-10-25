<form method="post" action="/addcarsform" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="type" placeholder="type">
    <br>
    <input type="text" name="vendor" placeholder="vendor">
    <br>
    <input type="text" name="color" placeholder="color">
    <br>
    <input type="text" name="year" placeholder="year">
    <br>
    new product : <input type="radio" name="new" value="new product">
    <br>
    used product :<input type="radio" name="new" value="used product">
    <br>
    <input type="text" name="model" placeholder="model">
    <br>
    <input type="text" name="price" placeholder="price">
    <input type="hidden" name="ownerID" value="{{Session::get('id')}}">
    <br>
    <select name="status">
        <option value="مستعملة أقرب للجديدة">مستعملة أقرب للجديدة</option>
        <option value="مستعملة متضررة قابلة للإصلاح">مستعملة متضررة قابلة لإلصالح</option>
        <option value="متضرر غيرقابلة للاصلاح">متضرر غيرقابلة للاصلاح</option>
        <option value="جديده">جديده</option>
    </select>
    <br>
    <select name="Auction_type">
        <option value="مزا  د فورى">مزاد فورى</option>
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