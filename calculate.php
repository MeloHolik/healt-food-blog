<?php // Формула для определения базового метаболизма 
function calculateBMR($weight, $height, $age, $gender) 
{ if ($gender == 'male') 
{ return 10 * $weight + 6.25 * $height - 5 * $age + 5; } 
else 
  { return 10 * $weight + 6.25 * $height - 5 * $age - 161; } } 
if(isset($_POST["weight"]) && isset($_POST["height"]) && isset($_POST["age"]) && isset($_POST["gender"]) && isset($_POST["activity"])) 
  { $weight = $_POST["weight"]; 
$height = $_POST["height"]; 
$age = $_POST["age"]; 
$gender = $_POST["gender"]; 
$activity = $_POST["activity"]; 
$bmr = calculateBMR($weight, $height, $age, $gender); 
if ($activity == "sedentary") { $calories = $bmr * 1.2; } 
elseif ($activity == "lightly-active") { $calories = $bmr * 1.375; } 
elseif ($activity == "moderately-active") { $calories = $bmr * 1.55; } elseif ($activity == "very-active") { $calories = $bmr * 1.725; } 
else { $calories = $bmr * 1.9; } } ?> 
<? require_once 'components/header.php'; ?> 
<form action="calculate.php" method="post" style="background-color: #fff; padding: 20px; border-radius: 5px;"> 
  <label for="gender" style="font-size: 18px; font-weight: bold; color: #333; display: block;">Пол:</label> 
  <select id="gender" name="gender" style="font-size: 16px; padding: 8px; border: 1px solid #ccc; border-radius: 3px; margin-bottom: 10px;"> 
    <option value="male">Мужской</option> <option value="female">Женский</option> </select><br>
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
</form> <?php if(isset($calories)) { ?>
<h2 style="text-align:center;">Ваша норма калорий:</h2>
<p style="text-align:center;"><strong><?= round($calories, 2) ?></strong> ккал/день</p>
<?php
$protein = round($weight * 2.2, 2); 
$fat = round($calories * 0.25 / 9, 2); 
$carbs = round(($calories - ($protein * 4) - ($fat * 9)) / 4, 2); 
?>
<h3 style="text-align:center;">Распределение макронутриентов:</h3>
<p style="text-align:center;">Белки: <strong><?= $protein ?></strong> г</p>
<p style="text-align:center;">Жиры: <strong><?= $fat ?></strong> г</p>
<p style="text-align:center;">Углеводы: <strong><?= $carbs ?></strong> г</p>
<?php
$water=round($weight * 30, 2); 
?>
<h3 style="text-align:center;">Необходимое количество воды:</h3>
<p style="text-align:center;"><strong><?= $water ?></strong> мл/день</p>
<?php } ?> <? require_once 'components/footer.php'; ?>
