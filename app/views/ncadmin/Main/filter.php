<form id="filters-form" role="form">
    <div class="row filters justify-content-between" id="filters">
        <div class="col-md-3">
            <label class="font-weight-bold" for="fio">ФИО клиента</label><br>

            <input id="fio" type="text" name="brands[]" value="" class="form-control">
        </div>
        <div class="col-md-3">
            <label class="font-weight-bold" for="fio">Телефон клиента</label><br>

            <input id="fio" type="text" name="brands[]" value="" class="form-control">
        </div>
        <div class="col-md-4  ">
            <label class="font-weight-bold" for="fio">Стоимость заказа</label>
            <div class="d-flex">
                <span>от </span> <input id="fio" type="number" name="" value="" min="0" max="100000" class=" form-control ml-2 mr-2"><span></span>
                <span>до </span><input id="fio" type="number" name="" value="" min="0" max="100000" class=" form-control ml-2 mr-2">
            </div>
        </div>
        <div class="col-md-2  ">
            <label class="font-weight-bold">Дата</label><br>
            <input type="date" id="datef" name="min_price" value="5000" class="form-control">
        </div>
        <!-- <div class="col-md-4">
            <h4>Сортировка</h4>
            <br>
            <select id="sort" name="sort" class="form-control">
                <option value="price_asc">По цене, сначала дешевые</option>
                <option value="price_desc">По цене, сначала дорогие</option>
                <option value="rating_desc">По популярности</option>
                <option value="good_asc">По названию, A-Z</option>
                <option value="good_desc">По названию, Z-A</option>
            </select>
        </div> -->


    </div>
</form>
<br>
<br>
<ul id="goods" class="col-md-12"></ul>