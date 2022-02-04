<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>card</title>
    <style>
        .myClass{
            color: brown;
        }
    </style>
</head>
<body>
    @php
        $contactUs="contact us"
    @endphp

    <x-include.meno link1="dashboard" about="about" :contact-us=$contactUs/>
<x-Alert>
    <span>hello i am alert</span>
  <x-slot name="title">Alert title</x-slot>
    
</x-Alert>
    <h1>Card view</h1>
    @php
        $desc='card description'
    @endphp
    <div class="row">
        <div class="col-md-4">
            <x-include.card name='card title1' sub-title='card sub title 1' :description=$desc/>

        </div>
        <div class="col-md-4">
            <x-include.card name='Card title 2' sub-title='card sub title 2' :description=$desc/>


        </div>
        <div class="col-md-4">
            <x-include.card name='Card title 3' sub-title='card sub title 3' :description=$desc class="myClass"/>

        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <x-include.card name='card title1' sub-title='card sub title 1' :description=$desc/>

        </div>
        <div class="col-md-4">
            <x-include.card name='Card title 2' sub-title='card sub title 2' :description=$desc/>


        </div>
        <div class="col-md-4">
            <x-include.card name='Card title 3' sub-title='card sub title 3' :description=$desc class="myClass"/>

        </div>
    </div>
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>