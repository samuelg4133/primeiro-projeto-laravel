<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$team_name}}</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
    * {
        font-family: 'Montserrat';
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background: #f0f5f5;
        -webkit-font-smoothing: antialiased !important;
    }

    div#root {
        height: 100%;
    }

    header {
        width: 100%;
        height: 64px;
        background-color: #fff;
        display: flex;
        align-items: center;
        padding: 0 48px;
    }

    section {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 48px auto;
        max-width: 1000px;
        background-color: #fff;
    }

    table {
        margin: 24px;
        border-width: 2px;
        border-color: #ccc;
        border-style: solid;
        width: 85%;
    }

    td,
    th {
        border: 2px solid #ccc;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }


</style>

<body>
    <div id="root">
        <header>
            <h2>{{$team_name}}</h2>
        </header>
        <section>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Country</th>
                        <th>Position</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($players as $player)

                        <tr>
                            <td>{{ $player->getName() }}</td>
                            <td>{{ $player->getCountry() }}</td>
                            <td>{{ $player->getPosition() }}</td>
                        </tr>

                    @empty
                        <tr>
                            <td>Erro!</td>
                            <td>Erro!</td>
                            <td>Erro!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </section>
    </div>
</body>

</html>
