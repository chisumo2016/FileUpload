<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Upload File</title>
</head>
<body>
<br>
{{--<a href="{{route('test')}}">Go to test page</a>--}}
    <div class="col-lg-offset-4 col-lg-4">
       <center><h1>Upload a File</h1></center>
        <form action="/store" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile" name="image">
                <br>
                <input type="submit" class="btn btn-default" value="upload">
            </div>
        </form>
    </div>
</body>
</html>