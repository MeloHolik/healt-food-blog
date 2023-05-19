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
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<head> 
	<title>Калькулятор КБЖУ</title> 
</head>
<nav> 
    <ul> 
        <li>
            <a href="index.html">Главная</a>
        </li> <li><a href="calculate.php">Калькулятор КБЖУ</a></li> 
        <li><a href="new_recipes.php">Добавить блюдо</a></li> 
        <li><a href="update.php">Редактировать блюдо</a></li> 
        <li><a href="authorization.php">Вход</a></li>
    </ul> 
    </nav>  
<body>
  <h1>Калькулятор КБЖУ</h1>
  <form action="calculate.php" method="post">
    <label for="gender">Пол:</label>
    <select id="gender" name="gender">
      <option value="male">Мужской</option>
      <option value="female">Женский</option>
    </select><br>

    <label for="weight">Вес (кг):</label>
    <input type="number" id="weight" name="weight"><br>

    <label for="height">Рост (см):</label>
    <input type="number" id="height" name="height"><br>

    <label for="age">Возраст:</label>
    <input type="number" id="age" name="age"><br>

    <label for="activity">Степень активности:</label>
    <select id="activity" name="activity">
      <option value="sedentary">Минимальная активность (сидячий образ жизни)</option>
      <option value="lightly-active">Легкая активность (упражнения 1-3 раза в неделю)</option>
      <option value="moderately-active">Средняя активность (упражнения 3-5 раз в неделю)</option>
      <option value="very-active">Высокая активность (упражнения 6-7 раз в неделю)</option>
      <option value="extra-active">Очень высокая активность (упражнения каждый день)</option>
    </select><br>

    <button type="submit">Рассчитать КБЖУ</button>
  </form>
</body>
</html>
<?php
  if (isset($_POST["weight"])) {
    echo "<h2>Ваша норма калорий:</h2>";
    echo "<p><strong>" . round($calories, 2) . "</strong> ккал/день</p>";

    $protein = round($weight * 2.2, 2); 
    $fat = round($calories * 0.25 / 9, 2); 
    $carbs = round(($calories - ($protein * 4) - ($fat * 9)) / 4, 2);
    echo "<h3>Распределение макронутриентов:</h3>";
echo "<p>Белки: <strong>" . $protein . "</strong> г</p>";
echo "<p>Жиры: <strong>" . $fat . "</strong> г</p>";
echo "<p>Углеводы: <strong>" . $carbs . "</strong> г</p>";

$water=round($weight * 30, 2); 
echo "<h3>Необходимое количество воды:</h3>";
echo "<p><strong>" . $water . "</strong> мл/день</p>";
} 
?>