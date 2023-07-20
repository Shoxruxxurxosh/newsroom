
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Create</title><style>
.box{
    height: 100%;
    width: 100%;
    padding: 10%;
}
    </style>
    <center>
    <a href="/cotegories.create"><button type="button" style="width: 80%" class="btn btn-warning">Cotegoriya qoshish</button></a>
    </center>

</head>
<body>


    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="box">

    <select class="form-select form-select-lg mb-3" name="cotegoriya" aria-label=".form-select-lg example">


        @foreach ($cotegories as $cotegory)

        <option value="{{$cotegory->id}}">{{$cotegory->name}}</option>


        @endforeach


    </select>

    <div>
        <input class="form-control form-control-lg" id="formFileLg" type="file" name="image" placeholder="name@example.com">
        <label for="floatingInput"></label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="name" placeholder="name@example.com">
        <label for="floatingInput">Ismi</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="describtion" placeholder="name@example.com">
        <label for="floatingInput">Tavsiflang</label>
    </div>

    <button type="submit" name="saqlash" class="btn btn-primary">Yuborish</button>
</div>

</form>

</body>
    </head>

