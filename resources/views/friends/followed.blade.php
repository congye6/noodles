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

    @endsection

    @section('js')
        @@parent

    @endsection