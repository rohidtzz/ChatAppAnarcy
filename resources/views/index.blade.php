<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="application/javascript" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="s.css"> -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        body{
    background:#651fff;
  }

  ::-webkit-scrollbar {
      width: 10px
  }

  ::-webkit-scrollbar-track {
      background: #eee
  }

  ::-webkit-scrollbar-thumb {
      background: #888
  }

  ::-webkit-scrollbar-thumb:hover {
      background: #555
  }

  .wrapper {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #651FFF
  }

  .main {
      background-color: #eee;
      width: 90%;
      position: relative;
      border-radius: 8px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      padding: 6px 0px 0px 0px
  }

  .scroll {
      overflow-y: scroll;
      scroll-behavior: smooth;
      height: 80vh;
  }

  .img1 {
      border-radius: 50%;
      background-color: #66BB6A
  }

  .name {
      font-size: 15px
  }

  .msg {
      background-color: #ffff;
      font-size: 15px;
      padding: 5px;
      border-radius: 5px;
      font-weight: 500;
      color: #3e3c3c;
  }

  .between {
      font-size: 8px;
      font-weight: 500;
      color: #a09e9e
  }

  .navbar {
      border-bottom-left-radius: 8px;
      border-bottom-right-radius: 8px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
  }

  .form-control {
      font-size: 12px;
      font-weight: 400;
      width: 300px;
      height: 30px;
      border: none
  }

  /* form-control: focus {
      box-shadow: none;
      overflow: hidden;
      border: none
  } */

  .form-control:focus {
      box-shadow: none !important
  }

  .icon1 {
      color: #7C4DFF !important;
      font-size: 35px !important;
      cursor: pointer
  }

  .icon2 {
      color: #512DA8 !important;
      font-size: 35px !important;
      position: relative;
      right: 20px;
      /* left: 8px; */
      padding: 0px;
      cursor: pointer;
  }

  .icondiv {
      border-radius: 50%;
      width: 15px;
      height: 50px;
      padding: 2px;
      position: relative;
      bottom: 1px
  }
    </style>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <input type="hidden" name="id_u" value="{{ auth()->user()->id }}">
    <div class="">
        <div class="wrapper">
            <div class="main">
                <div class="px-2 scroll" id="pesan">
                    {{-- <div class="d-flex align-items-center">
                        <div class="text-left pr-1"><img src="https://img.icons8.com/color/40/000000/guest-female.png" width="30" class="img1" /></div>
                        <div class="pr-2 pl-1"> <span class="name">Sarah Anderson</span>
                            <p id="pesa" class="msg">Hi Dr. Hendrikson, I haven't been falling well for past few days.</p>
                        </div>
                    </div> --}}

                    {{-- <div class="d-flex align-items-center text-right justify-content-end ">
                        <div class="pr-2"> <span class="name">Dr. Hendrikson</span>
                            <p class="msg">Let's jump on a video call</p>
                        </div>
                        <div><img src="https://i.imgur.com/HpF4BFG.jpg" width="30" class="img1" /></div>
                    </div> --}}

                    {{-- <div class="text-center"><span class="between">Call started at 10:47am</span></div>
                    <div class="text-center"><span class="between">Call ended at 11:03am</span></div> --}}

                    <script>

                        $(document).ready(function(){
                            setInterval(() => {
                                    chat()
                                }, 1000);
                        });

                        function chat(){
                            $.ajax({
                                url: "/chat/get",
                                type: "GET",
                                success: function(data){

                                    // console.log(s)
                                    // console.log(data)
                                    $('#pesan').empty()

                                    var id_u = $("input[name=id_u]").val();

                                    $.each(data,function(a){

                                        if(data[a].user_id == id_u){

                                            let text = `
                                            <div class="d-flex align-items-center text-right justify-content-end ">
                                                <div class="pr-2"> <span class="name">${data[a].name}</span>
                                                    <p class="msg">${data[a].pesan}</p>
                                                </div>
                                                <div><img src="https://i.imgur.com/HpF4BFG.jpg" width="30" class="img1" /></div>
                                            </div>`
                                            $('#pesan').append(text)
                                        }else{

                                            let text = `
                                            <div class="d-flex align-items-center">
                                                <div class="text-left pr-1"><img src="https://img.icons8.com/color/40/000000/guest-female.png" width="30" class="img1" /></div>
                                                <div class="pr-2 pl-1"> <span class="name">${data[a].name}</span>
                                                    <p id="pesan" class="msg">${data[a].pesan}</p>
                                                </div>
                                            </div>`
                                            $('#pesan').append(text)
                                        }



                                        // $('#pesan').append(text)
                                        // console.log(data[a].pesan)
                                    });
                                },
                                error: function(data){
                                    alert("Terjadi Kesalahan!");
                                }
                            });
                        }
                    </script>


                </div>
                <!-- <i class="bi bi-paperclip icon1"> -->

                {{-- <form method="POST" action="{{ url('chat/store') }}">
                    <nav class="navbar bg-white navbar-expand-sm d-flex justify-content-between">
                            @csrf
                            <input type="text number" name="text" class="form-control" placeholder="Type a message...">

                        <div class="icondiv d-flex justify-content-end align-content-center text-center ml-2">

                            <i class="bi bi-arrow-right-circle icon2"></i>
                        </div>
                    </nav>
                </form> --}}

                <form >
                    <nav class="navbar bg-white navbar-expand-sm d-flex justify-content-between">
                            <input type="text number" name="text" class="form-control" placeholder="Type a message...">

                        <div class="icondiv d-flex justify-content-end align-content-center text-center ml-2">
                            {{-- <button class="btn btn-success btn-submit">Submit</button> --}}
                            <button class="bi bi-arrow-right-circle icon2" style="border:none;background:none"></button>
                        </div>
                    </nav>
                </form>

            </div>
        </div>

        <script>
            // $(document).ready(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $(".icon2").click(function(e){

                    e.preventDefault();

                    var text = $("input[name=text]").val();

                    $.ajax({
                        type:'POST',
                        url:"{{ route('add.form') }}",
                        data:{'text':text},
                        success:function(data){
                            var tex = $("input[name=text]").val('');
                        },
                        error: function(data){
                            alert("Terjadi Kesalahan!");
                        }
                    });

                });
            // });
        </script>

</body>
</html>
