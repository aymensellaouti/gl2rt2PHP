<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form
            action="processForm.php"
            method="POST"
            enctype="multipart/form-data"
    >
        Name : <input name="name" type="text" class="form-control">
        Expertise : <select name="expertise" id="" class="form-control">
            <option value="15">15</option>
            <option value="18">18</option>
            <option value="20">20</option>
        </select>
        <input name="cv" type="file" class="form-control">
        <button class="btn btn-primary" type="submit">
            Submit
        </button>
    </form>

</div>

</body>
</html>