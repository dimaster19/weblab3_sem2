<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Товары</button>
                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Заказы</button>
                <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">Категории</button>
                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Поставщики</button>
                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Склад</button>
                <button class="nav-link" id="v-pills-clients-tab" data-bs-toggle="pill" data-bs-target="#v-pills-clients" type="button" role="tab" aria-controls="v-pills-clients" aria-selected="false">Клиенты</button>

            </div>
            <div class="tab-content w-100" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    <div class="row">
                        <form class="col">
                            <h3>Добавить</h3>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Название</label>
                                <input type="text" class="form-control" id="nameInput">
                            </div>
                            <div class="mb-3">
                                <label for="priceInput" class="form-label">Цена, руб</label>
                                <input type="number" class="form-control" id="priceInput">
                            </div>
                            <div class="mb-3">
                                <label for="countInput" class="form-label">Количество</label>
                                <input type="number" class="form-control" id="countInput">
                            </div>
                            <div class="mb-3">
                                <label for="descInput" class="form-label">Описание</label>
                                <input type="text" class="form-control" id="descInput">
                            </div>
                            <div class="mb-3">
                                <label for="catInput" class="form-label">ID Категории</label>
                                <input type="number" class="form-control" id="catInput">
                            </div>
                            <div class="mb-3">
                                <label for="deliverInput" class="form-label">ID Поставщика</label>
                                <input type="number" class="form-control" id="deliverInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                        <form class="col">
                            <h3>Изменить</h3>

                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Товара</label>
                                <input type="text" class="form-control" id="idInput">
                            </div>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Название</label>
                                <input type="text" class="form-control" id="nameInput">
                            </div>
                            <div class="mb-3">
                                <label for="priceInput" class="form-label">Цена, руб</label>
                                <input type="number" class="form-control" id="priceInput">
                            </div>
                            <div class="mb-3">
                                <label for="countInput" class="form-label">Количество</label>
                                <input type="number" class="form-control" id="countInput">
                            </div>
                            <div class="mb-3">
                                <label for="descInput" class="form-label">Описание</label>
                                <input type="text" class="form-control" id="descInput">
                            </div>
                            <div class="mb-3">
                                <label for="catInput" class="form-label">ID Категории</label>
                                <input type="number" class="form-control" id="catInput">
                            </div>
                            <div class="mb-3">
                                <label for="deliverInput" class="form-label">ID Поставщика</label>
                                <input type="number" class="form-control" id="deliverInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                        <form class="col">
                            <h3>Удалить</h3>

                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Товара</label>
                                <input type="text" class="form-control" id="idInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                    <div class="row">
                        <form class="col">
                            <h3>Добавить</h3>
                            <div class="mb-3">
                                <label for="priceInput" class="form-label">Цена, руб</label>
                                <input type="number" class="form-control" id="priceInput">
                            </div>
                            <div class="mb-3">
                                <label for="countInput" class="form-label">Количество</label>
                                <input type="number" class="form-control" id="countInput">
                            </div>
                            <div class="mb-3">
                                <label for="prodInput" class="form-label">ID Товара</label>
                                <input type="number" class="form-control" id="prodInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col">
                            <h3>Изменить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Заказа</label>
                                <input type="number" class="form-control" id="idInput">
                            </div>
                            <div class="mb-3">
                                <label for="priceInput" class="form-label">Цена, руб</label>
                                <input type="number" class="form-control" id="priceInput">
                            </div>
                            <div class="mb-3">
                                <label for="countInput" class="form-label">Количество</label>
                                <input type="number" class="form-control" id="countInput">
                            </div>
                            <div class="mb-3">
                                <label for="prodInput" class="form-label">ID Товара</label>
                                <input type="number" class="form-control" id="prodInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col">
                            <h3>Удалить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Заказа</label>
                                <input type="text" class="form-control" id="idInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
                    <div class="row">
                        <form class="col">
                            <h3>Добавить</h3>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Название</label>
                                <input type="text" class="form-control" id="nameInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col">
                            <h3>Изменить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Категории</label>
                                <input type="number" class="form-control" id="idInput">
                            </div>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Название</label>
                                <input type="text" class="form-control" id="nameInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col">
                            <h3>Удалить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Категории</label>
                                <input type="text" class="form-control" id="idInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                    <div class="row">
                        <form class="col">
                            <h3>Добавить</h3>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Название</label>
                                <input type="text" class="form-control" id="nameInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col">
                            <h3>Изменить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Поставщика</label>
                                <input type="number" class="form-control" id="idInput">
                            </div>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Название</label>
                                <input type="text" class="form-control" id="nameInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col">
                            <h3>Удалить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Поставщика</label>
                                <input type="text" class="form-control" id="idInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                    <div class="row">
                        <form class="col">
                            <h3>Добавить</h3>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Название</label>
                                <input type="text" class="form-control" id="nameInput">
                            </div>
                            <div class="mb-3">
                                <label for="priceInput" class="form-label">Цена, руб</label>
                                <input type="number" class="form-control" id="priceInput">
                            </div>
                            <div class="mb-3">
                                <label for="countInput" class="form-label">Количество</label>
                                <input type="number" class="form-control" id="countInput">
                            </div>
                            <div class="mb-3">
                                <label for="descInput" class="form-label">Описание</label>
                                <input type="text" class="form-control" id="descInput">
                            </div>
                            <div class="mb-3">
                                <label for="catInput" class="form-label">ID Категории</label>
                                <input type="number" class="form-control" id="catInput">
                            </div>
                            <div class="mb-3">
                                <label for="deliverInput" class="form-label">ID Поставщика</label>
                                <input type="number" class="form-control" id="deliverInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col">
                            <h3>Изменить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Товара</label>
                                <input type="text" class="form-control" id="idInput">
                            </div>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Название</label>
                                <input type="text" class="form-control" id="nameInput">
                            </div>
                            <div class="mb-3">
                                <label for="priceInput" class="form-label">Цена, руб</label>
                                <input type="number" class="form-control" id="priceInput">
                            </div>
                            <div class="mb-3">
                                <label for="countInput" class="form-label">Количество</label>
                                <input type="number" class="form-control" id="countInput">
                            </div>
                            <div class="mb-3">
                                <label for="descInput" class="form-label">Описание</label>
                                <input type="text" class="form-control" id="descInput">
                            </div>
                            <div class="mb-3">
                                <label for="catInput" class="form-label">ID Категории</label>
                                <input type="number" class="form-control" id="catInput">
                            </div>
                            <div class="mb-3">
                                <label for="deliverInput" class="form-label">ID Поставщика</label>
                                <input type="number" class="form-control" id="deliverInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col">
                            <h3>Удалить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Товара</label>
                                <input type="text" class="form-control" id="idInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-clients" role="tabpanel" aria-labelledby="v-pills-clients-tab" tabindex="0">
                    <div class="row">
                        <form class="col">
                            <h3>Добавить</h3>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Имя клиента</label>
                                <input type="text" class="form-control" id="nameInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col">
                            <h3>Изменить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Клиента</label>
                                <input type="number" class="form-control" id="idInput">
                            </div>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Имя клиента</label>
                                <input type="text" class="form-control" id="nameInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        <form class="col">
                            <h3>Удалить</h3>
                            <div class="mb-3">
                                <label for="idInput" class="form-label">ID Клиента</label>
                                <input type="text" class="form-control" id="idInput">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
