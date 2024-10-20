<?php

namespace Core\Middleware;

class Authenticated
{
    public function handle()
    {
        if (!(isset($_SESSION['user']) && $_SESSION['user'])) {
            if($this->isAjaxRequest()){
                header('Content-Type: application/json');
                echo json_encode([
                  'message' => 'Unauthorized',
                  'url' => '/login'
                ]);
                http_response_code(302);
                exit();
            }
            header('location: /');
            exit();
        }
    }
    private function isAjaxRequest()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
    }
}