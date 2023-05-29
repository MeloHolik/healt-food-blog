<? require_once 'components/header.php'; ?>

<div style="border: 1px solid #ccc; padding: 16px; margin-top: 32px;">
  <h2 style="font-size: 28px; font-weight: bold;">Добавить свой рецепт</h2>
  <form action="new_recipes.php" method="post">
    <p style="margin-top: 16px; margin-bottom: 8px; font-size: 16px;">Название блюда</p>
    <input type="text" name="name" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">

    <p style="margin-top: 24px; font-size: 16px;">КБЖУ на 100 г.</p>
    <ul style="list-style:none; margin-left: 0; padding-left: 0;">
      <li style="margin-top: 8px; font-size: 16px;">Белки
        <input type="number" name="protein" style="margin-left: 4px; padding: 4px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
      </li>
      <li style="margin-top: 8px; font-size: 16px;">Жиры
        <input type="number" name="fat" style="margin-left: 8px; padding: 4px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
      </li>
      <li style="margin-top: 8px; font-size: 16px;">Углеводы
        <input type="number" name="carbonyhydrates" style="margin-left: 8px; padding: 4px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
      </li>
      <li style="margin-top: 8px; font-size: 16px;">Калории
        <input type="number" name="calories" style="margin-left: 4px; padding: 4px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
      </li>
    </ul>

    <p style="margin-top: 24px; font-size: 16px;">Изображение блюда</p>
    <input type="file" name="img_main_download" value="" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">

    <p style="margin-top: 24px; font-size: 16px;">Ингредиенты</p>
    <textarea name="ingredients" size="80" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; font-size: 16px;"></textarea>

    <p style="margin-top: 24px; font-size: 16px;">Изображение ингредиентов</p>
    <input type="file" name="img_sub_download" value="" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">

    <p style="margin-top: 24px; font-size: 16px;">Рецепт</p>
    <textarea name="instructions" size="80" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; font-size: 16px;"></textarea>

    <button type="submit" style="margin-top: 24px; background-color: #c3272c; color: #fff; padding: 8px 16px; border: none; border-radius: 4px; font-size: 16px;">Отправить рецепт</button>
  </form>
</div>
<? require_once 'components/footer.php'; ?>