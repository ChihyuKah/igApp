@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-3 p-5">
                <img
                    src='https://scontent-bru2-1.cdninstagram.com/v/t51.2885-19/s150x150/60767054_2420350861517535_1223563301330354176_n.jpg?_nc_ht=scontent-bru2-1.cdninstagram.com&_nc_ohc=J61gRfOkfYQAX-hqp6V&oh=a7ee00bb4e705b1eb7e5a8a0b1df0b14&oe=5EF84E3A'
                    class="rounded-circle">
            </div>
            <div class="col-9 pt-5">
                <div><h1>{{$user->username}}</h1></div>
                <div class="d-flex">
                    <div class="pr-5"><strong>4</strong> posts</div>
                    <div class="pr-5"><strong>24k</strong> followers</div>
                    <div class="pr-5"><strong>242</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">Bio name</div>
                <div>Bio text</div>
                <div><a href="#">www.testlink.com</a></div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img
                    src="https://scontent-bru2-1.cdninstagram.com/v/t51.2885-15/e35/s150x150/100881924_2522556044663611_4273294490229493048_n.jpg?_nc_ht=scontent-bru2-1.cdninstagram.com&_nc_cat=1&_nc_ohc=WuiwJK2eONcAX-izOlt&oh=2ff34500939fe4904d66330e21fd04f9&oe=5EF66AA3"
                    alt="#" class="w-100">
            </div>
            <div class="col-4">
                <img
                    src="https://scontent-bru2-1.cdninstagram.com/v/t51.2885-15/e35/c0.113.904.904a/s480x480/95358667_688064568696994_1667360518065692834_n.jpg?_nc_ht=scontent-bru2-1.cdninstagram.com&_nc_cat=110&_nc_ohc=NkWw9ONWCEoAX92WKww&oh=8c9b371df9ece6ae8e78250b675824e4&oe=5EF6B47D"
                    alt="#" class="w-100">
            </div>
            <div class="col-4">
                <img
                    src="https://scontent-bru2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/101062719_848788678941594_233104424588781093_n.jpg?_nc_ht=scontent-bru2-1.cdninstagram.com&_nc_cat=106&_nc_ohc=h1nU6Np1BakAX-GbLey&oh=8dfc85a397f555a397e961fadee7d1af&oe=5EF5B383"
                    alt="#" class="w-100">
            </div>
        </div>
@endsection
