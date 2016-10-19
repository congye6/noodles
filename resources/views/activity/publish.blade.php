@extends('template')
    @section('title')
        发布竞赛
    @endsection

    @section('select-page')
        setSelectMenu(1,4);
    @endsection

    @section('go-top')
        /publishActivity#
    @endsection

    @section('css')
        @@parent
    @endsection

    @section('js')
        @@parent
    @endsection



    @section('main-content')
        <div class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-md-12">
                    <textarea style="width:500px"></textarea>


                </div>
            </div>

        </div>
    @endsection