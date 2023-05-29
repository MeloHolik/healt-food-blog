<div style="border: 1px solid #ccc; padding: 16px; margin-top: 32px;">
  <h2 style="font-size: 28px; font-weight: bold;">Добавить свой рецепт</h2>
  <form action="new_recipes.php" method="post">
    <p style="margin-top: 16px; margin-bottom: 8px;">Название блюда</p>
    <input type="text" name="name" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">

    <p style="margin-top: 24px;">КБЖУ на 100 г.</p>
    <ul style="list-style:none; margin-left: 0; padding-left: 0;">
      <li style="margin-top: 8px;">Белки
        <input type="number" name="protein" style="margin-left: 4px; padding: 4px; border: 1px solid #ccc; border-radius: 4px;">
      </li>
      <li style="margin-top: 8px;">Жиры
        <input type="number" name="fat" style="margin-left: 8px; padding: 4px; border: 1px solid #ccc; border-radius: 4px;">
      </li>
      <li style="margin-top: 8px;">Углеводы
        <input type="number" name="carbonyhydrates" style="margin-left: 8px; padding: 4px; border: 1px solid #ccc; border-radius: 4px;">
      </li>
      <li style="margin-top: 8px;">Калории
        <input type="number" name="calories" style="margin-left: 4px; padding: 4px; border: 1px solid #ccc; border-radius: 4px;">
      </li>
    </ul>

    <p style="margin-top: 24px;">Изображение блюда</p>
    <input type="file" name="img_main_download" value="" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">

    <p style="margin-top: 24px;">Ингредиенты</p>
    <textarea name="ingredients" size="80" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"></textarea>

    <p style="margin-top: 24px;">Изображение ингредиентов</p>
    <input type="file" name="img_sub_download" value="" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">

    <p style="margin-top: 24px;">Рецепт</p>
    <textarea name="instructions" size="80" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"></textarea>

    <button type="submit" style="margin-top: 24px; background-color: #c3272c; color: #fff; padding: 8px 16px; border: none; border-radius: 4px;">Отправить рецепт</button>
  </form>
</div>