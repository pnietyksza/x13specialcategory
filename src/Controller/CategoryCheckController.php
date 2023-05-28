<?php

namespace PrestaShop\Module\X13SpecialCategory\Controller;

use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryCheckController extends FrameworkBundleAdminController
{
    public function __construct()
    {
        dump('construct');
        exit;
    }
    public function index(Request $request): Response
    {
        dump('test');
        exit;
    }
}
