<?php

return array(

	'users' => 'Пользователи',

	'create_user' => 'Добавить',
	'add_user' => 'Добавить пользователя',
	'editing_user' => 'Редактирование профиля %s',
	'remembered' => 'Я вспомнил пароль',
	'forgotten_password' => 'Забыли пароль?',

	// roles
	'administrator' => 'Администратор',
	'administrator_explain' => '',

	'editor' => 'Редактор',
	'editor_explain' => '',

	'user' => 'Читатель',
	'user_explain' => '',

	// form fields
	'real_name' => 'Имя',
	'real_name_explain' => '',

	'bio' => 'О себе',
	'bio_explain' => '',

	'status' => 'Статус',
	'status_explain' => '',

	'role' => 'Роль',
	'role_explain' => '',

	'username' => 'Логин',
	'username_explain' => '',
	'username_missing' => 'Пожалуйста, введите логин. Он может содержать до %s букв.',

	'password' => 'Пароль',
	'password_explain' => '',
	'password_too_short' => 'Пароль может содержать до %s символов.',

	'new_password' => 'Новый пароль',

	'email' => 'Email',
	'email_explain' => '',
	'email_missing' => 'Пожалуйста, введите правильный email адрес.',
	'email_not_found' => 'Пользователь не найден.',

	// messages
	'updated' => 'Профиль пользователя обновлен',
	'created' => 'Пользователь успешно создан',
	'deleted' => 'Пользователь удален',
	'delete_error' => 'Вы не можете удалить свой профиль.',
	'login_error' => 'Неверный логин или пароль.',
	'logout_notice' => 'Вы вышли',
	'recovery_sent' => 'Пожалуйста, проверьте свой почтовый ящик',
	'recovery_expired' => 'Время для сброса пароля истекло. Попробуйте еще раз',
	'password_reset' => 'Ваш пароль изменен. Вперед!',

	// password recovery email
	'recovery_subject' => 'Сброс пароля',
	'recovery_message' => 'Вы запросили изменить пароль.' .
		'Для продолжения нажмите на ссылку ниже.' . PHP_EOL . '%s',

);
