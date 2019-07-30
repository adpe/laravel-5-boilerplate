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
        $plugininfojson = self::get_plugins_data();
        $plugininfo = json_decode($plugininfojson, true);

        return view('backend.plugins.index', [ 'plugins' => $plugininfo ]);
    }

    protected function get_plugins_data() {
        $client = new Client(
            ['verify' => false]
        );

        $response = $client->request('POST', 'https://moodle-dev-36.local/webservice/rest/server.php?wstoken=081ecdae5834b1d891470ad56281440e&wsfunction=local_pluginsfetcher_get_information&contribonly=1&moodlewsrestformat=json');
        if ($response->getStatusCode() == 200) {
            $response = $response->getBody();
        }

        return $response;
    }
}
