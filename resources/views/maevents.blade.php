<?php
?>

<!doctype html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Events</title>
    </head>

    <body>
        <table class="table table-white table-hover">

            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Game Title</th>
                    <th scope="col" class="text-center">Game Description</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                @foreach($events as $item)
                    <tr>
                        <th>{{$item['id']}}</th>
                        <td>{{$item['eventTitle'] ?? ''}}</td>
                        <td>{{$item['eventDescription']}}</td>

                        {{--TODO добавить href с деталями через {{$item['id']}}!--}}
                        <td><a href="/vs/examList/chosenExam/{{$item['id']}}" class="badge badge-primary">Details</a></td>
                    </tr>
                @endforeach
            </tbody>

        </table>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
                crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                crossorigin="anonymous"></script>

    </body>
</html>
