<div id="send-form" class="send-form">
    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-10 col-lg-offset-3 col-md-offset-3">
            <div class="clearfix well well-lg"
                 style="padding: 30px 45px;">
                <form class="form-horizontal"
                      action="/send"
                      method="post">

                    <div class="form-group">
                        <legend>Форма відправки</legend>
                        <small>
                            <span style="color: #ec6d23">&#9913;</span> - обов'язкові поля
                        </small>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="name">
                            Прізвище, ім'я, по батькові
                            <span style="color: #ec6d23">&#9913;</span>
                        </label>
                        <br>
                        <input type="name" name="name" type="text" class="form-control" maxlength="50" placeholder=""
                               required>
                        <small class="form-text text-muted">Іваненко Іван Іванович</small>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="mobile">
                            Мобільний
                            <span style="color: #ec6d23">&#9913;</span>
                        </label>
                        <br>
                        <input name="mobile" type="text" class="form-control" maxlength="20" required>
                        <small class="form-text text-muted">+380987654321</small>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="town">
                            Місто
                            <span style="color: #ec6d23">&#9913;</span>
                        </label>
                        <br>
                        <input name="town" placeholder="Куди відправити замовлення" type="text" class="form-control" maxlength="30" required>
                        <small class="form-text text-muted">Горішні Плавні</small>
                    </div>

                    <div class="form-group">
                        <label for="transporter" class="control-label">
                            Перевізник
                            <span style="color: #ec6d23">&#9913;</span>
                        </label>
                        <select name="transporter" class="form-control" required>
                            <option value="Міст Експрес">Міст Експрес</option>
                            <option value="Нова пошта">Нова пошта</option>
                            <option value="Інтайм">Інтайм</option>
                            <option value="Самовивіз">Самовивіз</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label" for="email">Ваш E-mail</label><br>
                        <input name="email" type="email" class="form-control" maxlength="30">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="additional">Додаткова інформація</label><br>
                        <textarea maxlength="1000" class="form-control" name="additional" rows="2"></textarea>
                        <small class="form-text">
                        <b>Зверніть увагу!</b>
                        <br>
                        Якщо ви не побачили лист від нас, 
                        <br>
                        перевірте ваш спам.
                        </small>
                    </div>
                    

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg" value="Зробити замовлення!">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
