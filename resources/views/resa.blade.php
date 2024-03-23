<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <table>
            <th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>    </td>
            </th>
            @foreach ($datas as $data)
                <tr>
                <td>{{$data->compN}}</td>
                <td>{{$data->contP}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->email}}    </td>
                <td>{{$data->area}}</td>
                <td>{{$data->special}}</td>
                <td>{{$data->product}}</td>
                <td>{{$data->country}}</td>
                <td>{{$data->city}}</td>
                <td><img src="{{asset($data->file)}}" alt="" width="200"></td>
                <td>{{$data->whatsap}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>