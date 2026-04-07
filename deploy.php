<?php

namespace Deployer;

require 'recipe/common.php';
set('application', 'ot-doc');
set('git_ssh_command', 'ssh -o StrictHostKeyChecking=no -i ~/.ssh/id_rsa');

// Config
// Укажите URL вашего репозитория (например: git@github.com:username/repo.git)
set('repository', 'https://github.com/Flaaim/ot-doc.ru');
set('php_version', '8.2');
set('bin/php', '/opt/php/8.2/bin/php');
set('writable_mode', 'chmod');


    host('ot-doc')
        ->set('hostname', '31.31.198.114')
        ->set('port', 22)
        ->set('remote_user', 'u1656040')
        ->set('deploy_path', '~/www/ot-doc.ru')
        ->set('branch', 'master');


// Общие файлы, которые не должны перезаписываться при деплое (например, конфигурация БД)
set('shared_files', ['config/env/.env']);

// Общие директории
set('shared_dirs', [
    'public/upload',
    'config/env',
    'logs',
    'cache'
]);

// Директории, доступные для записи
set('writable_dirs', [
    'public/upload',
    'logs',
    'cache',
]);

    set('bin/composer', '{{bin/php}} {{deploy_path}}/composer.phar');
    set('composer_options', '--no-dev --optimize-autoloader --no-progress --no-interaction --no-scripts');

// Скачиваем composer.phar, если его нет
task('check:composer', function () {
    if (!test('[ -f {{deploy_path}}/composer.phar ]')) {
        run('cd {{deploy_path}} && curl -sS https://getcomposer.org/installer | {{bin/php}}');
    }
});

before('deploy:vendors', 'check:composer');

task('deploy:vendors', function () {
    cd('{{release_path}}');
    run('{{bin/composer}} install {{composer_options}}');
});

// Задача для создания симлинка public (корневой директории сайта)
task('deploy:symlink_public', function () {
    // Поскольку у вас путь до публичной директории /www/ot-doc.ru/public,
    // а деплоер кладет актуальный релиз в /www/ot-doc.ru/current/public,
    // нам нужно удалить родную папку public (или симлинк) и создать новый симлинк:
    run('cd {{deploy_path}} && rm -rf public && ln -sfn current/public public');
});

// Основной процесс деплоя
task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'deploy:publish',
]);

after('deploy:success', 'deploy:unlock');
after('deploy:success', 'deploy:symlink_public'); // Вызываем задачу симлинка после успеха

// Разблокировка деплоя при ошибке
fail('deploy', 'deploy:unlock');
