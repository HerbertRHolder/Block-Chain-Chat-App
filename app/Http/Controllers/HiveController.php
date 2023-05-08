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
        // getAccounts() returns data from the block chain
        $result = $hiveApi->getAccounts("hiveio", true);
        // $obj = json_decode($result[0]);
        // todo need to convert json string into an object to work with in php
        // return $obj;
        return $result[0] ;

    }

    
}
