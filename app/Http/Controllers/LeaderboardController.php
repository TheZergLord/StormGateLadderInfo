<?php

namespace App\Http\Controllers;

use App\Models\LeaderboardOnevone;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    // return the view
    public function app()
    {
        $leaderboard1v1 = LeaderboardOnevone::all(); // get the leaderboard from the database
        return view('home.index', compact('leaderboard1v1'));
    }

    // get the leaderboard from StormGate World API
    public function getLeaderboardFromApi()
    {
        $client = new Client();
        $response = $client->get('https://api.stormgateworld.com/v0/leaderboards/ranked_1v1');

        return json_decode($response->getBody());
    }

    // store the leaderboard in the database
    public function store()
    {
        $leaderboard1v1 = $this->getLeaderboardFromApi();
        LeaderboardOnevone::truncate(); // clear the table before storing the new data

        foreach ($leaderboard1v1->entries as $player) {
            LeaderboardOnevone::create([
                'rank' => $player->rank ?? '',
                'nickname' => $player->nickname ?? '',
                'race' => $player->race ?? '',
                'league' => $player->league ?? '',
                'mmr' => $player->mmr ?? '',
                'wins' => $player->wins ?? '',
                'losses' => $player->losses ?? '',
                'ties' => $player->ties ?? '',
                'winrate' => $player->win_rate ?? '',
            ]);

        }
    }
}
