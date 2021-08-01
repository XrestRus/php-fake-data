# php-fake-data

Используются 
  - php - 8
  - mysql - 8

# Установка:
  - Создать бд (fake-db)
  - Создать таблицу (fake-data)
  - Импортировать бд -> [fake_data.sql](https://github.com/XrestRus/php-fake-server/tree/master/DataBaseSql)
  - Настроить config.php (указать данные бд)
  - Запустить сервер

# API: 
  Пример: http://localhost/php-fake-server/?filter=[title,contains,A]&sort=[title,asc]&paginate=[1,5]
  <pre>
  filter = [
    filed,- поле
    type, - тип фильтрации (equals, more, less, contains)
    value - значение фильртации
  ]
  
  sort = [
    field, - поле
    type - тип сортировки (desc, asc)
  ]
  
  paginate = [
    current, -текущая позиция
    limit - максимальная кол-во записей при обращении
  ]
  </pre>

# [Пример](https://heroku-php-server-xrest.herokuapp.com/)

# Размещен на [![](https://www3.assets.heroku.com/assets/logo-purple-08fb38cebb99e3aac5202df018eb337c5be74d5214768c90a8198c97420e4201.svg)](https://www.heroku.com/home)
