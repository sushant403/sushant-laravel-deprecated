<!DOCTYPE html>
<html lang="@if(session()->has('locale')){{session()->get('locale')}}@else en @endif" data-textdirection="ltr"
  class="{{  auth()->user()->is_dark_mode && auth()->user()->is_dark_mode == 1 ? 'dark-layout' : 'light-layout' }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title') - {{ env('APP_NAME') }}</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet">
  {{-- Include core + vendor Styles --}}
  @include('admin.components.styles')
</head>
@extends('admin.layouts.adminLayout')