<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Vesiteur</title>
</head>
<body style="background-color: rgb(218, 216, 216); color:rgb(80, 88, 80)">
    <br>
    <br>
    <br>
    <div align="center"><h1>RECAPITULATIF DES ADRESSES IP ET LEURS DATES</h1></div>
    <br>
    <br>
    <table border="1" class="table table-striped" style="width: 50%; " align="center">
        <thead>
            <th>DateTime</th>
            <th>IP</th>
        </thead>
        <tbody>
        @foreach($data as $singleUser)
            <tr>
                <td> 
                    {{$singleUser->dateTime}}                    
                </td>
                <td>                  
                    {{$singleUser->ip}}               
                </td>
            </tr>
        @endforeach
        </tbody>
        
    </table>
</body>
</html>