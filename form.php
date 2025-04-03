<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <main class="container my-4 d-flex justify-content-center align-items-center">
        <div class="row">
            <aside class="col-md-3">
            </aside>

            

                <div class="form">
                    <h2>Форма</h2>
                    <form action="/" method="post">
                        <div class="mb-3">
                            <label for="fio" class="form-label">ФИО:</label>
                            <input type="text" class="form-control" id="fio" name="fio" placeholder="Введите ваше имя" required>
                        </div>

                        <div class="mb-3">
                            <label for="tel" class="form-label">Телефон:</label>
                            <input type="tel" class="form-control" id="tel" name="tel" maxlength="11" value="Введите номер телефона" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" id="email" name="field-email" placeholder="Введите почту" required>
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">Дата рождения:</label>
                            <input type="date" class="form-control" id="date" name="date" value=" " required>
                        </div>

                        <fieldset class="mb-3">
                            <legend class="col-form-label pt-0">Пол:</legend>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="female" name="radio-group-1" value="Женский" checked>
                                <label class="form-check-label" for="female">Женский</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="male" name="radio-group-1" value="Мужской">
                                <label class="form-check-label" for="male">Мужской</label>
                            </div>
                        </fieldset>

                        <div class="mb-3">
                            <label for="language" class="form-label">Любимый язык программирования:</label>
                            <select id="language" name="language[]" class="form-select" multiple>
                                <option value="pascal">Pascal</option>
                                <option value="c" >C</option>
                                <option value="cpp" >C++</option>
                                <option value="javascript" >JavaScript</option>
                                <option value="php" >PHP</option>
                                <option value="python" >Python</option>
                                <option value="java" >Java</option>
                                <option value="haskell">Haskell</option>
                                <option value="clojure">Clojure</option>
                                <option value="prolog">Prolog</option>
                                <option value="scala">Scala</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="bio" class="form-label">Биография:</label>
                            <textarea id="bio" name="bio" class="form-control">Ваша биография</textarea>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="check1" name="check-1" checked>
                            <label class="form-check-label" for="check1">С контрактом ознакомлен(а)</label>
                        </div>

                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-pink text-center text-lg-start">
        <div class="container p-4">
            <p class="text-muted"></p>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
