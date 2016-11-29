@extends('template')

    @section('select-page')
        setSelectMenu(2,7);
    @endsection

    @section('title')
        我的关注
    @endsection

    @section('go-top')
        /followedFriends#
    @endsection

    @section('css')
        @@parent
        <link rel="stylesheet" href="css/friends/followed.css">
    @endsection

    @section('js')
        @@parent

        <script>

            function cancel($followed) {
                var url=getUrl(['cancelFollowed',$followed]);
                $.ajax({
                    type: "get",
                    url:url,
                    data:'',
                    success: function (data) {
                        if(data=='true') {
                            //保存cookie
                            zeroModal.success('取消关注成功');
                            window.location.href = "/followedFriends";
                        }
                        else
                            zeroModal.error(data);
                    }
                });
            }

        </script>

    @endsection

    @section('main-content')


            <div class="wrapper site-min-height">
                <div class="row">
                    <div class="col-md-12 ds">
                        <h3>我关注的</h3>
                        @foreach($friends as $friend)
                            <div class="desc">
                                <div class="thumb">
                                    <img class="img-circle" src="assets/img/ui-divya.jpg" width="35px" height="35px" align="">
                                </div>
                                <div class="details">
                                    <p><a href="/profile/{{$friend->followed}}">{{$friend->followed}}</a><br/>
                                        <muted>Available</muted>
                                    </p>
                                </div>

                                <button class="btn btn-theme cancel" onclick="cancel('{{$friend->followed}}')">取消关注</button>

                            </div>
                        @endforeach



                    </div>

                </div>
            </div>

    @endsection