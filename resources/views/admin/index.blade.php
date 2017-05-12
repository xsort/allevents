@extends('admin.body')
@section('title',       'Главная')

@section('centerbox')
<div class="page-header">
    <h1> Главная </h1>
</div>

<div class="alert alert-success">
    <button class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
    Здравствуйте, {{ Auth::user()->name }}! Управление сайтом в панели слева.
</div>

<div class="row main-page">
    <div class="col-xs-12">
        <h3 class="header smaller lighter green"></h3>

        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 center">
                <a href="admin/products" class="btn btn-primary btn-app radius-4">
                    <i class="ace-icon fa fa-cube bigger-230"></i>
                    Объекты
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 center">
                <a href="admin/news" class="btn btn-success btn-app radius-4">
                    <i class="ace-icon fa fa-newspaper-o bigger-230"></i>
                    Новости
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 center">
                <a href="admin/content" class="btn btn-warning btn-app radius-4">
                    <i class="ace-icon fa fa-file-text-o bigger-230"></i>
                    Страницы
                </a>
            </div>
        </div><!-- /.row -->
        <div class="space"></div>
    </div><!-- /.col-xs-12 -->
</div>
@stop
