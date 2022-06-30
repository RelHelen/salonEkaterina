<div id="filters" class="col-md-12">
    <div class="btn-group">
        <button type="button" data-category="0" class="btn btn-default active js-category">Все категории</button>
        <button type="button" data-category="1" class="btn btn-default js-category">Ноутбуки</button>
        <button type="button" data-category="2" class="btn btn-default js-category">Смартфоны</button>
        <button type="button" data-category="3" class="btn btn-default js-category">Категория №2</button>
        <button type="button" data-category="4" class="btn btn-default js-category">Категория №3</button>
    </div>
    <br>
    <br>
    <form id="filters-form" role="form">
        <div class="col-md-4">
            <h4>Бренды</h4>
            <div id="brands">
                <div class="checkbox"><label><input type="checkbox" name="brands[]" value="1"> Apple</label></div>
                <div class="checkbox"><label><input type="checkbox" name="brands[]" value="2"> Samsung</label></div>
                <div class="checkbox"><label><input type="checkbox" name="brands[]" value="3"> Lenovo</label></div>
                <div class="checkbox"><label><input type="checkbox" name="brands[]" value="4"> Что-то еще</label></div>
            </div>
        </div>
        <div class="col-md-4">
            <h4>Фильтр по ценам</h4>
            <div id="prices-label">5000 - 50000 руб.</div>
            <br>
            <input type="hidden" id="min-price" name="min_price" value="5000">
            <input type="hidden" id="max-price" name="max_price" value="50000">
            <div id="prices"></div>
        </div>
        <div class="col-md-4">
            <h4>Сортировка</h4>
            <br>
            <select id="sort" name="sort" class="form-control">
                <option value="price_asc">По цене, сначала дешевые</option>
                <option value="price_desc">По цене, сначала дорогие</option>
                <option value="rating_desc">По популярности</option>
                <option value="good_asc">По названию, A-Z</option>
                <option value="good_desc">По названию, Z-A</option>
            </select>
        </div>
    </form>
</div>
<br>
<br>
<ul id="goods" class="col-md-12"></ul>