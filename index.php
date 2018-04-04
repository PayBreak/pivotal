<?php
    error_reporting(E_ERROR | E_PARSE);
    require __DIR__ . '/vendor/autoload.php';

    const TOKEN = '';
    const BAU_PROJECT_ID = '1281056';
    const ONBOARDING_PROJECT_ID = '1493260';
    const DEVOPS_PROJECT_ID = '1517265';
    const MINOR_TECHOLOGY = '1404974';
    const STORY_ID ='/144352037';
    const QUERY = '?filter=state:planned,started,finished,delivered';
    const STORIES_QUERY = '?filter=id:154520711';

    try {
      $json =[];
        // Create a client with a base URI
        $client = new GuzzleHttp\Client(['base_uri' => 'https://www.pivotaltracker.com/services/v5/']);
        $response = $client->request('GET', 'projects/'. BAU_PROJECT_ID . '/stories'. STORIES_QUERY, [
            'headers' => [
                'X-TrackerToken' => TOKEN,
                ],
            ]
        );

        $json = json_decode($response->getBody()->getContents(), true);

       // Create a client with a base URI
       $response = $client->request('GET', 'projects/'. ONBOARDING_PROJECT_ID . '/stories'. STORIES_QUERY, [
               'headers' => [
                   'X-TrackerToken' => TOKEN,
               ],
           ]
       );

        $json = array_merge($json, json_decode($response->getBody()->getContents(), true));

       array_merge($json, json_decode($response->getBody()->getContents(), true));

        if (!is_array($json[0])){
            $json = [$json];
        }

        $tickets = [];

        foreach ($json as $key => $value) {
            $tickets[$key]['id'] = $value['id'];
            $tickets[$key]['points'] = $value['estimate'];
            $tickets[$key]['title'] = $value['name'];
            $tickets[$key]['story_type'] = $value['story_type'];
            $tickets[$key]['state'] = $value['current_state'];

        }

        $smarty = new Smarty;
        $smarty->assign('tickets', $tickets);
        $smarty->display('index.tpl');

    } catch (Exception $e) {
        echo 'It didn\'t work Message: ' . $e->getMessage() . "\n\r" . $e->getTraceAsString();
    }
