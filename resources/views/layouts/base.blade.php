
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Schoolvoetbal</title>

</head>
<body>
    <header>
        <h1>Schoolvoetbal</h1>
        <div>
            <nav>
                <button>
                    <a href="{{route('teams.index')}}">Home</a>
                </button>
                <button>
                    <a href="{{route('teams.create')}}">Team Toevoegen</a>
                </button>

            </nav>
        </div>
        <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-color: lightgreen;
            display: flex;
            align-items: center;
            flex-direction: column;
            margin: 50px;
        }
        button{
            background-color: darkgreen;
            border: 3px solid rgb(0, 61, 0);
            padding: 5px;
        }
        nav a{
            padding: 5px;
            margin: 20px;
        }
        a{
            text-decoration: none;
            color: white;
        }
        td{
            padding: 5px;
            border: solid 2px black;
        }
        h1{
            margin: 20px;
        }
        table{
            margin: 20px;
        }
        </style>

    </header>
    <main>
        @yield('content')

    </main>
    <footer>

    </footer>

</body>
</html>
