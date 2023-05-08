<?php
namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Hive\PhpLib\Hive\Condenser as HiveCondenser;


class HiveController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function res() {
        $config = [
            "debug" => false,
            "disableSsl" => false,
            "heNode" => "api.hive-engine.com/rpc",
            "hiveNode" =>"anyx.io",
        ];

        $hiveApi = new HiveCondenser($config);
        // $result = $hiveApi->findProposal(211);
        $tag = 'bambukah';
        $limit = 2;

        // $result = $hiveApi->getDiscussionsByBlog($tag, $limit);
        $result = $hiveApi->getAccounts("hiveio", true);
        // $obj = json_decode($result[0]);
        // todo need to turn this json object into a string
        // return $obj;
        return $result[0] ;

    }

    
}
