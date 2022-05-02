<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Design || Future Web</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            display: flex;
            justify-content: center;
            font-family: 'Roboto', sans-serif;
            background-color: #adacac;
        }

        table {
            width: auto;
            height: 50px;
            border-collapse: collapse;
        }

        .header_fixed {
            max-height: 60%;
            margin-top: 105px;
            margin-left: 15px;
            width: 95%;
            overflow: auto;
            border: 1px solid #dddddd;
        }

        .header_fixed thead th {
            position: sticky;
            top: 0;
            background-color: black;
            color: #e6e7e8;
            font-size: 15px;
        }

        th,
        td {
            border-bottom: 1px solid #dddddd;
            padding: 10px 20px;
            font-size: 14px;
        }

        td img {
            height: 60px;
            width: 60px;
            border-radius: 100%;
            border: 5px solid #e6e7e8;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        tr:nth-child(odd) {
            background-color: #edeef1;
        }

        tr:hover td {
            color: #44b478;
            cursor: pointer;
            background-color: #ffffff;
        }

        td button {
            border: none;
            padding: 7px 20px;
            border-radius: 20px;
            background-color: black;
            color: #e6e7e8;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

    </style>
</head>

<body>
    @include('dash')
    <div class="header_fixed">
        <table>
            <thead>
                <tr>
                    <th>Profile Pic</th>
                    <th>Name</th>
                    <th> Email </th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($messages as $message)
                        <td><img src=https://drive.google.com/uc?export=view&id=1etQq1OkAD4IBBUo7vh2f0fb6ji5qpR4t />
                        </td>
                        <td>{{ $message->name }}  </td>
                        <td>{{ $message->email }}  </td>
                        <td>{{ $message->phone }}  </td>
                        <td>{{ $message->subject }}  </td>
                        <td>{{ $message->message }} </td>
                        <td><button>View</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
