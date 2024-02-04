@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container-fluid">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Rank</th>
                    <th scope="col">Player</th>
                    <th scope="col">Race</th>
                    <th scope="col">League</th>
                    <th scope="col">MMR</th>
                    <th scope="col">Wins</th>
                    <th scope="col">Losses</th>
                    <th scope="col">Ties</th>
                    <th scope="col">Win Rate</th>
                </tr>
            </thead>
            <tbody>
                @if ($leaderboard1v1->isEmpty())
                    <th scope="row">
                        <td>No Players Yet</td>
                    </th>
                @else
                    @foreach ($leaderboard1v1 as $player)
                        <tr>
                            <th scope="row">
                                {{ $player->rank }}
                            </th>
                            <th scope="row">
                                {{ $player->nickname }}
                            </th>
                            <td>
                                {{ $player->race }}
                            </td>
                            <td>
                                {{ $player->league }}
                            </td>
                            <td>
                                {{ $player->mmr }}
                            </td>
                            <td>
                                {{ $player->wins }}
                            </td>
                            <td>
                                {{ $player->losses }}
                            </td>
                            <td>
                                {{ $player->ties }}
                            </td>
                            <td>
                                {{ $player->winrate }}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
    
@endsection
