    <div id="form" class="section formSection">
        <div class="myContainer">
            <div class="formContainer">
                <div class="formTextContainer">
                    <h2 class="formTextTitle">
                        Оставьте Заявку и начните свой путь роста прямо сейчас
                    </h2>

                    <p class="formTextDescription">
                        Давайте станем партнерами Swift Marketing и опередим ваших конкурентов. Но сначала:
                    </p>

                    <ul>
                        <li>
                            <img src="index_files/images/checked.svg<?= $param ?>" class="checkedImage" alt="">
                            <span>Глубоко погрузитесь в свой бизнес и цели.</span>
                        </li>
                        <li>
                            <img src="index_files/images/checked.svg<?= $param ?>" class="checkedImage" alt="">
                            <span>Продумайте индивидуальные стратегии, направленные на достижение ваших целей.</span>
                        </li>
                        <li>
                            <img src="index_files/images/checked.svg<?= $param ?>" class="checkedImage" alt="">
                            <span>Определите ожидания, результаты и бюджеты.</span>
                        </li>
                    </ul>

                    <div class="formImage">
                        <img src="index_files/images/fullLogo.png<?= $param ?>" height="100%" alt="">
                    </div>
                </div>
                <div class="formInputContainer">
                    <span class="formTitle">Заполните данные о себе</span>

                    <div id="errorLog"></div>

                    <form action="./controllers/FormViewController.php" id="formQuery" class="form" method="POST">
                        <input type="text" name="name" id="nameInput" class="formInput" placeholder="Ваше Имя *">
                        <!-- <input type="text" name="lastName" id="lastNameInput" class="formInput" placeholder="Ваша Фамиилия (Необязательно)"> -->
                        <input type="tel" name="contacts" id="contactsInput" class="formInput" placeholder="Номер Телефона *">
                        <select name="serviceSelector" id="serviceSelector" class="formInput" form="formQuery">
                            <option value="none">Интересующие услуги (Необязательно)</option>
                            <option value="fullStackMarketing">Маркетинг полного цикла</option>
                            <option value="seo">SEO-оптимизация</option>
                            <option value="research">Исследование рынка</option>
                            <option value="contextAd">Контекстная Реклама</option>
                            <option value="target">Таргетинг</option>
                            <option value="smm">Создание Контента и SMM</option>
                            <option value="webDev">Разработка Сайтов</option>
                            <option value="webDesign">Веб Дизайн</option>
                            <option value="chatBot">Разработка Чат-Ботов</option>
                            <option value="webService">Поддержка и Обслуживание веб-сайтов</option>
                            <option value="cms">Интеграция Систем Управления Контентом (СMS)</option>
                            <option value="api">Интеграция API</option>s
                            <option value="eCommerceDev">Разработка Интернет Магазинов (E-Commerce)</option>
                            <option value="analytics">Аналитика и Мониторинг</option>
                            <option value="frontEnd">Фронтенд Разработка</option>
                            <option value="backEnd">Бэкенд Разработка</option>
                        </select>
                        <input type="text" name="industry" id="industryNameInput" class="formInput" placeholder="Сфера Деятельности (Необязательно)">
                        <input type="text" name="message" id="messageNameInput" class="formInput" placeholder="Сообщение (Необязательно)">

                        <input type="submit" class="formInput formSubmit" placeholder="Отправить">

                        <span>
                            Нажимая «Отправить», вы соглашаетесь на получение сообщений от SwiftMediaMarketing в соответствии с нашей Политикой конфиденциальности.
                        </span>
                    </form>
                </div>

                <div class="mobileFormTextContainer">
                    <p class="formTextDescription">
                        Давайте станем партнерами и опередим ваших конкурентов. Но сначала:
                    </p>

                    <ul>
                        <li>
                            <img src="index_files/images/checked.svg<?= $param ?>" class="checkedImage" alt="">
                            <span>Глубоко погрузитесь в свой бизнес и цели.</span>
                        </li>
                        <li>
                            <img src="index_files/images/checked.svg<?= $param ?>" class="checkedImage" alt="">
                            <span>Продумайте индивидуальные стратегии, направленные на достижение ваших целей.</span>
                        </li>
                        <li>
                            <img src="index_files/images/checked.svg<?= $param ?>" class="checkedImage" alt="">
                            <span>Определите ожидания, результаты и бюджеты.</span>
                        </li>
                    </ul>

                    <div class="mobFormImage">
                        <img src="index_files/images/fullLogo.png<?= $param ?>" height="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>