<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

/**
 * Class PluginsController.
 */
class PluginsController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $tmp_json_data = '[
            {
                "type": "block",
                "name": "ffhs_shibboleth_login",
                "versiondb": 2017121900,
                "release": null
            },
            {
                "type": "filter",
                "name": "fontawesome",
                "versiondb": 2019040500,
                "release": "4.8.4 (Build: 201900405)"
            },
            {
                "type": "tool",
                "name": "adpe",
                "versiondb": 2019050800,
                "release": "1.7"
            },
            {
                "type": "format",
                "name": "ffhscourseformat",
                "versiondb": 2019031301,
                "release": "v3.6-r1"
            },
            {
                "type": "format",
                "name": "topcoll",
                "versiondb": 2018121901,
                "release": "3.6.0.2"
            },
            {
                "type": "theme",
                "name": "boost_campus",
                "versiondb": 2019021300,
                "release": "v3.6-r2"
            },
            {
                "type": "theme",
                "name": "ffhsboost",
                "versiondb": 2019031302,
                "release": "v3.6-r1"
            },
            {
                "type": "local",
                "name": "codechecker",
                "versiondb": 2019011800,
                "release": "2.9.3"
            },
            {
                "type": "local",
                "name": "pluginsfetcher",
                "versiondb": 2019072500,
                "release": "v3.6-r1"
            },
            {
                "type": "local",
                "name": "wstemplate",
                "versiondb": 2011101202,
                "release": "1.0 (Build: 2011101202)"
            }
        ]';
        $tmp_data = json_decode($tmp_json_data, true);
        return view('backend.plugins.index', [ 'plugins' => $tmp_data ]);
    }

    public function get_data() {
        $client = new Client(
            ['verify' => false]
        );
        //$response = $client->request('GET', 'https://api.github.com/user', [
        //        'auth' => ['adpe', '<mypassword>']
        //]);
        //$response = $client->request('POST', 'http://moodle-dev-36.local/webservice/rest/server.php?wstoken=081ecdae5834b1d891470ad56281440e&wsfunction=local_pluginsfetcher_get_information&moodlewsrestformat=json');
        $response = $client->request('POST', 'https://moodle-dev-36.local/login/token.php?username=admin&password=%m00dlePW');
        if ($response->getStatusCode() == 200) {
            dd($response);
            //$response = $response->getBody();
        } else {
            dd($response);
        }
    }
}