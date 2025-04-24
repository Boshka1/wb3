<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Форма заявки</title>
</head>
<body>
    <main class="container my-4 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col">
                <div class="form">
                    <h2>Форма заявки</h2>
                    <form action="index.php" method="post">
                        <div class="mb-3">
                            <label for="full_name" class="form-label">ФИО:</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" 
                                   placeholder="Введите ваше полное имя" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Телефон:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" 
                                   placeholder="+71234567890" pattern="^\+?\d{10,15}$" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" 
                                   placeholder="example@domain.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="dob" class="form-label">Дата рождения:</label>
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>

                        <fieldset class="mb-3">
                            <legend class="col-form-label pt-0">Пол:</legend>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="female" name="gender" 
                                       value="female" required>
                                <label class="form-check-label" for="female">Женский</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="male" name="gender" 
                                       value="male">
                                <label class="form-check-label" for="male">Мужской</label>
                            </div>
                        </fieldset>

                        <div class="mb-3">
                            <label for="languages" class="form-label">Языки программирования:</label>
                            <select id="languages" name="languages[]" class="form-select" multiple required>
                                <option value="Pascal">Pascal</option>
                                <option value="C">C</option>
                                <option value="C++">C++</option>
                                <option value="JavaScript">JavaScript</option>
                                <option value="PHP">PHP</option>
                                <option value="Python">Python</option>
                                <option value="Java">Java</option>
                                <option value="Haskell">Haskell</option>
                                <option value="Clojure">Clojure</option>
                                <option value="Prolog">Prolog</option>
                                <option value="Scala">Scala</option>
                                <option value="Go">Go</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="bio" class="form-label">Биография:</label>
                            <textarea id="bio" name="bio" class="form-control" 
                                      placeholder="Расскажите о себе" required></textarea>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="contract" 
                                   name="contract" required>
                            <label class="form-check-label" for="contract">С контрактом ознакомлен(а)</label>
                        </div>

                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>