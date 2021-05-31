<?php

declare(strict_types = 1);

/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use App\Model\SimDose;
use Hyperf\DbConnection\Db;

class IndexController extends AbstractController
{
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();
        
        // Db::beginTransaction();
        // try {
        //     $latitude = SimDose::where("id", "3")->lockForUpdate()->value("latitude");
        //     if ($latitude < 10000) {
        //         SimDose::where("id", "3")->increment("latitude");
        //     }
        //     Db::commit();
        // } catch (\Throwable $ex) {
        //     Db::rollBack();
        // }
        return [
            'method'  => $method,
            'message' => "H {$user}.",
        ];
    }
}
