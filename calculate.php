<?php
// Формула  для определения базового метаболизма
function calculateBMR($weight, $height, $age, $gender) {
  if ($gender == 'male') {
    return 10 * $weight + 6.25 * $height - 5 * $age + 5;
  } else {
    return 10 * $weight + 6.25 * $height - 5 * $age - 161;
  }
}
$weight = $_POST["weight"];
$height = $_POST["height"];
$age = $_POST["age"];
$gender = $_POST["gender"];

$bmr = calculateBMR($weight, $height, $age, $gender);

if ($_POST["activity"] == "sedentary") {
  $calories = $bmr * 1.2; 
} elseif ($_POST["activity"] == "lightly-active") {
  $calories = $bmr * 1.375; 
} elseif ($_POST["activity"] == "moderately-active") {
  $calories = $bmr * 1.55; 
} elseif ($_POST["activity"] == "very-active") {
  $calories = $bmr * 1.725; 
} else {
  $calories = $bmr * 1.9; 
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор КБЖУ</title>
    <link rel="stylesheet" href="styles.css">
</head> 
<body style="background-color: #f2f2f2; font-family: Arial, sans-serif; padding: 20px;">
  <header>
    <h1>Калькулятор КБЖУ</h1>
  </header>
 <nav style="background-color: #fff; padding: 20px;">
  <ul style="list-style: none; margin: 0; padding: 0; display: flex; justify-content: space-between; font-family: Arial, sans-serif;">
    <li><a href="index.php" style="text-transform: uppercase; text-decoration: none; color: #333; font-size: 18px; font-weight: bold; transition: all 0.3s ease;">Главная</a></li>
    <li><a href="calculate.php" style="text-transform: uppercase; text-decoration: none; color: #333; font-size: 18px; font-weight: bold; transition: all 0.3s ease;">Калькулятор КБЖУ</a></li>
    <li><a href="new_recipe.php" style="text-transform: uppercase; text-decoration: none; color: #333; font-size: 18px; font-weight: bold; transition: all 0.3s ease;">Добавить блюдо</a></li>
    <li><a href="update.php" style="text-transform: uppercase; text-decoration: none; color: #333; font-size: 18px; font-weight: bold; transition: all 0.3s ease;">Редактировать блюдо</a></li>
    <li><a href="authorization.php" style="text-transform: uppercase; text-decoration: none; color: #fff; font-size: 18px; font-weight: bold; background-color: #c3272c; padding: 10px 20px; border-radius: 3px; transition: all 0.3s ease;">Вход</a></li>
  </ul>
</nav>
  <form action="calculate.php" method="post" style="background-color: #fff; padding: 20px; border-radius: 5px;">
    <label for="gender" style="font-size: 18px; font-weight: bold; color: #333; display: block;">Пол:</label>
    <select id="gender" name="gender" style="font-size: 16px; padding: 8px; border: 1px solid #ccc; border-radius: 3px; margin-bottom: 10px;">
      <option value="male">Мужской</option>
      <option value="female">Женский</option>
    </select><br>

    <label for="weight" style="font-size: 18px; font-weight: bold; color: #333; display: block;">Вес (кг):</label>
    <input type="number" id="weight" name="weight" style="font-size: 16px; padding: 8px; border: 1px solid #ccc; border-radius: 3px; margin-bottom: 10px;"><br>

    <label for="height" style="font-size: 18px; font-weight: bold; color: #333; display: block;">Рост (см):</label>
    <input type="number" id="height" name="height" style="font-size: 16px; padding: 8px; border: 1px solid #ccc; border-radius: 3px; margin-bottom: 10px;"><br>

    <label for="age" style="font-size: 18px; font-weight: bold; color: #333; display: block;">Возраст:</label>
    <input type="number" id="age" name="age" style="font-size: 16px; padding: 8px; border: 1px solid #ccc; border-radius: 3px; margin-bottom: 10px;"><br>

    <label for="activity" style="font-size: 18px; font-weight: bold; color: #333; display: block;">Степень активности:</label>
    <select id="activity" name="activity" style="font-size: 16px; padding: 8px; border: 1px solid #ccc; border-radius: 3px; margin-bottom: 10px;">
      <option value="sedentary">Минимальная активность (сидячий образ жизни)</option>
      <option value="lightly-active">Легкая активность (упражнения 1-3 раза в неделю)</option>
      <option value="moderately-active">Средняя активность (упражнения 3-5 раз в неделю)</option>
      <option value="very-active">Высокая активность (упражнения 6-7 раз в неделю)</option>
      <option value="extra-active">Очень высокая активность (упражнения каждый день)</option>
    </select><br>

    <button type="submit" style="font-size: 18px; padding: 10px 20px; border: none; border-radius: 3px; background-color: #c3272c; color: #fff; cursor: pointer;">Рассчитать КБЖУ</button>
  </form>
  <?php if 
(isset($_POST["weight"])) 
{ 
  echo '<h2 style="text-align:center;">Ваша норма калорий:</h2>'; 
  echo '<p style="text-align:center;"><strong>' . round($calories, 2) . '</strong> ккал/день</p>';
   $protein = round($weight * 2.2, 2); 
   $fat = round($calories * 0.25 / 9, 2); 
   $carbs = round(($calories - ($protein * 4) - ($fat * 9)) / 4, 2); 
   echo '<h3 style="text-align:center;">Распределение макронутриентов:</h3>'; 
   echo '<p style="text-align:center;">Белки: <strong>' . $protein . '</strong> г</p>'; 
   echo '<p style="text-align:center;">Жиры: <strong>' . $fat . '</strong> г</p>'; 
   echo '<p style="text-align:center;">Углеводы: <strong>' . $carbs . '</strong> г</p>'; $water=round($weight * 30, 2); 
   echo '<h3 style="text-align:center;">Необходимое количество воды:</h3>'; 
   echo '<p style="text-align:center;"><strong>' . $water . '</strong> мл/день</p>'; } ?>
<footer style="background-color: #222; color: #fff; padding: 32px;">
  <div style="max-width: 1200px; margin: 0 auto;">
    <div style="display: flex; justify-content: space-between; align-items: center;">
      <h4 style="font-size: 24px; margin: 0;">БЛОГ О ЗДОРОВОЙ ЕДЕ</h4>
      <ul style="list-style: none; margin: 0; padding: 0; display: flex;">
        <li style="margin-right: 16px;"><a href="#" style="color: #fff; text-decoration: none; font-size: 16px;">Главная</a></li>
        <li style="margin-right: 16px;"><a href="calculate.php" style="color: #fff; text-decoration: none; font-size: 16px;">Калькулятор КБЖУ</a></li>
        <li><a href="authorization.php" style="color: #fff; text-decoration: none; font-size: 16px;">Войти</a></li>
      </ul>
    </div>
    <p style="font-size: 16px; margin-top: 16px;">Весь материал на сайте является авторским, не является лекарственной рекомендацией и не заменяет консультацию специалиста.</p>
    <p style="font-size: 16px; margin-top: 8px;">© 2023 Блог о здоровой еде. Все права защищены.</p>
  </div>
</footer>
</body>
</html>
