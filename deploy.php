<?php

namespace Deployer;

require 'recipe/common.php';

// Config
// Укажите URL вашего репозитория (например: git@github.com:username/repo.git)
set('repository', 'YOUR_GIT_REPOSITORY_URL');

// Общие файлы, которые не должны перезаписываться при деплое (например, конфигурация БД)
set('shared_files', ['.env']);

// Общие директории
set('shared_dirs', [
    'public/upload',
    'logs',
    'cache',
]);

// Директории, доступные для записи
set('writable_dirs', [
    'public/upload',
    'logs',
    'cache',
]);

// Если у вас shared хостинг не поддерживает sudo/chown, 
// устанавливаем режим writable_mode в chmod или отключаем
set('writable_mode', 'chmod'); 

// Host config
host('vash_domen_ili_ip')
    ->set('remote_user', 'vash_ssh_логин')
    ->set('port', 22) // Укажите порт, если отличается
    ->set('deploy_path', '~/deploy_folder') // Путь на сервере, куда будет деплоиться проект
    ->set('identity_file', '~/.ssh/id_rsa'); // Опционально, путь до SSH ключа, если используете

// Tasks
task('deploy:vendors', function () {
    cd('{{release_path}}');
    run('composer install --no-dev --optimize-autoloader --no-interaction --quiet');
});

// Задача для создания симлинка public диры к web-root shared хостинга (например: public_html или www)
task('deploy:symlink_public', function () {
    // ВАЖНО: Раскомментируйте и измените пути под ваш хостинг
    // Это свяжет папку public релиза с публичной папкой сервера
    // $publicHtml = '~/public_html';
    // run("ln -sfn {{deploy_path}}/current/public $publicHtml");
});

// Основной процесс деплоя
task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'deploy:publish',
]);

after('deploy:success', 'deploy:unlock');
// after('deploy:success', 'deploy:symlink_public'); // Вызываем задачу симлинка после успеха

// Разблокировка деплоя при ошибке
fail('deploy', 'deploy:unlock');
