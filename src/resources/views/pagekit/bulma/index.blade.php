@extends('bluelines::bulma.layouts.layout')
@section('title', 'bluelines')
@section('page_title', 'Bluelines')

@section('content')
    <div class="container is-fluid">
        <div class="columns">
            <div class="column">
                <div class="h1">Content Lines <a href="#" class="btn btn-primary">Create</a></div>
            </div>
        </div>
        <div class="columns">
            <div class="column is-9">
                <table class="table is-bordered">
                    <thead>
                    <tr>
                        <th><abbr title="Position">#</abbr></th>
                        <th>Team</th>
                        <th><abbr title="Played">Pld</abbr></th>
                        <th><abbr title="Won">W</abbr></th>
                        <th><div class="has-text-right">Actions</div></th>
                    </tr>
                    </thead>

                    <tr class="">
                        <th>3</th>
                        <td>
                            Manchester City
                        </td>
                        <td>19</td>
                        <td>
                            <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Play-off_round" title="2016–17 UEFA Champions League">
                                Champions League play-off round
                            </a>
                        </td>
                        <td class="has-text-right"><a href="#" class="button is-small">View / Edit</a></td>
                    </tr>

                    <tr class="">
                        <th>3</th>
                        <td>
                            Manchester City
                        </td>
                        <td>19</td>
                        <td>
                            <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Play-off_round" title="2016–17 UEFA Champions League">
                                Champions League play-off round
                            </a>
                        </td>
                        <td class="has-text-right"><a href="#" class="button is-small">View / Edit</a></td>
                    </tr>

                    <tr class="">
                        <th>3</th>
                        <td>
                            Manchester City
                        </td>
                        <td>19</td>
                        <td>
                            <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Play-off_round" title="2016–17 UEFA Champions League">
                                Champions League play-off round
                            </a>
                        </td>
                        <td class="has-text-right"><a href="#" class="button is-small">View / Edit</a></td>
                    </tr>
                </table>
            </div>

            <div class="column">
                <div class="box">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ducimus ea officiis
                        repellat repellendus veniam?</p>
                </div>
            </div>

        </div>

    </div>

@endsection
