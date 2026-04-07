<?php

declare(strict_types=1);

use App\Controllers\Admin\AdminController;
use App\Controllers\AppController;
use App\Controllers\AuthController;
use App\Controllers\CabinetController;
use App\Controllers\DocumentController;
use App\Controllers\DownloadController;
use App\Controllers\PaymentController;
use App\Controllers\SearchController;
use Slim\App;
use Slim\Routing\RouteCollectorProxy;

return function (App $app) {
    $app->get('/', [AppController::class, 'index']);

    $app->group('/document', function (RouteCollectorProxy $r) {
        $r->get('/{slug: instructions|orders|provisions|programs|journals|other}', [DocumentController::class, 'document']);
        $r->get('/{template_id:\d+}/{id:\d+}', [DocumentController::class, 'get']);

        /* JS TABLE */
        $r->get('/js/{slug: instructions|orders|journals|provisions|programs|other}', [DocumentController::class, 'js_table']);
        $r->get('/js/{template_id}', [DocumentController::class, 'get_documents']);
    });



    $app->get('/download', [DownloadController::class, 'download']);
    $app->post('/get-document', [DownloadController::class, 'get_document']);

    $app->group('/auth', function (RouteCollectorProxy $r){
        $r->get('/login', [AuthController::class, 'loginForm']);
        $r->post('/signin', [AuthController::class, 'signIn']);
        $r->get('/register', [AuthController::class, 'registerForm']);
        $r->post('/signup', [AuthController::class, 'signUp']);
        $r->get('/verify_email', [AuthController::class, 'verifyEmail']);
        $r->get('/logout', [AuthController::class, 'logout']);

        $r->get('/reset', [AuthController::class, 'resetPasswordForm']);
        $r->post('/reset', [AuthController::class, 'resetPassword']);
        $r->get('/reset_password', [AuthController::class, 'updatePasswordForm']);
        $r->post('/update_password', [AuthController::class, 'updatePassword']);

        $r->get('/oauth', [AuthController::class, 'oauth']);
        $r->get('/callback', [AuthController::class, 'callback']);
    });

    $app->group('/cabinet', function (RouteCollectorProxy $r){
        $r->get('[/]', [CabinetController::class, 'cabinet']);
    });

    $app->group('/payment', function (RouteCollectorProxy $r){
        $r->get('/subscribe', [PaymentController::class, 'payment']);
        $r->get('/process', [PaymentController::class, 'process']);
        $r->post('/endpoint', [PaymentController::class, 'endpoint']);
    });


    $app->group('/admin', function (RouteCollectorProxy $r) {

        $r->get('[/]', [AdminController::class, 'index']);
        $r->get('/auth/login', [AdminController::class, 'login']);
        $r->post('/auth/login', [AuthController::class, 'signIn']);
        $r->group('/document', function (RouteCollectorProxy $r){
            $r->get('/{slug: instructions|orders|journals|provisions|programs|other}', [AdminController::class, 'document']);
            $r->get('/get_documents/{template_id}', [DocumentController::class, 'get_documents']);
            $r->get('/{slug: instructions|orders|journals|provisions|programs|other}/upload', [AdminController::class, 'document_upload']);
            $r->post('/delete', [AdminController::class, 'delete']);

        });

        $r->get('/delete-orphaned-files', [AdminController::class, 'delete_orphaned_files']);

        $r->group('/file', function (RouteCollectorProxy $r){
            $r->get('[/]', [AdminController::class, 'file_index']);
            $r->post('/upload', [AdminController::class, 'upload']);
        });
    });

    $app->post('/search', [SearchController::class, 'search']);
    $app->get('/generate-sitemap', [\App\Controllers\SitemapController::class, 'generateSitemap']);

};
