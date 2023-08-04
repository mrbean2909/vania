<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Автосервис "Твой"</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div class="page1">
    <h1 class="zagolovok">
      <font size="20" color="#333" face="arial black">Автосервис "Твой"</font>
    </h1>
    <div class="container">
      <div class="tvoy">
        <font size="6" color="white" face="comic sans ms">Шумит? Стучит? Скрипит?</font>
        <h1 class="what">Проверьте ходовую за 0 ₽</h1>
        <div>
          <button href="#" class="button1">кнопка</button>
        </div>
      </div>
      <div class="picture">
        <img class="car" src="img/car.png">
      </div>
    </div>
  </div>
  <div class="page2">
      <div class="page2_tittle">
        <h1>комплексная проверка автомобиля</h1>
      </div>
      <div clas="page2_">
        <div class="page2_img_div">
          <p class="img2">
            <img class="page2_img" src="img/2.jpg">
          </p>
      </div>
      <div class="h1.page2">
        <p>
          lkjbgd
        </p>
      </div>
      </div>
  </div>
  <div class="page3">
    <div class="form_page3">    
      <form class="form">
          <label for="dog-names">Выбор города:</label><br>
          <select class="gorod" name="dog-names" id="dog-names">
              <option value="rigatoni">Вологда</option>
            <option value="dave">Череповец</option>
          </select>
          <br>
          <label for="fname">Время:</label><br>
        <label><input class="time" type="time"></label><br>
        <label for="fname">Дата:</label><br>
        <label><input class="date" type="date" id="datepicker"></label><br>
        
        <label for="dog-names">Выбор марки:</label><br>
        <select class="marka" name="cars" id="cars">
        <option value="car">Лада</option>
        <option value="car">шкода</option>
        <option value="car">рено</option>
        <option value="car">гелик</option>
        <option value="car">датсун</option>
        <option value="car">тайота</option>
        <option value="car">шурале</option>
        <option value="car">форт</option>
      </select>
      <br>
        <label for="fname">Имя:</label><br>
        <input class="name" type="text" id="fname" name="fname" placeholder="введите имя"><br>
        <label for="lname">Фамилия:</label><br>
        <input class="fam" type="text" id="lname" name="lname" placeholder="введите фамилию"><br>
        <label for="fname">Телефон:</label><br>
        <input class="tel" type="text" id="fname" name="fname" placeholder="введите телефон"><br>
        <label for="lname">Почта:</label><br>
        <input class="em" type="email" id="lname" name="lname" placeholder="введите почту"><br>
    </form>
  </div>
  </div>
</body>

</html>