<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'EasyRentApply');

// Project repository
set('repository', 'git@github.com:Leasary/easyrentapply.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);


// Hosts

host('leasary.com')
    ->user('deploy')
    ->set('deploy_path', '/srv/http/easyrentapply.com');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

task('npm', function () {

    run('cd {{release_path}} && npm ci');
});
after('deploy:vendors', 'npm');

task('npm_build', function() {
    run('cd {{release_path}} && npm run production');
});
after('npm', 'npm_build');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

task('reload:php-fpm', function () {
    run('sudo /usr/sbin/service php7.4-fpm reload');
});

after('deploy', 'reload:php-fpm');

before('deploy:symlink', 'deploy:public_disk');
before('deploy:symlink', 'artisan:migrate');

